<?php session_start(); ?>

<?php

    $connex = mysqli_connect("localhost","root","","gestion_librairie");
    mysqli_set_charset($connex, "UTF8");

    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Pseudo = $_POST['Pseudo'];
    $Mail = $_POST['Mail'];
    $Mdp = $_POST['mdp2'];

    $requete = "INSERT INTO membres(Nom,Prenom,Pseudo,Mail,Mdp) VALUES ('$Nom','$Prenom','$Pseudo','$Mail','$Mdp')";
    mysqli_query($connex,$requete);

    mysqli_close($connex);
    
    echo "<script>
            document.location.href='../../index.php';
        </script>";

?>