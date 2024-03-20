<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Banco;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){

        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Esse campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ter um email válido',
        ]);

        $user = User::where('email',$request->input('email'))->first();


        if(!$user){
            return redirect()->route('login.index')->withErrors(['error' => 'Email invalid']);
        }

        Auth::loginUsingId($user->id);
        $id = Banco::first()->id;
        return redirect()->route("banco.chamados");
    }
    

    public function destroy(){
        Auth::logout(); // Faz logout do usuário autenticado
        return redirect()->route('login.index'); // Redireciona para a página de login
    }
}
