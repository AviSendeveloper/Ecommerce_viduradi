<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\RoleController as adminRoleController;
use App\Http\Controllers\Admin\CategoryController as adminCategoryController;
use App\Http\Controllers\userLoginController;
use App\Http\Controllers\Admin\CustomerController as adminCustomerController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\HomePageSettingController;
use App\Http\Controllers\Admin\SocialController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\subscriptionController;
use App\Http\Controllers\Admin\subscriptionController as AdminsubscriptionController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\CouponController as AdminCouponController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\SpecialDiscountController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\FrontOrderController;
use App\Http\Controllers\Admin\ShippingController as AdminShippingController;
use App\Http\Controllers\CashfreeController;
use App\Http\Controllers\SaveLaterController;
use App\Models\category;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['Admin']], function () {


	Route::get('/dashboard', [AdminDashboardController::class, 'dashboard']);
	// Route::get('/dashboard', function () {
	// 	return view('admin.dashboard');
	// });

	Route::get('/add-new-product', function () {
		return view('admin.add-new-product');
	});
	Route::get('/all-product', function () {
		return view('admin.all-product');
	});

	Route::get('/physical', function () {
		return view('admin.physical');
	});

	Route::get('/license', function () {
		return view('admin.license');
	});

	Route::get('/digital', function () {
		return view('admin.digital');
	});

	Route::get('/deactivate-product', function () {
		return view('admin.deactivate-product');
	});



	Route::get('/product-catalogs', function () {
		return view('admin.product-catalogs');
	});


	// affiliate product
	Route::get('/admin-products-import-create', function () {
		return view('admin.add-affiliate-product');
	});
	Route::get('/admin-products-import-index', function () {
		return view('admin.all-affiliate-product');
	});
	// customers
	Route::get('/admin-users', function () {
		return view('admin.customers-list');
	});
	Route::get('/admin-users-withdraws', function () {
		return view('admin.withdraws');
	});
	Route::get('/admin-user-default-image', function () {
		return view('admin.customer-default-image');
	});
	Route::get('/country', function () {
		return view('admin.country');
	});

	// Tax
	Route::get('/manage-tax', [TaxController::class, 'taxList']);
	Route::get('/add-tax', [TaxController::class, 'addTax']);
	Route::post('/add-tax', [TaxController::class, 'addTaxUpload']);
	Route::get('/edit-tax/{id}', [TaxController::class, 'editTax']);
	Route::post('/edit-tax', [TaxController::class, 'editTaxUpload']);
	Route::get('/delete-tax/{id}', [TaxController::class, 'deleteTax']);
	Route::get('/change-tax-status', [TaxController::class, 'changeTaxStatus']);

	// Special Discount
	Route::get('/manage-special-discount', [SpecialDiscountController::class, 'specialDiscountList']);
	Route::get('/add-special-discount', [SpecialDiscountController::class, 'addSpecialDiscount']);
	Route::post('/add-special-discount', [SpecialDiscountController::class, 'addSpecialDiscountUpload']);
	Route::get('/edit-special-discount/{id}', [SpecialDiscountController::class, 'editSpecialDiscount']);
	Route::post('/edit-special-discount', [SpecialDiscountController::class, 'editSpecialDiscountUpload']);
	Route::get('/delete-special-discount/{id}', [SpecialDiscountController::class, 'deleteSpecialDiscount']);
	Route::get('/change-special-discount-status', [SpecialDiscountController::class, 'changeSpecialDiscountStatus']);

	Route::get('/main-commission', function () {
		return view('admin.main-commission');
	});
	Route::get('/category-commission', function () {
		return view('admin.category-commission');
	});
	Route::get('/tax-calculate', function () {
		return view('admin.tax-calculate');
	});
	Route::get('/commission-earning', function () {
		return view('admin.commission-earning');
	});
	Route::get('/withdraws-earning', function () {
		return view('admin.withdraws-earning');
	});
	Route::get('/subscription-earning', function () {
		return view('admin.subscription-earning');
	});
	Route::get('/default-background', function () {
		return view('admin.default-background');
	});
	Route::get('/vendors-list', function () {
		return view('admin.vendors-list');
	});
	Route::get('/vendors-withdraw', function () {
		return view('admin.vendors-withdraw');
	});
	Route::get('/vendors-subscription', function () {
		return view('admin.vendors-subscription');
	});
	Route::get('/all-verificatons', function () {
		return view('admin.all-verifications');
	});
	Route::get('/pending-verificatons', function () {
		return view('admin.pending-verifications');
	});

	Route::get('/vendor-subscriptions-plans', function () {
		return view('admin.vendor-subscriptions-plan');
	});

	Route::get('/child-category', function () {
		return view('admin.child-category');
	});
	Route::get('/main-category', function () {
		return view('admin.main-category');
	});
	Route::get('/sub-category', function () {
		return view('admin.sub-category');
	});
	Route::get('/create-relation', function () {
		return view('admin.create-relation');
	});
	Route::get('/relations', function () {
		return view('admin.relations');
	});
	Route::get('/bulk-product-upload', function () {
		return view('admin.bulk-product-upload');
	});
	Route::get('/product-reviews', function () {
		return view('admin.product-reviews');
	});
	Route::get('/comments', function () {
		return view('admin.comments');
	});
	Route::get('/reports', function () {
		return view('admin.reports');
	});

	Route::get('/create-coupon', function () {
		return view('admin.create-coupon');
	});
	Route::get('/blog-category', function () {
		return view('admin.blog-category');
	});
	Route::get('/blog-post', function () {
		return view('admin.blog-post');
	});

	// Route::get('/add-new-blog', function () {
	// 	return view('admin.add-new-blog');
	// });	
	Route::get('/tickets', function () {
		return view('admin.tickets');
	});
	Route::get('/disputes', function () {
		return view('admin.disputes');
	});

	Route::get('/manage-roles', function () {
		return view('admin.manage-roles');
	});

	Route::get('/add-new-role', function () {
		return view('admin.add-new-role');
	});

	// Roll Managemennt----------------------------------------------------------------------
	// add role 
	Route::post('/create-role', [adminRoleController::class, 'createRole']);
	// edit roll
	Route::get('/edit-role/{id}', [adminRoleController::class, 'editRole']);
	// Edit role submit
	Route::post('/edit-role-submit', [adminRoleController::class, 'editRoleSubmit']);
	// Delete role submit
	Route::get('/delete-role/{id}', [adminRoleController::class, 'deleteRole']);

	// customer details delete--------------------------------------------------------
	Route::get('/delete-customer/{id}', [adminCustomerController::class, 'deleteCustomer']);

	// Send message to customer
	Route::post('/send-message-to-customer', [adminCustomerController::class, 'sendMessageToCustomer']);

	// dp send for user who not upload his/her dp
	Route::post('/add-dp', [adminCustomerController::class, 'AddDP']);

	// sections--------------------------------------------------------------------------
	Route::get('/admin-section', [SectionController::class, 'sections']);
	Route::get('/change-sections-status', [SectionController::class, 'changeSectionsStatus']);
	Route::get('/add-section', [SectionController::class, 'addSections']);
	Route::post('/add-section', [SectionController::class, 'addSectionsUpload']);
	Route::get('/edit-section/{id}', [SectionController::class, 'editSections']);
	Route::post('/edit-section', [SectionController::class, 'editSectionsUpload']);
	Route::get('/delete-section/{id}', [SectionController::class, 'deleteSections']);

	// Add Category ---------------------------------------------------------------------------
	Route::get('/add-category', [AdminCategoryController::class, 'Categories']);	// Change Status of category
	Route::get('/changeCategoryStatus', [AdminCategoryController::class, 'changeCategoryStatus']);	// Add Edit Category
	Route::match(['GET', 'POST'], '/add-edit-category/{id?}', [AdminCategoryController::class, 'addEditCategory']);	// Appends catagories level (ajax)
	Route::post('/append-categories-level', [AdminCategoryController::class, 'appendCategoriesLevel']);
	Route::get('/delete-category/{id}', [AdminCategoryController::class, 'deleteCategory']);	// Delete Category
	Route::get('/delete-category-image/{id}', [AdminCategoryController::class, 'deleteCategoryImage']);	// Delete Category

	// Product---------------------------------------------------------------------------------
	Route::get('/all-product', [AdminProductController::class, 'product']);	// Delete Product
	Route::get('/changeProductStatus', [AdminProductController::class, 'changeProductStatus']);	// Change Product Status
	Route::get('/change-todays-deal-status', [AdminProductController::class, 'changeTodaysDealStatus']);	// Change Product's Today's deal Status
	Route::get('/delete-product/{id}', [AdminProductController::class, 'deleteProduct']);	// Delete Product
	Route::match(['GET', 'POST'], '/add-edit-product/{id?}', [AdminProductController::class, 'addEditProduct']);
	// add Product Attributes(sku,price,colour,size,stock)
	Route::match(['GET', 'POST'], '/add-attributes/{id?}', [AdminProductController::class, 'addAttributes']);
	Route::post('/edit-attributes/{id}', [AdminProductController::class, 'editAttributes']); //Edit product attribute
	Route::get('/delete-stock/{id}', [AdminProductController::class, 'deletestock']); //delete attribute
	// Add Images
	Route::match(['GET', 'POST'], '/add-images/{id?}', [AdminProductController::class, 'addImages']);
	Route::get('/delete-images/{id}', [AdminProductController::class, 'deleteImages']); //delete Images
	Route::get('/import-product', [AdminProductController::class, 'importProduct']); // Import Product

	// Home page setting
	// Add slider of home page by admin--------------------------------------------------------------
	Route::get('/admin-slider', [HomePageSettingController::class, 'adminSlider']); //open slider page
	Route::get('/add-slider', [HomePageSettingController::class, 'addSlider']); //add slider
	Route::post('/add-slider-home-page', [HomePageSettingController::class, 'addSliderHomePage']); //add slider to home page from admin panel
	Route::get('/delete-banner/{id}', [HomePageSettingController::class, 'deleteBanner']);
	Route::get('/edit-slider/{id}', [HomePageSettingController::class, 'editSlider']);
	Route::post('/edit-slider-home-page', [HomePageSettingController::class, 'editSliderHomePage']);

	// Add services
	Route::get('/admin-service', [HomePageSettingController::class, 'serviceList']); //open service page
	Route::get('/add-service', [HomePageSettingController::class, 'addService']); // add service page
	Route::post('/add-service', [HomePageSettingController::class, 'addServiceUpload']); // add service upload page
	Route::get('/edit-service/{id}', [HomePageSettingController::class, 'editService']); // add service page
	Route::post('/edit-service', [HomePageSettingController::class, 'editServiceUpload']); // add service page
	Route::get('/delete-service/{id}', [HomePageSettingController::class, 'deleteService']); // add service page

	// Footer Link
	Route::get('/admin-footer-link', [HomePageSettingController::class, 'footerLinkList']); //open footer link page
	Route::get('/add-footer-link', [HomePageSettingController::class, 'addFooterLink']); // add footer link page
	Route::post('/add-footer-link', [HomePageSettingController::class, 'addFooterLinkUpload']); // add footer link upload page
	Route::get('/edit-footer-link/{id}', [HomePageSettingController::class, 'editFooterLink']); // add footer link page
	Route::post('/edit-footer-link', [HomePageSettingController::class, 'editFooterLinkUpload']); // add footer link page
	Route::get('/delete-footer-link/{id}', [HomePageSettingController::class, 'deleteFooterLink']); // add footer link page
	Route::get('/change-link-status', [HomePageSettingController::class, 'changeFooterLinkStatus']); // footer link status change page
	
	// homepage customization
	Route::get('/homepage-customization', [HomePageSettingController::class, 'homepageCustomization']); // show homepage customization
	Route::post('/homepage-customization', [HomePageSettingController::class, 'homepageCustomizationUpload']); // show homepage customization


	// Add Social Media Link in home page by admin panel-----------------------------------------------
	Route::get('/admin-social', [SocialController::class, 'adminSocial']);
	Route::get('/changeSocialStatus', [SocialController::class, 'changeSocialStatus']);
	Route::post('/update-social-page', [SocialController::class, 'updateSocialPage']);
	Route::get('/admin-social-facebook', [SocialController::class, 'adminSocialFacebook']);
	Route::get('/admin-social-google', [SocialController::class, 'adminSocialGoogle']);
	Route::post('/admin-social-update', [SocialController::class, 'adminSocialUpdate']);
	// Social page facebook status
	Route::get('/changeFacebookStatus', [SocialController::class, 'changeFacebookStatus']);
	// Insert Brand in product by admin---------------------------------------------------------------
	Route::get('/brands', [AdminBrandController::class, 'brands']);
	Route::get('/change-brands-status', [AdminBrandController::class, 'changeBrandsStatus']); //change status of brand
	Route::match(['GET', 'POST'], '/add-edit-brand/{id?}', [AdminBrandController::class, 'addEditBrand']); //brand name add and edit
	Route::get('/delete-brands/{id}', [AdminBrandController::class, 'deleteBrands']); //Delete Brands

	// Admin add blog and category---------------------------------------------------------------
	Route::post('/blog-category-create', [BlogController::class, 'blogCategoryCreate']);
	Route::get('/delete-blog-category/{id}', [BlogController::class, 'deleteBlogCategory']);
	Route::get('/blogCategoryStatus', [BlogController::class, 'blogCategoryStatus']);
	Route::get('/admin-blog-create', [BlogController::class, 'adminBlogCreate']); //Add new blog
	Route::post('/add-blog-form', [BlogController::class, 'addBlogForm']); //blog create Submit form
	Route::get('/admin-blog-delete/{id}', [BlogController::class, 'adminBlogDelete']); //Admin blog delete
	Route::match(['GET', 'POST'], '/admin-blog-edit/{id?}', [BlogController::class, 'adminBlogEdit']); //Admin blog edit
	// subscriber----------------------------------------------------------------------------------
	Route::get('/admin-subscribers', [AdminsubscriptionController::class, 'adminSubscribers']);

	// Set coupon for user form Admin panel-------------------------------------------------------------
	Route::get('/admin-coupon', [AdminCouponController::class, 'adminCoupon']); //show coupon
	// Route::get('/add-admin-coupon', [AdminCouponController::class, 'addAdminCoupon']); //Add Coupon
	Route::get('/changeCouponStatus', [AdminCouponController::class, 'changeCouponStatus']); //Coupon Status
	Route::match(['GET', 'POST'], '/add-edit-coupon/{id?}', [AdminCouponController::class, 'addEditCoupon']);
	Route::get('/delete-coupon/{id}', [AdminCouponController::class, 'deleteCoupon']);
	// order payment table---------------------------------------------------------------
	Route::get('/order-payment', [AdminPaymentController::class, 'orderPayment']); //view payment list
	Route::get('/delete-payment/{id}', [AdminPaymentController::class, 'deletePayment']);  //Delete payment 
	Route::get('/view-payment-invoice/{id}', [AdminPaymentController::class, 'viewPaymentInvoice']);  //view payment invoicw
	Route::get('/print-payment-invoice/{id}', [AdminPaymentController::class, 'printPaymentInvoice']);  //print payment invoicw

	// payment seting -------------------------------------------------------------------------
	Route::get('/payment-getway-setting', [PaymentSettingController::class, 'paymentGatewayList']); //view payment getway list
	Route::get('/change-status', [PaymentSettingController::class, 'changeStatus']); //view payment getway list
	Route::get('/edit-payment-getway/{name}/{id}', [PaymentSettingController::class, 'editPaymentGateway']); //view payment getway list
	Route::post('/edit-payment-getway-upload', [PaymentSettingController::class, 'editPaymentGatewayUpload']); //view payment getway list


	// order----------------------------------------------------------------------
	Route::get('/admin-orders', [OrderController::class, 'orderList']);
	Route::get('/admin-order-details/{path}/{id}', [OrderController::class, 'orderDetails']);
	Route::post('/update-order-status', [OrderController::class, 'updateOrderStatus']);
	Route::get('/admin-completed-orders', [OrderController::class, 'completedOrderList']);
	Route::get('/admin-pending-orders', [OrderController::class, 'pendingOrderList']);
	Route::get('/admin-declined-orders', [OrderController::class, 'declinedOrderList']);
	Route::get('/admin-refund-orders', [OrderController::class, 'refundOrderList']);
	// Shipping Charges---------------------------------------------------------------------------
	Route::get('/shipping-charges', [AdminShippingController::class, 'shippingCharges']);
	Route::get('/shippingChargesStatus', [AdminShippingController::class, 'shippingChargesStatus']);
	Route::post('/add-charges', [AdminShippingController::class, 'addCharges']); //add charges
	Route::get('/delete-charges/{id}', [AdminShippingController::class, 'deleteCharges']); //delete charges
	Route::get('/edit-charges/{id}', [AdminShippingController::class, 'editCharges']); //edit charges
	Route::post('/update-charges', [AdminShippingController::class, 'updateCharges']); //update charges
	// clear route:cache------------------------------------------------------------------------
	Route::get('/cache/clear', function () {
		Artisan::call('cache:clear');
		Artisan::call('config:clear');
		Artisan::call('route:clear');
		Artisan::call('view:clear');
		return redirect()->back()->with('cache', 'System Cache Has Been Removed.');
	})->name('admin-cache-clear');
});

// admin login
// admin login check
Route::post('/admin-login', [AdminLoginController::class, 'loginCheck']);
Route::post('/admin-register', [AdminLoginController::class, 'registerUpload']);
Route::get('/admin-logout', [AdminLoginController::class, 'logout']);

Route::get('/admin-login', function () {
	return view('admin.admin-login');
});
Route::get('/admin-register', function () {
	return view('admin.admin-register');
});

/*-----------------------------------------------------------------------------------------------------------------------------------------------------
 -------------------*/
//user

Route::get('/', [IndexController::class, 'Index']);

Route::get('/cart', function () {
	return view('cart');
});

Route::get('/products', function () {
	return view('product');
});


Route::get('/orderresponse', function () {
	return view('orderresponse');
});

Route::get('/privacy-policy', function () {
		return view('privacy-policy');
	});

Route::get('/terms-condition', function () {
	return view('terms-condition');
});

Route::get('/profile', function () {
	if (Auth::check()) {
		return view('profile');
	}
	return redirect('/login');
});

//user login page show-------------------------------------------------------------------
Route::get('/login', [userLoginController::class, 'login']);
Route::post('/login-submit', [userLoginController::class, 'loginUser'])->name('login');
// register blade show
Route::get('/register', function () {
	return view('register');
});
Route::post('signup', [userLoginController::class, 'save']);
Route::match(['get', 'post'], '/confirm/{code}', [userLoginController::class, 'confirm_account']);
// user logout
Route::get('/logout', [userLoginController::class, 'logout']);

//profile upload-------------------------------------------------------------------------------
Route::post('/submit-profile', [UserProfileController::class, 'submitProfile']);

// Google GoogleSocialiteController------------------------------------------------------------
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

// Facebook GoogleSocialiteController

Route::get('auth/facebook', [GoogleSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [GoogleSocialiteController::class, 'handleCallback1']);

// Subscribers-------------------------------------------------------------------------------
Route::post('subscribe', [subscriptionController::class, 'subscribe']);

// Listing page--------------------------------------------------------------------------------------
// Get Category url
$catUrls = category::select('url')->where('status', 1)->get()->pluck('url')->toArray();
foreach ($catUrls as $url) {
	Route::get('/' . $url, [ProductController::class, 'listing']);
}

// Search Product
Route::get('/search-products', [ProductController::class, 'listing']);
Route::get('/list-product', [ProductController::class, 'listing']);



// Product
// Product Details Show
Route::get('/product/{id}', [ProductController::class, 'details']);
// Get Attribute Price
Route::post('/get-product-price', [ProductController::class, 'getProductPrice']);

// ---------------------------------------------- route -------------------------------------    // Add to Cart
Route::post('/add-to-cart', [ProductController::class, 'addtoCart']);
// Show product cart
Route::get('/cart', [ProductController::class, 'cart']);
Route::post('/update-cart-item-qty', [ProductController::class, 'updateCartItemQty']);
Route::get('/delete-cart-item', [ProductController::class, 'deleteCartItem']);

// Save for later ----------------------------------------------------------------------------
Route::get('/add-save-for-later/{cart_id}', [SaveLaterController::class, 'addSaveLater']);
Route::get('/add-cart-from-save-later/{cart_id}', [SaveLaterController::class, 'addCart']);

// Update Wishlist
Route::post('/update-wishlist', [WishlistController::class, 'updateWishlist']);
Route::get('/my-wishlist', [WishlistController::class, 'wishlists']);
Route::get('/remove-wishlist-product', [WishlistController::class, 'removeWishlistProduct']);

// checkout page-----------------------------------------------------------------
Route::get('/checkout', [ProductController::class, 'checkout']);
Route::post('/update-cart-item-frm-checkout', [ProductController::class, 'updateCartItemFrmCheckout']);
Route::get('/delete-cart-item-frm-checkout', [ProductController::class, 'deleteCartItemFrmCheckout']);

// Header Part -------------------------------------------------------------------------------
Route::post('/update-cart-item-frm-header', [ProductController::class, 'updateCartItemFrmHeader']);
Route::get('/delete-cart-item-frm-header', [ProductController::class, 'deleteCartItemFrmHeader']);

// Add edit delivery Address--------------------------------------------------------------
Route::match(['GET', 'POST'], '/add-edit-delivery-address/{id?}', [ProductController::class, 'addEditDeliveryAddress']);
Route::get('/add-delivery-address/{id}', [ProductController::class, 'addDeliveryAddress']);

// Order payment------------------------------------------------------------------------------
// Route::get('/payment/{id}', [ProductController::class, 'PaymentOrder']);
Route::match(['GET', 'POST'], '/payment/{id?}', [ProductController::class, 'PaymentOrder']);
Route::get('/thanks', [ProductController::class, 'thanks']); //thanks page

// Coupon-----------------------------------------------------------------------------------
Route::post('/apply-coupon', [ProductController::class, 'applyCoupon']);

// All payment---------------------------------------------------------------------------------
//Paytm Payment
Route::post('paytm-payment', [PaymentController::class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback', [PaymentController::class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase', [PaymentController::class, 'paytmPurchase'])->name('paytm.purchase');
//Razorpay Payment Gateway
Route::get('razorpay-payment', [PaymentController::class, 'index']);
Route::post('razorpay-payment', [PaymentController::class, 'store'])->name('razorpay.payment.store');

// Cash Free Payment Gateway
Route::get('/cashfree-payment-gateway', [CashfreeController::class, 'index']);
Route::post('/order-post', [CashfreeController::class, 'orderPost']);
Route::post('/response', [CashfreeController::class, 'response']);

// get success page-------------------------------------------------------------
Route::get('/success', [PaymentController::class, 'success']);


// show order in front page-----------------------------------------------------------------------------
Route::get('/order', [FrontOrderController::class, 'Order']);
Route::get('/order-tracking/{id}', [FrontOrderController::class, 'OrderTracking']);
Route::get('/cancel/{id}', [FrontOrderController::class, 'cancelOrder']);
Route::post('/cancel-reason-submit', [FrontOrderController::class, 'cancelReasonSubmit']);

