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
        $this->load->module('template');
    }

    function display_sportoviska(){
        $data['page_header'] = "Vsetky Sportoviska";
        $data['description'] = "Sportoviska";
        $data['content_view'] = 'Sportoviska/sportoviska_v';
        $this->template->call_template_v($data);
    }
    function pridajSportoviska(){
        $data['authors'] =$this->create_authors_select();
        $data['publishers'] =$this->create_publishers_select();
        $data['genres'] =$this->create_genres_select();
        $data['page_header'] = "Pridaj sportovisko";
        $data['description'] = "Pridaj sportovisko do systemu";
        $data['content_view'] = 'Sportoviska/pridaj_sportovisko_v';
        $this->template->call_admin_template($data);
    }
}