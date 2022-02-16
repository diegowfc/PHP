<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe mensagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>

    <?php
    session_start();
    echo $_SESSION['nome'];
    ?>

    <div class="mt-2 principal">
        <form action="adicionaMensagem.php" method="POST">
            <h1>Escreva uma mensagem!</h1>
            <div class="mb-3">
                <label for="mensagem" class="mt-4 form-label">Mensagem:</label>
                <input type="text" class="form-control" name="mensagem" required>
            </div>
            <div class="mb-3">
                <label for="idSala" class="mt-2">Salas:</label>
                <select name="idSala" class="form-select select">
                    <?php
                    include('conexao.php');
                    $comando = "SELECT id, nomeSala FROM `salas`";

                    foreach ($objetoConexao->query($comando) as $linha) {
                    ?>
                        <option value="<?= $linha['id']; ?>"><?= $linha['nomeSala']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" class="btn btn-primary botao-enviar" value="Enviar">
        </form>
    </div>
</body>

</html>