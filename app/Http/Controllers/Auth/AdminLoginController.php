<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
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
    protected $redirectTo = '/admin';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.adminLogin');
    }
    public function loginAdmin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
            ]);
            // Attempt to log the user in
            if (\Illuminate\Support\Facades\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                // if successful, then redirect to their intended location
                return redirect()->intended(route('admin.dashboard'));
            }
            // if unsuccessful, then redirect back to the login with the form data
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    public function logout()
    {
        \Illuminate\Support\Facades\Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }
}
