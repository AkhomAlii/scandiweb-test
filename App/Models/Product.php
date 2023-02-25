<?php


namespace App\Models;

use App\Validators\ProductsValidator;
use Core\ElegantModel;

 class Product extends ElegantModel{

    public function __construct(
         protected ProductsValidator $validator = new ProductsValidator(),
         protected $table = 'products',
         protected $errors =[]
         ){}


     public function save($request){}
     public function validAttribute($request){}



    public static function add($request){
        $model = static::properModel($request['type'] ?? 'Product');
        $request = $model->validInputs($request);
        if( $model->getErrors()){
            
            return [
                'data' => $request,
                 'errors' => $model->getErrors()
            ];
        }



        $model->save($request);
    }

    public function massDelete($request){
          
        foreach($request as $id){
            $this->delete($id);
        }
    }

    protected function validInputs($request){
        foreach($request as &$input){
            $input = $this->validator->sanitize($input);
        }
        
        foreach(['sku', 'name'] as $key){
            if (! $this->validator->validString( $request[$key])){
                $this->errors[$key] = "Please enter a valid {$key} ";
            }
        }
        
        if (! $this->validator->validNumber( $request['price'])){
            $this->errors['price'] = "Please enter a valid price ";
        }
        
        
        if( $this->findOrFail($request['sku'])){
            $this->errors['sku'] = "This one's already used, Please enter another one ";
            
        }
        
        if (! isset($request['type'])){
            $this->errors['type'] = "Please specify a product type";
            
            return $request;
        }
        $this->validAttribute($request);

        return $request;

    }



    public function getErrors(){
        return $this->errors;
    }

    protected static function properModel($model){

        $model = 'App\\Models\\'.$model;
    
        return new $model();
    }
}