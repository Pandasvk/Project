<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 11:24
 */
class Pozicane extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pozicane');
        $this->load->module('template');
    }

    function display_Pozicane(){
        $data['page_header'] = "Vsetky Pozicane";
        $data['description'] = "Pozicane";
        $data['content_view'] = 'Pozicane/Pozicane_v';
        $data['tabulka_Pozicanych'] = $this->tabulka_Pozicane();
        $this->template->call_template_v($data);
    }
    function pridajPozicane(){
        $data['page_header'] = "Pridaj pozicane";
        $data['description'] = "Pridaj pozicane do systemu";
        $data['content_view'] = 'Pozicane/pridaj_pozicane_v';
        $this->template->call_template_v($data);
    }
    function post_pozicane(){
        $this->M_Pozicane->post_Pozicane();
        redirect(base_url() . 'Admin/Pozicane');
    }

    function tabulka_Pozicane(){
        $Pozicane = $this->M_Pozicane->get_Pozicane();
        $tabulka_Pozicanych ="";

        if(count($Pozicane)>0){
            $counter =1;
            foreach ($Pozicane as $key => $value){
                $tabulka_Pozicanych .="<tr>";
                $tabulka_Pozicanych .="<td>[$counter]</td>";
                $tabulka_Pozicanych .="<td>[$value->Pouzivatelia_idPouzivatelia]</td>";
                $tabulka_Pozicanych .="<td>[$value->Nazov]</td>";
                $tabulka_Pozicanych .="<td>[$value->cenahod]</td>";
                $tabulka_Pozicanych .="<td>[$value->kspozic]</td>";

                $tabulka_Pozicanych .="<td><a href ='".base_url()."Admin/edit_pozicane/{$value->idPozicane}'>Edit</a>
                |
                <a href ='".base_url()."Admin/delete_pozicane/{$value->idPozicane}'>Delete</a></td>";
                $tabulka_Pozicanych .="</tr>";

            }
        }
        return $tabulka_Pozicanych;
    }

    function edit_pozicane (){
        $id =  $this->uri->segment(3);
        $pozicane = $this->M_Pozicane->get_pozicane($id);
        $data['page_header'] = "Edituj pozicane";
        $data['description'] = "Edituj pozicane do systemu";
        $data['content_view'] = 'Pozicane/edit_pozicane_v';
        $data['Pouzivatelia_idPouzivatelia']=$pozicane['0']->Pouzivatelia_idPouzivatelia;
        $data['Nazov']=$pozicane['0']->Nazov;
        $data['cenahod']=$pozicane['0']->cenahod;
        $data['kspozic']=$pozicane['0']->kspozic;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }

    function post_edit_pozicane(){
        $id = $this->input->post('ID');
        $data = array('Pouzivatelia_idPouzivatelia' => $this->input->post('Pouzivatelia_idPouzivatelia'), 'cenahod'=> $this->input->post('cenahod'), 'Nazov'=> $this->input->post('Nazov'),
            'kspozic'=> $this->input->post('kspozic'), );
        $this->M_Pozicane->update_Pozicane($id,$data);
        redirect(base_url() . "Admin/Pozicane");
    }

    function delete_pozicane(){
        $id =$this->uri->segment(3);
        $pozicane = $this->M_Pozicane->get_pozicane($id);
        $data['page_header'] = "Vymaz pozicane";
        $data['description'] = "Vymaz pozicane do systemu";
        $data['content_view'] = 'Pozicane/delete_pozicane_v';
        $data['Pouzivatelia_idPouzivatelia']=$pozicane['0']->Pouzivatelia_idPouzivatelia;
        $data['Nazov']=$pozicane['0']->Nazov;
        $data['cenahod']=$pozicane['0']->cenahod;
        $data['kspozic']=$pozicane['0']->kspozic;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_pozicane(){
        $id = $this->input->post('ID');
        $this->M_Pozicane->delete_pozicane($id);
        redirect(base_url() . "Admin/Pozicane");
    }
}