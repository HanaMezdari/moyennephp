

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Calcule De Moyenne</title>
</head>
<body>

<div class="calcule"  style="margin: 200px;"  >
     <center><h1>Calcule De Moyenne:</h1></center>
     <form action="#moy"  method="POST" >
       <label for="num1" >Note 1</label><br>
       <input type="text" name="num1" class="form-control"><br><br>
       <label for="num2">Note 2</label><br>
       <input type="text" name="num2" class="form-control"><br><br>
       
       <input type="submit" value="Calcule De Moyenne"  name="submit1" class="btn btn-success"><br>

     </form>
  <br>
  <h4>Moyenne :</h4>
  <div id="Moyenne" class="form-control">
    <?php
    if (isset($_POST['submit1'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $resultat = $num1+($num2*2);
      $resultat1 = $resultat/3;

      echo $resultat1;
    }


    ?>
  </div>
</div>    
</body>
</html>