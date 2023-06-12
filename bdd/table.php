<div style="display: flex; align-items: ;">
    <span>Ajouter une publication : </span><a href="ajout.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
    </a>
</div>

<?php
$requete= "SELECT * FROM publications";
$result = $conn->query($requete);

echo "<br>";

if ($result) {
    $tableau = mysqli_fetch_assoc($result);

    echo "<tr style='background: #D6D6D6;'>";
    echo "<th>Titre</th>";
    echo "<th>Volumes</th>";
    echo "<th>Auteurs</th>";
    echo "<th>Année</th>";
    echo "</tr>";

    while ($tableau = mysqli_fetch_assoc($result)) {
        echo "<tr class='row'>";




        echo "<td>".$tableau['title']."</td>";
        echo "<td>".$tableau['volume']."</td>";
        echo "<td>".$tableau['authors']."</td>";
        echo "<td>".$tableau['publication_date']."</td>";

        echo "</tr>";
    }
}
else {
    echo "Aucun tableau n'a été trouvé pour votre situation";
}


?>