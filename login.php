<?php

session_start();

if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "database.php";

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($user) {

        if (password_verify($password, $user["password"])) {

            $_SESSION["user"] = "yes";

            header("Location: index.php");
            exit();

        } else {

            $error = "Password does not match";

        }

    } else {

        $error = "Email does not match";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Form</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <?php

        if (isset($error)) {
            echo "<div class='alert alert-danger'>$error</div>";
        }

        ?>

        <h1>
            <center><b>Login</b></center>
        </h1>

        <br>

        <form action="login.php" method="post">

            <div class="form-group">

                <input type="email"
                    placeholder="Enter Email:"
                    name="email"
                    class="form-control">

            </div>

            <div class="form-group">

                <input type="password"
                    placeholder="Enter Password:"
                    name="password"
                    class="form-control">

            </div>

            <center>

                <div class="form-btn">

                    <input type="submit"
                        value="Login"
                        name="login"
                        class="btn btn-primary">

                </div>

            </center>

        </form>

        <center>

            <div>

                <p>
                    Not Registered
                    <a href="registration.php">Register Here</a>
                </p>

            </div>

        </center>

    </div>

</body>

</html>