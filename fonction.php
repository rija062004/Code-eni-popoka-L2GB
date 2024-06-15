<?php

function insertDataNaissance($username, $nomnaissance, $prenomnaissance, $datenaissance, $lieunaissance, $nombre, $prix)
{
    include_once "connexion1.php";

    $codenaissance = $nomnaissance.''.$datenaissance;

    echo $codenaissance;

    $requete = $connexion->prepare("INSERT INTO naissance(codenaissance, username, nomnaissance, prenomnaissance, datenaissance, lieunaissance, nombre, prix)  VALUES (:codenaissance, :username, :nomnaissance, :prenomnaissance, :datenaissance, :lieunaissance, :nombre, :prix)");
    $requete->bindParam(":codenaissance",$codenaissance);
    $requete->bindParam(":username",$username);
    $requete->bindParam(":nomnaissance",$nomnaissance);
    $requete->bindParam(":prenomnaissance",$prenomnaissance);
    $requete->bindParam(":datenaissance",$datenaissance);
    $requete->bindParam(":lieunaissance",$lieunaissance);
    $requete->bindParam(":nombre",$nombre);
    $requete->bindParam(":prix",$prix);
    $resulat = $requete->execute();
    if($resulat){
        ?>
        <script>
            alert("Demande d'Acte de naissance acceptée !")
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert("Demande d'Acte de naissance refusée !")
        </script>

        <?php
    }
}

function insertDataMariage($nomdemandeur, $username, $adressedemandeur, $cindemandeur, $nomepoux, $datemariage, $lieumariage, $prixmariage)
{
    include_once "connexion1.php";

    $requete = $connexion->prepare("INSERT INTO mariage(cinmariage, username, nomdemandeur, adressedemandeur, nomepoux, datemariage, lieumariage, prixmariage)  VALUES (:cinmariage, :username, :nomdemandeur, :adressedemandeur, :nomepoux, :datemariage, :lieumariage, :prixmariage)");
    $requete->bindParam(":cinmariage",$cindemandeur);
    $requete->bindParam(":username",$username);
    $requete->bindParam(":nomdemandeur",$nomdemandeur);
    $requete->bindParam(":adressedemandeur",$adressedemandeur);
    $requete->bindParam(":nomepoux",$nomepoux);
    $requete->bindParam(":datemariage",$datemariage);
    $requete->bindParam(":lieumariage",$lieumariage);
    $requete->bindParam(":prixmariage",$prixmariage);
    $resulat = $requete->execute();
    if($resulat){
        ?>
        <script>
            alert("Demande d'Acte de mariage acceptée !")
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert("Demande d'Acte de mariage refusée !")
        </script>

        <?php
    }
}

function insertDataConstruire($cinconstruire, $username, $adresseprojet, $description, $prixconstruire)
{
    include_once "connexion1.php";
    $date = new DateTime();
    $datedemande = $date->format('y-m-d')."";
    $date->modify('+2 days');
    $datedelivrance = $date->format('y-m-d')."";
    $requete = $connexion->prepare("INSERT INTO permisdeconstruire(cinconstruire, username, adresseprojet, description, datedemande, datedelivrance, prixconstruire)  VALUES (:cinconstruire, :username, :adresseprojet, :description, :datedemande, :datedelivrance, :prixconstruire)");
    $requete->bindParam(":cinconstruire",$cinconstruire);
    $requete->bindParam(":username",$username);
    $requete->bindParam(":adresseprojet",$adresseprojet);
    $requete->bindParam(":description",$description);
    $requete->bindParam(":datedelivrance",$datedelivrance);
    $requete->bindParam(":datedemande",$datedemande);
    $requete->bindParam(":prixconstruire",$prixconstruire);
    $resulat = $requete->execute();
    if($resulat){
        ?>
        <script>
            alert("Demande de permis de construction acceptée !")
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert("Demande de permis de construction refusée !")
        </script>

        <?php
    }
}

function insertDataConduire($cinconduire, $username, $niveau, $dateexemen, $lieuexamen, $nomautoecole, $adresse, $prixconduire)
{
    include_once "connexion1.php";
    
    $requete = $connexion->prepare("INSERT INTO permisdeconduire(cinconduire, username, niveau, dateexemen, lieuexamen, nomautoecole, adresse , prixconduire)  VALUES (:cinconduire, :username, :niveau, :dateexemen, :lieuexamen, :nomautoecole, :adresse , :prixconduire)");
    $requete->bindParam(":cinconduire", $cinconduire);
    $requete->bindParam(":username", $username);
    $requete->bindParam(":niveau", $niveau);
    $requete->bindParam(":dateexemen", $dateexemen);
    $requete->bindParam(":lieuexamen", $lieuexamen);
    $requete->bindParam(":nomautoecole", $nomautoecole);
    $requete->bindParam(":adresse", $adresse);
    $requete->bindParam(":prixconduire", $prixconduire);
    $resulat = $requete->execute();
    if($resulat){
        ?>
        <script>
            alert("Demande de permis de conduire acceptée !");
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert("Demande de permis de conduire refusée !");
        </script>

        <?php
    }
}
?>