<?php
   
namespace App\Http\Controllers;
   
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Config;
use App\Models\User;
use App\Models\socialsetting;
   
class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $link = socialsetting::findOrFail(2);
        $link1 = socialsetting::findOrFail(1);
      Config::set('services.google.client_id', $link->app_id);
      Config::set('services.google.client_secret', $link->app_secret);
      Config::set('services.google.redirect',  url('/callback/google'));
      Config::set('services.facebook.client_id', $link1->app_id);
      Config::set('services.facebook.client_secret', $link1->app_secret);
      Config::set('services.facebook.redirect',  url('/callback/facebook'));
    }

    public function redirectToGoogle()
    {
      return Socialite::driver('google')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
     
            $user = Socialite::driver('google')->user();
      
            $finduser = User::where('social_id', $user->id)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect('/');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'status'=> 1,
                    'password' => encrypt('my-google')
                ]);
     
                Auth::login($newUser);
      
                return redirect('/');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

     public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }
       
   
    public function handleCallback1()
    {
        try {
     
            $user = Socialite::driver('facebook')->user();
      
            $finduser = User::where('social_id', $user->id)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect('/');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'status'=> 1,
                    'social_type'=> 'facebook',
                    'password' => encrypt('my-facebook')
                ]);
     
                Auth::login($newUser);
      
                return redirect('/');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}