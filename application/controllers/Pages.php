<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/home_page');
	}
	public function home()
	{
		$this->load->view('pages/home_page');
	}
	public function location()
	{
		$this->load->view('pages/location_page');
	}
	public function about()
	{
		$this->load->view('pages/about_page');
	}
	public function contact()
	{
		$this->load->view('pages/contact_page');
	}
}
