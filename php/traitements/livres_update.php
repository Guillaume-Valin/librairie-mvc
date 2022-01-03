<?php

    $connexion = mysqli_connect("localhost", "root", "", "gestion_librairie");

    if(!$connexion)
    {
        echo "<script>
                alert('Connexion à la base de données impossible');
                document.location.href='../../index.php';
            </script>";
    }
    else
    {
        $id = $_POST['id'];
        $isbn = $_POST['isbn'];
        $titre = $_POST['titre'];
        $theme = $_POST['theme'];
        $pages = (int)$_POST['pages'];
        $format = $_POST['format'];
        $nom_auteur = $_POST['nom_auteur'];
        $prenom_auteur = $_POST['prenom_auteur'];
        $editeur = $_POST['editeur'];
        $annee_edition = (int)$_POST['annee_edition'];
        $prix = (float)$_POST['prix'];
        $langue = $_POST['langue'];


        mysqli_set_charset($connexion, "UTF8");

        $requete = "UPDATE livres SET ISBN=\"$isbn\", Titre_livre=\"$titre\", Theme_livre=\"$theme\", Nbr_pages_livre=$pages, Format_livre=\"$format\", Nom_auteur=\"$nom_auteur\", Prenom_auteur=\"$prenom_auteur\", Editeur=\"$editeur\", Annee_edition=$annee_edition, Prix_vente=$prix, Langue_livre=\"$langue\" WHERE Id_Livre=\"$id\"";


        mysqli_query($connexion, $requete);
        mysqli_close($connexion);

        echo "<script>
                alert('Modifications effectuées');
                document.location.href='../consultation.php';
            </script>";
    }
    
?>