<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['adresse'], $_POST['email'], $_POST['contact'])) {

    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO contact_section1(adresse, email, contact, date_time_publication) VALUES (?, ?, ?, NOW())');

    $ins->execute(array($adresse, $email, $contact,));
    $lastid = $bdd->lastInsertId();

    if (isset($_FILES['photo']) and !empty($_FILES['photo']['name'])) {
        if (exif_imagetype($_FILES['photo']['tmp_name']) == 2) {
            $chemin = 'miniatures/contact/' . $lastid . '.jpg';
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
        } else {
            $erreur = "Votre image doit être au format jpg";
        }
    }

    $erreur = " <div class ='bonsoir'>Votre article a bien été posté!!</div>";
}

?>