<?php
require 'includes/main.php';
require 'includes/script-service.php';

?>

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">Service</h5>
                        <p class="text-muted m-b-10">Espace d'enregistrement des services</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="index.php?id=<?php echo
                                                            $_SESSION['id'] ?>"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Service</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Nouveau article</a>
                            </li>
                            <li class="breadcrumb-item "><button class="btn btn-success" type=" submit" onclick="window.location.href='list-service.php?id=<?php echo $_SESSION['id'] ?>';">
                                    Liste des articles</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">

                                    <div class="card-block">
                                        <h4 class="sub-title">Nouveau article</h4>
                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="inputEmail4">titre</label>
                                                <input name="titre" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail4">Sous titre</label>
                                                <input name="sous_titre" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 1 titre</label>
                                                <textarea name="icon1_titre" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 1 contenu</label>
                                                <textarea name="icon1_contenu" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 2 titre</label>
                                                <textarea name="icon2_titre" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 2 contenu</label>
                                                <textarea name="icon2_contenu" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 3 titre</label>
                                                <textarea name="icon3_titre" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Icone 3 contenu</label>
                                                <textarea name="icon3_contenu" type="text" class="form-control" id="inputAddress" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail4">Photo</label>
                                                <input name="photo" type="file" class="form-control" id="inputEmail4" placeholder="" required="">

                                            </div>
                                            <button name="ok" type="submit" class="btn btn-success">Enregistrer</button>


                                        </form>
                                        <p class='text-muted m-b-10'>
                                            <?php

                                            if (isset($erreur)) {
                                                echo $erreur;
                                            }

                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<!-- Warning Section Ends -->
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

<!-- Accordion js -->
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>