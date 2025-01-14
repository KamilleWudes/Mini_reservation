<?php
    require('admin/config/database.php');
    $QueryAffichage = $db->prepare('SELECT * FROM chambre WHERE idchamb=?');
    $QueryAffichage->execute(array($_GET['action']));
    while ($_reponse = $QueryAffichage->fetch(PDO::FETCH_OBJ)) {

    ?>
<div class="hero-wrap" style="background-image: url(admin/dist/images/<?= $_reponse->imagechamb;?>);">
  <div class="overlay"></div>  
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>Reservation</span></p>
          <h1 class="mb-4 bread">Reservation</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<section class="ftco-section ftco-menu">
     <div class="container">
         <div class="row justify-content-center mb-5 pb-3">
             <div class="col-md-7 heading-section text-center ftco-animate">
                 <span class="subheading">Reservation</span>
                 <h2>Reservation des chambres &amp; suites</h2>
             </div>
         </div>
         <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/b23a2c8c49b8e43249487140e4c2e22a63bd7cb8.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form method="post" action="">
    <?php if(isset($alert)){ echo alertMessage($alert);}?>  
      <div class="banner">
        <h1>Formulaire de Reservation </h1>
      </div>
      <br/>
      <fieldset>
        <legend>Information du clients</legend>
        <div class="columns">
          <div class="item">
            <label for="fname">Nom<span>*</span></label>
            <input id="fname" type="text" name="name" required="true" />
          </div>
          <div class="item">
            <label for="lname"> Prenom<span>*</span></label>
            <input id="lname" type="text" name="prenom" />
          </div>
          <div class="item">
            <label for="eaddress">Email<span>*</span></label>
            <input id="eaddress" type="email"  autocomplete="off" name="eaddress" />
          </div>
          <div class="item">
            <label for="phone">Télephone<span>*</span></label>
            <!--input id="phone" type="" name="phone" /-->
            <!-- <input  type="phone" name="phone" autocomplete="off" pattern="[0-9]{5} [0-9]{3}[0-9]{2}[0-9]{3}" placeholder="Telephone* ex.00228 99774422 "> -->
            <input  type="phone" name="phone" autocomplete="off">

          </div>
      </fieldset>
      <br/>
      <!--?php $_SESSION['idChamb'] = $_GET['action'];
      
       
      ?-->
      <fieldset>
      <legend>Dates des reservations</legend>
      <div class="columns">
      <div class="item">
      <label for="Datecheckindate">Date d'arriver <span>*</span></label>
      <input id="checkindates" type="date" name="checkindates" />
      <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
      <label for="checkindates">Date de depart <span>*</span></label>
      <input id="checkoutdate" type="date" name="checkoutdate" />
      <i class="fas fa-calendar-alt"></i>
      </div>
      <!--div class="item">
      <label for="checkoutdate">Date de depart <span>*</span></label>
      <input id="checkoutdate" type="date" name="checkoutdate" />
      <i class="fas fa-calendar-alt"></i>
      </div-->
      <!--div class="item">
      <label for="checkindate">Date du jour <span>*</span></label>
      <input id="checkindate" type="date" name="checkindate" />
      <i class="fas fa-calendar-alt"></i>
      </div-->
      </fieldset>
      <div class="btn-block">
      <button type="submit" name="valider">Reserver</button>
      </div>
    </form>
    </div>
</form>
      </div>
    </div>
  </div>
</section>