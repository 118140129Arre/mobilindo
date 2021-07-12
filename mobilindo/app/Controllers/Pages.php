<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | BDLMobilindo'
		];
		return view('pages/home', $data);
	}

	// public function berita()
	// {
	// 	$data = [
	// 		'title' => 'Berita'
	// 	];
	// 	return view('pages/berita', $data);
	// }

}
