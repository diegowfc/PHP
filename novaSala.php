<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Sala</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>
    <?php
    session_start();
    echo $_SESSION['nome'];
    ?>
    
    <div class="text-center mt-5 principal">
        <form action="criaSala.php" method="POST">
            <h1 class="h4 text-center">Crie uma nova sala!</h1>
            <h2 class="h3 mt-5 text-center">Criar sala:</h2>
            <div class="mb-3">
                <label for="nomeSala" class="mt-4 form-label">Nome:</label>
                <input type="text" name="nomeSala" class="form-control" required><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar">
        </form>
    </div>
</body>

</html>