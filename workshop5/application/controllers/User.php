<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function users()
	{
		$this->load->model('User_model');
		$data['users'] = $this->User_model->getAll();
		$this->load->view('users', $data);
	}

	public function newUser()
	{
		$this->load->model('User_model');
		if ($this->input->post('password') === $this->input->post('confirmPass')) {
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->User_model->add($name, $username, $password)) {
				redirect(site_url('user/users'));
			} else {
				echo 'No se agrego';
			}
		} else {
			echo 'Contraseñas diferentes! <a href="/register">Back</a>';
		}
	}

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('User_model');
		if ($this->User_model->authenticate($username, $password)) {
			echo 'Validado';
		} else {
			echo 'No existe';
		}
	}
}