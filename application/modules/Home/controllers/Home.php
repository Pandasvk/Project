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
    }

    function call_home(){
        $data = NULL;
        $this->template->call_template_v($data);
    }
}