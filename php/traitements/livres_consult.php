<?php

    $connex = mysqli_connect("localhost","root","","gestion_librairie");
    mysqli_set_charset($connex, "UTF8");
    $requete = "SELECT * FROM livres";
    $result = mysqli_query($connex,$requete);

    echo "<div class='centre'><table>";
    echo"<tr>";
        echo"<th>Id_livre</th>";
        echo"<th>ISBN</th>";
        echo"<th>Titre</th>";
        echo"<th>Thème</th>";
        echo"<th>Nombre de page</th>";
        echo"<th>Format</th>";
        echo "<th>Nom auteur</th>";
        echo "<th>Prénom auteur</th>";
        echo "<th>Editeur</th>";
        echo "<th>Année de sortie</th>";
        echo "<th>Prix de vente</th>";
        echo "<th>Langue</th>";
        if($_SESSION['statut'] == 'administrateur'){
            echo "<th>Modifier</th>";
            echo "<th>Supprimer</th>";
        };
        echo "</tr>";
    echo "<tr>";
    while($donnees = mysqli_fetch_assoc($result)){
        echo "<td>".$donnees['Id_Livre']."</td>";
        echo "<td>".$donnees['ISBN']."</td>";
        echo "<td>".$donnees['Titre_livre']."</td>";
        echo "<td>".$donnees['Theme_livre']."</td>";
        echo "<td>".$donnees['Nbr_pages_livre']."</td>";
        echo "<td>".$donnees['Format_livre']."</td>";
        echo "<td>".$donnees['Nom_auteur']."</td>";
        echo "<td>".$donnees['Prenom_auteur']."</td>";
        echo "<td>".$donnees['Editeur']."</td>";
        echo "<td>".$donnees['Annee_edition']."</td>";
        echo "<td>".$donnees['Prix_vente']."</td>";
        echo "<td>".$donnees['Langue_livre']."</td>";
        if($_SESSION['statut'] == 'administrateur'){
            echo "<td> <a href='livres_modif.php?id=".$donnees['Id_Livre']."'><img src='../images/modif.png' class='image'></a></td> ";
            echo "<td> <a href='livres_sup.php?id=".$donnees['Id_Livre']."'><img src='../images/corbeille.png' class='image'></a></td>";
        };
        // echo "<td> <a href='modifier.php?id=".$donnees['Id_livre']."'><img src='modifier-le-fichier.svg' class='image'></a></td> ";
        // echo "<td> <a href='supprimer.php?id=".$donnees['Id_livre']."'><img src='supprimer.svg' class='image'></a></td>";
    echo "</tr>";
}
echo "</table></div>";
mysqli_close($connex);
?>