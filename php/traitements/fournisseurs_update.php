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
        $Code_fournisseur = $_POST['Code_fournisseur'];
        $Raison_sociale = $_POST['Raison_sociale'];
        $Rue_fournisseur = $_POST['Rue_fournisseur'];
        $Code_postal = (int)$_POST['Code_postal'];
        $Localite = $_POST['Localite'];
        $Pays = $_POST['Pays'];
        $Tel_fournisseur = $_POST['Tel_fournisseur'];
        $Url_fournisseur = $_POST['Url_fournisseur'];
        $Email_fournisseur = (int)$_POST['Email_fournisseur'];
        $Fax_fournisseur = (float)$_POST['Fax_fournisseur'];


        mysqli_set_charset($connexion, "UTF8");

        $requete = "UPDATE fournisseurs SET Code_fournisseur=\"$Code_fournisseur\", Raison_sociale=\"$Raison_sociale\", Rue_fournisseur=\"$Rue_fournisseur\", Code_postal=$Code_postal, Localite=\"$Localite\", Pays=\"$Pays\", Tel_fournisseur=\"$Tel_fournisseur\", Url_fournisseur=\"$Url_fournisseur\", Email_fournisseur=$Email_fournisseur, Fax_fournisseur=$Fax_fournisseur,  WHERE Id_Livre=\"$id\"";


        mysqli_query($connexion, $requete);
        mysqli_close($connexion);

        echo "<script>
                alert('Modifications effectuées');
                document.location.href='../consultation.php';
            </script>";
    }
    
?>