<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | My Store'
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | My Store'
		];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Us | My Store',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl. Xyz No. 123',
					'kota' => 'Depok'
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'Jl. Abc No. 321',
					'kota' => 'Depok'
				]
			]
		];

		return view('pages/contact', $data);
	}
}
