<?php


use App\Core\Routing\Router;

Router::get("/",[\App\Controllers\HomeController::class,'index']);
Router::post("/post",[\App\Controllers\HomeController::class,'post']);


