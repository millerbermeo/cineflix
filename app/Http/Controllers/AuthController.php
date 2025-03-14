<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
	* Función mostrar vista inicial 
	*/
	public function index()
	{
	    // se verifica que el usuarios este logueado
	    if (Auth::check()) {
	
            return redirect()->route('peliculas');

	    }
	
	    // retornar login si no hay un inicio de session
	    return view('auth.login');
	}
	
    /**
	* login
	*/
	public function login(Request $request)
	{
	    // validamos los datos del request
	    $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);
	
	    // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email', 'password');
	
	    // Si el usuario existe guardamos el inicio de session
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('peliculas')
	            ->withSuccess('Logado Correctamente');
	    }
	
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
	}
	
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withSuccess('Sesión cerrada correctamente.');
    }
    

}