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

	public function tambahVote($data)
	{
		$this->db->query('UPDATE vote SET nilai = nilai + :nilai WHERE id = :id');
		$this->db->bind('id', $data['id']);
		$this->db->bind('nilai', $data['nilai']);
		$this->db->execute();
		return true;
	}

	public function reset()
	{
		$this->db->query('UPDATE vote SET nilai = 0');
		$this->db->execute();
		return true;
	}
}