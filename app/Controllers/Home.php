<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
				'lokasi' 			=> 'Home',
				'content' 		=> 'home/dashboard',
		);
		return view('home',$data);
	}

	//--------------------------------------------------------------------

	public function data_pegawai()
	{
		$data = array(
				'lokasi'	=> 'Data Pegawai',
				'content' => 'home/data_pegawai',
		);
		return view('home',$data);
	}

}
