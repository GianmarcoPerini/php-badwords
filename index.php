<?php 

    $badWord = $_GET["badWords"];

    $str = "Per quanto riguarda il settore pubblico l'entrata in vigore dell'obbligo di Green Pass coincide con la cessazione del lavoro agile come una delle modalità ordinarie di svolgimento della prestazione lavorativa nella pubblica amministrazione. Conseguentemente, Green Pass il massiccio ricorso al lavoro agile emergenziale, così come si è sviluppato nel corso della pandemia, Green Pass è destinato a finire il 15 ottobre 2021, è scritto nel Dpcm firmato dal premier. Nel settore privato dove lo smart working esiste ancora, non si può usare il mancato possesso del Green Pass come criterio di scelta dei lavoratori che operano da casa.";

    $badWordReplaced = str_replace($badWord, "***", $str);

?>

<h1> <?php echo ($badWord == '') ? 'Nessuna cenusara applicata' : 'Parola censurata: ' . $badWord ?> </h1>

<p> <?php echo $badWordReplaced ?> </p>

<h1>Lunghezza stringa: <?php echo strlen($str) ?></h1>