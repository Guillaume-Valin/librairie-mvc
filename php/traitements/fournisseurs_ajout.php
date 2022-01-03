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
        $code_fournisseur = $_POST['Code_fournisseur'];
        $Raison_sociale = $_POST['Raison_sociale'];
        $Rue_fournisseur = $_POST['Rue_fournisseur'];
        $Code_postal = $_POST['Code_postal'];
        $Localite = $_POST['Localite'];
        $Pays = $_POST['Pays'];
        $Tel_fournisseur = $_POST['Tel_fournisseur'];
        $Url_fournisseur = $_POST['Url_fournisseur'];
        $Email_fournisseur = $_POST['Email_fournisseur'];
        $Fax_fournisseur = $_POST['Fax_fournisseur'];
        
        mysqli_set_charset($connex, "UTF8");
        $requete = "INSERT INTO livres(Code_fournisseur, Raison_sociale, Rue_fournisseur, Code_postal, Localite, Pays, Tel_fournisseur, Url_fournisseur, Email_fournisseur, Fax_fournisseur) VALUES('$code_fournisseur', '$Raison_sociale', '$Rue_fournisseur', '$Code_postal', '$Localite', '$Pays', '$Tel_fournisseur', '$Url_fournisseur', '$Email_fournisseur', '$Fax_fournisseur')";
        mysqli_query($connex,$requete);
        mysqli_close($connex);
        echo "<script>
                    document.location.href='../consultation.php';
                </script>";

    }
    
?>