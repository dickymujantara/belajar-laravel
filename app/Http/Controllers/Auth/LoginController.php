<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($request, $user){
        if($user->hasRole('ROLE_ADMIN')){
            return redirect('/admin');
        }elseif ($user->hasRole('ROLE_SUPERADMIN')) {
            return redirect('/superadmin');
        }elseif ($user->hasRole('ROLE_PEMBELI')) {
            return redirect('/pembeli');            
        }elseif ($user->hasRole('ROLE_PEDAGANG')) {
            return redirect('/pedagang');            
        }else{
            return redirect('/home');
        }
    }


}
