<?php
    include_once __DIR__ . "/classi/Prodotto.php";


    class Alimentare extends Prodotto{
        
        public function __construct($matricola_prod, $nome_prod, $data_magaz){
            parent::__construct($matricola_prod, $nome_prod, $data_magaz);
        }



        public function getTipologia(){
            return "tipologia prodotto: Alimentare";
        }


        public function calcScadenza(){
            return " prod. in scadenza: 1-12-2023";
        }

        public function prezzoAlimentare($prezzo){
            return "prezzo: " . $prezzo + 10 . " euro";
        }
    }