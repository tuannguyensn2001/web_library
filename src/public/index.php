<?php

include __DIR__."/../../vendor/autoload.php";

use App\Core\Routing\Router;

require_once __DIR__."/../routes/routes.php";

$env = new \App\Core\Env\Env();
$env->load();

new \App\Models\Model();
Router::dispatch();