<?php
session_start();

require 'config.php';

include_once('cookie_connect.php');

      if (isset($_SESSION['id'])) {
            # code...
      $requser=$basededonnée->prepare("SELECT * FROM membres WHERE id=?");
      
      $requser->execute(array($_SESSION['id']));
      
      $user=$requser->fetch();

      if (isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] !=$user['pseudo']) {
            
            $newpseudo=htmlspecialchars($_POST['newpseudo']);
            
            $insertpseudo=$basededonnée->prepare("UPDATE membres SET pseudo=? WHERE id=?");
            
            $insertpseudo->execute(array($newpseudo,$_SESSION['id']));
            
            header('Location:profil.php?id='.$_SESSION['id']);
      }

      if (isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] !=$user['mail']) {
            
            $newmail=htmlspecialchars($_POST['newmail']);
            
            $insertmail=$basededonnée->prepare("UPDATE membres SET mail=? WHERE id=?");
            
            $insertmail->execute(array($newmail,$_SESSION['id']));
            
            header('Location:profil.php?id='.$_SESSION['id']);
      }

      if (isset($_POST['newpass']) AND !empty($_POST['newpass'])  AND !empty($_POST['newpass2'])) {
            $pass=sha1($_POST['newpass']);

            $pass2=sha1($_POST['newpass2']);

            if ($pass == $pass2) {
                  $insertpass=$basededonnée->prepare("UPDATE membres SET motdepasse=? WHERE id=?");

                  $insertpass->execute(array($pass,$_SESSION['id']));

                  header('Location:profil.php?id='.$_SESSION['id']);
            }
            else{
                  $erreur="vos deux mot de passe ne correspondent pas!";
            }
            }

            if (isset($_FILES['avatar'])AND !empty($_FILES['avatar']['name'])) {
                  $tailleMax = 2097152;
                  $extensionValide = array('jpg','jpeg','png','gif');
                  if ($_FILES['avatar']['size'] <= $tailleMax) {
                        $extensionUpload= strtolower(substr(strrchr($_FILES['avatar']['name'] , '.'), 1));
                        if (in_array($extensionUpload, $extensionValide)) {

                              $chemin="membres/avatar/".$_SESSION['id'].".".$extensionUpload;
                              $resultat=move_uploaded_file($_FILES['avatar']['tmp_name'] , $chemin);
                              if ($resultat) {

                                    $updateavatar=$basededonnée->prepare('UPDATE membres SET avatar =:avatar WHERE id =:id');
                                    
                                    $updateavatar->execute(array( 'avatar'=>$_SESSION['id'].".".$extensionUpload , 'id'=>$_SESSION['id']));
                                    header('Location:profil.php?id='.$_SESSION['id']);
                                    # code...
                              } else{
                                    $erreur="Erreur durant L'importation de votre photo";
                              }
                              # code...
                        } else{
                              $erreur="votre photo de profil doit être au format jpg,png,jpeg ou gif";
                        }
                  } else{
                        $erreur="Votre photo de profil ne doit pas dépasser 2mo";
                  }
                  
            }
      }

?>