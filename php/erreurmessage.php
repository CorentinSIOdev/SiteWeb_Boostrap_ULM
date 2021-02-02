<?php
$errorMSG = "";

if (empty($_POST["nom"])) {
    $errorMSG = "Le nom est requis.";
} else {
    $nom = $_POST["prenom"];
    $errorMSG = "Le prénom est requis.";
}

if (empty($_POST["telephone"])) {
    $errorMSG = "Le numéro de téléphone est requis.";
} else {
    $telephone = $_POST["telephone"];
}

if (empty($_POST["mail"])) {
    $errorMSG = "Votre Email est obligatoire.";
} else {
    $mail = $_POST["mail"];
}

if (empty($_POST["motif"])) {
    $errorMSG = "Un motif de contact est requis.";
} else {
    $motif = $_POST["motif"];
}

if (empty($_POST["motif2"])) {
    $errorMSG = "Un type d'ULM est requis.";
} else {
    $motif2 = $_POST["motif2"];
}
?>