<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('conexao.php');
    extract($_POST); // $id

    $comando = "SELECT * FROM `mensagens` WHERE `id_sala` = '$id'";

    echo '<h1 class="text-center">Mensagens da sala ' . $id . ':</h1>';

    foreach ($objetoConexao->query($comando) as $linha) {
        echo "<br>-{$linha['nomeUsuario']}: {$linha['mensagens']}";
    }
    ?>
    <br><br><a href="selecionaSala.php" class="btn btn-info">Voltar</a>
</body>

</html>