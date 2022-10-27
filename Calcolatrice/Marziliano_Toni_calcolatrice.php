<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <title>Calcolatrice</title>

    <style>

        header {
            background-color:springgreen;
            text-align: center;
            font-family: 'Orelega One', cursive;
            font-size: 40px;
        }
        b{
            font-size: 30px;
        }
        p{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <header>CALCOLATRICE</header>
    <?php

        if(isset($_POST['invio'])){
            calc();
        } else{
            form();
        }

        function form(){
            echo <<< FINE
            <form action="Marziliano_Toni_calcolatrice.php" method="post">
            
                <b><h5>Primo Numero:</h5><input type="number" name="n1" placeholder="Inserire il primo numero"><br><br>
                <b><h5>Secondo Numero:</h5><input type="number" name="n2" placeholder="Inserire il secondo numero"><br><br>
            <div class="col-lg-4">
                <label for="operatore" class="form-label">Operatore</label>
                <select id="operatore" name="operatore" class="form-select" aria-label="Default select example">
                    <option selected value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <br><br>
            </div>
                <input type="submit" class="btn btn-primary mb-2" name="invio">
                <input type="reset" class="btn btn-danger mb-2" name="reset">
            FINE;
        }

        function calc(){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $op=$_POST['operatore'];

            switch($op){
                case '+':
                    $result= $n1 + $n2;
                    echo "<center><p><b>$n1</b> + <b>$n2</b> = <b>$result</b></p></center>";
                break;

                case '-':
                    $result= $n1 - $n2;
                    echo "<center><p><b>$n1</b> - <b>$n2</b> = <b>$result</b></p></center>";
                break;

                case '*':
                    $result= $n1 * $n2;
                    echo "<center><p><b>$n1</b> * <b>$n2</b> = <b>$result</b></p></center>";
                break;

                case '/':
                    $result= $n1 / $n2;
                    echo "<center><p><b>$n1</b> / <b>$n2</b> = <b>$result</b></p></center>";
                break;
            }

        }

    ?>
    
    
</body>
</html>