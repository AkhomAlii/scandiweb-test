<?php

namespace App\Models;

class Furniture extends Product{
    
	
	public function save($request) {

    $request['attribute'] = 'Dimension: ' . $request['height'] . 'x' . $request['width'] . 'x' . $request['length'];
        
    unset($request['width'], $request['length'], $request['height']);

    $this->insert($request);
    }
	/**
	 * @param mixed $request
	 * @return mixed
	 */
	public function validAttribute($request) {
         foreach(['width', 'height', 'length'] as $key){
                if (! $this->validator->validNumber( $request[$key])){
                $this->errors['type'] = "There's a missing dimension(s) ";
            }
        }
	}
}