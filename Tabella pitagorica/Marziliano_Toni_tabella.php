<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        header {
            color:aliceblue;
            background-color: blue;
            text-align: center;
            font-family: 'Orelega One', cursive;
            font-size: 40px;
        }

        td {
            border: 3px solid;
        }

        tr {
            border: 3px solid;
        }

    </style>

    <title>Tabella Pitagorica</title>

</head>

<body>
    <header>Tabella Pitagorica</header>
    <br>
    <br>
    <?php

        if(isset($_POST['invio'])){
            table();
        } else{
            form();
        }

        
        function form(){
            echo <<< FINE
            <form action="Marziliano_Toni_tabella.php" method="post">
                <center>
                <p>Primo Numero:</p><input type="number" name="n1" placeholder="Inserire il numero iniziale"><br><br>
                <p>Secondo Numero:</p><input type="number" name="n2" placeholder="Inserire il numero finale"><br><br>
                <input type="submit" class="btn btn-primary mb-2" name="invio">
                <input type="reset" class="btn btn-danger mb-2" name="reset">
                </center>
            </form>
            FINE;
        }

        function table(){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            ?>
            <center>
            <table width="25%" border="3" cellpadding="8">
                <td>X</td>
                <?php 
                for($i=$n1; $i<=$n2; $i++){
                ?>
                <td><b><?php echo $i ?></td>
                <?php
                }
                ?>
                

                <?php
                for($i=$n1; $i<=$n2; $i++){
                ?>
                <tr>
                    <td><b><?php echo $i;?></td>
                    <?php
                    for($j=$n1; $j<=$n2; $j++){
                    ?> 
                    
                    <td> <?php echo ($i * $j);?></td>

                    
                    <?php
                    } ?>
                    
                </tr>
                
                <?php
                    } ?>          
            </table>
            </center>
            <?php
        }
            ?>    
        
           
</body>
</html>