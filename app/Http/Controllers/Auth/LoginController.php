<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Call\Facades\Call;
use Call\Models\Form\Fields\Input;
use Call\Models\Form\Form;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View|\Call\Response
     */
    public function showLoginForm()
    {
        $form = Form::make('column',
            [
                'email'=>Input::make('E-Mail Address','email')->type('email')
                    ->get(request()->get('email')),
                'password'=>Input::make('Password')->type('password')->get(),
                'remember'=>Input::make('Remember me','remember')->type('checkbox')
                    ->option('yes','yes')
                    ->option('no','no')
                    ->get()
            ]
        )->attribute('action',route('login'))->getArrayCopy();
        return Call::setRootView('layouts.auth')->render("Auth/Login")->with($form);
    }

    public function redirectTo(){
        return Redirect::route('admin');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        return Redirect::route('login');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }
        return $this->redirectTo();
    }
}
