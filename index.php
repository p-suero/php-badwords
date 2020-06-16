<!-- predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php
    //creo una variabile con all'interno una frase
    $frase = "Se puoi sognare puoi farlo";
    //creo una variabile "badword" con carattere vuoto
    $badword = "";
    //verifico se nella chiamata Get arriva una chiave "badword"
    if (!empty($_GET["badword"])) {
        //salvo in variabile il valore della Get
        $badword = $_GET["badword"];
    }
    //sostituisco la badword con ***
    $frase_censurata = str_ireplace($badword, "***", $frase);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censuratore rudimentale</title>
    </head>
    <body>
        <div>
            <p><?php echo $frase_censurata ?></p>
            <p>
                Lunghezza paragrafo:
                <?php
                    echo strlen($frase_censurata)
                ?>
                caratteri.
            </p>
        </div>
    </body>
</html>
