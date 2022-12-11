<?php

namespace App\Controllers;
class HomeController extends Controller
{
    public function index() {
//        dd(assets("css/index.css"));
//        dd($_GET);
        return view("home",[
            "name" => "application"
        ]);
    }

    public function post()
    {
        dd($_POST);
    }
}