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
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./src/loginSelect.css">
</head>

<body>
    <div class="text-center mt-5 principal">
        <form action="cadastroConfirmado.php" method="POST">
            <h1>Formulário de cadastro</h1>
            <div class="mb-3">
                <label for="nome" class="mt-4 form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" required><br>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" required><br>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>

    <div class="text-center mt-5">
        <h2>Já possui um usuário?</h2>
        <br><a href="./confereLogin.php"><input type="submit" value="Entrar" class="btn btn-primary"></a>
        </form>
    </div>
</body>

</html>