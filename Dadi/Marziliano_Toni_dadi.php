<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lancio di Dadi</title>

    <style>
        header{
            background-color:green;
            color:aliceblue;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            font-size: 50px;
        }

        .punteggio{
            font-size: 35px;
            font-family:'Times New Roman', Times, serif
        }

        b{
            font-size: 20px;
        }

        a {
            font-size: 30px;
        }

        a:hover{
				color: crimson;
			}
    </style>
</head>
<body>

    <header>Lancio dei dadi</header><br><br>

    <?php

    if(isset($_POST["invio"])){
        dadi();
    } else{
        form();
    }

    function form(){
        echo <<< FINE
        <form action="Marziliano_Toni_dadi.php" method="POST">
        <label><h4>Quanti dadi vuoi lanciare?</h4></label><br>
        <input type="number" name="num" placeholder="Numero di dadi" min="1" required>
        <button type="submit" class="btn btn-success" name="invio">Gioca!</button>
        </form>
        FINE;

    }

    function dadi(){
        $numero = (int)$_POST["num"];
        $conta=0;
        $somma=0;
        $array = array(
            1 => "<img src=\"dadi-200px/dado_1.png\">",
            2 => "<img src=\"dadi-200px/dado_2.png\">",
            3 => "<img src=\"dadi-200px/dado_3.png\">",
            4 => "<img src=\"dadi-200px/dado_4.png\">",
            5 => "<img src=\"dadi-200px/dado_5.png\">",
            6 => "<img src=\"dadi-200px/dado_6.png\">",
        );

        for($i=0; $i<$numero;$i++){

            $estrazione=mt_rand(1,6);

            echo $array[$estrazione];


            $somma += $estrazione;

        }
        echo "<br><br>";

        echo "<ul>";
        
        echo "<li><b>Dadi lanciati: </b> <b class=\"punteggio\">$numero</b><br></li>";

        echo "<li><b>Il tuo punteggio: </b> <b class=\"punteggio\">$somma</b></li></ul>";

        echo "<center><a href=\"Marziliano_toni_dadi.php\">Gioca ancora!</a></center>";
            
        }
    
    ?>
    
</body>
</html>