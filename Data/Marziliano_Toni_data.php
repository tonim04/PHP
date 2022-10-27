<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestione Date</title>

    <style>
			form{
				max-width: 800px;
				margin:20px auto;
				
			}
			label{
				display: inline-block;
				width: 33%;
			}
			input{
				width: 33%;
				padding:3px 5px;
				margin-bottom: 10px;
			}
            div{
                text-align: center;
            }
            p{
                font-size: 25px;
            }
    </style>
</head>

<body>
    

    <?php
    
        $ora = date("H"); 
        $data = date("d/m/Y"); #variabile con la data odierna
        $orario = date("H:i"); #variabile con l'orario attuale(ora+min)
        $giorno = date("l"); 

        if(isset($_POST['invio'])){
            presentazione($ora, $data, $orario);
        } else{
            form();
        }

       

        function form(){
            echo <<< Fine
            <div>
                <form action="Marziliano_Toni_data.php" method="post">
                <label for="nome">Inserire il nome utente</label>
                <input type="text" name="nome" required>
                    <div>
                        <input type="submit" class="btn btn-primary mb-2" name="invio">
                        <input type="reset" class="btn btn-danger mb-2" name="Reset">
                    </div>
                </form>
            </div>

            Fine;
        }
        
        function presentazione($ora, $data, $orario){
            $nome = $_POST["nome"];
            
            ?>

            <center>
            <br><br><br><br><br>
            <?php
            if($ora<=12){
                echo "<p>Buongiorno <b>$nome</b>, oggi è il <b>$data</b> e sono le ore <b>$orario</b></p>";
            }else if($ora < 18) {
                echo "<p>Buon Pomeriggio <b>$nome</b>, oggi è il <b>$data</b> e sono le ore <b>$orario</b></p>";
            } else{
                echo "<p>Buonasera <b>$nome</b>, oggi è il <b>$data</b> e sono le ore <b>$orario</b></p>";
            }
            ?>
            <center>
            <?php

        }   
            switch ($giorno){
                case "Monday":
                    echo "<style> body{background-color:yellowgreen}";
                    break;
                
                case "Tuesday":
                    echo "<style> body{background-color:aquamarine}";
                    break;

                case "Wednesday":
                    echo "<style> body{background-color:coral}";
                    break;

                case "Thursay":
                    echo "<style> body{background-color:darkcyan}";
                    break;

                case "Friday":
                    echo "<style> body{background-color:mediumseagreen}";
                    break;

                case "Saturday":
                    echo "<style> body{background-color:limegreen}";
                    break;

                case "Sunday":
                    echo "<style> body{background-color:cornflowerblue}";
                    break;

            }
            
            ?>

</body>
</html>