<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Rowdies:wght@300&display=swap" rel="stylesheet">

    <style>

        header {
            background-color:blue;
            color:aliceblue;
            text-align: center;
            font-family: 'Orelega One', cursive;
            font-family: 'Rowdies', cursive;
            font-size: 40px;
            }
        a:hover{
			color: crimson;
		}

    </style>
</head>

<body>

    <header>Quiz sul Calcio</header>
    
    <?php

        $conta =0;

        if($_POST['domanda1'] == "Milan"){
            $conta +=3;
        } else {
            $conta -=1;
        }

        if($_POST['domanda2'] == "Totti"){
            $conta +=3;
        } else {
            $conta -=1;
        }

        if($_POST['domanda3'] == "Ronaldo"){
            $conta +=3;
        } else {
            $conta -=1;
        }
        ?>
        <center>
            <br>
            
        <?php

        echo "<h4>Il tuo punteggio è $conta</h4>";
        ?>
            
        <br><br><br>

        <a href="Marziliano_Toni_index.html"><h4>Torna alla Home</h4></a>
        <center>
        
</body>
</html>