<?php
$requete= "SELECT * FROM users WHERE username='".$_SESSION['nom']."' AND password='".$_SESSION['password']."'";
$result = $conn->query($requete);

// On vérifie que le résultat retourne au moins une ligne sinon il ne trouve aucun utilisateurs
if ($result->num_rows >= 1) {
    $identifiants = $result -> fetch_array(MYSQLI_ASSOC);
    // Redirection vers l'espace client
    header("Location: consult.php");
}
else {
    echo "Vous n'avez pas les bons identifiants !";
}
?>