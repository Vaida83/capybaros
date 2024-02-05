<?php

namespace Bankas\App\Controllers;

use Bankas\App\App;


class HomeController
{
    public function index()
    {
        
        return App::view('home', [
            'title' => "Minutės bankas"
        ]);
        
    }
 
}