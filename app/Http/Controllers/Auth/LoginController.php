<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use User;
use App\Cart ;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected  function Authenticated ( Request $request , $user){
      if ( $user->admin ==1 ){
        return view ('AdminPages.add_medicine');
      }
      else {
        return view ('UserPages.index',['products'=>DB::select('select * from products')]);
      }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        Cart::truncate() ;
        return redirect('/login');
    }
}
