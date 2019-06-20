<?php die(phpinfo());?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de reservas</title>

    <link href=<?php echo "'" . base_url()?>bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'" . base_url()?>bower_components/metisMenu/dist/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'" . base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'" . base_url()?>bower_components/jquery/dist/jquery.min.css<?php echo "'"?> rel="stylesheet">

    <link href=<?php echo "'" . base_url()?>font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

	<script src=<?php echo "'" . base_url()?>jquery/jquery.min.js<?php echo "'"?>></script>

	<script src=<?php echo "'" . base_url()?>bootstrap/js/bootstrap.min.js<?php echo "'"?>></script>
	<script src=<?php echo "'" . base_url()?>bower_components/metisMenu/dist/metisMenu.min.js<?php echo "'"?>></script>

	<script src=<?php echo "'" . base_url()?>dist/js/sb-admin-2.js<?php echo "'"?>></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div  class="login-panel">
                   <img class="center-block" src=<?php echo "'" . base_url()?>img/reservala-icon.png<?php echo "'"?> alt="logo voolkia" />
                </div> 
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Por favor ingrese los datos</h3>
                    </div>
                    <div class="panel-body">
                        <form id="formLogin" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
									<input id="email" class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
								</div>
								<div id="emailField" style="display: none" class="form-group alert alert-warning">
									El campo de email debe estar completo
								</div>

								<div class="form-group">
                                    <input id="password" class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
								<div id="passwordField" style="display: none" class="form-group alert alert-warning">
									Debe completar el campo de clave
								</div>
								<div class="form-group">
									<a  href=<?php echo "'" . base_url()?>/welcome/resetPassword<?php echo "'"?> class="btn btn-outline btn-warning btn-xs">Olvido de clave </a>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="button" id="validaCredenciales" class="btn btn-lg btn-success btn-block" value="Ingresar">
                            </fieldset>
							<div id="autenticacionInvalida" class="form-group alert wy-alert-warning" style="display: none;">
							</div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
	<script>
		/*$(document).ready(function(){

		});*/
		$('#validaCredenciales').on('click',function(){
			if($('#email').val() === ""){
				$('#emailField').css('display','block');
				$('#passwordField').css('display','none');
				return false;
			}
			if($('#password').val() === ""){
				$('#emailField').css('display','none');
				$('#passwordField').css('display','block');
				return false;
			}
			$data = {'email' : $('#email').val(), 'password' : $('#password').val()}
			$.ajax({
				type: "POST",
				url: '<?=base_url()?>' +'Welcome/login',
				data: $data,
				contentType: "application/json",
				success: function(){
					redirect(base_url()+'welcome/mainPanel');
				},
				error: function(){

				}
			});
		});
	</script>


</body>

</html>
