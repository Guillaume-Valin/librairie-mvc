<?php
    session_start();

    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];

    $connex = mysqli_connect("localhost","root","","gestion_librairie");

    if($connex)
    {
        $requete = "SELECT Nom, Prenom, Pseudo, Statut FROM membres WHERE Pseudo='$identifiant' OR Mail='$identifiant' AND Mdp='$mdp'";
        $result = mysqli_query($connex, $requete);
        $donnees = mysqli_fetch_assoc($result);

        if(isset($donnees['Nom']))
        {
            $_SESSION['nom'] = $donnees['Nom'];
            $_SESSION['prenom'] = $donnees['Prenom'];
            $_SESSION['pseudo'] = $donnees['Pseudo'];
            $_SESSION['statut'] = $donnees['Statut'];

            mysqli_close($connex);
            echo "<script>
                    alert('Connexion réussie');
                    document.location.href='../consultation.php';
                </script>";
        }
        else
        {
            mysqli_close($connex);
            echo "<script>
                    alert('Identifiants incorrects');
                    document.location.href='../../index.php';
                </script>";
        }
    }
    else
    {
        echo "<script>
                    alert('Connexion impossible');
                    document.location.href='../../index.php';
                </script>";
    }
    
?>