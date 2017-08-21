<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
        $data['page_title'] = 'Book';
        $this->load->view('templates/header');
       /* $this->load->view('menu');*/
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
	}
}
