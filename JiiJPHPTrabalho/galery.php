<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> imagens de comodos </title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
      div{
        border: 1px solid black;
        height: 300px;
      }
    </style>
</head>
<body>
<div class="container">
  <?php
  $cavalo = scandir('../JiiJPHPTrabalho');
  array_shift($cavalo);
  array_shift($cavalo);
  foreach($cavalo as $egua){
    if(strpos($egua,'.')){}
    else{
        echo " <div class=\"row\">";
        $potro = scandir($egua);
        array_shift($potro);
        array_shift($potro);
        foreach($potro as $vaca){
          echo " <div class=\"col-sm\" style=\"background-image: url($egua/$vaca);
          background-size: cover;\">
          </div>";
      }
      echo "</div>";
    }
  }
  ?>
</div>
<script src="bootstrap.bundle.js"></script>
</body>
</html>