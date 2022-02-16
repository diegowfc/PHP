<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe sala</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>
    <?php
    extract($_POST);
    include('conexao.php');

    session_start();
    $comando = "SELECT nomeUsuario, senha FROM `usuarios` WHERE nomeUsuario = '$nome'";

    foreach ($objetoConexao->query($comando) as $data) {
        if (password_verify($senha, $data['senha']) && $nome == $data['nomeUsuario']) {
            $_SESSION['nome'] = $nome;
            echo "Olá " . $nome . "! Bem vindo!";

    ?>
            <h1 class="h4 text-center mt-5">Crie uma nova sala ou envie uma mensagem em uma sala já existente!</h1>

            <div class="text-center mt-5 rodape">
                <h2 class="h3 mt-2 text-center">Criar nova sala:</h2>
                <a href="novaSala.php"><button class="btn btn-primary botao-enviar text-center">Criar</button></a>
                <br><br>
                <h3 class="mt-5">Enviar mensagem:</h3>
                <a href="recebeMensagem.php"><button class="btn btn-primary mt-4 botao-enviar">Enviar</button></a>
            </div>

            <div class="text-center mt-5">
                <a href="sair.php"><button class="btn btn-danger botao-sair">Encerrar sessão</button></a> <!-- Destroi a sessão !-->
            </div>
    <?php
        }
    }

    ?>

</body>

</html>