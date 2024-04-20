<?php getHeader() ?>
 <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Commentaire des clients</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin.php?page=acceuil">Acceuil</a></li>
                                <li class="breadcrumb-item active">Commentaire des clients</li>
                            </ol>
                            <!--button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Afficher tous les Commentaires
                            </button-->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                     <?php while ($reponses=$QueryAffichageCom->fetch(PDO::FETCH_OBJ)) { ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Commentaires N° <?= $reponses->idCom	 ?> " <?= $reponses->sujetCom ?> " :</h4>
                                <div id="gmaps-simple" class="gmaps"></div> 
                                <h3><?= $reponses->contenuCom	 ?></h3>
                                <p>Publié par <?= $reponses->nomCom ?> le <?= $reponses->dateCom ?></p>
                                <p>Télephone: <?= $reponses->telCom ?></p>
                            </div>
                        </div>
                       
                    </div>
                    <?php }  ?>
                </div>
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
          
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php getFooter() ?>