<?php namespace App\Controllers;

class Data extends BaseController
{
	public function pegawai($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_pegawai', false);
		if ($tipe == "save") {
			$data = array(
				'id_anggota'	=> strtoupper($this->request->getPost('id-anggota')),
				'anggota' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			$cekData = $modelnya->getAnggota($data['id_anggota']);
			if ($cekData) {
				echo "exist";
			} else {
				echo json_encode($modelnya->simpan($data));
			}
    }

		else if ($tipe == "edit") {
			$data = array(
				'id_anggota'	=> strtoupper($this->request->getPost('id-anggota')),
				'anggota' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			echo json_encode($modelnya->ubah($data, $this->request->getPost('kode-awal')));
		}

		else if ($tipe == "delete") {
			echo json_encode($modelnya->hapus($id));
		}

		else {
      $datanya = $modelnya->getPegawai($id);
      echo json_encode($datanya);
    }
	}

}
