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
	
	public function users_data($data) {
		$builder = $this->db->table('users_data');
        $builder->insert($data);
        $insert_id = $this->db->insertID();
        return $insert_id;
	}

	public function get_users_data() {
		
		$builder = $this->db->table('users_data');
		$builder->select('*');
		$query = $builder->get();
		$result = $query->getResultArray();
		return $result;
	}

}
