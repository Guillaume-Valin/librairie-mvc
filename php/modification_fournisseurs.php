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
            $requete = "SELECT * FROM fournisseurs WHERE Id_fournisseur='$id'";
            $result = mysqli_query($connexion, $requete);
            $donnee = mysqli_fetch_assoc($result);
        ?>
                <!-- -------------------------------------Formulaire fournisseur---------------------------------- -->

                <div class="formConsultation" id="formFournisseurs">
            <form method="POST" action="traitements/fournisseurs_ajout.php">

            <div class="formulaire">
                <label for="Code_fournisseur">Code fournisseur</label>
                <input type="text" id="Code_fournisseur" name="Code_fournisseur" required>

                <label for="Raison_sociale">Raison sociale</label>
                <input type="text" id="raison_sociale" name="raison_sociale" required>

                <label for="Rue_fournisseur">Rue fournisseur</label>
                <input type="text" id="Rue_fournisseur" name="Rue_fournisseur" required>

                <label for="Code_postal">Code postal</label>
                <input type="number" id="Code_postal" name="Code_postal" required>

                <label for="Localite">Ville</label>
                <input type="text" id="Localite" name="Localite" required>

                <label for="Pays">Pays</label>
                <input type="text" id="Pays" name="Pays" required>

                <label for="Tel_fournisseur">Tel fournisseur</label>
                <input type="text" id="Tel_fournisseur" name="Tel_fournisseur" required>

                <label for="Url_fournisseur">Url fournisseur</label>
                <input type="text" id="Url_fournisseur" name="Url_fournisseur" required>

                <label for="Email_fournisseur">Email fournisseur</label>
                <input type="mail" id="Email_fournisseur" name="Email_fournisseur" required>

                <label for="Fax_fournisseur">Fax fournisseur</label>
                <input type="number" id="Fax_fournisseur" name="Fax_fournisseur" required>

                <input type="submit" value="Enregistrer">
            </div>
                
            </form>
        </div>