<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Cart;
use App\Models\SaveLater;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Mail;


class userLoginController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }


    public function save(Request $req)
    {
        $count = User::where('email', $req->email)->count();
        if ($count >= 1) {
            $message = "You are already register";
            session::flash('success', $message);
            return redirect()->back();
        } else {
            $this->validate($req, [
                'g-recaptcha-response' => 'required|captcha',
            ]);
            $data = new User;
            $data->name     = $req->name;
            $data->email    = $req->email;
            $data->password = bcrypt($req->password);
            $data->phone = $req->phone;
            $data->status   = 0;
            $data->save();

            // Send confirmation registration mail
            $email = $req->email;
            $massageData = [
                'name' => $req->name,
                'email' => $req->email,
                'code' => base64_encode($req->email)
            ];
            Mail::send('email.confirmation', $massageData, function ($message) use ($email) {
                $message->to($email)->subject('Confirmation mail to activate Viduradi account');
            });
            // $msg = "Register successfully, to activate account check your email";
            $message = "Register successfully, to activate account check your email";
            session::flash('success', $message);
            return redirect('/login');
        }
    }

    public function confirm_account($code)
    {
        // decoding code and getting email
        $email = base64_decode($code);
        // check email exist
        $userInfo = User::where('email', $email)->first();
        if ($userInfo) {
            // checking account status
            if ($userInfo->status == 1) {
                $message = "Your account already activated";
                session::flash('success', $message);
                return redirect('/login');
            } else {
                $user_id = $userInfo->id;

                User::where('email', $email)->update(['status' => 1]);
                // Send welcome registration mail
                $email = $userInfo->email;
                $massageData = [
                    'name' => $userInfo->name,
                    'email' => $userInfo->email,
                    'password' => $userInfo->password,
                ];
                Mail::send('email.register', $massageData, function ($message) use ($email) {
                    $message->to($email)->subject('Welcome to Viduradi');
                });

                // $msg = "Your account activated now, login please";
                $message = "Register successfully, to activate account check your email";
                session::flash('success', $message);
                return redirect('/login');
            }
        } else {
            abort(404);
        }
    }

    public function loginUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            session::forget('error');
            session::forget('success');

            // echo "<pre>"; print_r($data); die;
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                //check email is activate or not
                $UserStatus = user::where('email', $data['email'])->first();
                if ($UserStatus->status == 0) {
                    Auth::logout();
                    $message = "Your Account Is not activated yet!! Plese Confirmyour email for activate!";
                    session::put('error', $message);
                    return redirect()->back();
                }

                if (!empty(Session::get('session_id'))) {
                    $user_id = Auth::user()->id;
                    $session_id = Session::get('session_id');
                    Cart::where('session_id', $session_id)->update(['user_id' => $user_id]);
                    SaveLater::where('session_id', $session_id)->update(['user_id' => $user_id]);
                }

                if (Session::has('add_wishlist')) {
                    $value = Session::get('add_wishlist');
                    $this->addWishlist($value['product_id']);
                    // return $result;
                    Session::forget('add_wishlist');
                    return redirect('/my-wishlist');
                }

                return redirect('/');
            } else {
                $message = "Invalid User or Password";
                Session::flash('success', $message);
                return redirect()->back();
            }
        }
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function confirmPassword(Request $request)
    {
        $email = $request->email;
        $userInfo = User::where('email', $email)->first();
        if ($userInfo) {
            // checking account status
            if ($userInfo->status == null) {
                $message = "Your account is not activated";
                session::flash('error', $message);
                return redirect('/signup');
            } else {
                $massageData = [
                    'email' => $email,
                    'code' => base64_encode($email)
                ];
                Mail::send('email.password-confirmation', $massageData, function ($message) use ($email) {
                    $message->to($email)->subject('Password change mail for UrAssignment account');
                });
                // $msg = "Register successfully, to activate account check your email";
                $message = "To change your account password check your mail";
                session::flash('success', $message);
                return redirect('forgot-password');
            }
        } else {
            $message = "Please register first!!";
            session::flash('error', $message);
            return redirect('signup');
        }
    }

    public function changePassword($code)
    {
        // decoding code and getting email
        $email = base64_decode($code);
        return view('change-password')->with(compact('email'));
    }

    public function passwordChange(Request $request)
    {
        // return $request->email;
        $newPassword = bcrypt($request->password);
        $data = User::where('email', $request->email)->first();
        User::where('email', $request->email)->update(['password' => $newPassword]);
        $email = $request->email;
        $massageData = [
            'email' => $email,
            'name' => $data['name'],
            'code' => base64_encode($email)
        ];
        Mail::send('email.new-password', $massageData, function ($message) use ($email) {
            $message->to($email)->subject('Change Password - UrAssignment');
        });

        $message = "Your password change successfully";
        session::flash('error', $message);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function addWishlist($product_id)
    {
        $productcount = Wishlist::countWishlist($product_id);
        if ($productcount > 0) {
            return "Already exsit in wishlist";
        } else {
            $product = new Wishlist;
            $product->user_id = Auth::User()->id;
            $product->product_id = $product_id;
            $product->save();
            return "Add to wishlist";
        }
    }
}
