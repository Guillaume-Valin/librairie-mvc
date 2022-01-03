<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inscription</title>
</head>
<body>
<header id="admin">
            <h1>Gestion Librairie</h1>
            <p>non connecté</p>
        </header>
        <main>
            <form method="POST" action="traitements/nouveau_membre.php">
                <h2>Inscription</h2>
                <div class="formulaire">          
                    <label for="nom">Nom</label>
                    <input type="text" name="Nom" id="Nom">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="Prenom" id="Prenom">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="Pseudo" id="Pseudo">
                    <label for="mail">Mail</label>
                    <input type="mail" name="Mail" id="Mail">
                    <label for="mdp2">Mot de passe</label>
                    <input type="password" name="mdp2" id="mdp2">
                    <input type="submit" value="Valider">
                </div>   
            </form>
        </main>
</body>
</html>