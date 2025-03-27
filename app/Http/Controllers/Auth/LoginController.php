<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index()
    {
        if (Session::has('user')) {
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    public function store(LoginRequest $request)
    {
        if (Session::has('user')) {
            return redirect()->route('dashboard');
        }

        $user = $request->safe()->user;
        $password = $request->safe()->password;

        $users = config('users.admins');

        if (in_array($user, array_keys($users)) && $password == Crypt::decryptString($users[$user]['password'])) {
            // Salvar o usuário na sessão
            Session::put('user', $user);

            return redirect()->route('dashboard');
        }

        return redirect()->route('login.index')->with('errors', new MessageBag([
            'InvalidCredentinals' => 'Usuário ou senha inválidos'
        ]));
    }

    protected function LoggedIn()
    {
        if (Session::has('user')) {

            redirect()->route('dashboard');
        }
    }

    public function destroy()
    {
        Session::flush();
        return redirect()->route('login.index');
    }
}
