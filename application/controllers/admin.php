<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
    }

    function index(){
        if($this->session->userdata('valid')){
        	$data['tab'] = 'dashboard';
        	$this->load->view('back/dashboard',$data);
        }
        else{
            redirect('/admin/login');
        }
    }


    function login(){
        if($_POST){

           $uemail = trim($this->input->post('uemail'));
           $upass = trim($this->input->post('upass'));
           $data = $this->db->get_where('user',array('email'=>$uemail,'password'=>$upass))->row_array();
          
           if(count($data) >0){
                $this->session->set_userdata('valid',true);
                redirect("/admin");
           }
           else{
                echo "<center><h1>User not found contact admin!!!</h1></center>";
                exit;
           }
        }
        $this->load->view('back/login');
    }

    function users(){
        $data['tab'] = 'users';
        $data['users'] = $this->db->get('user')->result_array();
        if($_POST){
            $uname = trim($this->input->post('username'));
            $email = trim($this->input->post('email'));
            $pass  = trim($this->input->post('pass'));
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            if(strlen($uname)!=0 OR strlen($email)!=0 OR strlen($pass)!=0){
                $udata = array(
                   'username' => $uname,
                   'email' => $email ,
                   'password' => $pass,
                   'firstname' => $fname,
                   'lastname' => $lname,
                );
                $this->db->insert('user', $udata); 
            }
            redirect('/admin/users');
        }
        $this->load->view('back/users',$data);
    }

    function u_edit($id){
        $data['tab'] = 'users';
        $data['detail'] = $this->db->get_where('user',array('id'=>$id))->row_array();
        if($_POST){
            $uname = trim($this->input->post('username'));
            $email = trim($this->input->post('email'));
            $pass  = trim($this->input->post('pass'));
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            if(strlen($uname)!=0 OR strlen($email)!=0 OR strlen($pass)!=0){
                $udata = array(
                   'username' => $uname,
                   'email' => $email ,
                   'password' => $pass,
                   'firstname' => $fname,
                   'lastname' => $lname,
                );
                $this->db->where('id', $id);
                $this->db->update('user', $udata);
            }
            redirect('/admin/users');
        }
        $this->load->view('back/u_edit',$data);
    }


    function u_del($id){
        $this->db->delete('user', array('id' => $id)); 
        redirect('admin/users');
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


    function about(){
    	$data['tab'] = 'about';
        $data['info'] = $this->db->get('about')->row_array();
        if($_POST){
            if(count($data['info'])<1){
                $data_in['about'] = $this->input->post('about');
                $this->db->insert('about', $data_in);
            }
            else{                
                $data_in['about'] = $this->input->post('about');
                $this->db->where('about', $data['info']['about']);
                $this->db->update('about', $data_in);
                redirect('admin/about');
            }
        }
    	$this->load->view('back/about',$data);
    }

    function msgs(){
    	$data['tab'] = 'msgs';
        $data['contacts'] = $this->db->get('contact')->result_array();
    	$this->load->view('back/msgs',$data);
    }

    function p_edit($id){
        $data['tab'] = 'portfolio';
        $data['detail'] = $this->db->get_where('portfolio',array('id'=>$id))->row_array();
        if($_POST){
            $title = $this->input->post('title');
            $link = $this->input->post('link');
            $picData = $_FILES['pic'];
            if($picData['name'] != ""){
                unlink('uploads/'.$data['detail']['pic']);
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10000';
                $config['max_width']  = '2024';
                $config['max_height']  = '2024';
                $config['file_name']  = uniqid().".".end(explode(".",$picData['name']));
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('pic'))
                {
                    $data['log'] = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $picdata = array(
                       'title' => $title,
                       'pic' => $config['file_name'] ,
                       'link' => $link
                                );
                    $this->db->where('id', $id);
                    $this->db->update('portfolio', $picdata); 
                    $data['log'] = array('upload_data' => $this->upload->data());
    
                }
            }
            $picdata = array(
               'title' => $title,
               'link' => $link
                );
            $this->db->where('id', $id);
            $this->db->update('portfolio', $picdata);
            redirect('admin/p_edit/'.$id); 
        }
        $this->load->view('back/p_edit',$data);
    }

    function p_del($id){
        $data['tab'] = 'portfolio';
        $data['detail'] = $this->db->delete('portfolio', array('id' => $id)); 
        redirect('admin/portfolio');
    }

    function portfolio(){
    	$data['tab'] = 'portfolio';
        $data['params'] = $this->db->get('portfolio')->result_array();
        if($_POST){
            $title = $this->input->post('title');
            $link = $this->input->post('link');
            $picData = $_FILES['pic'];
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';
            $config['file_name']  = uniqid().".".end(explode(".",$picData['name']));
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('pic'))
            {
                $data['log'] = array('error' => $this->upload->display_errors());
                redirect('admin/portfolio');
            }
            else
            {
                $picdata = array(
                   'title' => $title,
                   'pic' => $config['file_name'] ,
                   'link' => $link
                );
                $this->db->insert('portfolio', $picdata); 

                $data['log'] = array('upload_data' => $this->upload->data());

               redirect('admin/portfolio');
            }
        }
    	$this->load->view('back/portfolio',$data);
    }

}
