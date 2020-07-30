<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Personal cabinet</title>

	<!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
	<!-- Header -->
	<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-dark">
	  	<a class="navbar-brand col-1" href="index.php">
	 	 	Aniprog
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse row" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item col-5">
	        <a class="nav-link">Articles</a>
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
				<a class="nav-link d-inline-block" id="logout">Выйти</a>
			</li>
		</ul>
	    
	  </div>
	</nav>


	<div class="container bg-light mt-5" id="person">
		<h1>Личный кабинет</h1>
		<div class="mn_inf row">
			<img class="col-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU" alt="">
			<div class="col-6">
				<div class="row mt-3 ml-4" id="inf-1">
					<h6 class="col-3 text-info"> Login:</h6>
					<div class="d-inline-block col-5" id="persNM-1">None</div>
					<a class="chng chng-1 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-2">
					<h6 class="col-3 text-info"> Email:</h6>
					<div class="d-inline-block col-5" id="persNM-2">None</div>
					<a class="chng chng-2 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-3">
					<h6 class="col-3 text-info"> Name:</h6>
					<div class="d-inline-block col-5" id="persNM-3">None</div>
					<a class="chng chng-3 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-4">
					<h6 class="col-3 text-info"> Surname:</h6>
					<div class="d-inline-block col-5" id="persNM-4">None</div>
					<a class="chng chng-4 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-5">
					<h6 class="col-3 text-info"> City:</h6>
					<div class="d-inline-block col-5" id="persNM-5">None</div>
					<a class="chng chng-5 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-6">
					<h6 class="col-3 text-info"> Country:</h6>
					<div class="d-inline-block col-5" id="persNM-6">None</div>
					<a class="chng chng-6 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-7">
					<h6 class="col-3 text-info"> Job:</h6>
					<div class="d-inline-block col-5" id="persNM-7">None</div>
					<a class="chng chng-7 text-success">Изменить</a>
				</div>
				<div class="row mt-3 ml-4" id="inf-8">
					<h6 class="col-3 text-info"> Gender:</h6>
					<div class="d-inline-block col-5" id="persNM-8">None</div>
					<a class="chng chng-8 text-success">Изменить</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal windows -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="modalform">
	      		<div class="form-group row d-flex justify-content-center">
			    	<label for="inputName" class="col-sm-3 col-form-lable">Name:</label>
				    <div class="col-sm-6">
				      	<input type="text" class="form-control" id="staticEmail" placeholder="Name">
				    </div>
				</div>
				<div class="form-group row d-flex justify-content-center">
				    <label for="inputPassword" class="col-sm-3 col-form-label">Password:</label>
				    <div class="col-sm-6">
				      	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
				    </div>
				</div>
	      	</form>
	        
	      </div>
	      <div class="modal-footer">
		  	<button type="button" class="btn btn-success" id="log_b-1">Log In</button>
		  	<button type="button" class="btn btn-success" id="log_b-2">Set up</button>
	      </div>
	      <h6 class="alert" hidden id="is_loged"></h6>
	    </div>
	  </div>
	</div>


	<!-- Footer -->
	<footer class="navbar fixed-bottom bg-dark">
		
		<a class="navbar-brand" href="index.php">
			<img class="rounded-circle ml-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqWlUIhhzXQN2_YnH0W_LxGknx5YuHgCbLew&usqp=CAU" alt="" style="width:50px; height: 50px;">
		</a>
	  	<!-- Copyright -->
	  	<div class="text-lignt py-3">
	  		<div class="text-light d-inline-block">© 2020 Copyright:</div>
	    	<a style="text-decoration: none;" class="text-light" href=""> aniprog.org</a>
	    	
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
	<script src="js/personal.js"></script>
</body>
</html>