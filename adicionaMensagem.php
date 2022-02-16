<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona mensagem</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/layoutConclusao.css">
</head>

<body>

    <?php
    session_start();
    include('conexao.php');
    echo $_SESSION['nome'];
    extract($_POST);

    $comando = "INSERT INTO `mensagens` (`id`, `id_sala`, `nomeUsuario`, `mensagens`) VALUES (NULL, '$idSala', '{$_SESSION['nome']}', '$mensagem')";

    if (!$objetoConexao->query($comando)) {
        echo "Erro!";
    }
    ?>

    <main class="container-flex">
        <section class="conclui-cadastro cartao-cadastro">
            <span class="conclui-cadastro-icone"></span>
            <h1 class="conclui-cadastro-titulo cartao-titulo">Mensagem cadastrada com sucesso!</h1>
            <a href="./selecionaSala.php" name="nome" class="botao">Ir para salas</a>
        </section>
    </main>
</body>

</html>