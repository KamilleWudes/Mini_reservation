<?php getHeader() ?>
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Divers</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                    <li class="breadcrumb-item active">Divers</li>
                </ol>

            </div>
        </div>
        <div class="message" style="text-align: center; width:100%"> <?php if (isset($alert)) {
                                                                            echo alertMessage($alert);
                                                                        } ?></div>
    </div>
    <!-- ============================================================== -->
    <!-- To do chat and message -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Divers informations enregistrés</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Sujection du client</th>
                                <th>Image du client</th>
                                <th>Nouveaute Image</th>
                                <th>Information des nouveautés</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($All_Post_data = $QueryAllArticle->fetch(PDO::FETCH_OBJ)) : ?>
                                <tr>
                                    <td class=""><?= $All_Post_data->idPost ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->nomPost ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->prenomPost ?></td>
                                    <td class=""><?= $All_Post_data->contenPost ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->imagPersPost ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->imageDiversPost ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->textImagPost ?></td>
                                    <td class="txt-oflo"><a href="admin.php?page=divers&action=modify&id=<?= $All_Post_data->idPost ?>"><i class="fa fa-edit (alias)"> Modifier</i></a></td>
                                    <td><span class="text-success"><a class="text-danger" href="" onclick="event.preventDefault();confirm('Etes vous sur de vouloir supprimer cette article ?')&&window.location.replace('admin.php?page=divers&action=delete&id=<?= $All_Post_data->idPost ?>')"><i class="fa fa-times-circle-o">Supprimer </i></a></span></td>
                                </tr>
                            <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body"><br>
                    <?php if (!isset($_GET['action']) == 'modify') { ?>
                        <h3 class="card-title">Ajouter une information</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom du client</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" placeholder="Entrer le nom du client" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Prenom du client</label>
                                <div class="col-md-12">
                                    <input type="text" name="place" placeholder="Entrer le Prenom du client" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">contenu de l'information</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="prix" placeholder="Entrer le contenu de l'information" rows="10" autocomplete="off" class="form-control form-control-line">
                                </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image du client</label>
                                <div class="col-md-12"><br>
                                <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image des nouveautés</label>
                                <div class="col-md-12"><br>
                                <input type="file" name="images" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contenu de l'information des nouvautes</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="contenu" placeholder="Entrer le contenu de l'information" rows="10" autocomplete="off" class="form-control form-control-line">
                                </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="addpost" class="btn btn-primary p-l-40 p-r-40">Ajouter ces informations</button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>

                        <h3 class="card-title">Modification des informations</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom du client</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" value="<?= $recuperation->nomPost; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Prenom du client</label>
                                <div class="col-md-12">
                                    <input type="text" autocomplete="off" name="place" value="<?= $recuperation->prenomPost; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contenu de l'information</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="prix" rows="10" placeholder="Entrer le contenu de l'information" autocomplete="off" class="form-control form-control-line">
                                <?= $recuperation->contenPost; ?> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image du client</label>
                                <div class="col-md-12"><br>
                                <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image des nouveautés</label>
                                <div class="col-md-12"><br>
                                    <input type="file" name="images" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contenu de l'information des nouveautes</label>
                                <div class="col-md-12">
                                    <textarea name="contenu" placeholder="Entrer le contenu de l'information" rows="10" autocomplete="off" class="form-control form-control-line">
                                <?= $recuperation->textImagPost; ?> </textarea>
                                </div>
                            </div>

                            <input type="hidden" name="id" autocomplete="off" value="<?php echo $_GET['id'] ?>">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="modifyPost" class="btn btn-primary p-l-40 p-r-40">Modifier les informations </button>
                                </div>
                            </div>
                        </form>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php getFooter() ?>