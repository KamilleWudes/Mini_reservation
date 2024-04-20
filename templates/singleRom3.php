<div class="hero-wrap" style="background-image: url('images/mini_image/chambre2.webp');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>chambres</span></p>
          <h1 class="mb-4 bread">CHAMBRE</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light ftco-room">
  <div class="container-fluid px-0">
    <div class="row no-gutters justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Hebergement</span>
        <h2 class="mb-4">Chambre &amp; suites</h2>
      </div>
    </div>
    <!--Ajoute des chambres-->
    <?php while ($reponse = $QueryAllPost->fetch(PDO::FETCH_OBJ)) { ?>
      <div class="container-fluid px-8">
        <div class="room-wrap d-md-flex">
          <a href="#" class="img" style="background-image: url(admin/dist/images/<?= $reponse->imagechamb; ?>); height:300px;width:-800px;"></a>
          <div class="half left-arrow d-flex align-items-center">
            <div class="text p-4 p-xl-5 text-center">
              <p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
              <p class="mb-0"><span class="price mr-1"><?= $reponse->prixChambre; ?> FCFA</span> <span class="per">par jour</span></p>
              <h3 class="mb-3"><?= $reponse->libelchamb ?></h3>
              <h3 class="mb-2">Occupation max <?= $reponse->nbrPlaceChambre ?> personnes</h3>
              <p class="pt-1"><a href="?page=singleRoms&action=<?=$reponse->idchamb?>" class="btn-custom px-3 py-2">EN SAVOIR PLUS <span class="icon-long-arrow-right"></span></a></p>
              <p class="pt-1"><a href="?page=reservation&action=<?=$reponse->idchamb?>" class="btn-custom px-3 py-2">RESERVER MAINTENANT<span class="icon-long-arrow-right"></span></a></p>
              <h3 class="mb-2">Chambre <?= $reponse->etatChbre ?> </h3> </div> </div>
          </div>
        </div>
      </div>

    <?php }  ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
          <li><a href="?page=singleRom3">&lt;</a></li>
            <li> <a href="?page=singleRom2"><span>1</span></a></li>
            <li><a href="?page=singleRom3">2</a></li>
            <li><a href="?page=singleRom2">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>