<?php getHeader() ?>
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Catégorie</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                    <li class="breadcrumb-item active">Catégorie</li>
                </ol>

            </div>
        </div>
        <div class="message" style="text-align: center; width:100%"> <?php if (isset($alert)) {echo alertMessage($alert); } ?></div>
    </div>
    <!-- ============================================================== -->
    <!-- To do chat and message -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Toutes les catégories</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($reponses = $QueryAffichageCate->fetch(PDO::FETCH_OBJ)) : ?>
                                <tr>
                                    <td class=""><?php echo $reponses->idcat ?></td>
                                    <td class="txt-oflo"><?php echo $reponses->libelcat ?></td>
                                    <td class="txt-oflo"><a href="admin.php?page=category&action=modify&name=<?= $reponses->libelcat ?>&id=<?php echo $reponses->idcat ?>"><i class="fa fa-edit (alias)"> Modifier</i></a></td>
                                    <td><span class="text-success"><a class="text-danger" href="" onclick="event.preventDefault();confirm('Etes vous sur de vouloir supprimer cette categorie ?')&&window.location.replace('admin.php?page=category&action=delete&id=<?php echo $reponses->idcat ?>')"><i class="fa fa-times-circle-o"> Supprimer </i></a></span></td>
                                </tr>
                            <?php endwhile ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body"><br>
                    <?php if (!isset($_GET["action"])) { ?>
                        <h3 class="card-title">Ajouter une catégorie</h3><br>
                        <form class="form-horizontal form-material" method="POST" action="">
                            <div class="form-group">
                                <label class="col-md-12">Nom de la categorie</label>
                                <div class="col-md-12">
                                    <input type="text" name="category" autocomplete="off" placeholder="Entrer le nom de la categorie" autocomplete="off" class="form-control form-control-line">
                                </div>
                            </div>
                                               
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="addcategory" class="btn btn-primary p-l-40 p-r-40">Ajouter la categorie</button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>
                        <h3 class="card-title">Modifier la categorie <?php echo $_GET['name'] ?></h3><br>
                        <form class="form-horizontal form-material" method="POST" action="">
                            <div class="form-group">
                                <label class="col-md-12">Nom de la categorie</label>
                                <div class="col-md-12">
                                    <input type="text" autocomplete="off" name="NewNamecategory" value="<?php echo $_GET['name'] ?>" autocomplete="off" class="form-control form-control-line">
                                </div>
                    </div>

                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="modifycategory" class="btn btn-primary p-l-40 p-r-40">Modifier la categorie</button>
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