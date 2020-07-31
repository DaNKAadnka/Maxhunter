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

	<!-- Log in Set up Log out -->
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

<!-- Footer -->
	<footer class="navbar fixed-bottom font-small bg-dark">
		
		<a class="navbar-brand" href="index.php">
			<img class="rounded-circle ml-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqWlUIhhzXQN2_YnH0W_LxGknx5YuHgCbLew&usqp=CAU" alt="" style="width:30px; height: 30px;">
		</a>
	  	<!-- Copyright -->
	  	<div class="text-lignt py-3">
	  		<div class="text-light d-inline-block">© 2020 Copyright:</div>
	    	<a style="text-decoration: none;" class="text-light" href=""> aniprog.org</a>
	    	
	  	</div>
	  <!-- Copyright -->

	</footer>