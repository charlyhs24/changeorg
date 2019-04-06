<?php
class Petition_model extends CI_Model {
    public function getPetitionByUser(){
        $this->db->where('id_users', 1); // get user_id from session when user do login
        $query = $this->db->get('petisi');
        return $query->result();
    }
    public function getPetitionById($petition_id){
        $this->db->join('users', 'users.id_users = petisi.id_users');
        $this->db->where('id_petisi',$petition_id); 
        $query = $this->db->get('petisi');
        return $query->row();
    }
    public function insertPetition(){

    }
    
}
?>