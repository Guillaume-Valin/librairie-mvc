<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Administration</title>
    </head>
    <body>
    <!-- Header -->
        <?php 
            require_once("includes/header.php");
        ?>

    <!-- Corps -->
    

        <!-- Insertion informations livre à modifié -->
        <?php 
            $id = $_GET['id'];
            $connexion = mysqli_connect("localhost", "root", "", "gestion_librairie");
            mysqli_set_charset($connexion, "UTF8");
            $requete = "SELECT * FROM livres WHERE Id_Livre='$id'";
            $result = mysqli_query($connexion, $requete);
            $donnee = mysqli_fetch_assoc($result);
        ?>

        <!-- Formulaire modification livre -->


            <form method="POST" action="traitements/livres_update.php">

            <div class="formulaire">

                <input type="text" name="id" value="<?= $id ?>"> 

                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= $donnee['ISBN'] ?>" required>

                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" value="<?= $donnee['Titre_livre'] ?>" required>

                <label for="theme">Theme</label>
                <input type="text" id="theme" name="theme" value="<?= $donnee['Theme_livre'] ?>" required>

                <label for="pages">Nombre de pages</label>
                <input type="number" id="pages" name="pages" value="<?= $donnee['Nbr_pages_livre'] ?>" required>

                <label for="format">Format</label>
                <input type="text" id="format" name="format" value="<?= $donnee['Format_livre'] ?>" required>

                <label for="nom_auteur">Nom de l'auteur</label>
                <input type="text" id="nom_auteur" name="nom_auteur" value="<?= $donnee['Nom_auteur'] ?>" required>

                <label for="prenom_auteur">Prenom de l'auteur</label>
                <input type="text" id="prenom_auteur" name="prenom_auteur" value="<?= $donnee['Prenom_auteur'] ?>" required>

                <label for="editeur">Editeur</label>
                <input type="text" id="editeur" name="editeur" value="<?= $donnee['Editeur'] ?>" required>

                <label for="annee_edition">Année d'édition</label>
                <input type="text" id="annee_edition" name="annee_edition" value="<?= $donnee['Annee_edition'] ?>" required>

                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" value="<?= $donnee['Prix_vente'] ?>" required>

                <label for="langue">Langue</label>
                <input type="text" id="langue" name="langue" value="<?= $donnee['Langue_livre'] ?>" required>

                

                <input type="submit" value="Enregistrer">
            </div>

            <?php mysqli_close($connexion); ?>
                
            </form>
            
        </main>
        <script src="../js/app.js"></script>
    </body>  
</html>