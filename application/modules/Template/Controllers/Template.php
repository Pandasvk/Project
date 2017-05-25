<?php
/**
 * Created by PhpStorm.
 * User: Pekelnik
 * Date: 9. 5. 2017
 * Time: 8:28
 */
class Template extends MY_Controller{
    function __construct()
    {
        parent::__construct();
    }
    function call_template_v($data){
        $this->load->view('template_v', $data);
    }
    function call_template_user_v($data){
        $this->load->view('template_user_v', $data);
    }
}