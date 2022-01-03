<?php

// Connexion
    $connexion = mysqli_connect('localhost', 'root', '', 'gestion_librairie');
    mysqli_set_charset($connexion, "UTF8");

// Requète
    $requete = "SELECT Id_fournisseur, Code_fournisseur, Raison_sociale, Code_postal, Localite, Tel_fournisseur FROM fournisseurs ORDER BY Raison_sociale ASC";

// Envoi de la requète
    $envoi = mysqli_query($connexion, $requete);

// Traitement
?>
    <div class="centre">
        <table>
            <tr>
                <th>Code fournisseur</th>
                <th>Raison sociale</th>
                <th>Code Postal</th>
                <th>Pays</th>
                <th>Telephone</th>
                <?php
                if($_SESSION['statut'] == 'administrateur'){
            echo "<th>Modifier</th>";
            echo "<th>Supprimer</th>";
        };
        ?>
            </tr>
<?php
    while($donnees = mysqli_fetch_assoc($envoi))
    {
        printf("<tr>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td><a href='modification_fournisseurs.php?id=".$donnees['Id_fournisseur']."'><img src='../images/modif.png' class='image'></a></td>
                    <td><a href='fournisseurs_sup.php?id=".$donnees['Id_fournisseur']."'><img src='../images/corbeille.png' class='image'></a></td>
                </tr>",
                $donnees['Code_fournisseur'], $donnees['Raison_sociale'], $donnees['Code_postal'], $donnees['Localite'], $donnees['Tel_fournisseur'], );
                
                
    }
?>
        </table>
    </div>
<?php

// Deconnexion
    mysqli_close($connexion);
?>