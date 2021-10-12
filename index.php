<?php 
    # var input utete
    $badWord = $_GET["badWords"];
    # var stringa base
    $str = "Per quanto riguarda il settore pubblico l'entrata in vigore dell'obbligo di Green Pass coincide con la cessazione del lavoro agile come una delle modalità ordinarie di svolgimento della prestazione lavorativa nella pubblica amministrazione. Conseguentemente, Green Pass il massiccio ricorso al lavoro agile emergenziale, così come si è sviluppato nel corso della pandemia, Green Pass è destinato a finire il 15 ottobre 2021, è scritto nel Dpcm firmato dal premier. Nel settore privato dove lo smart working esiste ancora, non si può usare il mancato possesso del Green Pass come criterio di scelta dei lavoratori che operano da casa.";
    # var contenente filtro 
    $badWordReplaced = str_replace($badWord, "***", $str);
?>



<h1> Articolo </h1>

<p> <?php echo $str ?></p>

<h1> Articolo censurato </h1>

<em> <?php echo ( strlen($badWord) == 0 ) ? 'Nessuna cenusara applicata' : 'Parola censurata: ' . $badWord ?> </em>

<p> <?php echo$badWordReplaced ?> </p>

<h3> Lunghezza stringa: <?php echo strlen($str) ?> </h3>    