<?php
session_start();

// vérification que la globale contient une chaine && protection contre les attaques CSRF
if (!empty($_POST['nom']) && $_POST['token'] == $_SESSION['token']) { 

// éviter les injections XSS en ajax
    $name = htmlentities($_POST['nom']);

// liste de caractères non alphanumériques présents dans un nom de fichier vidéo : 
// par exemple toto_1.mp4, new-film.avi etc

    $whitelist = array('.','_','-');

// filtrage (temporaire) de $name : supprimer tous les caractères non alphanumériques
    $name_clear = str_replace($whitelist,'',$name);

// test que $name_clear ne contient que des chiffres et des lettres
    if(ctype_alnum($name_clear)){

// Le temps maximal d'exécution, s'il vaut 0, aucune limite n'est imposée
        set_time_limit(0);

        $filename = '/absolute/path/to/the/file/'.$name;
        $size = filesize($filename);

// désactive la mise en cache du navigateur
        header("Cache-Control: no-cache, must-revalidate");
        header("Cache-Control: post-check=0,pre-check=0");
        header("Cache-Control: max-age=0");
        header("Pragma: no-cache");
        header("Expires: 0");

// définit le type de contenu à transférer, ici de la vidéo
        header("Content-Type: video/mp4");
        header("Content-Transfer-Encoding: binary");

// force le téléchargement du fichier avec le nom du fichier
        header("Content-Type: application/force-download");
        header('Content-Disposition: attachment; filename="'.$name.'"');

// indique la taille du fichier à télécharger
        header("Content-Length: ".$size);
// envoi le contenu du fichier
        readfile($filename); 
    }else{
        echo 'la fichier contient des caractères non conformes !';
        die();
    }
} else {
    echo 'token non conforme';
    die();
}
?>