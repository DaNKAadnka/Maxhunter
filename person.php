<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Aniprog</title>

	<!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="https://c7.hotpng.com/preview/287/944/836/t-shirt-anime-drawing-manga-clip-art-mouth-smile.jpg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="preload" href="js/personal.js" as="script">

    <style>
    	a {
			cursor:pointer;
		}
		#person {
			min-height: 80%;
		}
    </style>
</head>
<body style="background-image: url(https://html5book.ru/wp-content/uploads/2016/09/background76.png);">
	<?php include "php_elem/header.php" ?>

	<!-- Information -->
	<div class="container bg-light mt-5" id="person">
		<h1>Личный кабинет</h1>
		<div class="mn_inf row">
			<img class="col-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU" id="per_i" alt="">
			<div class="col-6">
				<div class="row mt-3 ml-4" id="inf-1">
					<h6 class="col-3 text-info"> Login:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-1"></div>
					<a class="chng chng-1 text-secondary col-2">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-2">
					<h6 class="col-3 text-info"> Email:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-2"></div>
					<a class="chng chng-2 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-3">
					<h6 class="col-3 text-info"> Name:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-3"></div>
					<a class="chng chng-3 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-4">
					<h6 class="col-3 text-info"> Surname:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-4"></div>
					<a class="chng chng-4 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-5">
					<h6 class="col-3 text-info"> City:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-5"></div>
					<a class="chng chng-5 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-6">
					<h6 class="col-3 text-info"> Country:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-6"></div>
					<a class="chng chng-6 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-7">
					<h6 class="col-3 text-info"> Job:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-7"></div>
					<a class="chng chng-7 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-8">
					<h6 class="col-3 text-info "> Gender:</h6>
					<div class="d-inline-block col-6 border rounded text-secondary overflow-hidden" id="persNM-8"></div>
					<a class="chng chng-8 text-success col-2" data-toggle="modal" data-target="#change">Изменить</a>
				</div>
			</div>
		</div>
		<div class="input-group mt-5 ml-0 row">
		  	<div class="col-3">
		    	<input type="text" class="form-control" id="url_img" placeholder="Url">
		  	</div>
		  	<div class="input-group-append">
		    	<button class="btn btn-outline-dark" id="load_img">Upload url</button>
		    	<button class="btn btn-outline-danger" id="del_img">Delete</button>
		    	
		  	</div>
		</div>
	</div>
	
	<!-- Modal windows -->
	<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Information</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="infoform">
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="Email" placeholder="Email">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="Name" placeholder="Name">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="Surname" placeholder="Surname">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="City" placeholder="City">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="Country" placeholder="Country">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-6 mt-3 mb-3">
				      	<input type="text" class="form-control" id="Job" placeholder="Job">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <div class="col-sm-4 mt-3 mb-3">
				      	<div class="dropdown">
						  <button class="btn btn-light dropdown-toggle border border-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Your Gender
						  </button>
						  <div class="dropdown-menu" id="menuof" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item">Male</a>
						    <a class="dropdown-item">Female</a>
						    <a class="dropdown-item">Other</a>
						  </div>
						</div>
				    </div>
				</div>
	      	</form>
	        
	      </div>
	      <div class="modal-footer">
		  	<button type="button" class="btn btn-outline-success" class="close" data-dismiss="modal" aria-label="Close" id="ch_i" aria-hidden="true">Save</button>
	      </div>
	      <h6 class="alert" hidden id="is_loged"></h6>
	    </div>
	  </div>
	</div>
	

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Our scripts -->
	<script src="jquery-3.5.1.min.js"></script>
	<script src="js/personal.js"></script>
	<script src="js/main.js"></script>
</body>
</html>