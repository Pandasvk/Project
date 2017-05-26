<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 8:12
 */
class Home extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->module('template');
        $this->load->model('Sportoviska/M_sportoviska');
    }

    function call_home(){
        $data['page_header'] = "Home";
        $data['description'] = "Home";
        $data['content_view'] = 'Home/home_v';
        $data['tabulka_ponuka'] = $this->tabulka_ponuka();
        $this->template->call_template_v($data);
    }
    function tabulka_ponuka(){
       
            $ponuka = $this->M_sportoviska->get_sportoviska();
            $tabulka_ponuka ="";

            if(count($ponuka)>0){
                $counter =1;
                foreach ($ponuka as $key => $value){
                    $tabulka_ponuka .="<tr>";
                    $tabulka_ponuka .="<td>[$counter]</td>";
                    $tabulka_ponuka .="<td>[$value->nazov]</td>";
                    $tabulka_ponuka .="<td>[$value->Popis]</td>";
                    $tabulka_ponuka .="<td><a href ='".base_url()."Home/rezervuj_sportovisko/{$value->idSportoviska}'>Rezervuj</a></td>";
                    $tabulka_ponuka .="</tr>";

                }
            }
            return $tabulka_ponuka;
        }
    function rezervuj_sportovisko(){
        $id =  $this->uri->segment(3);
        $sportovisko = $this->M_sportoviska->get_sportovisko($id);
        $data['page_header'] = "Edituj sportovisko";
        $data['description'] = "Edituj sportovisko do systemu";
        $data['content_view'] = 'Home/rezervuj_sportoviska_v';
        $data['nazov']=$sportovisko['0']->nazov;
        $data['popis']=$sportovisko['0']->Popis;
        $data['id']=$id;

        $this->template->call_template_v($data);
    }

}