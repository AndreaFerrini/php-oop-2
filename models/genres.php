<?php


require_once __DIR__ . "/products.php";

class Genres extends Products{
    public $animale;

    public function __construct($foto, $nome, $categoria, $prezzo, $animale){
        parent::__construct($foto, $nome, $categoria, $prezzo);
        $this -> animale = $animale;
    }

    
}


$prodotto = new Genres("foto", "Eukanuba", "cibo", "€ 7.99", "cane");
var_dump($prodotto);

?>