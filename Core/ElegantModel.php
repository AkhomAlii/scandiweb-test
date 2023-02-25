<?php

namespace Core;

use PDO;
use PDOException;

class ElegantModel{

    public static PDO $pdo ;

    public function __construct(
        protected $table = '',
        protected $statement = '',
        protected $sql = ''
    ){}
    

    public function selectAll(){

        $this->sql = "SELECT * FROM {$this->table}";
        $this->statement = static::$pdo->prepare($this->sql);

        $this->statement->execute();

        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    
    }


    public function insert($request){
        
        try {
            $this->sql = sprintf(
                "INSERT INTO %s (%s) VALUES (%s)",
                $this->table,
                implode(', ', array_keys($request)),
                ':' . implode(', :', array_keys($request))
            );
            $this->statement = static::$pdo->prepare($this->sql);

            $this->statement->execute($request);
       
        }catch(PDOException $e){
            Helper::didu($e->getMessage());
        }

    }


    public function delete($id){

        $this->sql = "DELETE FROM {$this->table} WHERE id = :id";

        $this->statement = static::$pdo->prepare($this->sql);

        $this->statement->execute(['id' => $id]);
    }   

    public function findOrFail($sku){

        $this->sql = "SELECT * FROM {$this->table} WHERE sku = :sku";
        $this->statement = static::$pdo->prepare($this->sql);

        $this->statement->execute(['sku' => $sku]);
        return $this->statement->fetch(PDO::FETCH_ASSOC) ;
    }


    

}