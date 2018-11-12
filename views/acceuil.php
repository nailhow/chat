<!DOCTYPE html>

<html>
	<head>
		<title>Chat2fouMalade</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="src/css/style.css" />

		<script type="text/javascript" src="lib/js/jquery.js"></script>
		<script type="text/javascript" src="lib/js/bootstrap.js"></script>

	</head>
	<body>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inscriptionModal">
			  Inscription
			</button>
		</div>
		<div class="col-md-2"></div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="inscriptionModalLabel">Inscription</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="index.php" method="GET">
	      <div class="modal-body">
	        
					<div class="formu">
						<label for="pseudo">Pseudo</label>
					<input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Ici ton pseudo vilain">
					<label for="password">Password</label>
					<input class="form-control" type="password" id="mdp" name="mdp" placeholder="Password">
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">S'inscrire</button>
	      </div>
	 	 </form>
	    </div>
	  </div>
	</div>


	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			  Connexion
			</button>
		</div>
		<div class="col-md-2"></div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="index.php" method="POST">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="connexionEmail">
				    <small id="emailHelp" class="form-text text-muted">Toute vos coordonnées seront transmise à la CIA.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="connexionPwd" />
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
			    </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
			        <button type="submit" class="btn btn-primary">Envoyer</button>
			      </div>
	      </form>
	    </div>
	  </div>
	</div>	
		</body>	
</html>
