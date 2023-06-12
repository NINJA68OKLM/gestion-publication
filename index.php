<?php
session_start();
session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Connexion</title>
</head>

<body>
    <?php include("assets/header.php"); ?>
    <section>
        <main>
            <div class="part1">
                <h1>Connectez vous</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php if (!empty($_POST['name'])) {
                    echo $_POST['name'];
                    } ?>"> <br>
                    <input type="password" name="password" id="password" placeholder="Votre mot de passe" value="<?php if (!empty($_POST['password'])) {
                    echo $_POST['password'];
                    } ?>"> <br>
                    <input type="submit" name="ok" id="submit">
                </form>

                <?php
                if (isset($_POST['ok'])) {
                    $ok = $_POST['ok'];
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    if (empty($name) | empty($firstname) | empty($password)) {
                        echo "Remplissez tous les champs du formulaire !";
                    }
                    if (!empty($name) && !empty($password)) {
                        setcookie("nom", $name, time() + 3600);
                        $_SESSION['nom'] = $name;
                        $_SESSION['password'] = $password;
                        include("bdd/connection.php");
                        include("bdd/connection_bdd.php");
                    }
                }
                ?>
            </div>
            <div class="part2">
                <img src="assets/img/istockphoto-519476132-612x612.jpg" alt="glouglou">
            </div>
        </main>
    </section>
</body>

</html>