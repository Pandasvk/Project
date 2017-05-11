<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 10:06
 */
class Admin extends MY_controller{
    function __construct()
    {
        parent::__construct();
        $this->load->module(['sportoviska']);
        $this->load->module(['bar']);
        $this->load->module(['kalendar']);
        $this->load->module(['pouzivatelia']);
        $this->load->module(['pozicane']);
    }
    function index(){
        $this->template->call_admin_template();
    }
    function sportoviska(){
        $this->sportoviska->display_sportoviska();
    }
    function  pridajSportovisko(){
        $this->sportoviska->pridajSportoviska();
    }
    function edit_sportovisko(){
        $this->sportoviska->edit_sportovisko();
    }
    function delete_sportovisko(){
        $this->sportoviska->delete_sportovisko();
    }
    function bar(){
    $this->bar->display_bar();
}
    function  pridajBar(){
        $this->bar->pridajBar();
    }
    function edit_bar(){
        $this->bar->edit_bar();
    }
    function delete_bar(){
        $this->bar->delete_bar();
    }
    function kalendar(){
        $this->kalendar->display_kalendar();
    }
    function  pridajKalendar(){
        $this->kalendar->pridajKalendar();
    }
    function edit_kalendar(){
        $this->kalendar->edit_kalendar();
    }
    function delete_kalendar(){
        $this->kalendar->delete_kalendar();
    }
    function pouzivatelia(){
        $this->pouzivatelia->display_pouzivatelia();
    }
    function  pridajpouzivatela(){
        $this->pouzivatelia->pridajpouzivatela();
    }
    function edit_pouzivatela(){
        $this->pouzivatelia->edit_pouzivatela();
    }
    function delete_pouzivatela(){
        $this->pouzivatelia->delete_pouzivatela();
    }

    function pozicane(){
        $this->pozicane->display_pozicane();
    }
    function  pridajpozicane(){
        $this->pozicane->pridajpozicane();
    }
    function edit_pozicane(){
        $this->pozicane->edit_pozicane();
    }
    function delete_pozicane(){
        $this->pozicane->delete_pozicane();
    }
}