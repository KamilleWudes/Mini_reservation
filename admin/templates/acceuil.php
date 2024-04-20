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
                                        <h5 class="card-title">Les chambres Reservés</h5>
                                        <h6 class="card-subtitle">Les chambres reservés par les clients </h6>
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
                                            <th>Nom client</th>
                                            <th>Télephone</th>
                                            <th>Date de reservation</th>
                                            <th>Date d'arriveé</th>
                                            <th>Date de depart</th>
                                            <th>Nom de la chambre</th>
                                            <th>Image de la chambre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                         require('config/database.php');
                            $QueryAffichageReservations = $db->prepare("SELECT R.idreser,CL.nomcli,CL.prenCli,CL.telCli,R.datereser,R.datearrive,R.datedepart,C.libelchamb,C.imagechamb FROM reservation R,client CL,chambre C WHERE CL.idcli=R.idcli AND C.idchamb=R.idchamb order by idreser desc;
                            ");
                            $QueryAffichageReservations->execute();
                            while ($_reponses = $QueryAffichageReservations->fetch(PDO::FETCH_OBJ)) {

                            ?>
                                        <tr>
                                            
                                            <td ><?php echo $_reponses->idreser ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->nomcli ?> <?php echo $_reponses->prenCli ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->telCli ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->datereser ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->datearrive ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->datedepart ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->libelchamb ?></td>
                                            <td class="txt-oflo"><?php echo $_reponses->imagechamb ?></td>
                                
                                            <!--td><span class="text-success">$24</span></td-->
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