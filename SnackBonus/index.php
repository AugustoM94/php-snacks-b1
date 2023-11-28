<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP SnacksBonus</title>
</head>
<body>
    <main class="container mt-3 ">
        <?php
        $paragrafo = "La Juventus Football Club (dal latino: iuventūs, «gioventù»), meglio nota come Juventus (/juˈvɛntus/),[1] è una società calcistica italiana con sede nella città di Torino. Milita in Serie A, la massima divisione del campionato italiano.

        Fondata nel 1897 da un gruppo di studenti liceali locali,[2] la Juve (pronunciato [ˈjuːve]), com'è colloquialmente abbreviata,[3] è il secondo club professionistico per anzianità tra quelli tuttora attivi nel Paese, dopo il Genoa (1893); è il più titolato e con maggior tradizione sportiva oltreché uno dei più blasonati al mondo con 70 trofei ufficiali vinti durante la militanza al vertice della piramide sportiva nazionale, tra cui il primato di 36 titoli di campione d'Italia e 11 in competizioni UEFA.[4] Prende parte stabilmente al massimo campionato nazionale sin dall'esordio nel 1900, eccezione fatta per la stagione 2006-2007. Dopo aver esordito in divisa rosanero, ai primi del Novecento adottò l'odierna tenuta di gioco bianconera.[5]

        Il legame con la famiglia Agnelli, che dura in modo quasi ininterrotto dal 1923, è il primo e più duraturo sodalizio imprenditoriale-sportivo in Italia;[6][7] attraverso un peculiare modello gestionale instaurato nel frattempo, quella bianconera divenne una delle prime società sportive italiane a raggiungere uno status professionistico ante litteram,[8] affermandosi a livello nazionale dal decennio successivo e in ambito internazionale dalla metà degli anni 70 del XX secolo.[9]

        Nel decennio seguente diventò il primo club ad aver vinto tutte e tre le maggiori competizioni europee: la Coppa UEFA (1976-1977), la Coppa delle Coppe (1983-1984) e la Coppa dei Campioni (1984-1985);[10] coi trionfi nella Supercoppa UEFA 1984 e nella Coppa Intercontinentale 1985 divenne inoltre il primo al mondo ad avere conquistato tutti i cinque trofei ufficiali maschili dell'UEFA allora vigenti,[11] un record ulteriormente migliorato col successo nella Coppa Intertoto 1999.[12]";

        $frasi = explode('.', $paragrafo);

        foreach ($frasi as $frase) {
            $frase = trim($frase);

            if (!empty($frase)) {
                echo "<p>$frase.</p>\n";
            }
        }
        ?>
    </main>
</body>
</html>
