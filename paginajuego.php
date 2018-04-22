<?php
require_once 'header.php';
?>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Messages</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Separated link</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
    <!--imgs juego-->
	<div class="row">
		<div class="col-md-6">
						<img alt="Batalla " src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Schiffeversenk.jpg/220px-Schiffeversenk.jpg">

		</div>
		<div class="col-md-6">
			<img alt="Batalla " src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Schiffeversenk.jpg/220px-Schiffeversenk.jpg">
		</div>
	</div>
    <!--fin imgs juego-->
    
    
    <!--imgs usuarios-->
    <div class="row">
		<div class="col-md-6">
                    <img alt="usuario" src="imgs/girl.png"><h3>Jugador 1</h3>

		</div>
		<div class="col-md-6">
                    <img alt="usuario" src="imgs/man.png"><h3>Jugador 2</h3>
		</div>
	</div>
    <!--fin imgs usuarios-->
    
	<div class="row">
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Usuario
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1">
				</div>
				
				<button type="submit" class="btn btn-primary">
					Enviar
				</button>
			</form>
		</div>
		<div class="col-md-6">
		</div>
        
        
	</div>
<?php
        require_once 'footer.php';
?>