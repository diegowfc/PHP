<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleciona Sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./src/loginSelect.css">
</head>

<body>
    <?php
    session_start();
    extract($_POST);
    echo $_SESSION['nome'];
    ?>
    <h2 class="text-center mt-4">Selecione uma sala ou envie uma nova mensagem!</h2>
    <div class="text-center mt-5 principal">

        <form action="mostraSala.php" method="POST">
            <div class="mb-3">
                <label for="id" class="h3">Salas:</label>
                <select name="id" class="form-select mt-3">
                    <?php
                    extract($_GET);
                    include('conexao.php');

                    $comando = "SELECT id, nomeSala FROM `salas`";

                    foreach ($objetoConexao->query($comando) as $linha) {
                    ?>
                        <option value="<?= $linha['id']; ?>"><?= $linha['id']; ?> -
                            <?= $linha['nomeSala']; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success botao-enviar mt-5" value="Entrar">
        </form>
    </div>

    <br><br>
    <div class="text-center mt-5">
        <h3>Envie uma nova mensagem!</h3>
        <br><a href="recebeMensagem.php" class="btn btn-primary">Inserir mensagem</a>
        <br><br><a href="novaSala.php" class="btn btn-primary mt-5">Voltar à criação de salas</a>
    </div>



</body>

</html>