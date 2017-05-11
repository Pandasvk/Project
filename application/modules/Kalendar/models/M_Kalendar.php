<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 10:12
 */
class M_Kalendar extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function post_Kalendar(){
        $this->db->insert('kalendar', $this->input->post());

    }

    function get_Kalendare(){
        $query = $this->db->get('kalendar');
        return $query->result();

    }
    function get_Kalendar($id){
        $query = $this->db->get_where('kalendar',array('idKalendar' => $id) );
        return $query->result();

    }
    function update_Kalendar($id,$data){
        $this->db->where('idKalendar', $id);
        $this->db->update('kalendar',$data);
    }
    function delete_Kalendar($id){
        $this->db->where('idKalendar', $id);
        $this->db->delete('kalendar');
    }

}