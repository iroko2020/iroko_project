<?php

require 'includes/main.php';

$colParPage = 5;
$reqColTotal = $bdd->query("SELECT id FROM contact_section1");
$colTotal = $reqColTotal->rowCount();
$pageTotale = ceil($colTotal / $colParPage);

if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page'] > 0) {
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
} else {
    $pageCourante = 1;
}

$depart = ($pageCourante - 1) * $colParPage;

if (isset($_GET['publier']) and !empty($_GET['publier'])) {
    $publier = (int) $_GET['publier'];
    $req = $bdd->prepare("UPDATE contact_section1 where id=?");
    $req->execute(array($publier));
}
if (isset($_GET['supprime']) and !empty($_GET['supprime'])) {
    $supprime = (int) $_GET['supprime'];
    $req = $bdd->prepare("DELETE FROM contact_section1 where id=?");
    $req->execute(array($supprime));
}

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">section 1</h5>
                        <p class="text-muted m-b-10">Section-contact 1</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="index.php?id=<?php echo
                                                            $_SESSION['id'] ?>"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">section 1</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Liste sections 1</a>
                            </li>
                            <li class="breadcrumb-item "><button class="btn btn-success" type="submit" onclick="window.location.href='contact-section.php?id=<?php echo $_SESSION['id'] ?>';">
                                    Voulez-Vous ajouter une section 1?</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body breadcrumb-page">
                    <!-- Simple Breadcrumb card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Liste sections 1</h5>

                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-chevron-left"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-times close-card"></i></li>
                                </ul>
                            </div>

                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>

                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Date Publication</th>
                                            <th>Fichier</th>

                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $liste = $bdd->query('SELECT * FROM contact_section1 ORDER BY date_time_publication ASC LIMIT ' . $depart . ',' . $colParPage);
                                    while ($l = $liste->fetch()) {

                                    ?>

                                        <tbody>
                                            <tr>

                                                <td style="padding-top: 50px"><?= $l['adresse'] ?></td><br>
                                                <td style="padding-top: 50px"><?= $l['email'] ?></td><br>
                                                <td style="padding-top: 50px"><?= $l['contact'] ?></td><br>
                                                <td style="padding-top: 50px"><?= $l['date_time_publication'] ?></td>
                                                <td><img src="miniatures/contact/<?= $l['id'] ?>.jpg" width="150" height="100"></td>

                                                <td style="padding-top: 40px">
                                                    <?php if ($l['confirme'] == 0) {
                                                    } ?>



                                                    <a href="contact-section.php?id=<?php echo
                                                                                        $_SESSION['id'] ?>&publier=<?= $l['id'] ?>" style="color: #fff" title="modifier" class="btn btn-out-dotted btn-primary btn-square"><span class="ti-marker-alt"></span></a>
                                                    <a href="list-contact-section.php?id=<?php echo
                                                                                                $_SESSION['id'] ?>&supprime=<?= $l['id'] ?>" style="color: #fff" title="Supprimer" class="btn btn-out-dotted btn-danger btn-square" onclick="window.alert('Votre article a bien été supprimer!!')"><span class="ti-trash"></span></a>
                                                </td>

                                            </tr>
                                        <?php

                                    }

                                        ?>

                                        <tfoot>

                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm">
                                                    <?php

                                                    for ($i = 1; $i <= $pageTotale; $i++) {
                                                        if ($i == $pageCourante) { ?>

                                                            <li class="page-item active" aria-current="page">
                                                                <span class="page-link">
                                                                    <?php
                                                                    echo $i;
                                                                    ?>
                                                                    <span class="sr-only">(current)</span>
                                                                </span>
                                                            </li>
                                                        <?php
                                                        } else { ?>
                                                            <li class="page-item">
                                                                <span class="page-link">
                                                            <?php
                                                            echo '<a href="list-contact-section?id=' . $_SESSION['id'] . '&page=' . $i . '">' . $i . '</a>';
                                                        }
                                                    }

                                                            ?>
                                                                </span></li>

                                                </ul>
                                            </nav>



                                        </tfoot>
                                        </tbody>




                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success-color Breadcrumb card end -->
            </div>
            <!-- Page-body start -->
        </div>
    </div>
    <!-- Main-body start -->

    <div id="styleSelector">

    </div>
</div>
</div>
</div>
</div>
</div>
</div>



<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>