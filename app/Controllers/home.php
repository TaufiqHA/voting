<?php 

class Home extends Controller
{
	public function index()
	{
		$data['judul'] = 'VOTING | ANGKA 2022';
		$data['vote'] = $this->model('Voting_model')->getData();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('modals/home');
		$this->view('templates/footer');
	}

	public function get()
	{
		echo json_encode($data['nilai'] = $this->model('Voting_model')->getData());
	}
}