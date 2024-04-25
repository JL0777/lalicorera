<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/loged'; // Por defecto redirige a esta ruta

    /**
     * Handle an authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // Si el usuario es josellm2004@hotmail.com, redirige a una vista específica
        if ($user->email === 'josellm2004@hotmail.com') {
            return redirect()->route('producto.create');
        }

        // Si es cualquier otro usuario, redirige a la ruta loged
        return redirect($this->redirectTo);
    }
}
