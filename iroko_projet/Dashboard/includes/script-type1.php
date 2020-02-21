<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['titre'], $_POST['sous_titre'], $_POST['icon1'], $_POST['icon2'], $_POST['icon3'], $_POST['icon4'], $_POST['contenu'])) {

    $titre = htmlspecialchars($_POST['titre']);
    $sous_titre = htmlspecialchars($_POST['sous_titre']);
    $icon1 = htmlspecialchars($_POST['icon1']);
    $icon2 = htmlspecialchars($_POST['icon2']);
    $icon3 = htmlspecialchars($_POST['icon3']);
    $icon4 = htmlspecialchars($_POST['icon4']);
    $contenu = htmlspecialchars($_POST['contenu']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO type1(titre, sous_titre, icon1, icon2, icon3, icon4, contenu) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())');

    $ins->execute(array($titre, $sous_titre, $icon1, $icon2, $icon3, $icon4, $contenu,));
    $lastid = $bdd->lastInsertId();

    if (isset($_FILES['photo']) AND !empty($_FILES['photo']['name'])) {
        if (exif_imagetype($_FILES['photo']['tmp_name']) == 2) {
            $chemin = 'miniatures/feature/'.$lastid.'.jpg';
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
        } else {
            $erreur = "Erreur de telechargement de l'image";
        }
    }

    $erreur = " <div class ='bonsoir'>Votre article a bien été posté!!</div>";
}

?>