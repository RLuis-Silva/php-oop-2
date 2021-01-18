<!-- classe Prodotto -->
<?php
class Prodotto{
    private $matricola_prod;
    private $nome_prod;
    private $tipologia;
    private $data_magaz;
    private $prezzo;

    public function __construct($matricola_prod, $nome_prod,$data_magaz){
        
        $this->matricola_prod = $matricola_prod;
        $this->nome_prod = $nome_prod;
        // $this->tipologia = $tipologia;
        $this->data_magaz = $data_magaz;
    }


    public function getNome(){
        return "nome prodotto: ". $this->nome_prod;
    }

    public function getMatricola(){
        return "matricola prodotto: " . $this->matricola_prod;
    }


    public function getDataMag(){
        return "prod. inserito: 22-03-2018";
    }

    public function getPrezzo($prezzo){
        return "prezzo: " . $prezzo . " euro";
    }
}


