<?php getHeader() ?>
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Plats</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                    <li class="breadcrumb-item active">Plats</li>
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
                    <h4 class="card-title">Plats enregistrés</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>prix</th>
                                <th>Image</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($All_Post_data = $QueryAllArticle->fetch(PDO::FETCH_OBJ)) : ?>
                                <tr>
                                    <td class=""><?= $All_Post_data->idPlat ?></td>
                                    
                                    <td class="txt-oflo"><?= $All_Post_data->nomPlat ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->descrPlat ?></td>
                                    <td class=""><?= $All_Post_data->priPlat?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->imagePlat ?></td>
                                    <td class="txt-oflo"><a href="admin.php?page=plats&action=modify&id=<?= $All_Post_data->idPlat ?>"><i class="fa fa-edit (alias)"> Modifier</i></a></td>
                                    <td><span class="text-success"><a class="text-danger" href="" onclick="event.preventDefault();confirm('Etes vous sur de vouloir supprimer cette article ?')&&window.location.replace('admin.php?page=plats&action=delete&id=<?= $All_Post_data->idPlat ?>')"><i class="fa fa-times-circle-o">Supprimer </i></a></span></td>
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
                        <h3 class="card-title">Ajouter un plats</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom du plat</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" placeholder="Entrer le nom du plat" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description du plat</label>
                                <div class="col-md-12">
                                    <input type="text" name="place" placeholder="Entrer la description du plat" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Prix unitaire</label>
                                <div class="col-md-12">
                                    <input type="text" name="prix" placeholder="Entrer le prix du plat" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image du plat</label>
                                <div class="col-md-12"><br>
                                    <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="addpost" class="btn btn-primary p-l-40 p-r-40">Ajouter le plat</button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>

                        <h3 class="card-title">Modification des informations des chambres</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom du plat</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" value="<?= $recuperation-> nomPlat; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-12">Description du plat</label>
                                <div class="col-md-12">
                                    <input type="text" autocomplete="off" name="place" value="<?= $recuperation->descrPlat; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Prix unitaire</label>
                                <div class="col-md-12">
                                    <input type="text" name="prix" autocomplete="off" value="<?= $recuperation->priPlat; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image du plat</label>
                                <div class="col-md-12"><br>
                                    <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>

                            <input type="hidden" name="id" autocomplete="off" value="<?php echo $_GET['id'] ?>">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="modifyPost" class="btn btn-primary p-l-40 p-r-40">Modifier le plat</button>
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