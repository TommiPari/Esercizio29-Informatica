<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body style="background-color: rgb(206, 206, 206);">
    <h1>Risultato Conversione</h1>
    <?php
        $cambioValute = array("dol" => 1.08, "ste" => 0.83, "fra" => 0.94, "yen" => 165.98);
        $data = date("Y-m-d");
        $giorno = date("w");
        $importo = $_GET["importo"];
        $cambio = $_GET["valuta"];
        $conversione = $importo * $cambioValute[$cambio];
        $commissione = 0.0;
        switch ($giorno) {
            case 0:
                $commissione = 0.05;
                $giorno = "Domenica";
                break;
            case 1:
                $commissione = 0.025;
                $giorno = "Lunedì";
                break;
            case 2:
                $commissione = 0.025;
                $giorno = "Martedì";
                break;
            case 3:
                $commissione = 0.025;
                $giorno = "Mercoledì";
                break;
            case 4:
                $commissione = 0.025;
                $giorno = "Giovedì";
                break;
            case 5:
                $commissione = 0.025;
                $giorno = "Venerdì";
                break;
            case 6:
                $commissione = 0.05;
                $giorno = "Sabato";
                break;
        }
        $conversioneFinale = $importo * $cambioValute[$cambio] * (1 - $commissione);
    ?>
    <br>
    <p>Data: <?php echo $data?></p>
    <p>Giorno: <?php echo $giorno?></p>
    <p>Importo inserito: <?php echo $importo?>€</p> <br>
    <img src="./images/it-flag.gif">
    <p>Conversione: <?php echo $conversione?></p>
    <p>Commissioni: <?php echo number_format($commissione, 3) * 100 . "%"?></p>
    <h3>Conversione finale: <?php echo number_format($conversioneFinale, 2)?></h3>
    <img src="<?php switch ($cambio) {
        case "dol":
            echo "./images/us-flag.gif";
            break;
        case "yen":
            echo "./images/ja-flag.gif";
            break;
        case "fra":
            echo "./images/sz-flag.gif";
            break;
        case "ste":
            echo "./images/uk-flag.gif";
            break;
    } ?>"  id="bandiera"><br>
    <a href="./index.html">Torna indietro</a>
</body>
</html>