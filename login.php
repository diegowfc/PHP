<!-- 
    PÁGINA QUE CADASTRA UM USUÁRIO PARA CRIAR UMA SALA OU FAZ O LOGIN DE UM USUÁRIO JÁ EXISTENTE
!-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="text-center mt-5">
        <form action="recebeSala.php">
            <h1>Formulário de cadastro</h1>
            <label for="nome" class="mt-4">Nome:</label>
            <input type="text" name="nome" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required><br><br>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>

    <div class="text-center mt-5">
        <h2>Já possui um usuário?</h2>
        <form action="recebeSala.php">
            <label for="id">Usuarios:</label>
            <select name="id">
                <?php
                extract($_GET); // $nome
                include('conexao.php');

                $comando = "SELECT id, nomeUsuario FROM `usuarios`";

                foreach ($objetoConexao->query($comando) as $linha) {
                ?>
                    <option value="<?= $linha['id']; ?>"><?= $linha['nomeUsuario']; ?></option>
                <?php
                }
                ?>
            </select>
            <br><br><input type="submit" value="Entrar" class="btn btn-primary">
        </form>
    </div>
</body>

</html>