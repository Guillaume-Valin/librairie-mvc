<?php
    $connex = mysqli_connect("localhost","root","","gestion_librairie");

    if(!$connex)
    {
        echo "<script>
                    alert('Connexion à la base de données impossible');
                    document.location.href='../../index.php';
                </script>";
    }
    else
    {
        $isbn = $_POST['isbn'];
        $titre = $_POST['titre'];
        $theme = $_POST['theme'];
        $pages = $_POST['pages'];
        $format = $_POST['format'];
        $nom_auteur = $_POST['nom_auteur'];
        $prenom_auteur = $_POST['prenom_auteur'];
        $editeur = $_POST['editeur'];
        $annee_edition = $_POST['annee_edition'];
        $prix = $_POST['prix'];
        $langue = $_POST['langue'];
        
        mysqli_set_charset($connex, "UTF8");
        $requete = "INSERT INTO livres(ISBN, Titre_livre, Theme_livre, Nbr_pages_livre, Format_livre, Nom_auteur, Prenom_auteur, Editeur, Annee_edition, Prix_vente, Langue_livre) VALUES('$isbn', '$titre', '$theme', '$pages', '$format', '$nom_auteur', '$prenom_auteur', '$editeur', '$annee_edition', '$prix', '$langue')";
        mysqli_query($connex,$requete);
        mysqli_close($connex);
        echo "<script>
                    document.location.href='../consultation.php';
                </script>";

    }
    
?>