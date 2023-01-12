<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form class="inpus">
        <input type="text" name="nome" placeholder="escolha a emissora...">
        <input type="submit" name="acao" value="Pesquisar">
    </form>
    <div class="texto">

    <?php
    include './func.php';
    if (isset($_GET['acao'])) {
        $nome = $_GET['nome'];
        if ($nome == 'globo') {
            $result = 'post ';
            buscaNoticia($nome, $result);
        }if ($nome == 'g1.globo'){
            $result = '_evt';
            buscaNoticia($nome, $result);
        }else {
            echo "note";
        }
    }
    ?>
    </div>
</body>
</html>