<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registrazione utente</title>
</head>
<body>
    
        <?php 
        
             if(isset($_POST['invio'])){
                registrazione();
            } else{
                form();
            }

            function form(){
                echo <<<Fine
            <form action="" method="post">
                <center>

                <h4>Nome</h4>
                <input type="text" name="nome" placeholder="Inserire il nome" required>

                <h4>Cognome</h4>
                <input type="text" name="cognome" placeholder="Inserire il cognome" required>

                <h4>Data di nascita</h4>
                <input type="date" name="datanascita" required>

                <h4>Citta di Residenza</h4>
                <input type="text" name="citta" placeholder="Inserire la propria residenza" required>

                <h4>Indirizzo</h4>
                <input type="text" name="indirizzo" placeholder="Inserire l'indirizzo di residenza">

                <h4>CAP</h4>
                <input type="number" name="cap">

                <h4>E-MAIL</h4>
                <input type="email" name="email" required>

                <h4>Password</h4>
                <input type="password" name="password" required>
                
                <br>
                <br>

                <input type="submit" class="btn btn-primary mb-2" name="invio">
                <input type="reset" class="btn btn-danger mb-2">
            </form>

                </center>
            Fine;
            }
                
            
            function registrazione(){
                $nome=$_POST['nome'];
                $cognome=$_POST['cognome'];
                $datanascita=$_POST['datanascita'];
                $citta=$_POST['citta'];
                $indirizzo=$_POST['indirizzo'];
                $cap=$_POST['cap'];
                $email=$_POST['email'];

                echo <<< Fine
                <h2>Benvenuto $nome </h2><br>
                <h3>I tuoi dati: </h3><br>
                <ul>
                    <li><h4>Nome:</h4> <p>$nome $cognome</p></li>
                    <li><h4>Data di nascita:</h4> <p>$datanascita</p></li>
                    <li><h4>Città/Comune di residenza:</h4><p>$citta</p></li>
                    <li><h4>Indirizzo:</h4> <p>$indirizzo</p></li>
                    <li><h4>CAP:</h4><p>$cap</p></li>
                    <li><h4>E-Mail:</h4><p>$email</p></li>
                </ul>
                Fine;
            }
        ?>

</body>
</html>