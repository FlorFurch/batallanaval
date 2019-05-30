<?php
require_once '../helpers/FakeDB.php';
require_once '../layout/header.php';
require_once '../layout/nav-izquierda.php';
$banco = FakeDB::$banco;

// PROCESADO DEL POST

if(isset($_POST['boton'])){
    // FakeDB incluye Banco que a su vez incluye las demás clases
    $dep = $_POST;
    
        $nuevoSaldo=$banco->realizarDeposito($dep['nroCuenta'],$dep['monto']);
        
    
}
?>

      <!-- Main -->
        <main class="holygrail-main col-lg-7 col-xxl-9">
            <section class="text-center bg-warning">
                <h2>Main content</h2>
                <p class="lead">FORMULARIO DEPÓSITO</p>
                <span></span>
            </section>

            <div class="block">
                <div class="container-fluid">
                    <section class="mb-4">
                        <form method="post">
                          <div class="form-group">
                            <label for="apellido">Nro Cuenta</label>
                            <input type="text" class="form-control" name="nroCuenta" id="nroCuenta">
                          </div>
                          <div class="form-group">
                            <label for="dni">Monto a depositar</label>
                            <input type="text" class="form-control" name="monto" id="monto">
                          </div>
                          <button name="boton" type="submit" class="btn btn-primary">Depositar</button>
                        </form>                        
                    </section>

                </div>
                 <div class="container-fluid">
                    
                    <section class="mb-4">
                        <h5>Saldo actualizado</h5>
                          <table class="table">
            <thead>
                
            </thead>
            <tbody>
               <?php
               
                
                    echo "
					<tr>
						
						<td>
							$nuevoSaldo
						</td>
                                              
					</tr>";
                
                
                ?>
                


            </tbody>
        </table>
                    </section>
                </div>
            </div>

        </main>

<?php
FakeDB::guardarEnSesion();
require_once '../layout/nav-derecha.php';
require_once '../layout/footer.php';