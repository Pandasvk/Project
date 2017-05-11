<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 14:33
 */
class M_bar extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function post_bar(){
        $this->db->insert('bar', $this->input->post());

    }

    function get_bar(){
        $query = $this->db->get('bar');
        return $query->result();

    }
    function get_sportovisko($id){
        $query = $this->db->get_where('bar',array('idBar' => $id) );
        return $query->result();

    }
    function update_bar($id,$data){
        $this->db->where('idBar', $id);
        $this->db->update('bar',$data);
    }
    function delete_bar($id){
        $this->db->where('idBar', $id);
        $this->db->delete('bar');
    }

}