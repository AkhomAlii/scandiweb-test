<?php

namespace App\Models;

class Dvd extends Product{
    
	
	public function save($request) {

    $request['attribute'] = 'Size: ' . $request['size'] . ' MB';
        
    unset($request['size']);

    $this->insert($request);
    }
	/**
	 * @param mixed $request
	 * @return mixed
	 */
	public function validAttribute($request) {
        if (! $this->validator->validNumber( $request['size'])){
            $this->errors['type'] = "Please enter the DVD's capacity ";
        }
	}
}