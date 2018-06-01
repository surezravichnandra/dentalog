<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    protected $redirectTo = '/admin';
    protected $guard = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function getAdminLogin()
    {
        
        if (Auth::guard('admin')->check()) return redirect()->route('admin.dashboard');
        if (Auth::guard('user')->check()) return redirect('/');

        return view('admin.auth.admin_login');
        // return view('admin.index');

    }


    public function adminAuth(Request $request)
    {

        //validate the form data

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = Auth::guard('admin')->user()->email;
            Session(['random_id' => rand()]);
            return redirect()->route('admin.dashboard');
        }else{
            dd('your username and password are wrong.');            
        }
        //if unsuccessfull redirect back to the login for with form data
        // return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
