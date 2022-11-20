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
	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT ME</h3>
				<hr>
				</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="subjectEmail1" placeholder="Subject">
				    <br>
				  </div>
				  <textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<?php require_once "footer.php"; ?>  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
