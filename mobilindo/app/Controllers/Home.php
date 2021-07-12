<?php

namespace App\Controllers;

use App\Models\M_user;

class Home extends BaseController
{
	protected $M_user;
	public function __construct()
	{
		$this->M_user = new M_user();
	}

	public function index()
	{
		$data = [
			'title' => 'Daftar Mobil'
		];

		return view('welcome_message');
	}
	public function coba()
	{
		$db = \Config\Database::connect();
		$sql = "SELECT * FROM user ORDER BY user_id DESC";
		$result = $db->query($sql);
		$row = $result->getResult('array');

		$data = [
			'title' => 'Coba Mobil',
			'order' => $row
		];

		return view('coba', $data);
	}
}
