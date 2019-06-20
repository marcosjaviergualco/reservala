<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		$this->load->model('index','index');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		if(!empty($_POST)){
			http_response_code(400);
				$mail = $this->input->post('email');
				$pass = $this->input->post('password');
				if($mail !== null && $pass !== null){
					$email = filter_var($mail, FILTER_VALIDATE_EMAIL);
					if($email){
						$result = $this->index->validaUserPass(email,$pass);
						if($result){
							http_response_code(200);
							$result = [
								'status' => 'Success',
								'message' => 'Autenticación correcta',
								'data' => [
									'nombreCompleto' => 'Armando Esteban Quito'
								]
							];
							$this->parser->parse('panelPrincipal',$result);
						}else{
							$result = [
								'status' => 'Error',
								'message' => 'Credenciales inválidas',
								'data' => []
							];
						}
					}else{
						$result = [
							'status' => 'Error',
							'message' => 'Formato de email incorrecto',
							'data' => []
						];
					}
				}else{
					$result = [
						'status' => 'Error',
						'message' => 'Parametros incompletos',
						'data' => []
					];
				}
		}else{
			$result = [
				'status' => 'Error',
				'message' => 'Parametros vacios',
				'data' => []
			];
		}

		return $result;
	}

	public function mainPanel()
	{

		$this->load->view('panelPrincipal');
	}

	public function resetPassword()
	{

		//$this->load->view('login');
	}
}
