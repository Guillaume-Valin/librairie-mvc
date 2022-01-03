<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Ajouter</title>
    </head>
    <body>
    <!-- Header -->
        <?php 
            require_once("includes/header.php");
        ?>

    <!-- Corps -->
    
        <main>
            <nav class="nav">
                <button class="btnConsultation" id="btnLivres">Livres</button>
                <button class="btnConsultation" id="btnFournisseurs">Fournisseurs</button>
                <button class="btnConsultation" id="btnCommandes">Commandes</button>
            </nav>

        <!-- Formulaire nouveau livre -->
        <div class="formConsultation" id="formLivres">
            <form method="POST" action="traitements/livres_ajout.php">

            <div class="formulaire">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" required>

                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" required>

                <label for="theme">Theme</label>
                <input type="text" id="theme" name="theme" required>

                <label for="pages">Nombre de pages</label>
                <input type="number" id="pages" name="pages" required>

                <label for="format">Format</label>
                <input type="text" id="format" name="format" required>

                <label for="nom_auteur">Nom de l'auteur</label>
                <input type="text" id="nom_auteur" name="nom_auteur" required>

                <label for="prenom_auteur">Prenom de l'auteur</label>
                <input type="text" id="prenom_auteur" name="prenom_auteur" required>

                <label for="editeur">Editeur</label>
                <input type="text" id="editeur" name="editeur" required>

                <label for="annee_edition">Année d'édition</label>
                <input type="text" id="annee_edition" name="annee_edition" required>

                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" required>

                <label for="langue">Langue</label>
                <input type="text" id="langue" name="langue" required>

                <input type="submit" value="Enregistrer">
            </div>
                
            </form>
        </div>

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
            
        </main>
        <script src="../js/ajout.js"></script>
    </body>  
</html>