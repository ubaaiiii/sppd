<?php namespace App\Models;
use CodeIgniter\Model;

class M_master extends Model
{
    protected $table = 'tb_master';
    protected $primaryKey = 'msid';

    public function getData($mstype = null)
    {
      $db      = \Config\Database::connect();
      $builder = $db->table('tb_master');

      if($mstype === null){
        return $this->findAll();
      } else {
        return $builder->getWhere(['mstype' => $mstype])->getResult();
      }
    }
}
