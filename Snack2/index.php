<!-- # Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
 “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks2</title>
</head>
<body>

<div class="container text-enter mt-5 mb-2 ">
    <form id="myForm">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="form-group">
            <label for="age">Età:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <input class="btn btn-danger mt-3 " id="submit" type="submit" value="Invia">
    </form>
    <?php

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];


    if (empty($name) || empty($mail) || empty($age)) {
        echo "Inserisci nome, mail ed età per effettuare l'accesso.";
    } elseif ((strlen($name) > 3) && (str_contains($mail, '.')) && (str_contains($mail, '@')) && (is_numeric($age))) {
        echo "<div class='alert alert-success mt-3'>Accesso riuscito</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Accesso negato</div>";
    }}
?>
</div>


</body>
</html>