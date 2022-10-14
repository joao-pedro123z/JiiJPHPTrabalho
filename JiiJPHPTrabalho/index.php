<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de diretorios upload de arquivos</title>
</head>
<body>
    <h2>Sistema de Upload de arquivos</h2>
    <form enctype="multipart/form-data" method="post" action="enviar.php">
        <p>nome do diretório: <input type="text" name="diretorio"></p>
        <p>nome do comodo: <input type="text" name="nome"></p>
        <p><input name="userfile" type="file" /></p>
        <p><button type="submit"> enviar </button></p>
    </form>
</body>
</html>