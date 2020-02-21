<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['titre'], $_POST['sous_titre'], $_POST['nom'], $_POST['poste'], $_POST['contact'], $_POST['email'])) {

    $titre = htmlspecialchars($_POST['titre']);
    $sous_titre = htmlspecialchars($_POST['sous_titre']);
    $nom = htmlspecialchars($_POST['nom']);
    $poste = htmlspecialchars($_POST['poste']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO about_section2(titre, sous_titre, nom, poste, contact, email, date_time_publication) VALUES (?, ?, ?, ?, ?, ?, NOW())');

    $ins->execute(array($titre, $sous_titre, $nom, $poste, $contact, $email));
    $lastid = $bdd->lastInsertId();

    if (isset($_FILES['photo']) and !empty($_FILES['photo']['name'])) {
        if (exif_imagetype($_FILES['photo']['tmp_name']) == 2) {
            $chemin = 'miniatures/about/' . $lastid . '.jpg';
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
        } else {
            $erreur = "Votre image doit être au format jpg";
        }
    }

    $erreur = " <div class ='bonsoir'>Votre article a bien été posté!!</div>";
}

?>