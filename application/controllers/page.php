<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function index()
    {
        $data['viewpage'] = 'home';
        $this->load->view('index', $data);
    }

    public function file()
    {
        if ($this->session->userdata('logged_in') != 1)
        { 
            redirect(base_url(). 'index.php/auth');
        }else{
            $data['viewpage'] = 'file';
            $this->load->view('backend', $data);
        }
    }

    public function profile()
    {
        if ($this->session->userdata('logged_in') != 1)
        { 
            redirect(base_url(). 'index.php/auth');
        }else{
            $data['viewpage'] = 'myprofile';
            $this->load->view('backend', $data);
        }
        
    }

    public function delete(){
        $user = (array)$this->session->userdata('user');
        $profile = $this->authmodel->retrieve("", $user['username']);
        
        $delete = $this->authmodel->delete($profile->id);

        // session_destroy();
        // unset($_SESSION['access_token']);
        // $session_data=array(
        //         'logged_in'=>0);
        // $this->session->set_userdata($session_data);
        // redirect(base_url() . 'index.php');
        $this->session->set_userdata($session_data);
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('userData');
        $session_data=array(
                'logged_in'=>0);
        $this->session->set_userdata($session_data);
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/page');
    }

    public function plagrisme()
    {
        if ($this->session->userdata('logged_in') != 1)
        { 
            redirect(base_url(). 'index.php/auth');
        }else{
            $this->db->truncate('pertama');
            $this->db->truncate('source');
            $this->db->truncate('kedua');
            $this->db->truncate('file');
            $data['viewpage'] = 'plagrisme';
            $this->load->view('backend', $data);
        }
    }
}
