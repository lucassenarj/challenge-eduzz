<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    protected function sendLoginResponse(Request $request)
    {
       // $this->clearLoginAttempts($request);
    
        return $this->authenticated($request);
    }

    protected function authenticated(Request $request)
    {
        return response()->json([
            'token' => $token,
        ]);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/v1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        
        if ($this->attemptLogin($request)) {
            // echo "Success";
            // exit;
            //return redirect()->intended('/home');
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $credentials=$this->credentials($request);
        $credentials['access']=2;

        if (Auth::attempt($credentials)) {
            return true;
        }else
            return false;
        /*
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
        */
    }
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->email() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->email(), 'password');
    }
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function email()
    {
        return 'email';
    }
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
       // echo "Love it";
       // exit;

        //update
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            echo "Love it";
            exit;
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}
