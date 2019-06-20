<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de reservas</title>

    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

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
                        <img src="../img/reservala-icon.png" alt="logo voolkia" />&nbsp;{{ app.session.get('nombre') }}
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                              
                                <li class="divider"></li>
                                <li><a href="{{asset('login/logout')}}"><i class="fa fa-sign-out fa-fw  fa-user "></i> Cerrar sesi&oacute;n</a>
                                </li>
                            </ul>
                            
                        </li>
                        
                    </ul>
                  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{path('processNewAdministratorAccount')}}"><i class="fa fa-edit fa-fw"></i> Alta de club </a>
                        </li>
                        <li>
                            <a href="{{path('processNewClub')}}"><i class="fa fa-edit fa-fw"></i> Alta de club </a>
                        </li>
                        <li>
                            <a href="{{path('reservasPendientes')}}"><i class="fa fa-edit fa-fw"></i> Confirmaci&oacute;n de reservas </a>
                        </li>
                        <li>
                            <a href="{{path('processNewCancellationReservation')}}"><i class="fa fa-edit fa-fw"></i> Cancelaci&oacute;n de reservas </a>
                        </li>
                        <li>
                            <a href="{{path('processNewCourtCancellation')}}"><i class="fa fa-edit fa-fw"></i> Inhabilitaci&oacute;n de canchas </a>
                        </li>
                        <li>
                            <a href="{{path('processNewUserLock')}}"><i class="fa fa-edit fa-fw"></i> Bloqueo de usuarios </a>
                        </li>
                    </ul>
                </div>

            </div>

            </nav>
		</div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Listado de clubes habilitados</h3>
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
                                            <th>Razon Social</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {% for club in clubes %}
                                        <tr class="odd gradeX">
                                            <td class="center">{{club.razonSocial}}</td>
                                            <td class="center">{{club.telefono}}</td>
                                            <td class="center">{{club.direccion}}</td>
                                            <td  class='center'><form id="form{{club.idClub}}" action="{{path('showClubData')}}" method='post'><input type='hidden' name='concurso' value="{{club.idClub}}"><input id="btn{{club.idClub}}" type='submit' class='btn btn-default' value='Visualizar'/></form></td>
                                        </tr>
                                    {% endfor %}
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

    <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>


    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <script src="{{asset('/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('/dist/js/sb-admin-2.js')}}"></script>
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