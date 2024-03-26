<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class LoginController extends Controller //Controller que se refere a view Login
{
   public function index()
   {
return view('Login');
   }
   public function store(Request $request)
   {
   $request->validate([
 'email'=>'required|email',
 'password'=> 'required'
   ],[  
     'email.required'=> 'Esse campo de email é obrigatório',
     'email.email'=> 'Insira um email valido',
     'password.required'=> 'Esse campo de senha é obrigatório'
   ]);  
   $credentials = $request->only('email','password');
   $autenticado = Auth::attempt($credentials);
   
   if (!$autenticado){
      return redirect()->route('login.index')->withErrors(['error'=> 'email ou senha invalidos']);
   }

   return redirect()->route('login.index')->with('success','Logged in');
   }

   public function destroy()
   {
Auth::logout();
return redirect()->route('login.index');

   }
}
