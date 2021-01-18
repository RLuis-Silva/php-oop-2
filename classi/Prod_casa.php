<?php
    include_once __DIR__ ."/classi/Prodotto.php";

    class Prod_casa extends Prodotto{
        
        public function __construct($matricola_prod, $nome_prod, $data_magaz){
            parent::__construct($matricola_prod, $nome_prod, $data_magaz);
        }


        public function getTipologia(){
            return "tipologia prodotto: Prodotto di casa";
        }


      
        public function prezzoProd_casa($prezzo){
            $newPrezzo = $prezzo + 16;
            return 'prezzo:'  . $newPrezzo . ' euro';
        }
    }