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
					<a class="nav-link" href="#">Btn</a>
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
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>
							Barco
						</th>
						<th>
							Coordenadas
						</th>
						<th>
							Posición
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Barco 1
						</td>
						<td>
							<input type="text" id="coordenada" maxlength="1" size="2"> - <input type="text" maxlength="2" size="2">
						</td>
						<td>
							<select name="transporte">

                                <option>Vertical</option>
                                
                                <option>Horizontal</option>
                            
                            </select>
						</td>
					</tr>
					<tr class="table-active">
						
						<td>
							Barco 2
						</td>
						<td>
							<input type="text" id="coordenada" maxlength="1" size="2"> - <input type="text" maxlength="2" size="2">
						</td>
						<td>
							<select name="transporte">

                                <option>Vertical</option>
                                
                                <option>Horizontal</option>
                            
                            </select>
						</td>
					</tr>
					<tr class="table-success">
						
						<td>
							Barco 3
						</td>
						<td>
							<input type="text" id="coordenada" maxlength="1" size="2"> - <input type="text" maxlength="2" size="2">
						</td>
						<td>
							<select name="transporte">

                                <option>Vertical</option>
                                
                                <option>Horizontal</option>
                            
                            </select>
						</td>
					</tr>
					<tr class="table-warning">
						
						<td>
							Barco 4
						</td>
						<td>
							<input type="text" id="coordenada" maxlength="1" size="2"> - <input type="text" maxlength="2" size="2">
						</td>
						<td>
							<select name="transporte">

                                <option>Vertical</option>
                                
                                <option>Horizontal</option>
                            
                            </select>
						</td>
					</tr>
					<tr class="table-danger">
						
						<td>
							Barco 5
						</td>
						<td>
                        <input type="text" id="coordenada" maxlength="1" size="2"> - <input type="text" maxlength="2" size="2">
						</td>
						<td>
							<select name="transporte">

                                <option>Vertical</option>
                                
                                <option>Horizontal</option>
                            
                            </select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<img alt="Batalla " src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Schiffeversenk.jpg/220px-Schiffeversenk.jpg">
		</div>
	</div>
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
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>