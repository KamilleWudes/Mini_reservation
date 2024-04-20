<?php require('admin/config/database.php') ?>
<?php
    require('admin/config/database.php');
    $QueryAffichage = $db->prepare('SELECT * FROM chambre WHERE idchamb=?');
    $QueryAffichage->execute(array($_GET['action']));
    while ($_reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {

    ?>
<section class="home-slider owl-carousel">
	      <!--div class="slider-item" style="background-image: url(admin/dist/images/<?= $_reponse->imagechamb;?>);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">CHAMBRE &amp; SUITES</h1>
		            <h2>Chambre toujours disponible</h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div-->

	      <div class="slider-item" style="background-image: url(admin/dist/images/<?= $_reponse->imagechamb;?>);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">chambre &amp; suites</h1>
		            <h2>Suites toujours disponible</h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	  </div-->
	  <?php } ?>
      
      <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image:  url(images/mini_image/douches.jfif);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/105.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/douchelux.jpg);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/bureau2.webp);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/toilet.jfif);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/toille.jfif);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/toilllete.jpg);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/toil.jfif);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/buraeu.jfif);"></div>
          				</div>
                          <div class="item">
          					<div class="room-img" style="background-image: url(images/mini_image/impo.jpg);"></div>
          				</div>
          			</div>
          		</div>
          		<!--div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4">Luxury Room <span>- (10 Available rooms)</span></h2>
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>View:</span> Sea View</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
    						</div>
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          		</div>
          		<div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div-->

          		<!--div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6"-->
          					<!--form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form-->
          				
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
              <h4>DETAILS  &amp; GALERIE PHOTOS</h4><br>
              <h6>Accueillantes et chaleureuses, les chambres prennent soin de votre confort dans une atmosphère à la fois classique et contemporaine. Toutes les chambres disposent d’un écran plat de 47 pouces, d’un mini-bar. Restez connecté avec notre Wifi gratuit haut-débit.</h6>
             <br> <h6>Chaque chambre dispose de ces types de salle de Bains de haute gamme et de superbe bureaux pour vos activités.</h6>
              
            <!--div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div-->
            <div class="sidebar-box ftco-animate">
              <div class="categories">
              <div class="pb-md-5">
				<p></p>
                <!--h3>Categories</h3>
                <li><a href="#">Properties <span>(12)</span></a></li>
                <li><a href="#">Home <span>(22)</span></a></li>
                <li><a href="#">House <span>(37)</span></a></li>
                <li><a href="#">Villa <span>(42)</span></a></li>
                <li><a href="#">Apartment <span>(14)</span></a></li>
                <li><a href="#">Condominium <span>(140)</span></a></li>
              </div-->
            </div>

         
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    
 <section class="instagram">
     <div class="container-fluid">
         <div class="row no-gutters justify-content-center pb-5">
             <div class="col-md-7 text-center heading-section ftco-animate">
                 <span class="subheading">souvenirs</span>
                 <h2><span>VOS ÉVÉNEMENTS DANS NOTRE LUXE HOTEL</span></h2>
             </div>
         </div>
         <div class="row no-gutters">
             <div class="col-sm-12 col-md ftco-animate">
                 <a href="images/mini_image/galaa.jpg" class="insta-img image-popup" style="background-image: url(images/mini_image/galaa.jpg);">
                     <div class="icon d-flex justify-content-center">
                         <span class="icon-instagram align-self-center"></span>
                     </div>
                 </a>
             </div>
             <div class="col-sm-12 col-md ftco-animate">
                 <a href="images/mini_image/gala2.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/gala2.jfif);">
                     <div class="icon d-flex justify-content-center">
                         <span class="icon-instagram align-self-center"></span>
                     </div>
                 </a>
             </div>
             <div class="col-sm-12 col-md ftco-animate">
                 <a href="images/mini_image/fin_gala.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/fin_gala.jfif);">
                     <div class="icon d-flex justify-content-center">
                         <span class="icon-instagram align-self-center"></span>
                     </div>
                 </a>
             </div>
             <div class="col-sm-12 col-md ftco-animate">
                 <a href="images/mini_image/first_ma.jfif" class="insta-img image-popup" style="background-image: url(images/mini_image/first_ma.jfif);">
                     <div class="icon d-flex justify-content-center">
                         <span class="icon-instagram align-self-center"></span>
                     </div>
                 </a>
             </div>
             <div class="col-sm-12 col-md ftco-animate">
                 <a href="images/mini_image/fin.jpg" class="insta-img image-popup" style="background-image: url(images/mini_image/fin.jpg);">
                     <div class="icon d-flex justify-content-center">
                         <span class="icon-instagram align-self-center"></span>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </section>