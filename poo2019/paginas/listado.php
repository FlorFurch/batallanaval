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
            <div class="block"> <table class="table">
            <thead>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        DNI
                    </th>
                    <th>
                        N° de Cliente
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($banco as $c) {
                    echo "
					<tr>
						
						<td>
                                                  {$c['dni']}
						</td>
						<td>
							{$c['nombre']}
						</td>
						<td>
							{$c['apellido']}
						</td>
                                                <td>
							{$c['nroCliente']}
						</td>
					</tr>";
                }
                ?>


            </tbody>
        </table>
            </div>
            <div class="block">
                <div class="container-fluid">
                    <section class="mb-4">
                        <h5>Lista de clientes</h5>
                        <pre>
                        <?php
                        print_r(FakeDB::$banco);
                        ?>
                        </pre>
                    </section>
                    <section class="mb-4">
                        <h5>Lista de Cuentas</h5>
                        <pre>
                        <?php
                        print_r(FakeDB::$banco);
                        ?>
                        </pre>
                    </section>
                </div>
            </div>
        </main>

<?php
// guardo en sesión los datos de BANCO

FakeDB::guardarEnSesion();
require_once '../layout/nav-derecha.php';
require_once '../layout/footer.php';