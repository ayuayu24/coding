<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\User;
// use Session;

class LoginController extends Controller
{
     public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}
// {
    
//     // |--------------------------------------------------------------------------
//     // | Login Controller
//     // |--------------------------------------------------------------------------
//     // |
//     // | This controller handles authenticating users for the application and
//     // | redirecting them to your home screen. The controller uses a trait
//     // | to conveniently provide its functionality to your applications.
//     // |
    

//     use AuthenticatesUsers;

//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }
// }
