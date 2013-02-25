<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
    }


	public function index()
	{
		
		$this->load->view('front/dashboard');
	}

	public function about()
	{
		$data['info'] = $this->db->get('about')->row_array();	
		$this->load->view('front/about',$data);
	}

	public function contact()
	{		
		$this->form_validation->set_rules('name', 'Your Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('msg', 'Message', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if($this->form_validation->run() != FALSE)
        	{
					$userData = array();
			        $userData["name"] = $_POST['name'];
			        $userData["email"] = $_POST['email'];
			        $userData["msg"] = $_POST['msg'];

			        $this->db->insert("contact", $userData);
			        $this->session->set_flashdata("log", "Thanks ,We will contact you soon...");
			        redirect('dashboard/contact');
				}
			$this->load->view('front/contact');
	}

	public function blog()
	{
		$this->db->select('blog.*,user.*',false);
		$this->db->from('user');
		$this->db->join('blog','user.id = blog.user_id');
		$data['blogs'] = $this->db->get()->result_array();
		$this->load->view('front/blog',$data);
	}

	public function portfolio()
	{
		
		$this->load->view('front/portfolio');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
