<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('authmodel');
    }

	public function index(){
		// Include the google api php libraries
        include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
        include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
        
        // Google Project API Credentials
        $clientId = '570550667398-5otkst539i61v1l2pqr3f8n6evj5vcb4.apps.googleusercontent.com';
        $clientSecret = 'PI1QhvAjCTjIEHi-8XC0Kc6w';
        $redirectUrl = base_url() . 'index.php/auth/';
        
        $gClient = new Google_Client();
        $gClient->setApplicationName('Grammer');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            $userData['first_name'] = $userProfile['given_name'];
            $userData['last_name'] = $userProfile['family_name'];
            $userData['email'] = $userProfile['email'];
            $userData['picture_url'] = $userProfile['picture'];
           
            $user = $this->authmodel->retrieve("", $userData['email']);
            if(empty($user)){
                $user_id = $this->authmodel->create(
		            $userData['email'],
		            "",
		            $userData['first_name'] . " " . $userData['last_name'],
		            $userData['picture_url']
		        );

		        $user = $this->authmodel->retrieve("", $userData['email']);
		        $this->session->set_userdata('user', $user);
				$this->session->set_userdata('logged_in', 1);
	  
	        	redirect('page/file');
            } else {
                $this->session->set_userdata('user', $user);
				$this->session->set_userdata('logged_in', 1);
	  
	        	redirect('page/file');
            }
        } 

        $data['authUrl'] = $gClient->createAuthUrl();
        $this->load->view('login',$data);
	}

	public function logout(){
		$session_data=array(
				'logged_in'=>0);
		$this->session->set_userdata($session_data);
		$this->session->unset_userdata('token');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect(base_url());
	}
}
