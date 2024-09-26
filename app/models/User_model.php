<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function getAllUsers(){
        return $data = $this->db->raw('select * from frm_users', array(), PDO::FETCH_ASSOC);
    }
    
    public function create($lastname, $firstname, $email, $gender, $address){
        $user_data = array(
            'frm_last_name' => $lastname,
            'frm_first_name' => $firstname,
            'frm_email' => $email,
            'frm_gender' => $gender,
            'frm_address' => $address,
        );
        return $this->db->table('frm_users')->insert($user_data);
    }
    public function get_user($id) {
        return $this->db->table('frm_users')->where('id', $id)->get();
    }
    public function update($lastname, $firstname, $email, $gender, $address, $id){
        $user_data = array(
            'frm_last_name' => $lastname,
            'frm_first_name' => $firstname,
            'frm_email' => $email,
            'frm_gender' => $gender,
            'frm_address' => $address
        );
        return $this->db->table('frm_users')->where('id', $id)->update($user_data);
    }
    public function delete($id){
        return $this->db->table('frm_users')->where('id', $id)->delete();
    }
}
?>
