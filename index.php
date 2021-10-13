<!-- Ci sono diverse domande con relative risposte:
Gestite il “Database” (i dati delle varie domande e risposte) di queste domande e risposte con le strutture dati che abbiamo visto insieme in PHP
Occupatevi di gestire la visualizzazione dei dati in PHP -->

<?php

    $faqGoogle = [
        [
            "domanda" => "domanda 1",
            "risposta"=> "risposta 1",
        ],
        [
            "domanda" => "domanda 2",
            "risposta"=> "risposta 2",
        ],
        [
            "domanda" => "domanda 3",
            "risposta"=> "risposta 3",
        ],
        [
            "domanda" => "domanda 4",
            "risposta"=> "risposta 4",
        ],
        [
            "domanda" => "domanda 5",
            "risposta"=> "risposta 5",
        ],
        [
            "domanda" => "domanda 6",
            "risposta"=> "risposta 6",
        ],
    ];
            

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!--link bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--Link foglio di stile css-->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Php google faq</title>
</head>
<body>

    <h1>Google Faq</h1>

    <div id="my-content">
        
        <?php
        foreach($faqGoogle as $chiave => $valore ){
                // echo $chiave;
                // echo $valore;
                // var_dump($valore);
            ?>
            <h3> <?php echo $valore["domanda"]; ?> </h3>
            <p><?php echo $valore["risposta"]; ?> </p>
        <?php } ?>

    </div>

</body>
</html>