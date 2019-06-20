<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'".base_url()?>vendors/bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo "'".base_url()?>vendors/metisMenu/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'".base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom Fonts -->
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

                     <div class="panel-heading">
                        <h3 class="panel-title">Aviso</h3>
                    </div>
                    <div class="panel-body">
                        <fieldset>
                            <form role="form">
                            <div class="form-group">                                        
                                             <h4 class="text-primary">Estimado, el email ingresado es inexistente</h4>
                                             </div> 
                                    
                                    <a href=<?php echo "'".base_url()?>login/forgotPassword<?php echo "'"?> class="btn btn-lg btn-info btn-block">Volver a consultar</a>
                                    <br/>
                                    <a href=<?php echo "'".base_url()?>login/index<?php echo "'"?> class="btn btn-lg btn-primary btn-block">Volver al login</a>
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