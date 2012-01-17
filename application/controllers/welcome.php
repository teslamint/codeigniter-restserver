<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->library('mobile');
		$this->load->helper('url');
	}

	function index()
	{
    		if($this->agent->is_mobile()){


			$this->mobile->header('Welcome to CodeIgniter!', 'e')->button('welcome/help', 'Help', 'info');

			$this->mobile->navbar(array(
				'welcome/index' 	=> array('text' => 'Home', 		'icon' => 'home'),
				'welcome/settings'	=> array('text' => 'Settings', 	'icon' => 'gear')
			), 'a');

			$this->mobile->footer('Footer', 'a');

			$this->mobile->view('welcome_message');
		}else{

			$this->template->header('Welcome to CodeIgniter!', 'e')->button('welcome/help', 'Help', 'info');

			$this->template->navbar(array(
				'welcome/index' 	=> array('text' => 'Home', 		'icon' => 'home'),
				'welcome/settings'	=> array('text' => 'Settings', 	'icon' => 'gear')
			), 'a');

			$this->template->footer('Footer', 'a');


			$this->template->view('welcome_message');
			
		}

	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
