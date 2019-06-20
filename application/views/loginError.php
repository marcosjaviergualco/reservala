<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <link href=<?php echo "'".base_url()?>vendors/bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>vendors/metisMenu/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>vendors/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div  class="login-panel">
                   <img class="center-block" src=<?php echo "'".base_url()?>img/Voolkia.png<?php echo "'"?> alt="logo voolkia" />
                </div>
                <div class="login-panel panel panel-default">

					 <div class="alert alert-danger">
							<a href="#" class="alert-link">Error en Acceso</a>
                                Usuario o clave incorrecto o no posee permisos suficientes.
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action=<?php echo "'".base_url()?>login/index<?php echo "'"?>>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="usuario" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="clave" type="password" value="">
                                </div>
								<div class="form-group">
								    <a  href=<?php echo "'".base_url()?>login/forgotPassword<?php echo "'"?> class="btn btn-outline btn-warning btn-xs">Olvido de clave </a>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src=<?php echo "'".base_url()?>vendors/jquery/jquery.min.js<?php echo "'"?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo "'".base_url()?>vendors/bootstrap/js/bootstrap.min.js<?php echo "'"?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo "'".base_url()?>vendors/metisMenu/metisMenu.min.js<?php echo "'"?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo "'".base_url()?>dist/js/sb-admin-2.js<?php echo "'"?>></script>

</body>

</html>
