<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	
	public function index()
	{
		$data=array('module_name'=>'home');
		$this->load->view('template-view',$data);
	}
	public function about()
	{

		$data=array('module_name'=>'about');
		$this->load->view('template-view',$data);
	}
	public function registration()
	{

		$data=array('module_name'=>'registration');
		$this->load->view('template-view',$data);
	}
	public function auth()
	{

		$data=array('module_name'=>'auth');
		$this->load->view('template-view',$data);
	}
	public function settings()
	{

		$data=array('module_name'=>'settings');
		$this->load->view('template-view',$data);
	}
}
