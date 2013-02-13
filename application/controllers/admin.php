<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
    }

    function index(){
    	$data['tab'] = 'dashboard';
    	$this->load->view('back/dashboard',$data);
    }

    function blog(){
    	$data['tab'] = 'blog';
    	$this->load->view('back/blog',$data);
    }

    function login(){

    	$this->load->view('back/login',$data);
    	if($_POST){
    		redirect('admin');
    	}
    }


    function about(){
    	$data['tab'] = 'about';
    	$this->load->view('back/about',$data);
    }

    function msgs(){
    	$data['tab'] = 'msgs';
    	$this->load->view('back/msgs',$data);
    }

    function portfolio(){
    	$data['tab'] = 'portfolio';
    	$this->load->view('back/portfolio',$data);
    }
}
