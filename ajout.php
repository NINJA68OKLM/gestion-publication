<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">

    <title>Espace client</title>
</head>
<style>
    table, tr, td, th {
        border: 1px solid #000000;
    }
    table {
        max-width: 757px;
    }
</style>
<body>
<?php include("assets/header_client.php"); ?>
    <main>
    <?php include("bdd/connection.php"); ?>
    <div class="part1">
                <h1>Ajoutez une publication</h1>

	id 	title 	authors 	publication_date 	type_id 	journal 	volume 	number 	pages 	editor 	conference 	book

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="title" id="title" placeholder="Titre du livre" value="<?php if (!empty($_POST['title'])) {
                        echo $_POST['title'];
                    } ?>"> <br>
                    <input type="text" name="authors" id="authors" placeholder="Auteurs" value="<?php if (!empty($_POST['authors'])) {
                        echo $_POST['authors'];
                    } ?>"> <br>
                    Date : <input type="date" name="publication_date" id="publication_date" placeholder="Date de publication" value="<?php if (!empty($_POST['publication_date'])) {
                        echo $_POST['publication_date'];
                    } ?>"> <br>
                    <input type="text" name="volume" id="volume" placeholder="Volumes" value="<?php if (!empty($_POST['volume'])) {
                        echo $_POST['volume'];
                    } ?>"> <br>
                    <input type="text" name="pages" id="pages" placeholder="Pages" value="<?php if (!empty($_POST['pages'])) {
                        echo $_POST['pages'];
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
                        include("bdd/connection_bdd.php");
                    }
                }
                ?>
            </div>
            <div class="part2">
                <img src="assets/img/gettyimages-157433312-612x612.jpg" alt="glouglou">
            </div>
    </main>
</body>
</html>