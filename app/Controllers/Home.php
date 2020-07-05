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

	public function pegawai()
	{
		$M_master = new \App\Models\M_master();
		$data = array(
				'lokasi'		=> 'Data Pegawai',
				'content' 	=> 'home/pegawai',
				'sejabatan'	=> $M_master->getData('JAB'),
				'segolongan'=> $M_master->getData('GOLDAR'),
				'seagama'		=> $M_master->getData('AGAMA'),
		);
		return view('home',$data);
	}

}
