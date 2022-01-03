<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<header id="admin">
    <div>
        <h1>Gestion librairie</h1>
    </div>
    <div>
        <p><?= "Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']?></p>
    </div>
    <div>
        <a href="consultation.php">Consultation</a>
        <?php
        if($_SESSION['statut'] == 'administrateur')
        {
            echo "<a href='administration.php'>Ajouter</a>";
        }
        ?>
        <a href="traitements/session_deco.php">Déconnexion</a>
    </div>
    <script src="../../js/focus.js"></script>
</header>