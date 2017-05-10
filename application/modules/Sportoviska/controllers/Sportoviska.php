<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 9:50
 */
class Sportoviska extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_sportoviska');
        $this->load->module('template');
    }

    function display_sportoviska(){
        $data['page_header'] = "Vsetky Sportoviska";
        $data['description'] = "Sportoviska";
        $data['content_view'] = 'Sportoviska/sportoviska_v';
        $data['tabulka_sportovisk'] = $this->tabulka_sportoviska();
        $this->template->call_template_v($data);
    }
    function pridajSportoviska(){
        $data['page_header'] = "Pridaj sportovisko";
        $data['description'] = "Pridaj sportovisko do systemu";
        $data['content_view'] = 'Sportoviska/pridaj_sportovisko_v';
        $this->template->call_template_v($data);
    }
    function post_sportovisko(){
        $this->M_sportoviska->post_sportoviska();
            redirect(base_url() . 'Admin/sportoviska');
        }

    function tabulka_sportoviska(){
        $sportoviska = $this->M_sportoviska->get_sportoviska();
        $tabulka_sportovisk ="";

        if(count($sportoviska)>0){
            $counter =1;
            foreach ($sportoviska as $key => $value){
                $tabulka_sportovisk .="<tr>";
                $tabulka_sportovisk .="<td>[$counter]</td>";
                $tabulka_sportovisk .="<td>[$value->nazov]</td>";
                $tabulka_sportovisk .="<td>[$value->Popis]</td>";
                $tabulka_sportovisk .="<td><a href ='".base_url()."Admin/edit_sportovisko/{$value->idSportoviska}'>Edit</a>
                |
                <a href ='".base_url()."Admin/delete_sportovisko/{$value->idSportoviska}'>Delete</a></td>";
                $tabulka_sportovisk .="</tr>";

            }
        }
        return $tabulka_sportovisk;
    }

    function edit_sportovisko (){
        $id =  $this->uri->segment(3);
        $sportovisko = $this->M_sportoviska->get_sportovisko($id);
        $data['page_header'] = "Edituj sportovisko";
        $data['description'] = "Edituj sportovisko do systemu";
        $data['content_view'] = 'Sportoviska/edit_sportovisko_v';
        $data['nazov']=$sportovisko['0']->nazov;
        $data['popis']=$sportovisko['0']->Popis;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }

    function post_edit_sportovisko(){
        $id = $this->input->post('ID');
        $data = array('nazov' => $this->input->post('nazov'), 'Popis'=> $this->input->post('Popis'));
        $this->M_sportoviska->update_sportoviska($id,$data);
        redirect(base_url() . "Admin/sportoviska");
    }

    function delete_sportovisko(){
        $id =$this->uri->segment(3);
        $sportovisko = $this->M_sportoviska->get_sportovisko($id);
        $data['page_header'] = "Vymaz sportovisko";
        $data['description'] = "Vymaz sportovisko do systemu";
        $data['content_view'] = 'Sportoviska/delete_sportovisko_v';
        $data['nazov']=$sportovisko['0']->nazov;
        $data['popis']=$sportovisko['0']->Popis;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_sportovisko(){
        $id = $this->input->post('ID');
        $this->M_sportoviska->delete_sportovisko($id);
        redirect(base_url() . "Admin/sportoviska");
    }
}