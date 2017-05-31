<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 11. 5. 2017
 * Time: 10:43
 */
class Pouzivatelia extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pouzivatelia');
        $this->load->module('template');
    }

    function display_Pouzivatelia(){
        $data['page_header'] = "Vsetky Pouzivatelia";
        $data['description'] = "Pouzivatelia";
        $data['content_view'] = 'Pouzivatelia/Pouzivatelia_v';
        $data['tabulka_Pouzivatelov'] = $this->tabulka_Pouzivatelia();
        $this->template->call_template_v($data);
    }
    function pridajPouzivatela(){
        $data['page_header'] = "Pridaj Pouzivatela";
        $data['description'] = "Pridaj Pouzivatela do systemu";
        $data['content_view'] = 'Pouzivatelia/pridaj_Pouzivatela_v';
        $this->template->call_template_v($data);
    }
    function post_Pouzivatela(){
        $this->M_Pouzivatelia->post_Pouzivatelia();
        redirect(base_url() . 'Admin/Pouzivatelia');
    }

    function tabulka_Pouzivatelia(){
        $tabulka_Pouzivatelov ="";

        $this->load->library('pagination');
        $pocet = $this->M_Pouzivatelia->get_pouzivatelia();
        $config['base_url'] = base_url()."/Admin/Pouzivatelia";
        $config['total_rows'] = count($pocet);
        $config['per_page'] = 3;

        $this->pagination->initialize($config);
        $Pouzivatelia = $this->db->get('pouzivatelia', $config['per_page'],$this->uri->segment(3));

        if(count($Pouzivatelia)>0){
            $counter =$this->uri->segment(3);
            foreach ($Pouzivatelia->result() as $key => $value){
                $counter =$counter + 1;
                $tabulka_Pouzivatelov .="<tr>";
                $tabulka_Pouzivatelov .="<td>[$counter]</td>";
                $tabulka_Pouzivatelov .="<td>[$value->meno]</td>";
                $tabulka_Pouzivatelov .="<td>[$value->priezvisko]</td>";
                $tabulka_Pouzivatelov .="<td>[$value->firma]</td>";
                $tabulka_Pouzivatelov .="<td>[$value->adresa]</td>";
                $tabulka_Pouzivatelov .="<td>[$value->telefon]</td>";
                $tabulka_Pouzivatelov .="<td><a href ='".base_url()."Admin/edit_Pouzivatela/{$value->idPouzivatelia}'>Edit</a>
                |
                <a href ='".base_url()."Admin/delete_Pouzivatela/{$value->idPouzivatelia}'>Delete</a></td>";
                $tabulka_Pouzivatelov .="</tr>";

            }
        }
        return $tabulka_Pouzivatelov;
    }

    function edit_Pouzivatela (){
        $id =  $this->uri->segment(3);
        $Pouzivatela = $this->M_Pouzivatelia->get_Pouzivatela($id);
        $data['page_header'] = "Edituj Pouzivatela";
        $data['description'] = "Edituj Pouzivatela do systemu";
        $data['content_view'] = 'Pouzivatelia/edit_Pouzivatela_v';
        $data['meno']=$Pouzivatela['0']->meno;
        $data['priezvisko']=$Pouzivatela['0']->priezvisko;
        $data['firma']=$Pouzivatela['0']->firma;
        $data['adresa']=$Pouzivatela['0']->adresa;
        $data['telefon']=$Pouzivatela['0']->telefon;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }

    function post_edit_Pouzivatela(){
        $id = $this->input->post('ID');
        $data = array('meno' => $this->input->post('meno'), 'priezvisko'=> $this->input->post('priezvisko'), 'firma'=> $this->input->post('firma'),
            'adresa'=> $this->input->post('adresa'), 'telefon'=> $this->input->post('telefon'));
        $this->M_Pouzivatelia->update_Pouzivatelia($id,$data);
        redirect(base_url() . "Admin/Pouzivatelia");
    }

    function delete_Pouzivatela(){
        $id =$this->uri->segment(3);
        $Pouzivatela = $this->M_Pouzivatelia->get_Pouzivatela($id);
        $data['page_header'] = "Vymaz Pouzivatela";
        $data['description'] = "Vymaz Pouzivatela do systemu";
        $data['content_view'] = 'Pouzivatelia/delete_Pouzivatela_v';
        $data['meno']=$Pouzivatela['0']->meno;
        $data['priezvisko']=$Pouzivatela['0']->priezvisko;
        $data['firma']=$Pouzivatela['0']->firma;
        $data['adresa']=$Pouzivatela['0']->adresa;
        $data['telefon']=$Pouzivatela['0']->telefon;
        $data['id']=$id;
        $this->template->call_template_v($data);
    }
    function post_delete_Pouzivatela(){
        $id = $this->input->post('ID');
        $this->M_Pouzivatelia->delete_Pouzivatela($id);
        redirect(base_url() . "Admin/Pouzivatelia");
    }
}