<?php
$connex = mysqli_connect("localhost","root","","gestion_librairie");
mysqli_set_charset($connex, "UTF8");
$requete = "SELECT * FROM commandes";
$result = mysqli_query($connex,$requete);

echo "<div class='centre'><table>";
    echo"<tr>";
        echo"<th>Id commande</th>";
        echo"<th>Id Livre</th>";
        echo"<th>id fournisseur</th>";
        echo"<th>Date d'achat</th>";
        echo"<th>Prix d'achat</th>";
        echo"<th>Quantité</th>";
        if($_SESSION['statut'] == 'administrateur'){
            echo "<th>Modifier</th>";
            echo "<th>Supprimer</th>";
        };
        echo "</tr>";
    echo "<tr>";
    while($donnees = mysqli_fetch_assoc($result)){
        echo "<td>".$donnees['Id_commande']."</td>";
        echo "<td>".$donnees['Id_Livre']."</td>";
        echo "<td>".$donnees['Id_fournisseur']."</td>";
        echo "<td>".$donnees['Date_achat']."</td>";
        echo "<td>".$donnees['Prix_achat']."</td>";
        echo "<td>".$donnees['Nbr_exemplaires']."</td>";
        if($_SESSION['statut'] == 'administrateur'){
            echo "<td> <a href='commandes_modif.php?id=".$donnees['Id_commande']."'><img src='../images/modif.png' class='image'></a></td> ";
            echo "<td> <a href='commandes_sup.php?id=".$donnees['Id_commande']."'><img src='../images/corbeille.png' class='image'></a></td>";
        };
    echo "</tr>";
}
echo "</table></div>";
?>