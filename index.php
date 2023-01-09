<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './func.php';
    if(isset($_GET['acao'])){
        $result = 'post ';
        $nome = $_GET['nome'];
        buscaNoticia($nome, $result);
    }
    ?>
    <form style="display: flex; align-items: center; justify-content: center; margin:auto; height: 900px; ">
        <input type="text" name="nome" placeholder="Jorge é gay...">
        <input type="submit" name="acao" value="Pesquisar">
    </form>
</body>
</html>