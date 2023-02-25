<?php

namespace App\Models;

class Book extends Product{
    
	
	 public function save($request) {

    $request['attribute'] = 'Weight: ' . $request['weight'] . ' KG';
        
    unset($request['weight']);

    $this->insert($request);
    }
	/**
	 * @param mixed $request
	 * @return mixed
	 */
	public function validAttribute($request) {
        if (! $this->validator->validNumber( $request['weight'])){
            $this->errors['type'] = "Please enter the weight ";
        }
	}
}