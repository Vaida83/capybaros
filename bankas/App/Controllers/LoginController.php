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
            Message::get()->set('success', 'You are logged in');
            return App::redirect('addAccount');
        }
    
        Message::get()->set('danger', 'Wrong email or password');
        return App::redirect('login');
    }
    public function logout() {
        Auth::get()->logout();
        Message::get()->set('success', 'You are logged out');
        return App::redirect('login');
    }
}