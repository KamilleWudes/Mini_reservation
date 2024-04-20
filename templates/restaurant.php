<?php require('admin/config/database.php') ?>
<div class="hero-wrap" style="background-image: url('images/mini_image/gala1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">RESTAURANT</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-menu" style="background-image: url(images/restaurant-pattern.jpg);">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Restaurant</span>
            <h2>>Menu du jour<</h2>
          </div>
        </div>
				<div class="row">
        	<div class="col-md-6">
            <?php
                
                $QueryAffichage = $db->prepare('SELECT * FROM plats order by idPlat desc limit 0,5');
                $QueryAffichage->execute();
                while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(admin/dist/images/<?= $reponse->imagePlat; ?>);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span><?= $reponse->nomPlat; ?></span></h3>
	        				<span class="price price-left"> <?= $reponse->priPlat; ?> FCFA</span>
	        			</div>
	        			<div class="d-block">
	        				<p> <?= $reponse->descrPlat; ?></p>
	        			</div>
        			</div>
        		</div>
                <?php } ?>
        		<!--div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-2.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
	        				<span class="price price-left">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-3.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
	        				<span class="price price-left">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div-->
        		<!--div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(images/menu-4.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
	        				<span class="price price-left">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div-->
        	</div>

        	<div class="col-md-6">
            <?php
                
                $QueryAffichage = $db->prepare('SELECT * FROM plats order by idPlat desc limit 5,5');
                $QueryAffichage->execute();
                while ($reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {  ?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(admin/dist/images/<?= $reponse->imagePlat; ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span><?= $reponse->nomPlat; ?></span></h3>
	        				<span class="price"><?= $reponse->priPlat; ?> FCFA</span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $reponse->descrPlat; ?></p>
	        			</div>
	        		</div>
        		</div>
                <?php } ?>
        		<!--div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Ultimate Overload</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Grilled Beef with potatoes</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<--div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Ham &amp; Pineapple</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div-->
        	</div>
        </div>
			</div>
		</section>

		