<?php
require_once '../helpers/FakeDB.php';
require_once '../layout/header.php';
require_once '../layout/nav-izquierda.php';
$banco = FakeDB::$banco;

?>

      <!-- Main -->
        <main class="holygrail-main col-lg-7 col-xxl-9">
            <section class="text-center bg-warning">
                <h2>Main content</h2>
                <p class="lead">LISTADO.</p>
            </section>
 <div class="block">
     <div class="container-fluid">
                    
                    <section class="mb-4">
                        <h5>Lista de Clientes</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        DNI
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        N° de Cliente
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($banco->getCliente() as $c) {
                    
                
                    echo "
					<tr>
						
						<td>
                                                  {$c->getDni()}
						</td>
						<td>
							{$c->getApellido()}
						</td>
						<td>
							{$c->getNombre()}
						</td>
                                                <td>
							{$c->getNroCliente()}
						</td>
					</tr>";
                }
                ?>


            </tbody>
        </table>
                    </section>
     </div>
    </div>
            <div class="block">
                <div class="container-fluid">
                    
                    <section class="mb-4">
                        <h5>Lista de Cuentas Corriente</h5>
                          <table class="table">
            <thead>
                <tr>
                    <th>
                        N° Cuenta
                    </th>
                    <th>
                        Cliente
                    </th>
                    <th>
                        Saldo
                    </th>
                </tr>
            </thead>
            <tbody>
               <?php
                foreach ($banco->CuentasC() as $caja) {
                    
                
                    echo "
					<tr>
						
						<td>
                                                  {$caja->getNroCta()}
						</td>
						<td>
							{$caja->getCliente()}
						</td>
						<td>
							{$caja->saldoCuenta()}
						</td>
                                              
					</tr>";
                }
                
                ?>
                


            </tbody>
        </table>
                    </section>
                </div>
                  <div class="container-fluid">
                    
                    <section class="mb-4">
                        <h5>Lista de Cajas de Ahorro</h5>
                          <table class="table">
            <thead>
                <tr>
                    <th>
                        N° Cuenta
                    </th>
                    <th>
                        Cliente
                    </th>
                    <th>
                        Saldo
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($banco->CajasA() as $caja) {
                    
                
                    echo "
					<tr>
						
						<td>
                                                  {$caja->getNroCta()}
						</td>
						<td>
							{$caja->getCliente()}
						</td>
						<td>
							{$caja->saldoCuenta()}
						</td>
                                              
					</tr>";
                }
                
                ?>
                


            </tbody>
        </table>
                    </section>
                </div>
            </div>
        </main>

<?php
// guardo en sesión los datos de BANCO

FakeDB::guardarEnSesion();
require_once '../layout/nav-derecha.php';
require_once '../layout/footer.php';