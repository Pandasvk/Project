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
                $tabulka_Kalendarov .="<tr>";
                $tabulka_Kalendarov .="<td>[$counter]</td>";
                $tabulka_Kalendarov .="<td>[$value->datums]</td>";
                $tabulka_Kalendarov .="<td>[$value->Sportoviska_idSportoviska]</td>";
                $tabulka_Kalendarov .="<td>[$value->Pouzivatelia_idPouzivatelia]</td>";
                $tabulka_Kalendarov .="<td>[$value->cenahod]</td>";
                $tabulka_Kalendarov .="<td>[$value->hodin]</td>";
                $tabulka_Kalendarov .="<td>[$value->zlava]</td>";
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
        $data['cenahod']=$Kalendar['0']->cenahod;
        $data['hodin']=$Kalendar['0']->hodin;
        $data['zlava']=$Kalendar['0']->zlava;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }

    function post_edit_Kalendar(){
        $id = $this->input->post('ID');
        $data = array('datums' => $this->input->post('datums'), 'Sportoviska_idSportoviska'=> $this->input->post('idsportovisko'),'Pouzivatelia_idPouzivatelia'=> $this->input->post('idpouzivatel'),
            'cenahod'=> $this->input->post('cenahod'),'hodin'=> $this->input->post('hodin'), 'zlava'=> $this->input->post('zlava'),);
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
        $data['cenahod']=$Kalendar['0']->cenahod;
        $data['hodin']=$Kalendar['0']->hodin;
        $data['zlava']=$Kalendar['0']->zlava;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_Kalendar(){
        $id = $this->input->post('ID');
        $this->M_Kalendar->delete_Kalendar($id);
        redirect(base_url() . "Admin/Kalendar");
    }
}