<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Consultation</title>
    </head>
    <body>
    <!-- Header -->
        <?php 

            $_SESSION['focus'] = 'consult';
            require_once("includes/header.php");
        ?>

    <!-- Corps -->
        <main>

            <nav class="nav">
                <button class="btnConsultation" id="btnLivres">Livres</button>
                <button class="btnConsultation" id="btnFournisseurs">Fournisseurs</button>
                <button class="btnConsultation" id="btnCommandes">Commandes</button>
            </nav>

            <div class="tabConsultation" id="tabLivres">
                <?php
                    require_once("traitements/livres_consult.php");
                ?>
            </div>

            <div class="tabConsultation" id="tabFournisseurs">
                <?php
                    require_once("traitements/fournisseurs_consult.php");
                ?>
            </div>

            <div class="tabConsultation" id="tabCommandes">
                <?php
                    require_once("traitements/commandes_consult.php");
                ?>
            </div>
            
        </main>

        <script src="../js/app.js"></script>

    </body>  
</html>