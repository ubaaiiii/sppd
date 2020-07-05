<?php namespace App\Models;
use CodeIgniter\Model;

class M_pegawai extends Model
{
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'nip';

    public function getPegawai($id = null)
    {
      $db      = \Config\Database::connect();
      $builder = $db->table('tb_pegawai a');

      if($id === null){
        // return $this->findAll();
        $builder->select('a.nip, a.nama, b.msdesc jk, c.msdesc jab, a.telp');
        $builder->join('tb_master b','b.msid = a.jk AND b.mstype="JK"');
        $builder->join('tb_master c','c.msid = a.jab AND c.mstype="JAB"');
        return $builder->get()->getResult();
      } else {
        return $this->find($id);
      }
    }

    public function simpan($data)
    {
        if($this->db->table($this->table)->insert($data)){
          return "true";
        } else {
          return "false";
        }
    }

    public function ubah($data, $id)
    {
        return json_encode($this->db->table($this->table)->update($data,['id_anggota'=>$id]));
    }

    public function hapus($id)
    {
        if($this->delete($id)) {
          return "true";
        } else {
          return "false";
        }
    }

}
