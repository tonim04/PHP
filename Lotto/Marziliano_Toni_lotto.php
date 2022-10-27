<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gioco del lotto - una sola ruota d'estrazione</title>
    <style>

        #titolo{
            font-size:50px ;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        h3{
            font-size:30px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 60px;
        }
        form{
            text-align: center;
        }
        label{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        b{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 17px;

        }
        #punteggio{
            font-size: 25px;
        }


        
    </style>
</head>
<body>

    <h2 id="titolo">Gioco del lotto - una sola ruota d'estrazione</h2>
    <h3>Scegli i 5 numeri da giocare</h3>

    <?php

    if(isset($_POST['invio'])){
        lotto();
    } else{
        form();
    }

    function form(){
        echo <<< FINE
        <div>
        <form action="Marziliano_Toni_lotto.php" method="POST">
            <label>Numero 1</label>
            <input type="number" name="num[]" min="1" max="90" required><br>
            <label>Numero 2</label>
            <input type="number" name="num[]" min="1" max="90" required><br>
            <label>Numero 3</label>
            <input type="number" name="num[]" min="1" max="90" required><br>
            <label>Numero 4</label>
            <input type="number" name="num[]" min="1" max="90" required><br>
            <label>Numero 5</label>
            <input type="number" name="num[]" min="1" max="90" required><br><br>

            <div>
                <input type="submit" class="btn btn-primary mb-2" name="invio">
                <input type="reset" class="btn btn-danger mb-2" name="Reset">
            </div>


        </form>
        
        </div>

        FINE;
    }

    function estrazione($numbers){
        $num_estrazione = array();
        $conta = 0; 

        echo "<b>I numeri estratti sono: </b>";
        for($i=0; $i<10; $i++){ //output dei numeri estratti 
            $num_estrazione[$i]= mt_rand(1,90);
            echo $num_estrazione[$i] . " - ";
        }

        echo "<br><b>I numeri che hai giocato sono: </b>";

        for($j=0; $j<5; $j++){
            $conta2 = $conta;
            for($y=0; $y<10; $y++){
                if($numbers[$j] == $num_estrazione[$y]){
                    $conta += 1;
                    break;
                }
            }
            if($conta == $conta2 + 1){
                echo "<b>$numbers[$j]</b> - ";
            } else{
                echo $numbers[$j] . " - ";
            }
            if($conta == 5){
                break; 
            }
        }
        echo "<br><b id='punteggio'>Il tuo punteggio: $conta / 5</b>";
    }

    function lotto(){
        $numbers = $_POST["num"];
        echo "<center>";
        for($i=0; $i < 10; $i++){
            echo "<h4>Estrazione n. ", $i+1 , "</h4>";
            estrazione($numbers);
            echo "<br><hr>";
        }
        echo "</center>";
    }
        
    ?>  
    
</body>
</html>