<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../aula 16/src/layouEncerra.css">
</head>

<body>
    <?php
    // Inicializa a sessão.
    // Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
    session_start();

    // Apaga todas as variáveis da sessão
    $_SESSION = array();

    // Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
    // Nota: Isto destruirá a sessão, e não apenas os dados!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Por último, destrói a sessão
    session_destroy();
    ?>

    <main class="container-flex">
        <section class="conclui-cadastro cartao-cadastro">
            <span class="conclui-saida-icone"></span>
            <h1 class="">Você se desconectou do chat!</h1>
            <a href="./login.php" class="botao">Sair</a>
        </section>
    </main>
</body>

</html>