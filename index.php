<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JQuery -->
    

    <link rel="shortcut icon" href="https://c7.hotpng.com/preview/287/944/836/t-shirt-anime-drawing-manga-clip-art-mouth-smile.jpg" type="image/x-icon">
    
    <title>Aniprog</title>
	<!-- Our CSS -->
	<link rel="stylesheet" href="css/main_styles.css">
	<style>
		a {
			cursor:pointer;
		}
	</style>
  </head>
  <body style="background-image: url(https://html5book.ru/wp-content/uploads/2016/09/background76.png);">
	<!-- Header -->
	<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-dark">
	  	<a class="navbar-brand col-1" href="">
	 	 	Aniprog
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse row" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item col-5">
	        <a class="nav-link" href="articles.php">Articles</a>
	      </li>
	      <li class="nav-item col-2">
	        <a class="nav-link">Messeges</a>
	      </li>
	    </ul>
		<ul class="navbar-nav flex-row ml-5 d-none d-md-flex">
			<li class="form_log p-0 mr-1 nav-item text-light row">
		   		<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong" id="a_bx">Log in / Set up</button>
			</li>
			<li class="nav-item ff1 row mr-3" hidden="">
				<a class="nav-link d-inline-block" id="logout" href="articles.php">Выйти</a>
			</li>
		</ul>
	    
	  </div>
	</nav>

	
	<!-- Modal windows -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Log in or set up</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="logform">
	      		<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="staticEmail" placeholder="Name">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
				    </div>
				</div>
	      	</form>
	        
	      </div>
	      <div class="modal-footer">
		  	<button type="button" class="btn btn-outline-success" id="log_b-1">Log In</button>
		  	<button type="button" class="btn btn-outline-success" id="log_b-2">Set up</button>
	      </div>
	      <h6 class="alert" hidden id="is_loged"></h6>
	    </div>
	  </div>
	</div>
	
	<!-- Some content -->
	<div class="container bg-light mt-5 rounded border border-secondary">
		<h1>Здравствуйте, вы на сайте aniprog.org</h1>
		<h6>Этот сайт задумывается как практика в портфолио</h6>
		<img class="img-thumbnail" src="https://ramki-photoshop.ru/personaj/2/ludi-clipart-24.png" style="width:80%; height:50%" alt="This is a cute anime girl">
	</div>

	<div class="container bg-light mt-5 rounded border border-secondary">
		<h1>Проводи время с душой!</h1>
		<h6>Надеемся, что вы найдете что-нибудь интересное на нашем сайте!</h6>
		<img class="img-thumbnail" src="https://coubsecure-s.akamaihd.net/get/b27/p/coub/simple/cw_timeline_pic/50bc8495f10/b34b973c0e3dd2017875b/med_1517614372_image.jpg" style="width:80%; height:50%" alt="This is a cute anime girl">
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small bg-dark mt-5">
		
	  <!-- Copyright -->
	  <div class="footer-copyright text-center text-lignt py-3 border border-light">
	  	<div class="text-light d-inline-block">© 2020 Copyright:</div>
	    <a style="text-decoration: none;" class="text-light" href=""> aniprog.org</a>
	    <img class="rounded-circle ml-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqWlUIhhzXQN2_YnH0W_LxGknx5YuHgCbLew&usqp=CAU" alt="" style="width:50px; height: 50px;">
	  </div>
	  <!-- Copyright -->

	</footer>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
		
    <!-- Our scripts -->
	<script src="jquery-3.5.1.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>