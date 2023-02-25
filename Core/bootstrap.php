<?php
use Core\App;
use Core\Database;
use Core\ElegantModel;

require $helper->base_path('/vendor/autoload.php');


App::bind('config', require $helper->base_path('config/config.php'));

App::bind('database', 
    Database::connect(App::resolve('config')['database'])
);
 

ElegantModel::$pdo = App::resolve('database') ;