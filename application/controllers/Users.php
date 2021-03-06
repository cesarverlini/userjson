<?php
defined('BASEPATH') or exit('No direct script access allowed');

// include('../model/Empleado.php');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Usuarios";
		$this->load->view('template/header', $data);
		$this->load->view("users/users_add");
		$this->load->view('template/footer');
	}

	public function save_user()
	{		
		$user = $_POST['user'];
		$password = base64_encode($_POST['password']);		
		$decode = base64_decode($password);


		$data = array(
			'insta_username' => $user,
			'insta_password' => $password,
			// 'password_decode' => $decode,
		);

		$json_string = json_encode($data);
		$file = 'json/usuarios.json';
		file_put_contents($file, $json_string);

		redirect(base_url());
	}

}
