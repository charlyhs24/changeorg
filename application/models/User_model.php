<?php
class User_model extends CI_Model {
    public function getUserProfile($user_id){
        $this->db->where('id_users', $user_id);
        $query = $this->db->get('users');
        return $query->row();
    }
    public function getUser($user){
        $this->db->where('email',$user['email']);
        $this->db->where('password',$user['password']);
        $query = $this->db->get('users');
        return $query->row();
    }
    // public function updateProfile($petition_id){
    //     $this->db->join('users', 'users.id_users = petisi.id_users');
    //     $this->db->where('id_petisi',$petition_id); 
    //     $query = $this->db->get('petisi');
    //     return $query->row();
    // }
    
}
?>