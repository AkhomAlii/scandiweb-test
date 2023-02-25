<?php

use Core\Http\Route;
use Core\Helper;




require dirname(__DIR__) . '/Core/Helper.php';
$helper = new Helper();

require $helper->base_path('Core/bootstrap.php',[
    'helper' => $helper
]);

require $helper->base_path('routes/web.php');

Route::resolve();