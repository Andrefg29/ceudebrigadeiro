<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Céu de Brigadeiro</title>
</head>
<body>
    <table border="1">
        <tr>
    <?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        echo("<td>");
        echo($email);
        echo("</td><td>");
        echo($senha);
        echo("</td> </tr>")
        ?>
        </table>
</body>
</html>