<?php
class Petition_model extends CI_Model {
    public function getPetitionByUser($userdata){
        $this->db->where('id_users', $userdata->id_users); // get user_id from session when user do login
        $query = $this->db->get('petisi');
        return $query->result();
    }
    public function getPetitionById($petition_id){
        $this->db->join('users', 'users.id_users = petisi.id_users');
        $this->db->where('id_petisi',$petition_id); 
        $query = $this->db->get('petisi');
        return $query->row();
    }
    public function getAllPetition(){
        $this->db->join('users', 'users.id_users = petisi.id_users');
        $query = $this->db->get('petisi');  
        return $query->result();
    }
    public function insertPetition($data){
        return $this->db->insert('petisi', $data);
    }
    public function setTtdPetition($data){
        return $this->db->insert('ttd_petisi', $data);
    }
    public function getByTerbaru(){
        $this->db->order_by('jumlah_ttd','ASC');
        $query = $this->db->get('petisi');
        return $query->result();
    }
    public function getByPopuler(){
        $this->db->order_by('jumlah_ttd','DESC');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get('petisi');
        return $query->result();
    }
    public function getByTerbanyak(){
        $this->db->order_by('jumlah_ttd','DESC');
        $query = $this->db->get('petisi');
        return $query->result();
    }
    public function updatePendukung($userdata,$formdata){
        $this->db->where('id_petitisi',$formdata['petitionId']);
        $userSignature = $this->db->get('ttd_petisi');
        $userSignature = $userSignature->row();
        if($userSignature){
            if($userSignature->status_ttd == 1){
                return "done";
            }else {
                $this->db->set('status_ttd',1);
                $this->db->set('komentar',$formdata['komentar']);
                $this->db->where('id_users', $userdata->id_users);
                $updateSignature = $this->db->update('ttd_petisi');
                if($updateSignature){
                    $this->db->set('jumlah_ttd', 'jumlah_ttd+1', FALSE);
                    $this->db->where('id_petisi',$formdata['petitionId']);
                    $query = $this->db->update('petisi'); 
                    return $query;
                }
            }
        }else{
            $signature = array (
                'komentar' => $formdata['komentar'],
                'id_petitisi' => $formdata['petitionId'],
                'id_users' => $userdata->id_users,
                'status_ttd'=> 1
            );
            $result = $this->setTtdPetition($signature);
            if($result){
                $this->db->set('jumlah_ttd', 'jumlah_ttd+1', FALSE);
                $this->db->where('id_petisi',$formdata['petitionId']);
                $query = $this->db->update('petisi'); 
                return $query;
            }            
        }
    }
}
?>