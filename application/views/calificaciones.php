<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de concursos Voolkia</title>

    <link href=<?php echo "'".base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>vendors/bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>vendors/metisMenu/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'".base_url()?>vendors/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Plataforma de administraci&oacute;n</a>
                </div>
                <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <img src="../img/Voolkia.png" alt="logo voolkia" />
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                              
                                <li class="divider"></li>
                                <li><a href=<?php echo "'".base_url()?>login/logout<?php echo "'"?>><i class="fa fa-sign-out fa-fw  fa-user "></i> Cerrar sesi&oacute;n</a>
                                </li>
                            </ul>
                            
                        </li>
                        
                    </ul>
                  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=<?php echo "'".base_url()?>login/index<?php echo "'"?>><i class="fa fa-edit fa-fw"></i> Actulizar listado </a>
                        </li>
                        <li>
                            <a href=<?php echo "'".base_url()?>estadisticas/index<?php echo "'"?>><i class="fa fa-edit fa-fw"></i> Estadisticas </a>
                        </li>
                    </ul>
                </div>

            </div>

            </nav>
		</div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Listado general de concursos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       

                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha apertura</th>
                                            <th>Fecha cierre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {concursos}
                                        <tr class="odd gradeX">
                                            <td class="center">{nombre}</td>
                                            <td class="center">{fechaDesde}</td>
                                            <td class="center">{fechaHasta}</td>
                                            <td  class='center'><form id="form{idConcurso}" action=<?php echo "'".base_url()?>concursos/procesarConcurso<?php echo "'"?> method='post'><input type='hidden' name='concurso' value="{idConcurso}"><input id="btn{idConcurso}" type='submit' class='btn btn-default' value='Visualizar'/></form></td>
                                        </tr>
                                    {/concursos}
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>

                    </div>

                </div>

            </div>
            
            </div>

        </div>

    </div>

    <script src=<?php echo "'".base_url()?>/bower_components/jquery/dist/jquery.min.js<?php echo "'"?>></script>


    <script src=<?php echo "'".base_url()?>/bower_components/bootstrap/dist/js/bootstrap.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'".base_url()?>/bower_components/metisMenu/dist/metisMenu.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'".base_url()?>/bower_components/datatables/media/js/jquery.dataTables.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'".base_url()?>/dist/js/sb-admin-2.js<?php echo "'"?>></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        $('#calculateAverage').click(function(){
            $.post('<?php echo base_url()?>companies/calculateAverage',function(response){
                $('#average').attr("value",response);
            });
        });
        
    });
    </script>

</body>

</html>