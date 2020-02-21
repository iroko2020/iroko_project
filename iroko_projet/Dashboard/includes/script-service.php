<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['titre'], $_POST['sous_titre'], $_POST['icon1_titre'], $_POST['icon1_contenu'], $_POST['icon2_titre'], $_POST['icon2_contenu'], $_POST['icon3_titre'], $_POST['icon3_contenu'])) {

    $titre = htmlspecialchars($_POST['titre']);
    $sous_titre = htmlspecialchars($_POST['sous_titre']);
    $icon1_titre = htmlspecialchars($_POST['icon1_titre']);
    $icon1_contenu = htmlspecialchars($_POST['icon1_contenu']);
    $icon2_titre = htmlspecialchars($_POST['icon2_titre']);
    $icon2_contenu = htmlspecialchars($_POST['icon2_contenu']);
    $icon3_titre = htmlspecialchars($_POST['icon3_titre']);
    $icon3_contenu = htmlspecialchars($_POST['icon3_contenu']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO services(titre, sous_titre, icon1_titre, icon1_contenu, icon2_titre, icon2_contenu, icon3_titre, icon3_contenu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');

    $ins->execute(array($titre, $sous_titre, $icon1_titre, $icon1_contenu, $icon2_titre, $icon2_contenu, $icon3_titre, $icon3_contenu));
    $lastid = $bdd->lastInsertId();

    if (isset($_FILES['photo']) and !empty($_FILES['photo']['name'])) {
        if (exif_imagetype($_FILES['photo']['tmp_name']) == 2) {
            $chemin = 'miniatures/service/' . $lastid . '.jpg';
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
        } else {
            $erreur = "Votre image doit être au format jpg";
        }
    }

    $erreur = " <div class ='bonsoir'>Votre article a bien été posté!!</div>";
}

?>