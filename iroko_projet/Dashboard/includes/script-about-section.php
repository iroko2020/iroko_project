<meta charset="utf-8">
<?php

require 'config.php';



if (isset($_POST['titre1'], $_POST['cont1'], $_POST['cont1_1'], $_POST['titre2'], $_POST['cont2'], $_POST['cont2_1'], $_POST['cont2_2'], $_POST['cont2_3'], $_POST['cont2_4'])) {

    $titre1 = htmlspecialchars($_POST['titre1']);
    $cont1 = htmlspecialchars($_POST['cont1']);
    $cont1_1 = htmlspecialchars($_POST['cont1_1']);
    $titre2 = htmlspecialchars($_POST['titre2']);
    $cont2 = htmlspecialchars($_POST['cont2']);
    $cont2_1 = htmlspecialchars($_POST['cont2_1']);
    $cont2_2 = htmlspecialchars($_POST['cont2_2']);
    $cont2_3 = htmlspecialchars($_POST['cont2_3']);
    $cont2_4 = htmlspecialchars($_POST['cont2_4']);

    //var_dump($_FILES);
    //var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
    echo ini_get('upload_max_filesize');
    $ins = $bdd->prepare('INSERT INTO about_section1(titre1, cont1, cont1_1, titre2, cont2, cont2_1, cont2_2, cont2_3, cont2_4, date_time_publication) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');

    $ins->execute(array($titre1, $cont1, $cont1_1, $titre2, $cont2, $cont2_1, $cont2_2, $cont2_3, $cont2_4));
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

