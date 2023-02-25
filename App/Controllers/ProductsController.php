<?php


namespace App\Controllers;
use App\Models\Product;
use Core\Helper;

class ProductsController{

    public function __construct(
        protected Helper $controlerHelper = new Helper()
    ){}

    
    public function index(){
        $products = (new Product())->selectAll() ;
    
        return $this->controlerHelper->view('index', [
            'products' => $products,
            'helper' => $this->controlerHelper
        ]);        
    }

    public function delete(){

        $products = new Product();
        $products->massDelete($_POST);
        return $this->controlerHelper->redirect('/');
    }

    public function add($data = []){

        $data['helper'] = $this->controlerHelper;

        return $this->controlerHelper->view('/add-product', $data); 
    }
    

    public function store(){
        
        $whatsPoppin = Product::add($_POST);
        if (isset($whatsPoppin['errors'])){

            return $this->add($whatsPoppin);
        }
        return $this->controlerHelper->redirect('/');
        
    }

    
}