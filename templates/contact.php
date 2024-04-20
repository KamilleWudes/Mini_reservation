<!-- END nav -->
 <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>Contact</span></p>
	            <h1 class="mb-4 bread">CONTACTS & ACCÈS</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">HÔTEL NOVOTEL</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span class="icon icon-map-marker"></span> Non loin de la Foire Togo 2000 , BP 2232 Lomé, République Togolaise</p>

	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span class="icon icon-phone"></span> <a href="tel://+228 90 51 00 21"> +228 90 51 00 21</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span class="icon icon-envelope"></span>totojoj33@gmail.com</p> 
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>site web:</span> <a href="index.php">@hoteldetente</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
       
            <form method="POST" action="" class="bg-white p-5 contact-form">
            <?php if(isset($alert)){ echo alertMessage($alert);}?>  

            <h5 style="text-align:center">  ENVOYER UN MESSAGE</h5>
                <p>N’hésitez pas à nous contacter pour toutes demandes relatives à votre séjour ou autre.</p>
              <div class="form-group">
                <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Votre Nom*">
              </div>
              <div class="form-group">
                <input type="tel" name="tel" class="form-control" autocomplete="off" pattern="[0-9]{5} [0-9]{3}[0-9]{2}[0-9]{3}" placeholder="Telephone* ex.00228 99774422 ">
              </div>
              <div class="form-group">
                <input type="text" name="subjet" autocomplete="off" class="form-control" placeholder="Votre sujection*">
              </div>
              <div class="form-group">
                <textarea name="message" id=""autocomplete="off" cols="30" rows="7" class="form-control" placeholder=" Votre message*"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Envoyer message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          <iframe style="Width:100%" ; height="600px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.544484795437!2d1.2492593147165412!3d6.191649895517577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e3aadb4ec88d%3A0x4b4f0c3b8968d03e!2sDefitech%20%7C%7C!5e0!3m2!1sfr!2stg!4v1651499860960!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ;></iframe>

          </div>
        </div>
      </div>
    </section>