<?php 

class Voting_model
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}

	public function getData()
	{
		$this->db->query('SELECT * FROM vote');
		return $this->db->resultset();
	}
}