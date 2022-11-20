<?php require_once "head.php"; ?>  
  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <img src="LogoMakr_5ofLqR.jpg" alt="" class="logo" >
	 <a class="navbar-brand" href="index.php">Motociklai</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="forma.php">Forma (Motociklu Informacija)</a></li>
            <li><a href="about.php">Apie mane</a></li>
            <li><a href="galerija.php">Galerija</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	  
	  <!-- The four columns -->
	  <div class="row">
		<div class="column">
		  <img src="assets/img/Norton_Motorcycle.jpg" alt="A classic Norton motorcycle" style="width:100%" onclick="myFunction(this);">
		</div>
		<div class="column">
		  <img src="assets/img/URAL650-SPORTSMAN.jpg" alt="A Ural motorcycle with a sidecar" style="width:100%" onclick="myFunction(this);">
		</div>
		<div class="column">
		  <img src="assets/img/Gendarmerie_motor_officer_raising_arm_in_traffic.jpg" alt="French gendarme motorcyclist" style="width:100%" onclick="myFunction(this);">
		</div>
		<div class="column">
		  <img src="assets/img/Daimler-1-motorcycle-1.jpg" alt="Replica of the Daimler-Maybach Reitwagen." style="width:100%" onclick="myFunction(this);">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="column">
		  <img src="assets/img/1894_Hildebrand_&_Wolfmüller_diagram.png" alt="Diagram of 1894 Hildebrand & Wolfmüller" style="width:100%" onclick="myFunction(this);">
		</div>
		<div class="column">
		  <img src="assets/img/Royal_Enfield_Bullet,_Rewalsar_2010.jpg" alt="Royal Enfield Bullet" style="width:100%" onclick="myFunction(this);">
		</div>
    <div class="column">
		  <img src="assets/img/portfolio/posssrt06.jpg" alt="The limited-edition AMB 001 motorcycle" style="width:100%" onclick="myFunction(this);">
		</div>
		<div class="column">
		  <img src="assets/img/portfolio/ftr-1200-domestic.png" alt="Indian FTR 1200" style="width:100%" onclick="myFunction(this);">
		</div>
	  </div>
	  <div class="container">
		<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
		<img id="expandedImg" style="width:100%">
		<div id="imgtext"></div>
	  </div>
	  
	
	<!-- +++++ Footer Section +++++ -->
	
	<?php require_once "footer.php"; ?>  
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/scr.js"></script>
  </body>
</html>
