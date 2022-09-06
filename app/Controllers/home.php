<?php 

class Home extends Controller
{
	public function index()
	{
		$data['judul'] = 'VOTING | ANGKA 2022';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('modals/home');
		$this->view('templates/footer');
	}
}