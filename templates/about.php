<?php require('admin/config/database.php') ?>
<!--div class="hero-wrap" style="background-image: url('images/bg_1.jpg');"-->
<div class="hero-wrap" style="background-image:url(images/mini_image/about.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>A Propos</span></p>
                    <h1 class="mb-4 bread">A PROPOS</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftc-no-pb ftc-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/mini_image/face.jpeg);">
                <!--a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center"-->
                <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section heading-section-wo-line pt-md-5 mb-5">
                    <div class="ml-md-0">
                        <span class="subheading">Bienvenu dans Notre Hôtel</span>
                        <h2 class="mb-4">NOTRE HISTOIRE</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p> Situé à proximité de la Foire Togo 2000, l’Hôtel   LA DETENTE est l’un des monuments emblématiques de la capitale togolaise. il est des plus haut immeuble du pays et a marqué une nouvelle ère dans l’hôtellerie de luxe au Togo à son ouverture en 1999. Véritable patrimoine national au haut standing inégalé en Afrique de l’Ouest, l’hôtel reflète toujours à ce jour l’excellence de l’industrie hôtelière.</p>
                    <p></p>
                    <!--ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Nouvelle inovation de l'Hotel</span>
                <h2>NOTRE GALERIE MARCHANDE</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
            <?php
                
                $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 0,1');
               $QueryAffichage->execute();
              while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                <div class="blog-entry align-self-stretch">
                    <a class="block-20" style="background-image: url(admin/dist/images/<?= $reponse->imageDiversPost; ?>); height:400px">
                    </a>
                    <div class="text mt-3 text-center">
                        <!--div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div-->
                        <h3 class="heading"><?= $reponse->textImagPost; ?> </h3>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <?php
                
                $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 1,1');
               $QueryAffichage->execute();
              while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                <div class="blog-entry align-self-stretch">
                    <a class="block-20" style="background-image: url(admin/dist/images/<?= $reponse->imageDiversPost; ?>); height:400px">
                    </a>
                    <div class="text mt-3 text-center">
                        <!--div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div-->
                        <h3 class="heading"><?= $reponse->textImagPost; ?> </h3>

                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <?php
                
                $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 2,1');
               $QueryAffichage->execute();
              while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                <div class="blog-entry align-self-stretch">
                    <a class="block-20" style="background-image: url(admin/dist/images/<?= $reponse->imageDiversPost; ?>); height:400px">
                    </a>
                    <div class="text mt-3 text-center">
                        <!--div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div-->
                        <h3 class="heading"><?= $reponse->textImagPost; ?> .</h3>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">

     <div class="container">
         <div class="row justify-content-center mb-5 pb-3">
             <div class="col-md-7 heading-section text-center ftco-animate">
                 <span class="subheading">Temoignage</span>
                 <h2 class="mb-4">Temoignage des clients satisfaits par notre service</h2>
             </div>
         </div>
         <div class="row justify-content-center">
             <div class="col-md-8 ftco-animate">
                 <div class="row ftco-animate">
                     <div class="col-md-12">
                         <div class="carousel-testimony owl-carousel ftco-owl">
                             <div class="item">
                             <?php
                
                                 $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 0,1');
                                 $QueryAffichage->execute();
                                   while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                                 <div class="testimony-wrap py-4 pb-5">
                                     <div class="user-img mb-4" style="background-image: url(admin/dist/images/<?= $reponse->imagPersPost; ?>)">
                                         <span class="quote d-flex align-items-center justify-content-center">
                                             <i class="icon-quote-left"></i>
                                         </span>
                                     </div>
                                     <div class="text text-center">
                                         <p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                                         <p class="mb-4"><?= $reponse->contenPost; ?></p>
                                         <p class="name"><?= $reponse->prenomPost ; ?></p>
                                         <span class="position">Client</span>
                                     </div>
                                 </div>
                                 <?php } ?>
                             </div>
                             <div class="item">
                                 <div class="testimony-wrap py-4 pb-5">
                                 <?php
                
                                    $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 1,1');
                                    $QueryAffichage->execute();
                                  while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                                     <div class="user-img mb-4" style="background-image: url(admin/dist/images/<?= $reponse->imagPersPost; ?>)">
                                         <span class="quote d-flex align-items-center justify-content-center">
                                             <i class="icon-quote-left"></i>
                                         </span>
                                     </div>
                                     <div class="text text-center">
                                         <p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                                         <p class="mb-4"><?= $reponse->contenPost; ?></p>
                                         <p class="name"><?= $reponse->prenomPost ; ?></p>
                                         <span class="position">Client</span>
                                     </div>
                                 </div>
                                <?php } ?>
                             </div>
                             <div class="item">
                                  <?php
                
                                   $QueryAffichage = $db->prepare('SELECT * FROM posts order by idPost desc limit 2,1');
                                  $QueryAffichage->execute();
                                 while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
                                 <div class="testimony-wrap py-4 pb-5">
                                     <div class="user-img mb-4" style="background-image: url(admin/dist/images/<?= $reponse->imagPersPost; ?>)">
                                         <span class="quote d-flex align-items-center justify-content-center">
                                             <i class="icon-quote-left"></i>
                                         </span>
                                     </div>
                                     <div class="text text-center">
                                         <p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                                         <p class="mb-4"> <?= $reponse->contenPost; ?> .</p>
                                         <p class="name"><?= $reponse->prenomPost ; ?></p>
                                         <span class="position">Client</span>
                                     </div>
                                 </div>
                                 <?php } ?>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>




<section class="ftco-section">

    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">localisation</span>
                <h2> Carte de Localisation </h2>
            </div>
        </div>
        <div class="text mt-3 text-center">
            <div class="meta mb-2">
                <iframe style="Width:100%" ; height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.544484795437!2d1.2492593147165412!3d6.191649895517577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e3aadb4ec88d%3A0x4b4f0c3b8968d03e!2sDefitech%20%7C%7C!5e0!3m2!1sfr!2stg!4v1651499860960!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ;></iframe>

            </div>

        </div>
    </div>
    </div-->
    </div>
</section>

<section class="instagram">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Photos</span>
                <h2><span>L'HOTEL LA DETENTE</span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="images/mini_image/rec.jpg" class="insta-img image-popup" style="background-image: url(images/mini_image/rec.jpg);">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="images/mini_image/esc1.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/esc1.jfif);">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="images/mini_image/coco4.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/coco4.jfif);">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="images/mini_image/picin2.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/picin2.jfif);">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="images/mini_image/face.jpeg" class="insta-img image-popup" style="background-image: url(images/mini_image/face.jpeg);">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>