<?php
    /**INCLUDE */
    include_once __DIR__ ."/classi/Prodotto.php";
    include_once __DIR__ ."/classi/Alimentare.php";
    include_once __DIR__ ."/classi/Prod_casa.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esselunga</title>
</head>
<body>
    <header>
        <h1>Magazzino Esselunga</h1>
    </header>

    <main>
        <?php
            $prod1 = new Alimentare("123", "Pane", "12-03-2018");
            // var_dump($prod1);
           
            $prod2 = new Alimentare("567", "Latte", "12-02-1234", "31-12-2222");
            // var_dump($prod2);

            $prod3 = new Prod_casa("1123", "Shampoo", "12-03-2018");
            // var_dump($prod1);
        ?>
        <section class="prodotti">
            <h3><?php echo "Prodotto" ?></h3>
            <div>
                <h5><?php echo $prod1->getNome() ?></h5>
                <div><?php echo $prod1->getMatricola()?></div>
                <div><?php echo $prod1->getTipologia()?></div>
                <div><?php echo $prod1->getDataMag()?></div>
                <div><?php echo $prod1->calcScadenza()?></div>
                <div><?php echo $prod1->getPrezzo(5)?></div>
            </div>
            
            <div>
                <h5><?php echo $prod2->getNome() ?></h5>
                <div><?php echo $prod2->getMatricola()?></div>
                <div><?php echo $prod2->getTipologia()?></div>
                <div><?php echo $prod2->getDataMag()?></div>
                <div><?php echo $prod2->calcScadenza()?></div>
                <div><?php echo $prod1->getPrezzo(12)?></div>
            </div>
            

            <div>
                <h5><?php echo $prod3->getNome() ?></h5>
                <div><?php echo $prod3->getMatricola()?></div>
                <div><?php echo $prod3->getTipologia()?></div>
                <div><?php echo $prod3->getDataMag()?></div>
                <div><?php echo $prod3->prezzoProd_casa(20)?></div>
            </div>
        </section>
    </main>
</body>
</html>