<?php getHeader() ?>
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Chambre</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                    <li class="breadcrumb-item active">Chambre</li>
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
                    <h4 class="card-title">Chambres enregistrés</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Nombre places</th>
                                <th>prix</th>
                                <th>Image</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($All_Post_data = $QueryAllArticle->fetch(PDO::FETCH_OBJ)) : ?>
                                <tr>
                                    <td class=""><?php echo $All_Post_data->idchamb ?></td>
                                    <!-- <td class="txt-oflo"><php if (strlen($All_Post_data->libelchamb) > 50) {
                                                                echo substr($All_Post_data->libelchamb, 0, 50) . '...';
                                                            } else {
                                                                echo $All_Post_data->libelchamb;
                                                            } ?></td-->
                                    <td class="txt-oflo"><?php echo $All_Post_data->libelchamb ?></td>
                                    <td class="txt-oflo"><?php echo $All_Post_data->nbrPlaceChambre    ?></td>
                                    <td class=""><?= $All_Post_data->prixChambre ?></td>
                                    <td class="txt-oflo"><?= $All_Post_data->imagechamb ?></td>
                                    <td class="txt-oflo"><a href="admin.php?page=posts&action=modify&id=<?php echo $All_Post_data->idchamb ?>"><i class="fa fa-edit (alias)"> Modifier</i></a></td>
                                    <td><span class="text-success"><a class="text-danger" href="" onclick="event.preventDefault();confirm('Etes vous sur de vouloir supprimer cette article ?')&&window.location.replace('admin.php?page=posts&action=delete&id=<?php echo $All_Post_data->idchamb ?>')"><i class="fa fa-times-circle-o">Supprimer </i></a></span></td>
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
                        <h3 class="card-title">Ajouter une chambre</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom de la chambre</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" placeholder="Entrer le nom de la chambre" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nombre de places</label>
                                <div class="col-md-12">
                                    <input type="text" name="place" placeholder="Entrer le nombre de place" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Prix unitaire</label>
                                <div class="col-md-12">
                                    <input type="text" name="prix" placeholder="Entrer le prix de la categorie" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Catégorie de la chambre</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-line" name="categorie">
                                        <?php while ($dataCategorie = $QueryAllCate->fetch(PDO::FETCH_OBJ)) : ?>
                                            <option value="<?php echo $dataCategorie->idcat ?>"><?= $dataCategorie->libelcat; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                           

                            <div class="form-group">
                                <label class="col-md-12">Image de la chambre</label>
                                <div class="col-md-12"><br>
                                    <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="addpost" class="btn btn-primary p-l-40 p-r-40">Ajouter la chambre</button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>

                        <h3 class="card-title">Modification des informations des chambres</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12">Nom de la chambre</label>
                                <div class="col-md-12">
                                    <input type="text" name="titre" value="<?php echo $recuperation->libelchamb; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Catégorie de chambre</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-line" name="categorie">
                                        <?php while ($dataCategorie = $QueryAllCate->fetch(PDO::FETCH_OBJ)) : ?>
                                            <option value="<?php echo $dataCategorie->id ?>"><?php echo $dataCategorie->libelcat; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nombre de places</label>
                                <div class="col-md-12">
                                    <input type="text" autocomplete="off" name="place" value="<?php echo $recuperation->nbrPlaceChambre; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Prix</label>
                                <div class="col-md-12">
                                    <input type="text" name="prix" autocomplete="off" value="<?= $recuperation->prixChambre; ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image de la chambre</label>
                                <div class="col-md-12"><br>
                                    <input type="file" name="image" autocomplete="off" class=" btn-primary"><br>
                                </div>
                            </div>

                            <input type="hidden" name="id" autocomplete="off" value="<?php echo $_GET['id'] ?>">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="modifyPost" class="btn btn-primary p-l-40 p-r-40">Modifier la chambre</button>
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