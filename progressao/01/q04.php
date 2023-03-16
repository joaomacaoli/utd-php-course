<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="#" method="POST">
        <div>
            <div>Login</div>
            <div>
                <div>
                    <label">Login</label>
                        <input type="email" name="login" required>
                </div>
                <div>
                    <label">Senha</label>
                        <input type="password" name="password" required>
                </div>
                <div>
                    <button type="submit" name="btnLogin">Login</button>
                </div>
            </div>
            <a href="http://localhost/progressao/01/">Voltar</a>

        </div>

        <?php

        if (isset($_POST["btnClean"])) {
            echo "";
        }
        if (isset($_POST["btnLogin"])) {
            $login = $_POST["login"];
            $password = $_POST["password"];
            if ($login == 'joao@email.com' && $password == '1234') {
                echo "Login and pass correct";
            } else {
                echo "pass or login wrong";
            }
        }
        ?>
    </form>
</body>

</html>