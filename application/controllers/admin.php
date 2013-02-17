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
        $data['blogs'] = $this->db->get('blog')->result_array();
    	$data['tab'] = 'blog';
    	$this->load->view('back/blog',$data);
    }

    function addBlog(){
        $data['tab'] = 'blog';

        if($_POST){
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $data = array(
               'title' => $title,
               'user_id' => 1 ,
               'content' => $content
            );
            $this->db->insert('blog', $data); 
        }
        redirect('/admin/blog');
    }

    function blog_edit($blog_id){
        $data['tab'] = 'blog';
        $data['blog'] = $this->db->get_where('blog',array('id'=>$blog_id))->row_array();
        if($_POST){
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $data_in = array(
               'title' => $title,
               'user_id' => 1 ,
               'content' => $content
            );
            $this->db->where('id', $blog_id);
            $this->db->update('blog', $data_in);
            redirect('admin/blog_edit/'.$blog_id);
        }
        $this->load->view('back/blog_edit',$data);
    }

    function blog_del($blog_id){
        $data['tab'] = 'blog';
        $this->db->delete('blog', array('id' => $blog_id));
        $data['blog'] = $this->db->get('blog')->result_array();
        redirect('admin/blog');
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
        $data['contacts'] = $this->db->get('contact')->result_array();
    	$this->load->view('back/msgs',$data);
    }

    function portfolio(){
    	$data['tab'] = 'portfolio';
    	$this->load->view('back/portfolio',$data);
    }
}
