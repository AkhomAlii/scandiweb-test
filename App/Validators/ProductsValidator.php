<?php

namespace App\Validators;

 class ProductsValidator{
  
   public function validString($input) :bool {

    return is_string($input) && strlen($input) > 0;
    }

    public function validNumber($input) :bool {

        return is_numeric($input) && $input > 0;
    }

    public function validType($type) :bool {

        return $type == 'Dvd' or 'Furniture' or 'Book';

    }


    public function sanitize($input){
        $input = htmlspecialchars(stripslashes(trim($input)));
        return $input;
    }


}