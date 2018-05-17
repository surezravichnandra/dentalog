<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Session;
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
    protected $redirectTo = '/';
    // protected $guard = 'user';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('admin', ['except' => 'logout']);
    // }

    public function getUserLogin()
    {

        if (Auth::guard('admin')->check()) return redirect()->route('admin.dashboard');
        if (Auth::guard('user')->check()) return redirect('/');


        return view('auth.user_login');
    }


    public function userAuth(Request $request)
    {

      return  $validator  = $this->validateLogin($request);

         

        $field      = 'user';

        if( is_numeric($request->input('user')))
            $field  = 'mobile';
        elseif (filter_var($request->input('user'), FILTER_VALIDATE_EMAIL)) 
            $field  = 'email';


        $request->merge([$field => $request->input('user')]);


        if (Auth::guard('user')->attempt([$field => $request->input('user'), 'password' => $request->input('pass')]))
        {
            return redirect('/');
        }else{
            dd('your username and password are wrong.');            
        }
    }

    protected function validateLogin(Request $request)
    {

        if( is_numeric($request->user))
            $rules = [ $this->username() => 'required|numeric', 'pass'   => 'required|string'];

        else 
            $rules = [ $this->username() => 'required|between:3,64|email', 'pass'   => 'required|string' ];

        return Validator::make($request->all(), $rules);

    }

    public function username()
    {
        return 'user';
    }


    public function logout()
    {
        Auth::guard('user')->logout();

        return redirect('/');
    }
}
