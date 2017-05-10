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
}