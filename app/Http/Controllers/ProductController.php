<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Product;
use App\Models\products_attributes;
use App\Models\DeliveryAddress;
use App\Models\OrderProduct;
use App\Models\ShippingCharges;
use App\Models\coupon;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\SpecialDiscount;
use App\Models\brands;
use App\Models\SaveLater;
use App\Models\Tax;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listing(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $url = Route::getFacadeRoot()->current()->uri();
            $categoryCount = category::where(['url' => $url, 'status' => 1])->count();
            if ($request->get('gs')) {
                $gs = $request->get('gs');
                $item = Product::with('brand')->join('categories', 'categories.id', '=', 'products.category_id')->select('categories.*', 'products.*', 'categories.id as category_id')
                    ->where(function ($query) use ($gs) {
                        $query->where('products.product_name', 'like', $gs . '%')
                            ->orWhere('products.product_code', 'like', $gs . '%')
                            ->orWhere('products.product_color', 'like', $gs . '%')
                            ->orWhere('products.description', 'like', $gs . '%')
                            ->orWhere('categories.category_name', 'like', $gs . '%')
                            ->select('categories.*', 'products.*', 'products.id as product_id');
                    })->where('products.status', 1);
                $item = $item->get();
                // echo "<pre>";print_r($item);die;
                $output = '<ul class ="dropdown-menu" style="display:block; position:relative;width: -webkit-fill-available; ">';
                foreach ($item as $row) {
                    $output .= '<li><a href="/' . $row->url . '">' . $row->product_name . '</a></li>';
                }
                $output .= '</ul>';
                // echo "<pre>";print_r($output);die;
                echo $output;
            } else if ($categoryCount > 0) {
                if (isset($data['category']) && !empty($data['category'])) {
                    $categoryDetails = category::categoryDetails($url);
                    $categoryProducts = Product::with('brand', 'attributes')->whereIn('category_id', $data['category'])->where('status', 1);
                } else {
                    $categoryDetails = category::categoryDetails($url);
                    $categoryProducts = Product::with('brand', 'attributes')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                }
                // If Fabric class is selected
                if (isset($data['fabric']) && !empty($data['fabric'])) {
                    $categoryProducts->whereIn('products.fabric', $data['fabric']);
                    // $categoryProducts = json_decode(json_encode($categoryProducts));
                    // echo "<pre>"; print_r($categoryProducts); die;
                }

                // If Size class is selected
                if (isset($data['size']) && !empty($data['size'])) {
                    $sz = products_attributes::whereIn('size', $data['size'])->pluck('product_id');
                    $mz = $categoryProducts->whereIn('products.id', $sz);
                    // $array=json_decode(json_encode( $mz));
                    // echo "<pre>";print_r( $array);
                }

                // If discount class is selected
                if (isset($data['discount']) && !empty($data['discount'])) {
                    $categoryProducts->whereBetween('products.product_discount', [$data['discount'], 100]);
                    // echo "<pre>";print_r($ll);die;
                }

                // If color class is selected
                if (isset($data['color']) && !empty($data['color'])) {
                    $categoryProducts->whereIn('products.product_color', $data['color']);
                    // $categoryProducts = json_decode(json_encode($categoryProducts));
                    // echo "<pre>"; print_r($categoryProducts); die;
                    // echo "dfsdfs";die;
                }
                // If Brand selected
                if (isset($data['brand']) && !empty($data['brand'])) {
                    $brandIds = brands::whereIn('name', $data['brand'])->pluck('id');
                    // echo "<pre>"; print_r($brandIds); die;
                    $categoryProducts->whereIn('products.brand_id', $brandIds);
                }
                // If Price class is selected
                if (isset($data['price']) && !empty($data['price'])) {
                    $ex = explode('-', $data['price']);
                    $cc = $categoryProducts->whereBetween('products.product_price', [$ex[0], $ex[1]])->get();
                }
                // If sleeve class is selected
                if (isset($data['sleeve']) && !empty($data['sleeve'])) {
                    $categoryProducts->whereIn('products.sleeve', $data['sleeve']);
                }
                // If pattern class is selected
                if (isset($data['pattern']) && !empty($data['pattern'])) {
                    $categoryProducts->whereIn('products.pattern', $data['pattern']);
                }
                // If fit class is selected
                if (isset($data['fit']) && !empty($data['fit'])) {
                    $categoryProducts->whereIn('products.fit', $data['fit']);
                }
                // If occassion class is selected
                if (isset($data['occassion']) && !empty($data['occassion'])) {
                    $categoryProducts->whereIn('products.occassion', $data['occassion']);
                }

                // If sort option selected by user
                if (isset($_GET['sort']) && !empty($_GET['sort'])) {
                    if ($_GET['sort'] == "latest_product") {
                        $categoryProducts->orderBy('id', 'DESC');
                    } else if ($_GET['sort'] == "highest_price") {
                        $categoryProducts->orderBy('product_price', 'DESC');
                    } else if ($_GET['sort'] == "lowest_price") {
                        $categoryProducts->orderBy('product_price', 'ASC');
                    }
                } else {
                    $categoryProducts->orderBy('id', 'DESC');
                }

                $categoryProducts = $categoryProducts->paginate(12);
                $totalProduct = $categoryProducts->count();

                return view('ajax-product-listing')->with(compact('categoryDetails', 'categoryProducts', 'url', 'totalProduct'));
            } else {
                abort(404);
            }
        } else {
            $url = Route::getFacadeRoot()->current()->uri();
            $categoryCount = category::where(['url' => $url, 'status' => 1])->count();
            if (isset($_REQUEST['search']) && !empty($_REQUEST['search'])) {
                $search_product = $_REQUEST['search'];
                $categoryDetails['breadcrumbs'] = $search_product;
                $categoryDetails['catDetails']['category_name'] = $search_product;
                $categoryDetails['catDetails']['description'] = "Search result for" . $search_product;
                $categoryProducts = Product::with('brand')->join('categories', 'categories.id', '=', 'products.category_id')
                    ->select('categories.*', 'products.*', 'categories.id as category_id')
                    ->where(function ($query) use ($search_product) {
                        $query->where('products.product_name', 'like', '%' . $search_product . '%')
                            ->orWhere('products.product_code', 'like', '%' . $search_product . '%')
                            ->orWhere('products.product_color', 'like', '%' . $search_product . '%')
                            ->orWhere('products.description', 'like', '%' . $search_product . '%')
                            ->orWhere('categories.category_name', 'like', '%' . $search_product . '%')
                            ->select('categories.*', 'products.*', 'products.id as product_id');
                    })
                    ->where('products.status', 1);
                    $categoryProducts = $categoryProducts->get();
                    // $categoryProducts = json_decode(json_encode($categoryProducts));
                    // echo "<pre>"; print_r($categoryProducts); die;
                    $totalProduct = count($categoryProducts);

                return view('all-product')->with(compact('categoryDetails', 'categoryProducts', 'totalProduct'));
            } else if ($categoryCount > 0) {
                $categoryDetails = category::categoryDetails($url);
                $categoryList = category::whereIn('id', $categoryDetails['catIds'])->get();
                $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1);
                $categoryProducts = $categoryProducts->paginate(12);
                $totalProduct = $categoryProducts->count();
                // $categoryDetails = json_decode(json_encode($categoryDetails));
                // echo "<pre>";print_r($categoryDetails);die;

                // Brand filter
                $brandArray = brands::select('name')->where('status', 1)->pluck('name');
                // product filters
                $productFilters = Product::productFilters();
                $febricArr = $productFilters['febricArr'];
                $sleeveArr = $productFilters['sleeveArr'];
                $patternArr = $productFilters['patternArr'];
                $fitArr = $productFilters['fitArr'];
                $occassionArr = $productFilters['occassionArr'];

                return view('all-product')->with(compact('categoryDetails', 'categoryList', 'brandArray', 'categoryProducts', 'febricArr', 'sleeveArr', 'patternArr', 'fitArr', 'occassionArr', 'url', 'totalProduct'));
            } else {
                abort(404);
            }
        }
    }

    public function details($id)
    {
        $productDetails = Product::with(['category', 'brand', 'attributes' => function ($query) {
            $query->where('status', 1);
        }, 'images'])->find($id)->toArray();
        $totalStock = products_attributes::where('product_id', $id)->sum('stock');
        $relatedProducts = Product::with('category')->where('section_id', $productDetails['section_id'])->where('id', '!=', $id)->inRandomOrder()->get()->toArray();
        // dd($id);
        $groupProducts = array();
        if (!empty($productDetails['group_code'])) {
            $groupProducts = Product::select('id', 'product_color')->where(['group_code' => $productDetails['group_code'], 'status' => 1])->get()->toArray();
            // dd($groupProducts);die;
        }
        // Breadcumbs
        if ($productDetails['category']['parent_id'] == 0) {
            $breadcrumbs = '<li class="breadcrumbs-item"><a class="breadcrumbs-crumb"
            itemprop="url" href="/'.$productDetails['category']['url'].'"><span
            itemprop="title">'.$productDetails['category']['category_name'].'</span></a></li>';
        } else {
            $parentCategory = category::where('id', $productDetails['category']['parent_id'])->first();
            $breadcrumbs = '<li class="breadcrumbs-item"><a class="breadcrumbs-crumb"
                 itemprop="url" href="/'.$parentCategory['url'].'"><span
                 itemprop="title">'.$parentCategory['category_name'].'</span></a></li>';
        }
        return view('product-details')->with(compact('productDetails', 'totalStock', 'relatedProducts', 'groupProducts', 'breadcrumbs'));
    }

    public function getProductPrice(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $getDiscountedAttrPrice = Product::getDiscountedAttrPrice($data['product_id'], $data['size']);

            // $getDiscountedAttrPrice = json_decode(json_encode($getDiscountedAttrPrice));
            // print "<pre>"; print_r($getDiscountedAttrPrice); die;
            return $getDiscountedAttrPrice;
        }
    }


    // Cart
    public function addtoCart(Request $request)
    {
        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();

            // Check Product Stock
            $getProductStock = products_attributes::where(['product_id' => $data['product_id'], 'size' => $data['size']])->first()->toArray();
            // return $getProductStock['stock'];
            if ($getProductStock['stock'] < $data['quantity']) {
                $message = "Required quantity is not available";
                Session::flash('error', $message);
                return redirect()->back();
            }

            // Generate Session Id if not exist
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);
            }

            // check product already exist
            if (Auth::check()) {
                // user is logged in
                $countProduct = Cart::where(['product_id' => $data['product_id'], 'size' => $data['size'], 'user_id' => Auth::User()->id])->count();
            } else {
                // user is not logged in
                $countProduct = Cart::where(['product_id' => $data['product_id'], 'size' => $data['size'], 'session_id' => Session::get('session_id')])->count();
            }
            if ($countProduct > 0) {
                $message = "Product already exist in cart!";
                Session::flash('error', $message);
                return redirect()->back();
            }

            // insert in cart table
            $cart = new Cart;
            $cart->session_id = $session_id;
            if (Auth::check()) {
                $cart->user_id = Auth::User()->id;
            }
            $cart->product_id = $data['product_id'];
            $cart->size = $data['size'];
            $cart->quantity = $data['quantity'];
            $cart->save();

            $message = "Product has been added to cart!";
            Session::flash('success', $message);
            return redirect()->back();
        }
    }

    public function cart()
    {
        $userCartItem = Cart::userCartItem();
        $movedItem = SaveLater::movedItem();
        $totalMovedItem = SaveLater::totalMovedItem();
        // print "<pre>"; print_r($userCartItem); die;
        return view('cart')->with(compact('userCartItem', 'movedItem', 'totalMovedItem'));
    }

    public function updateCartItemQty(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            //Get Cart Details
            $cartDetails = Cart::find($data['cartid']);
            // $cartDetails = json_decode(json_encode($cartDetails));
            // echo "<pre>"; print_r($cartDetails); die;
            //get available product stock
            $availableStock = products_attributes::select('stock')->where(['product_id' => $cartDetails['product_id'], 'size' => $cartDetails['size']])->first()->toArray();

            //check Stock is Available or not
            if ($data['qty'] > $availableStock['stock']) {
                $userCartItem = cart::userCartItem();
                return response()->json([
                    'status' => false,
                    'message' => 'Product Stock Is Not available now!!',
                    'view' => (string)View::make('cart_item')->with(compact('userCartItem'))
                ]);
            }

            Cart::where('id', $data['cartid'])->update(['quantity' => $data['qty']]);
            $userCartItem = Cart::userCartItem();
            $movedItem = SaveLater::movedItem();
            $totalMovedItem = SaveLater::totalMovedItem();
            return response()->json(['status' => true, 'view' => (string)View::make('cart_item')->with(compact('userCartItem', 'movedItem', 'totalMovedItem'))]);
        }
    }

    public function deleteCartItem(Request $request)
    {
        $item = Cart::find($request->cartid);
        // $item = json_decode(json_encode($item));
        // echo "<pre>"; print_r($item); die;
        $item->delete();
        $userCartItem = Cart::userCartItem();
        $movedItem = SaveLater::movedItem();
        $totalMovedItem = SaveLater::totalMovedItem();
        return response()->json(['status' => true, 'view' => (string)View::make('cart_item')->with(compact('userCartItem', 'movedItem', 'totalMovedItem'))]);
    }

    public function checkout()
    {
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            if ($count >= 1) {
                return view('checkout');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login');
        }
    }

    public function addEditDeliveryAddress(Request $request, $id = Null)
    {
        if ($id == "") {
            $DeliveryAddress = new DeliveryAddress;
        } else {
            $DeliveryAddress = DeliveryAddress::where('id', $id)->first();
            // print "<pre>"; print_r($getCategories); die;
            $message = "Coupon Edited successfully!!";
        }


        if ($request->isMethod('post')) {
            $data = $request->all();
            // print "<pre>"; print_r($data); die;
            $DeliveryAddress->user_id = Auth::user()->id;
            $DeliveryAddress->name = $data['name'];
            $DeliveryAddress->phone = $data['phone'];
            $DeliveryAddress->pincode = $data['pincode'];
            $DeliveryAddress->locality = $data['locality'];
            $DeliveryAddress->address = $data['address'];
            $DeliveryAddress->city = $data['city'];
            $DeliveryAddress->state = $data['state'];
            $DeliveryAddress->landmark = $data['landmark'];
            $DeliveryAddress->alternate_ph = $data['alternate_ph'];
            $DeliveryAddress->address_type = $data['address_type'];
            $DeliveryAddress->status = 0;
            $DeliveryAddress->save();
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function addDeliveryAddress($id)
    {
        $delivery = DeliveryAddress::where('id', $id)->first();
        $shippingCharges = ShippingCharges::getShippingCharges('India');
        $delivery['shipping_charges'] =  $shippingCharges;
        Session::put('shipping_charges', $delivery['shipping_charges']);
        $userCartItem = cart::userCartItem();
        return view('summary')->with(compact('delivery', 'userCartItem'));
    }

    public function updateCartItemFrmCheckout(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            //Get Cart Details
            $cartDetails = Cart::find($data['cartid']);
            // $cartDetails = json_decode(json_encode($cartDetails));
            // echo "<pre>"; print_r($cartDetails); die;

            //get available product stock
            $availableStock = products_attributes::select('stock')->where(['product_id' => $cartDetails['product_id'], 'size' => $cartDetails['size']])->first()->toArray();

            //check Stock is Available or not
            if ($data['qty'] > $availableStock['stock']) {
                $userCartItem = cart::userCartItem();
                return response()->json([
                    'status' => false,
                    'message' => 'Product Stock Is Not available now!!',
                    'view' => (string)View::make('cart_item')->with(compact('userCartItem'))
                ]);
            }
            
            // Update cart item
            Cart::where('id', $data['cartid'])->update(['quantity' => $data['qty']]);
            $userCartItem = Cart::userCartItem();
            $totalArr = Cart::userCartTotalPrice();
            // viewArr($userCartItem);

            return response()->json(['status' => true, 'view' => (string)View::make('summary_item')->with(compact('userCartItem')), 'view1' => (string)View::make('summary_item_total')->with(compact('totalArr'))]);
        }
    }

    public function deleteCartItemFrmCheckout(Request $request)
    {
        $item = Cart::find($request->cartid);
        $item->delete();
        $userCartItem = Cart::userCartItem();
        $totalArr = Cart::userCartTotalPrice();
        return response()->json(['status' => true, 'view' => (string)View::make('summary_item')->with(compact('userCartItem')), 'view1' => (string)View::make('summary_item_total')->with(compact('totalArr'))]);
    }

    public function updateCartItemFrmHeader(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            // viewArr($data);
            //Get Cart Details
            $cartDetails = Cart::find($data['cartid']);

            //get available product stock
            $availableStock = products_attributes::select('stock')->where(['product_id' => $cartDetails['product_id'], 'size' => $cartDetails['size']])->first()->toArray();

            //check Stock is Available or not
            if ($data['qty'] > $availableStock['stock']) {
                $userCartItem = cart::userCartItem();
                return response()->json([
                    'status' => false,
                    'message' => 'Product Stock Is Not available now!!',
                    'view' => (string)View::make('header-cart')->with(compact('userCartItem'))
                ]);
            }
            
            // Update cart item
            Cart::where('id', $data['cartid'])->update(['quantity' => $data['qty']]);
            $userCartItem = Cart::userCartItem();
            $totalArr = Cart::userCartTotalPrice();
            $totalCartItem = Cart::totalCartItem();
            // viewArr($userCartItem);

            return response()->json(['status' => true, 'view' => (string)View::make('section.header-cart')->with(compact('userCartItem')), 'totalCartItem' => $totalCartItem]);
        }
    }

    public function deleteCartItemFrmHeader(Request $request)
    {
        $item = Cart::find($request->cartid);
        $item->delete();
        $userCartItem = Cart::userCartItem();
        $totalArr = Cart::userCartTotalPrice();
        $totalCartItem = Cart::totalCartItem();
        
        return response()->json(['status' => true, 'view' => (string)View::make('section.header-cart')->with(compact('userCartItem')), 'totalCartItem' => $totalCartItem]);
    }

    public function PaymentOrder(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // print "<pre>"; print_r($data); die;
            if ($data['payment_gateway'] == "COD") {
                $payment_method = "COD";
            } else if ($data['payment_gateway'] == "Razorpay") {
                $payment_method = "Razorpay";
            } else if ($data['payment_gateway'] == "CashFree") {
                $payment_method = "CashFree";
            } else if ($data['payment_gateway'] == "Paytm") {
                $payment_method = "Paytm";
            }

            // Get delivery address
            $deliveryAddress = DeliveryAddress::where('id', $data['address_id'])->first();
            // print "<pre>"; print_r($deliveryAddress); die;

            DB::beginTransaction();

            //Insert Order Details
            $order = new order;
            $order->user_id          = Auth::user()->id;
            $order->name             = $deliveryAddress['name'];
            $order->phone             = $deliveryAddress['phone'];
            $order->pincode            = $deliveryAddress['pincode'];
            $order->locality            = $deliveryAddress['locality'];
            $order->address          = $deliveryAddress['address'];
            $order->city           = $deliveryAddress['city'];
            $order->state             = $deliveryAddress['state'];
            $order->landmark         = $deliveryAddress['landmark'];
            $order->alternate_ph         = $deliveryAddress['alternate_ph'];
            $order->address_type         = $deliveryAddress['address_type'];
            $order->email            = Auth::user()->email;
            if (Session::has('shipping_charges')) {
                $order->shipping_charges = Session::get('shipping_charges');
            } else {
                $order->shipping_charges = 0;
            }

            $order->order_status     = "New";
            $order->payment_method   = $payment_method;
            $order->payment_gateway  = $data['payment_gateway'];
            $order->coupon_ammount   = Session::get('couponAmount');
            $order->coupon_code      = Session::get('couponCode');
            $order->grand_total     = Session::get('GrandTotal');
            //  return Session::get('GrandTotal'); 
            $order->save();

            //Get last Order Id
            $order_id = DB::getPdo()->lastInsertId();

            //Get User Cart Items
            $cartItems = Cart::where('user_id', Auth::user()->id)->get()->toArray();
            foreach ($cartItems as $key => $item) {
                $cartItems = new OrderProduct;
                $cartItems->order_id = $order_id;
                $cartItems->user_id  = Auth::user()->id;

                $getProductsDetails  = product::select('product_code', 'product_name', 'product_color')->where('id', $item['product_id'])->first()->toArray();

                $cartItems->product_id   = $item['product_id'];
                $cartItems->product_code = $getProductsDetails['product_code'];
                $cartItems->product_name = $getProductsDetails['product_name'];
                $cartItems->product_color = $getProductsDetails['product_color'];
                $cartItems->product_size = $item['size'];
                $getDiscountedAttrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']);
                $cartItems->product_price = $getDiscountedAttrPrice['final_price'];
                $cartItems->product_qty  = $item['quantity'];
                $cartItems->save();
            }
            //Insert Order id into session veriable
            Session::put('order_id', $order_id);
            DB::commit();
            if ($data['payment_gateway'] == "COD") {
                $payment = new Payment;
                $payment->transaction_id = "codtran_" . rand(0, 999) . chr(rand(65, 90)) . rand(0, 999) . chr(rand(65, 90)) . chr(rand(97, 122));
                $payment->order_id = $order_id;
                $payment->fee = "Free";
                $payment->payment_method = $data['payment_gateway'];
                $payment->total_ammount = Session::get('GrandTotal');
                $payment->save();

                return redirect('/thanks');
            } else if ($data['payment_gateway'] == "Razorpay") {
                return redirect('/razorpay-payment');
            } else if ($data['payment_gateway'] == "CashFree") {
                return redirect('/cashfree-payment-gateway');
            } else if ($data['payment_gateway'] == "Paytm") {
                return redirect('/paytm-purchase');
            }
        }
        $delivery = DeliveryAddress::where('id', $id)->first();
        $shippingCharges = ShippingCharges::getShippingCharges('India');
        $delivery['shipping_charges'] =  $shippingCharges;
        return view('payment')->with(compact('delivery'));
    }

    public function thanks()
    {
        if (Session::has('order_id')) {
            //empty the user cart
            cart::where('user_id', Auth::user()->id)->delete();
            return view('thanks');
        } else {
            return redirect('/cart');
        }
    }

    // Coupon
    public function applyCoupon(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $userCartItem = Cart::userCartItem();
            $totalCartItems = Cart::totalCartItem();
            //echo "<pre>";print_r($totalCartItems);die;
            $couponCount = coupon::where('coupon_code', $data['code'])->count();
            if ($couponCount == 0) {
                return response()->json([
                    'status' => false,
                    'totalCartItems' => $totalCartItems,
                    'message' => 'This coupon is not valid!!',
                    'view' => (string)View::make('cart_item')->with(compact('userCartItem'))
                ]);
            } else {
                //check for other coupon condition

                //get coupon details
                $couponDetails = coupon::where('coupon_code', $data['code'])->first();

                //check if coupon is inactive
                if ($couponDetails->status == 0) {
                    $message = "This coupon is not Active";
                }
                //coupon is expire
                $expiry_date = $couponDetails->expiry_date;
                $current_date = date('Y-m-d');
                if ($expiry_date < $current_date) {
                    $message = 'This Coupon is Expired!!';
                }

                //check coupon is single time or multiple time
                //check if coupon belongs to logged in user
                //get select user of coupon
                if (!empty($couponDetails->users)) {
                    $userArr = explode(",", $couponDetails->users);
                    foreach ($userArr as $key => $user) {
                        $getUserID = User::select('id')->where('email', $user)->first()->toArray();
                        $userID[] = $getUserID['id'];
                    }
                    $userCartItem = Cart::userCartItem();
                }
                $total_amount = 0;
                $total_price = session::get('total_price');
                foreach ($userCartItem as $key => $item) {
                    if (!empty($couponDetails->users)) {
                        if (!in_array($item['user_id'], $userID)) {
                            $message = "This coupon code is not for you!!";
                        }
                    }
                    // $attrPrice = Product::getDiscountedAttrPrice($item['product_id'],$item['size']);
                    // $total_amount = $total_amount + ($attrPrice['final_price']*$item['quantity']);
                }
                $totalArr = Cart::userCartTotalPrice();
                $total_amount = $total_amount + ($totalArr['total_final_price']);
                // $couponDetails = json_decode(json_encode($couponDetails));
                // print "<pre>"; print_r($couponDetails); die;


                if ($couponDetails->coupon_type == "Single Times") {
                    //check order table coupon already availabe by the user
                    $couponCount = order::where(['coupon_code' => $data['code'], 'user_id' => Auth::user()->id])->count();
                    if ($couponCount >= 1) {
                        $message = "This Coupon code is already use by You!!";
                    }
                }

                // echo $message;die;
                if (isset($message)) {
                    $userCartItem = cart::userCartItem();
                    $totalCartItems = cart::totalCartItem();
                    return response()->json([
                        'status' => false,
                        'totalCartItems' => $totalCartItems,
                        'message' => $message,
                        'view' => (string)View::make('cart_item')->with(compact('userCartItem'))
                    ]);
                } else {
                    // echo "Coupon can be Successfully Reedemed"; die;

                    if ($couponDetails->amount_type == "Fixed") {
                        $couponAmount = $couponDetails->ammount;
                        $couponAmount = number_format((int)$couponAmount, 2, '.', '');
                    } else {
                        $couponAmount = $total_amount * ($couponDetails->ammount / 100);
                        $couponAmount = number_format((int)$couponAmount, 2, '.', '');
                    }
                    // print $couponAmount; die;
                    $grand_total = $total_amount - $couponAmount;
                    // $tax = Tax::where(['country'=>'India', 'status'=>1])->first();
                    // if (isset($tax['igst'])) {
                    //     $grand_total = $grand_total + ($grand_total*($tax['igst']/100));
                    //     $igst = round($grand_total*($tax['igst']/100));
                    // } else {
                    //     $igst = 0;
                    // }
                    // // special discount
                    // if (isset($specialDiscount['discount'])) {
                    //     $grand_total = $grand_total - $specialDiscount['discount'];
                    // }
                    $igst = $totalArr['igst'];
                    $grand_total = $grand_total - $totalArr['special_discount'];
                    //Add Coupon Code and ammount in session veriable

                    session::put('couponAmount', $couponAmount);
                    session::put('couponCode', $data['code']);
                    session::put('GrandTotal', $grand_total);

                    $message = "Coupon Code successfully appliied!! You are availing Discount";
                    $userCartItem = cart::userCartItem();
                    $totalCartItems = cart::totalCartItem();
                    $movedItem = SaveLater::movedItem();
                    $totalMovedItem = SaveLater::totalMovedItem();
                    return response()->json([
                        'status' => true,
                        'totalCartItems' => $totalCartItems,
                        'message' => $message,
                        'grand_total' => $grand_total,
                        'igst' => $igst,
                        'couponAmount' => $couponAmount,
                        'view' => (string)View::make('cart_item')->with(compact('userCartItem', 'movedItem', 'totalMovedItem'))
                    ]);
                }
            }
        }
    }
}
