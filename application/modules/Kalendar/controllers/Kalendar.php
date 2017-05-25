<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 9:59
 */
class Kalendar extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kalendar');
        $this->load->module('template');
    }

    function display_Kalendar(){
        $data['page_header'] = "Vsetky Kalendar";
        $data['description'] = "Kalendar";
        $data['content_view'] = 'Kalendar/Kalendar_v';
        $data['tabulka_Kalendarov'] = $this->tabulka_Kalendarov();
        $this->template->call_template_v($data);
    }
    function pridajKalendar(){
        $data['page_header'] = "Pridaj Kalendar";
        $data['description'] = "Pridaj Kalendar do systemu";
        $data['content_view'] = 'Kalendar/pridaj_Kalendar_v';
        $data['pouzivatelia'] = $this->create_pouzivatel_select();
        $data['sportoviska'] =$this->create_sportoviska_select();
        $this->template->call_template_v($data);
    }
    function post_Kalendar(){
        $this->M_Kalendar->post_Kalendar();
        redirect(base_url() . 'Admin/Kalendar');
    }

    function tabulka_Kalendarov(){
        $Kalendar = $this->M_Kalendar->get_Kalendare();
        $tabulka_Kalendarov ="";

        if(count($Kalendar)>0){
            $counter =1;
            foreach ($Kalendar as $key => $value){
                $meno =$this->create_meno_tabulka($value->Pouzivatelia_idPouzivatelia);
                $sportovisko=$this->create_sportovisko_tabulka($value->Sportoviska_idSportoviska);
                $tabulka_Kalendarov .="<tr>";
                $tabulka_Kalendarov .="<td>[$counter]</td>";
                $tabulka_Kalendarov .="<td>[$value->datums]</td>";
                $tabulka_Kalendarov .="<td>[$sportovisko]</td>";
                $tabulka_Kalendarov .="<td>[$meno]</td>";
                $tabulka_Kalendarov .="<td>[$value->zaplatene]</td>";
                $tabulka_Kalendarov .="<td><a href ='".base_url()."Admin/edit_Kalendar/{$value->idKalendar}'>Edit</a>
                |
                <a href ='".base_url()."Admin/delete_Kalendar/{$value->idKalendar}'>Delete</a></td>";
                $tabulka_Kalendarov .="</tr>";

            }
        }
        return $tabulka_Kalendarov;
    }

    function edit_Kalendar (){
        $id =  $this->uri->segment(3);
        $Kalendar = $this->M_Kalendar->get_Kalendar($id);
        $data['page_header'] = "Edituj Kalendar";
        $data['description'] = "Edituj Kalendar do systemu";
        $data['content_view'] = 'Kalendar/edit_Kalendar_v';
        $data['datums']=$Kalendar['0']->datums;
        $data['Sportoviska_idSportoviska']=$Kalendar['0']->Sportoviska_idSportoviska;
        $data['Pouzivatelia_idPouzivatelia']=$Kalendar['0']->Pouzivatelia_idPouzivatelia;
        $data['zaplatene']=$Kalendar['0']->zaplatene;
        $data['id']=$id;
        $data['pouzivatelia'] = $this->create_pouzivatel_select();
        $data['sportoviska'] =$this->create_sportoviska_select();
        $this->template->call_template_v($data);
    }

    function post_edit_Kalendar(){
        $id = $this->input->post('ID');
        $data = array('datums' => $this->input->post('datums'), 'Sportoviska_idSportoviska'=> $this->input->post('idsportovisko'),'Pouzivatelia_idPouzivatelia'=> $this->input->post('idpouzivatel'),
            'zaplatene'=> $this->input->post('zaplatene'),'hodin'=> $this->input->post('hodin'), 'zlava'=> $this->input->post('zlava'),);
        $this->M_Kalendar->update_Kalendar($id,$data);
        redirect(base_url() . "Admin/Kalendar");
    }

    function delete_Kalendar(){
        $id =$this->uri->segment(3);
        $Kalendar = $this->M_Kalendar->get_Kalendar($id);
        $data['page_header'] = "Vymaz Kalendar";
        $data['description'] = "Vymaz Kalendar do systemu";
        $data['content_view'] = 'Kalendar/delete_Kalendar_v';
        $data['datums']=$Kalendar['0']->datums;
        $data['Sportoviska_idSportoviska']=$Kalendar['0']->Sportoviska_idSportoviska;
        $data['Pouzivatelia_idPouzivatelia']=$Kalendar['0']->Pouzivatelia_idPouzivatelia;
        $data['zaplatene']=$Kalendar['0']->zaplatene;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_Kalendar(){
        $id = $this->input->post('ID');
        $this->M_Kalendar->delete_Kalendar($id);
        redirect(base_url() . "Admin/Kalendar");
    }

    function create_pouzivatel_select(){
        $this->load->model('Pouzivatelia/M_pouzivatelia');
        $pouzivatel = $this->M_pouzivatelia->get_pouzivatelia();
        $options ="";
        if(count($pouzivatel)){
        foreach ($pouzivatel as $key => $value){
            $options .="<option value ='{$value->idPouzivatelia}'>{$value->meno}{$value->priezvisko}</option>";
        }
        }
        return $options;
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

    function create_meno_tabulka($id){
        $this->load->model('Pouzivatelia/M_pouzivatelia');
        $pouzivatel = $this->M_pouzivatelia->get_pouzivatela($id);
        $meno = $pouzivatel['0']->meno;
        return $meno;
    }
    function create_sportovisko_tabulka($id){
        $this->load->model('Sportoviska/M_sportoviska');
        $sportovisko = $this->M_sportoviska->get_sportovisko($id);
        $nazov = $sportovisko['0']->nazov;
        return $nazov;
    }
}