<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Authentification</title>
    </head>
    <body>

    <!-- Header -->
        <header id="admin">
            <h1>Index</h1>
            <p>non connecté</p>
        </header>

    <!-- Corps -->
        <main>
            <form method="POST" action="php/traitements/session_co.php">
                <h2>Authentification</h2>
                <div class="formulaire">          
                    <label for="identifiant">Pseudo ou Email</label>
                    <input type="text" name="identifiant" id="identifiant">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp">
                    <div>
                    <input type="submit" value="Connexion">
                    
                    </div>
                </div>   
            </form>
            <form action="php/inscription.php" method="POST">
                    <input type="submit" value="Inscription">
            </form>
        </main>

    </body>  
</html>