<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Check</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="imagens/TIME_Check_white-removebg-preview.png" id="imglogo" height="360px" alt="">
    </header>
    <main>
        <?php 
            $email = $_GET["email"];
            $senha = $_GET["senha"];
            echo "<p>Requisitado acesso à conta <br> email: $email, senha: $senha </p>";
			echo "iai cariao"
        ?>

    </main>
</body>

</html>