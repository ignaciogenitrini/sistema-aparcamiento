<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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

    /* Sobreescribimos la redirección que ejecuta vendor para que si se actualiza el paquete no se pierdan los cambios
    * Ademas vendor forma parte de los paquetes de Laravel lo cual no es recomendable modificar
    */
    public function redirectPath()
    {
        if (auth()->user()) {
            return '/systems';
        }

        // return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home'; Ruta en caso de ser otro tipo de usuario
    }
}
