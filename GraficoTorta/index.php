<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Grafico a torta</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        function graficoTorta(com, sup, mer, int, not){

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Luogo', 'Voti'],
                    ['Centro Commerciale', com],
                    ['Supermercato', sup],
                    ['Mercato', mer],
                    ['Internet', int],
                    ['Nessuna Preferenza', not]
                ]);

                var options = {
                title: 'Preferenze sui luoghi di acquisto'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        }
    </script>

</head>

<body>

    <?php

    if(!isset($_POST["invio"])){
        form();
    } else{
        grafico();
    }

    function form(){

        echo <<< END

        <center><br><br><br>

        <form action="index.php" method="POST">

        <label><b>Centro Commerciale</label><br>
        <input type="number" name="com" min="0" max="500" required><br>

        <label>Supermercato</label><br>
        <input type="number" name="sup" min="0" max="500" required><br>

        <label>Mercato</label><br>
        <input type="number" name="mer" min="0" max="500" required><br>

        <label>Internet</label><br>
        <input type="number" name="int" min="0" max="500" required><br>

        <label>Nessun posto in particolare</b></label><br>
        <input type="number" name="not" min="0" max="500" required><br><br>

        <div>
                <input type="submit" class="btn btn-primary" name="invio">
                <input type="reset" class="btn btn-danger" name="Reset">
        </div>

        </form>

        </center>

        END;

    }

    function grafico(){
        $com = $_POST["com"];
        $sup = $_POST["sup"];
        $mer = $_POST["mer"];
        $int = $_POST["int"];
        $not = $_POST["not"];
        $sum = $com + $sup + $mer + $int + $not;

        if($sum >500){
          echo "<br><br><br><center><h1>Errore!<br> La somma dei voti è maggiore di 500!</h1></center>";
          echo "<center><h1><a href=\"index.php\">Riprova!</a></h1></center>";
        } else{

            echo <<< END


            <script type="text/javascript">graficoTorta($com, $sup, $mer, $int, $not);</script>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
            <br><br><center><h3><a href="">Torna alla Home!</a></h3><br><br>

            END;
            
        }
    }
    ?>
    
    

</body>

</html>
