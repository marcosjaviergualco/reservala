<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Recurso solicitado no hallado</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>

	<link href="../../../adminconcursos/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../../adminconcursos/vendors/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../adminconcursos/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../adminconcursos/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="container">
		
		<div class="col-md-4 col-md-offset-4">

				<div  class="login-panel">
				   <img class="center-block" src="../../../concurso/img/Voolkia.png" alt="logo voolkia" />
				</div> 
					
                <div class=" panel panel-danger">
						
                    <div class="panel-heading">
					
                        <h3 class="panel-title">Acceso incorrecto</h3>
                    </div>

                        <div class="panel-body ">
                            <p>El recurso solicitado no pudo ser hallado.</p>
							
							<p>Le rogamos que intene nuevamente a la brevedad.</p>
                        </div>
              
                            <a href="../login/logout" class="btn btn-lg btn-danger btn-block">Volver al login</a>      
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
	</div>

	<script src="../../../concurso/vendors/jquery/jquery.min.js"></script>

    <script src="../../../concurso/vendors/bootstrap/js/bootstrap.min.js"></script>

    <script src="../../../concurso/vendors/metisMenu/metisMenu.min.js"></script>

    <script src="../../../concurso/dist/js/sb-admin-2.js"></script>
</body>
</html>