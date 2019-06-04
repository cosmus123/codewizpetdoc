<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{   
        $this->load->view('inc/header_view');

        $this->load->view('home/home_one_view');
        $this->load->view('home/home_two_view');

        $this->load->view('inc/footer_view');
        
        //$this->output->enable_profiler(TRUE);
    }
}