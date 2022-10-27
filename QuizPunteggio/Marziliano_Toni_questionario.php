<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Rowdies:wght@300&display=swap" rel="stylesheet">

        <title>Questionario</title>

        <style>

             header {
            background-color:blue;
            color:aliceblue;
            text-align: center;
            font-family: 'Orelega One', cursive;
            font-family: 'Rowdies', cursive;
            font-size: 40px;
            }

        </style>
    </head>
    <body>

    <header>Quiz sul Calcio</header>

        <?php
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        echo <<< FINE
        <p>Benvenuto <b>$nome $cognome</b></p>
    
        <form action="Marziliano_Toni_risultato.php" method="POST">
        <hr>
        <h4>Domanda 1</h4>
        <label for="domanda1"><b>Quale di queste squadre ha vinto più Champions League?</b></label><br>
        <input type="radio" name="domanda1" value="Ajax" required>Ajax<br>
        <input type="radio" name="domanda1" value="Milan" required>Milan<br>
        <input type="radio" name="domanda1" value="BayernMonaco" required>Bayern Monaco<br>
        <input type="radio" name="domanda1" value="Chelsea" required>Chelsea<br>
        <hr>

        <hr>
        <h4>Domanda 2</h4>
        <label for="domanda1"><b>Quale di questi giocatori ha più gol in Serie A?</b></label><br>
        <input type="radio" name="domanda2" value="Totti" required>Totti<br>
        <input type="radio" name="domanda2" value="DiNatale" required>Di Natale<br>
        <input type="radio" name="domanda2" value="Shevchenko" required>Shevchenko<br>
        <input type="radio" name="domanda2" value="Ibrahimovic" required>Ibrahimovic<br>
        <hr>

        <hr>
        <h4>Domanda 3</h4>
        <label for="domanda1"><b>Chi ha vinto più palloni d'oro tra questi calciatori?</b></label><br>
        <input type="radio" name="domanda3" value="Ronaldo" required>Ronaldo<br>
        <input type="radio" name="domanda3" value="Cruyff" required>Cruyff<br>
        <input type="radio" name="domanda3" value="Platini" required>Platini<br>
        <input type="radio" name="domanda3" value="DiStefano" required>Di Stefano<br>
        <hr>
        <input type="submit" class="btn btn-primary mb-2" name="invio">
        <input type="reset" class="btn btn-danger mb-2">
        </form>
        
        FINE;

        
        ?>

        <!--if $post domanda1 == milan conta+3 !-->
                
    </body>
    </html>