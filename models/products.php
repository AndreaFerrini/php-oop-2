<?php

class Products{

    public $foto;
    public $nome;
    public $tipologia;
    public $prezzo;



    public function __construct( $foto,  $nome,  $tipologia, $prezzo ){

        $this -> foto = $foto;
        $this -> nome = $nome;
        $this -> tipologia = $tipologia;
        $this -> prezzo = $prezzo;
        
    }

    
}

?>