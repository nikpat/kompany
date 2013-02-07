<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$this->load->view('front/dashboard');
	}

		public function about()
	{
		
		$this->load->view('front/about');
	}

	public function contact()
	{
		
		$this->load->view('front/contact');
	}

	public function blog()
	{
		
		$this->load->view('front/blog');
	}

	public function portfolio()
	{
		
		$this->load->view('front/portfolio');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
