<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Istogramma</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <?php

      if(!isset($_POST["invio"])){
        form();
      } else{
        istogramma();
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


      function istogramma(){

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
          $pxcom = ($_POST["com"]/2.7)."px"; //ad ogni 2,7 voti corrisponde un pixel per l'istogramma
          $pxsup = ($_POST["sup"]/2.7)."px";
          $pxmer = ($_POST["mer"]/2.7)."px";
          $pxint = ($_POST["int"]/2.7)."px";
          $pxnot = ($_POST["not"]/2.7)."px";


        echo <<< END

        <div class="bar-graph_container" style="margin: 0 auto;top: 30px;">
        <div class="bar-graph_levels">
          <span class="bar-graph_level">500</span>
          <span class="bar-graph_level">350</span>
          <span class="bar-graph_level">200</span>
          <span class="bar-graph_level">100</span>
        </div>

        <div class="bar-graph_bars">
          <div class="bar-graph_bar pink" style="width:$pxcom;"><div class="tooltip">$com</div></div>
          <div class="bar-graph_bar orange" style="width:$pxsup;"><div class="tooltip">$sup</div></div>
          <div class="bar-graph_bar green" style="width:$pxmer;"><div class="tooltip">$mer</div></div>
          <div class="bar-graph_bar blue" style="width:$pxint;"><div class="tooltip">$int</div></div>
          <div class="bar-graph_bar yellow" style="width:$pxnot;"><div class="tooltip">$not</div></div>
        </div>

        <div class="bar-graph_items">
          <span class="bar-graph_item">CCom</span>
          <span class="bar-graph_item">SuperM</span>
          <span class="bar-graph_item">Merc</span>
          <span class="bar-graph_item">Int</span>
          <span class="bar-graph_item">Ness</span>
        </div>
        </div>

        <br><br><center><h3><a href="">Torna alla Home!</a></h3><br><br>


        <table width=\"200\" border=\"5%\">

        <tr>
        <td><b>Centro commerciale</b></td>
        <td>$com</td>
        </tr>

        <tr>
        <td><b>Supermercato</b></td>
        <td>$sup</td>
        </tr>

        <tr>
        <td><b>Mercato</b></td>
        <td>$mer</td>
        </tr>

        <tr>
        <td><b>Internet</b></td>
        <td>$int</td>
        </tr>

        <tr>
        <td><b>Ness posto in particolare</b></td>
        <td>$not</td>
        </tr>
        </table>";

        </center>

        END;
        }
      }
    ?>

  
</body>
</html>
