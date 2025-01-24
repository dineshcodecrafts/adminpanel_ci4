<?php 

namespace App\Models;//path

use CodeIgniter\Model;

class AdminModel extends Model
{

	public $db;
    public function __construct()
	{
		// helper('cms');
        $this->db = \Config\Database::connect();
	}

	public function getrecords() {

		$builder = $this->db->table('users');
		$builder->select('*');
		$query = $builder->get();
		$result = $query->getRowArray();
		return $result;
	}

}
