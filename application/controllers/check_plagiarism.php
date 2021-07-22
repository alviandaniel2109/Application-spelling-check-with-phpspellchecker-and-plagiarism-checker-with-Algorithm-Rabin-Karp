c<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "GoogleTranslate.php";

class check_plagiarism extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('plagrismemodel');
    }

    public function check_file($your_word)
    {

        $url = 'https://smallseotools.com/api/info'; 
        $ch = curl_init ($url);

        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array('key' => '63b83187ba3dfea7c7bda80ae8552fc6', 'data' => $your_word));
        $result = curl_exec($ch);

        echo var_dump($result);
        curl_close($ch);
        
    }

    public function uploadx()
    {
        $in['source'] = $this->input->post('source');
        $in['pertama'] = $this->input->post('pertama');
        $in['kedua'] = $this->input->post('kedua');
        $in['k-gram'] = $this->input->post('gram');
        $in['basis'] = 5;
        $gram = $this->input->post('gram');
        $h4nk = $this->input->post('gram');
        $basis = 5;
        $key = md5(rand());
        $in['key'] = $key;
        $id['key'] = $key;
        // $this->db->insert('file',$in);
        $this->plagrismemodel->save('file', $in);
        $d = hapus_simbol($this->input->post('source'));
        $length=strlen($d);
        $teksSplit=null;

        if(strlen($d) < $h4nk){
            $teksSplit[]=$d;
        }else{
            for($i=0;$i<=$length-$h4nk;$i++){
                $teksSplit[]=substr($d,$i,$h4nk);
                $ddd['source'] = $teksSplit[$i]; 
                $ddd['key'] = $key; 
                // $this->db->insert('source', $ddd);
                $this->plagrismemodel->save('source', $ddd);
            }
        }
        
        $dx = hapus_simbol($this->input->post('pertama'));
        $lengthf=strlen($dx);
        $teksSplift=null;
        if(strlen($dx) < $h4nk){
            $teksSplitf[]=$dx;
        }else{
            for($i=0;$i<=$lengthf-$h4nk;$i++){
                $teksSplitf[]=substr($dx,$i,$h4nk);     
                $dddd['source'] = $teksSplitf[$i]; 
                $dddd['key'] = $key; 
                // $this->db->insert('pertama', $dddd, $id);
                $this->plagrismemodel->save('pertama', $dddd, $id);
            }
        }
        $df = hapus_simbol($this->input->post('kedua'));
        $lengthd=strlen($dx);
        $teksSplitg=null;
        if(strlen($df) < $h4nk){
            $teksSplitg[]=$df;
        }else{
            for($i=0;$i<=$lengthd-$h4nk;$i++){
                $teksSplitg[]=substr($df,$i,$h4nk);
                $dddx['source'] = $teksSplitg[$i]; 
                $dddx['key'] = $key; 
                // $this->db->insert('kedua', $dddx);
                $this->plagrismemodel->save('kedua', $dddx);
            }
        }
        header('location:'.base_url().'index.php/check_plagiarism/hasil/'.$key.'/'.$gram.'/'.$basis.'');
    }

    public function hasil($key)
    {
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        // var_dump($uri_segments[3]);exit();
        $in['key'] = $key;
        $data['file'] = $this->plagrismemodel->getFile('file', $in);
        $data['source'] = $this->plagrismemodel->getSource();
        $data['pertama'] = $this->plagrismemodel->getPertama();
        $data['kedua'] = $this->plagrismemodel->getKedua();
        $data['viewpage'] = 'hasil';
        $data['key'] = $in['key'];
        $data['gram'] = $uri_segments[6];
        $data['basis'] = $uri_segments[6];
        // $data['gram'] => $in
        $this->load->view('backend', $data);
    }

    public function report($key)
    {
        $in['key'] = $key;
        $data['file'] = $this->plagrismemodel->getFile('file', $in);
        $data['source'] = $this->plagrismemodel->getSource();
        $data['pertama'] = $this->plagrismemodel->getPertama();
        $data['kedua'] = $this->plagrismemodel->getKedua();
        $data['viewpage'] = 'report';
        $this->load->view('backend', $data);
    }
}
