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
        $data['graf1nazov'] = $this->graf_jeden_nazov();
        $data['graf1hodnoty'] =$this->graf_jeden_hodnoty();
        $data['graf2nazov'] = $this->graf_dva_nazov();
        $data['graf2hodnoty'] =$this->graf_dva_hodnoty();
        $data['graf3nazov'] = $this->graf_tri_nazov();
        $data['graf3hodnoty'] =$this->graf_tri_hodnoty();
        $data['graf4nazov'] = $this->graf_styri_nazov();
        $data['graf4hodnoty'] =$this->graf_styri_hodnoty();
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
    function graf_jeden_nazov(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf1();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= "\"$value->nazov\"";
                } else {
                    $options .= "\"$value->nazov\",";
                }}}
        return $options;
    }
    function graf_jeden_hodnoty(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf1();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= " $value->navstevnost";
                } else {
                    $options .= " $value->navstevnost,";
                }}}
        return $options;
    }

    function graf_dva_nazov(){
        $this->load->model('Pozicane/M_pozicane');
        $data =$this->M_pozicane->get_data_graf2();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= "\"$value->meno\"";
                } else {
                    $options .= "\"$value->meno\",";
                }}}
        return $options;
    }
    function graf_dva_hodnoty(){
        $this->load->model('Pozicane/M_pozicane');
        $data =$this->M_pozicane->get_data_graf2();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= " $value->pocet";
                } else {
                    $options .= " $value->pocet,";
                }}}
        return $options;
    }

    function graf_tri_nazov(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf3();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= "\"$value->meno\"";
                } else {
                    $options .= "\"$value->meno\",";
                }}}
        return $options;
    }
    function graf_tri_hodnoty(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf3();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= " $value->pocet";
                } else {
                    $options .= " $value->pocet,";
                }}}
        return $options;
    }

    function graf_styri_nazov(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf4();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= "\"$value->meno\"";
                } else {
                    $options .= "\"$value->meno\",";
                }}}
        return $options;
    }
    function graf_styri_hodnoty(){
        $this->load->model('Kalendar/M_kalendar');
        $data =$this->M_kalendar->get_data_graf4();
        $options="" ;
        $counter =0;
        $counters= count($data);
        if(count($data)) {
            foreach ($data as $key => $value) {
                $counter = $counter + 1;
                if ($counter == $counters) {
                    $options .= " $value->suma";
                } else {
                    $options .= " $value->suma,";
                }}}
        return $options;
    }

}