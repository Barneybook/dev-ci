<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		
		$this->load->helper('email');
	}
	
	public function index()
	{	
		$this->load->library('email');
		echo "<br/>setting up";
		
		
		
		//$config['protocol'] = 'sendmail';
		$config['protocol'] = 'smtp';
		//$config['mailpath'] = '/usr/sbin/sendmail';
		
		//$config['charset'] = 'iso-8859-1';
		//$config['charset'] = 'big5';
		$config['wordwrap'] = TRUE;
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = 465;
		//$config['smtp_crypto'] = "ssl";
		//$config[''] = ;
		$config['newline'] = "\r\n";
		$config['crlf'] = "\r\n";
		
		$config['smtp_user'] = "barneybook@gmail.com";
		$config['smtp_pass'] = "illusionplay4622";
		

		$this->email->initialize($config);
		
		/*
		$DebugString = "";
		$recipient 	= if(isset())$_POST['email'];
		$subject	= $_POST['subject'];
		$message	= $_POST['message'];
		
		if (valid_email($recipient))
		{
			$DebugString .= '<br/>email is valid';
			send_email($recipient，$subject，$message);
		}
		else
		{
			$DebugString .= '<br/>email is not valid';
		}
		*/
		echo "<br/>test01!!!";
		
		
		$this->email->from('barneybook@gmail.com', 'Barney Chen');
		$this->email->to('illusionbook@gmail.com'); 
		//$this->email->cc('barneybook@gmail.com'); 
		//$this->email->bcc('barneybook@gmail.com'); 
			
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	
		echo "<br/>test02!!!";
		$this->email->send();
		echo "<br/>test03!!!";
		echo $this->email->print_debugger();
		
		echo "<br/>finish!!!";
		//$this->load->view('mail_index');
	}
	
	
}

/* End of file Mail.php */
/* Location: ./application/controllers/Mail.php */