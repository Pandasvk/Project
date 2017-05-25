<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 8:52
 */
class bar extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_bar');
        $this->load->module('template');
    }

    function display_bar(){
        $data['page_header'] = "Vsetky Bari";
        $data['description'] = "Bar";
        $data['content_view'] = 'bar/bar_v';
        $data['tabulka_barov'] = $this->tabulka_barov();
        $this->template->call_template_v($data);
    }
    function pridajBar(){
        $data['page_header'] = "Pridaj Bar";
        $data['description'] = "Pridaj Bar do systemu";
        $data['content_view'] = 'bar/pridaj_Bar_v';
        $data['sportoviska'] =$this->create_sportoviska_select();
        $this->template->call_template_v($data);
    }
    function post_bar(){
        $this->M_bar->post_bar();
        redirect(base_url() . 'Admin/bar');
    }

    function tabulka_barov(){
        $bar = $this->M_bar->get_bar();
        $tabulka_barov ="";

        if(count($bar)>0){
            $counter =0;
            foreach ($bar as $key => $value){
                $counter =$counter + 1;
                $sportovisko=$this->create_sportovisko_tabulka($value->Lokacia);
                $tabulka_barov .="<tr>";
                $tabulka_barov .="<td>[$counter]</td>";
                $tabulka_barov .="<td>[$value->Nazov]</td>";
                $tabulka_barov .="<td>[$sportovisko]</td>";
                $tabulka_barov .="<td>[$value->Popis]</td>";
                $tabulka_barov .="<td><a href ='".base_url()."Admin/edit_bar/{$value->idBar}'>Edit</a>
                |
                <a href ='".base_url()."Admin/delete_bar/{$value->idBar}'>Delete</a></td>";
                $tabulka_barov .="</tr>";

            }
        }
        return $tabulka_barov;
    }

    function edit_bar(){
        $id =  $this->uri->segment(3);
        $bar = $this->M_bar->get_bars($id);
        $data['page_header'] = "Edituj bar";
        $data['description'] = "Edituj bar do systemu";
        $data['content_view'] = 'bar/edit_bar_v';
        $data['nazov']=$bar['0']->Nazov;
        $data['lokacia']=$bar['0']->Lokacia;
        $data['popis']=$bar['0']->Popis;
        $data['sportoviska'] =$this->create_sportoviska_select();
        $data['id']=$id;
        $this->template->call_template_v($data);
    }

    function post_edit_bar(){
        $id = $this->input->post('ID');
        $data = array('nazov' => $this->input->post('nazov'), 'Lokacia'=> $this->input->post('lokacia'),'Popis'=> $this->input->post('Popis'));
        $this->M_bar->update_bar($id,$data);
        redirect(base_url() . "Admin/bar");
    }

    function delete_bar(){
        $id =$this->uri->segment(3);
        $bar = $this->M_bar->get_bar($id);
        $data['page_header'] = "Vymaz bar";
        $data['description'] = "Vymaz bar do systemu";
        $data['content_view'] = 'bar/delete_bar_v';
        $data['nazov']=$bar['0']->Nazov;
        $data['lokacia']=$bar['0']->Lokacia;
        $data['popis']=$bar['0']->Popis;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_bar(){
        $id = $this->input->post('ID');
        $this->M_bar->delete_bar($id);
        redirect(base_url() . "Admin/bar");
    }
    function create_sportoviska_select(){
        $this->load->model('Sportoviska/M_sportoviska');
        $sportoviska = $this->M_sportoviska->get_sportoviska();
        $options ="";
        if(count($sportoviska)){
            foreach ($sportoviska as $key => $value){
                $options .="<option value ='{$value->idSportoviska}'>{$value->nazov}</option>";
            }
        }
        return $options;
    }

    function create_sportovisko_tabulka($id){
    $this->load->model('Sportoviska/M_sportoviska');
    $sportovisko = $this->M_sportoviska->get_sportovisko($id);
    $nazov = $sportovisko['0']->nazov;
    return $nazov;
    }
}