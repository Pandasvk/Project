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

    function get_data_graf1(){
       $query =$this->db->query("SELECT count(Pouzivatelia_idPouzivatelia) as navstevnost,s.nazov FROM kalendar  k
inner join sportoviskas s ON k.Sportoviska_idSportoviska=s.idSportoviska
GROUP by Sportoviska_idSportoviska");
        return $query->result();
    }

    /*Kalendar kto chodi kolko sportovat */
    function get_data_graf3(){
        $query =$this->db->query("SELECT count(idKalendar) as pocet,p.meno FROM kalendar k INNER JOIN pouzivatelia p on k.Pouzivatelia_idPouzivatelia=p.idPouzivatelia GROUP by p.meno");
        return $query->result();
    }
    /*Kto k nam berie najviac priatelov */
    function get_data_graf4(){
        $query =$this->db->query("SELECT Sum(zaplatene) as suma,p.meno FROM kalendar k INNER JOIN pouzivatelia p on k.Pouzivatelia_idPouzivatelia=p.idPouzivatelia GROUP by p.meno");
        return $query->result();
    }

}