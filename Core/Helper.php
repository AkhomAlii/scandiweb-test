<?php 

namespace Core;

class Helper 
{
        
    public function base_path(string $path, $data = []){
        
        extract($data);

        return dirname(__DIR__) . "/{$path}"; 
    }

    public static function didu(...$args){
        echo '<pre>';

        var_dump($args);

        echo '</pre>';

        die();
    }




    public function redirect($toWhere =''){

        header("Location: {$toWhere}");
    }

    public function view($name, $data = []){

        extract($data);

        return require $this->base_path("views/{$name}.view.php");
    }


    public function partial($name, $data = []){
        
        extract($data);

        return require $this->base_path("views/components/{$name}.view.php");

    }



}