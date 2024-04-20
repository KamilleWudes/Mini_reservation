<?php getHeader() ?>
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Tableau de bord</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                                <li class="breadcrumb-item active">Tableau de bord</li>
                            </ol>
                            <a class="btn btn-success d-none d-lg-block m-l-15"
                                href="">Acceuil</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Les chambres Occupés</h5>
                                        <h6 class="card-subtitle">Les chambres Occupés dans l'hotel </h6>
                                    </div>
                                    <!--div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option>January</option>
                                            <option value="1">February</option>
                                            <option value="2" selected="">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div-->
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th>Numero</th>
                                            <th>Nom de la chambre</th>
                                            <th>Nombres de places</th>
                                            <th>Prix de la chambre</th>
                                            <th>Image de la chambre</th>
                                            <th> Etat de la chambre</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                         require('config/database.php');
                            $QueryAffichageReservations = $db->prepare("SELECT * FROM chambre  WHERE etatChbre='occuper' order by idchamb desc");
                            $QueryAffichageReservations->execute();
                            while ($_reponses = $QueryAffichageReservations->fetch(PDO::FETCH_OBJ)) {

                            ?>
                                        <tr>
                                            
                                            <td ><?php echo $_reponses->idchamb ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->libelchamb ?> 
                                            <td class="txt-oflo"><?php echo $_reponses->nbrPlaceChambre	 ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->prixChambre ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->imagechamb ?></td>
                                            <!--td class="txt-oflo"><php echo $_reponses->etatChbre ?-->
                                            <td><span class="text-danger"><?= $_reponses->etatChbre ?></span></td-->
                                            <!--td><span class="text-success">$24</span></td-->
                                            <td class="txt-oflo"><a href="admin.php?page=ChambreOccupe&action=Libre&id=<?= $_reponses->idchamb ?>"><i class="fa fa-edit (alias)"> Liberer la chambre </i></a></td>

                                        </tr>
                                        <?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- To do chat and message -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
                
 <?php getFooter()?>