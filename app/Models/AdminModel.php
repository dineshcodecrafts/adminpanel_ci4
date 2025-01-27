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

	public function get_users_data_id($users_id) {
		
		$builder->where('id', $users_id);
		$builder = $this->db->table('users_data');
		$builder->select('*');
		$query = $builder->get();
		$result = $query->getResultArray();
		return $result;
	}


	public function update_formdata($data, $id)
    {
        if (isset($id) && $id != FALSE) {
            $builder = $this->db->table($users_data);  // Use the table defined in the model
            $builder->where('id', $id);  // Condition to select the record based on ID
            $builder->update($data);  // Update the data with the provided array
            return TRUE;
        } else {
            return FALSE;
        }
    }


	public function delete_fromdata($id)
    {
        if (isset($id) && $id != FALSE) {
            $builder = $this->db->table($users_data);  // Using 'users' table
            $builder->where('id', $id);  // Select the record based on ID
            $builder->delete();  // Delete the record
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
