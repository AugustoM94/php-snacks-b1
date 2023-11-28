<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks</title>
</head>
<body>
<main class="container text-center ">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Squadra di Casa</th>
            <th>Squadra Ospite</th>
            <th>Punti Casa</th>
            <th>Punti Ospite</th>
        </tr>
    </thead>
    <tbody>
        

<?php

$partite = [
    [    "squadra_casa" => "Olimpia Milano", 
        "squadra_ospite" => "Cantù", 
        "punti_casa" => 55, 
        "punti_ospite" => 60,
    ],    
    [   
        "squadra_casa" => "Roma Basket",
        "squadra_ospite" => "Virtus Bologna", 
        "punti_casa" => 72, 
        "punti_ospite" => 68
    ],
    [   "squadra_casa" => "Napoli Sharks",
        "squadra_ospite" => "Torino Bulls",
         "punti_casa" => 64,
          "punti_ospite" => 59,
     ],   
     [      
        "squadra_casa" => "Firenze Eagles",
        "squadra_ospite" => "Milano Stars",
         "punti_casa" => 78, 
         "punti_ospite" => 82,
     ],    
    [
    "squadra_casa" => "Palermo Lions",
     "squadra_ospite" => "Genova Dolphins",
      "punti_casa" => 70,
       "punti_ospite" => 65,
    ]    
];

foreach ($partite as $partita) {
    echo "<tr>
            <td>{$partita["squadra_casa"]}</td>
            <td>{$partita["squadra_ospite"]}</td>
            <td>{$partita["punti_casa"]}</td>
            <td>{$partita["punti_ospite"]}</td>
        </tr>";
}

?>
    </tbody>
</main>
</body>
</html>