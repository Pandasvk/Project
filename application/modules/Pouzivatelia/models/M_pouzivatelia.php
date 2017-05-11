<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 10:50
 */
class M_pouzivatelia extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function post_pouzivatelia(){
        $this->db->insert('pouzivatelia', $this->input->post());

    }

    function get_pouzivatelia(){
        $query = $this->db->get('pouzivatelia');
        return $query->result();

    }
    function get_pouzivatela($id){
        $query = $this->db->get_where('pouzivatelia',array('idPouzivatelia' => $id) );
        return $query->result();

    }
    function update_pouzivatelia($id,$data){
        $this->db->where('idPouzivatelia', $id);
        $this->db->update('pouzivatelia',$data);
    }
    function delete_pouzivatela($id){
        $this->db->where('idPouzivatelia', $id);
        $this->db->delete('pouzivatelia');
    }

}