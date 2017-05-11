<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 11:46
 */
class M_pozicane extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function post_pozicane(){
        $this->db->insert('pozicane', $this->input->post());

    }

    function get_pozicane(){
        $query = $this->db->get('pozicane');
        return $query->result();

    }
    function get_sportovisko($id){
        $query = $this->db->get_where('pozicane',array('idPozicane' => $id) );
        return $query->result();

    }
    function update_pozicane($id,$data){
        $this->db->where('idPozicane', $id);
        $this->db->update('pozicane',$data);
    }
    function delete_pozicane($id){
        $this->db->where('idPozicane', $id);
        $this->db->delete('pozicane');
    }

}