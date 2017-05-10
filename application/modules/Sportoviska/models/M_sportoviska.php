<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 14:33
 */
class M_sportoviska extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function post_sportoviska(){
        $this->db->insert('sportoviskas', $this->input->post());

    }

    function get_sportoviska(){
        $query = $this->db->get('sportoviskas');
        return $query->result();

    }
    function get_sportovisko($id){
        $query = $this->db->get_where('sportoviskas',array('idSportoviska' => $id) );
        return $query->result();

    }
    function update_sportoviska($id,$data){
        $this->db->where('idSportoviska', $id);
        $this->db->update('sportoviskas',$data);
    }
    function delete_sportovisko($id){
        $this->db->where('idSportoviska', $id);
        $this->db->delete('sportoviskas');
    }

}