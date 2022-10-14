
<?php


$dir= $_POST['diretorio'];
if(is_dir($dir)){
    //nada
}else{
    mkdir($dir);
}

 
$shutz = $_FILES['userfile']['tmp_name'];
$staful = $_FILES['userfile']['name'];
$noneFile = $_POST['nome'];
$parInfo = pathinfo("$staful");
$ext =$parInfo['extension'];
$extenções = array("jpeg","jpg","png");

if(in_array($ext,$extenções)){       
    
$ctr = move_uploaded_file($shutz,$dir."/".$staful.".$ext");
}


 
 if($ctr){
    echo "upload concluido!";
 }else{
     echo "Upload não concluido!";
 }
 
 echo "<a href=\"galery.php\"> <button>galeria </button> </a> <br>";

 echo "<a href=\"apagar.php\"> <button> apagr  Imagem </button> </a>";


