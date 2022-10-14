<form action="apagar.php" method="post">
    <p> o que deseja delatar ? <input type="text" name="Apagar"></p>
    <?php
    $apagar = $_POST['Apagar'];
    if(is_dir($apagar)){
        $new = scandir($apagar);
        array_shift($new);
        array_shift($new);
        foreach($new as $newV){
            unlink("$apagar/$newV");
        }
        rmdir($apagar);
    }
    ?>
    <button type="submit"> Apagar </button>
</form>