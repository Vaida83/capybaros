<?php
namespace Bankas\App\Controllers;
use Bankas\App\App;
use Bankas\App\Auth;
use Bankas\App\Message;


class LoginController{
    public function index()
    {
    
        return App::view('login/login',[
            'title' => 'Login'
        ]);
    }
    public function login($request)
    {
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';

      
        if(Auth::get()->tryLoginUser($email, $password)){
            Message::get()->set('success', 'Jūs sėkmingai prisijungėte!');
            return App::redirect('addAccount');
        }
    
        Message::get()->set('danger', 'Blogas el.paštas arba slaptažodis');
        return App::redirect('login');
    }
    public function logout() {
        Auth::get()->logout();
        Message::get()->set('success', 'Jūs sėkmingai išsiregistravote!');
        return App::redirect('login');
    }
}