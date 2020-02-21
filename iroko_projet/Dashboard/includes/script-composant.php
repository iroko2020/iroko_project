<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['titre'], $_POST['sous_titre'], $_POST['contenu'])) {

    $titre = htmlspecialchars($_POST['titre']);
    $sous_titre = htmlspecialchars($_POST['sous_titre']);
    $icon3_contenu = htmlspecialchars($_POST['contenu']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO composant(titre, sous_titre, contenu) VALUES (?, ?, ?, NOW())');

    $ins->execute(array($titre, $sous_titre, $contenu,));
    $lastid = $bdd->lastInsertId();

    if (isset($_FILES['photo']) and !empty($_FILES['photo']['name'])) {
        if (exif_imagetype($_FILES['photo']['tmp_name']) == 2) {
            $chemin = 'miniatures/composant/' . $lastid . '.jpg';
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
        } else {
            $erreur = "Votre image doit être au format jpg";
        }
    }

}

?>