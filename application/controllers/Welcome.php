<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	 public function __construct() {
        parent::__construct();
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('MainModel');

    }


	public function index()
	{
		$this->load->view('index', );
	}

	public function about()
	{
		$this->load->view('about');
	}
	public function clients()
	{
		$data['clients'] = $this->MainModel->get_all_clients();

		$this->load->view('clients',  $data);
	}


	public function contact()
	{
		$this->load->view('contact');
	}
	public function services()
	{
		$this->load->view('services');
	}
	

	public function servicetrademark()
	{
		$this->load->view('servicetrademark');
	}

	public function servicepatent()
	{
		$this->load->view('servicepatent');
	}
	
	public function servicecopyright()
	{
		$this->load->view('servicecopyright');
	}
	public function servicedesign()
	{
		$this->load->view('servicedesign');
	}

	public function serviceinternationaltm()
	{
		$this->load->view('serviceinternationaltm');
	}

	public function servicemsme()
	{
		$this->load->view('servicemsme');
	}

	public function servicebarcode()
	{
		$this->load->view('servicebarcode');
	}


	public function servicefssai()
	{
		$this->load->view('servicefssai');
	}
	public function serviceiso()
	{
		$this->load->view('serviceiso');
	}


	public function servicegst()
	{
		$this->load->view('servicegst');
	}
	

	public function servicepartnershipdeed()
	{
		$this->load->view('servicepartnershipdeed');
	}
	
	
	
	public function servicehalal()
	{
		$this->load->view('servicehalal');
	}

	public function serviceprivatelimieted()
	{
		$this->load->view('serviceprivatelimieted');
	}

	public function serviceimportexport()
	{
		$this->load->view('serviceimportexport');
	}

	public function servicepf()
	{
		$this->load->view('servicepf');
	}


	
	public function serviceesi()
	{
		$this->load->view('serviceesi');
	}

	

	function send_mail()  
	{  
		$redirect_page = $this->input->post('active');
		if ($redirect_page === "index.php") {
			$redirect_page = ""; // Set to empty string if it's index.php
		}

		$this->load->helper(array('form','url'));

		 $this->load->library('form_validation');  
		 $this->form_validation->set_rules('name', 'name', 'required');  
		 $this->form_validation->set_rules('email', 'email', 'required'); 
		 $this->form_validation->set_rules('number', 'number', 'required'); 
		 $this->form_validation->set_rules('service', 'service', 'required'); 
		 $this->form_validation->set_rules('message', 'message', 'required'); 


		 if($this->form_validation->run()){
			$full_name = $this->input->post('name');  
			$email = $this->input->post('email');
			$number = $this->input->post('number');  
			$service = $this->input->post('service');
			$message1 = $this->input->post('message');


   
		$to = 'jayarajvmu@gmail.com';
        $subject = 'Get a Qoute';
		$message = "Enquery Details from customer \r\n \r\n";
        $message .= "Full Name : ".$full_name . "\r\n";
        $message .= "Email : ".$email."\r\n";
		$message .= "subject : ".$service."\r\n";
		$message .= "Messsage : ".$message1."\r\n";
 

        $headers = 'From: noreply@trueandtrade.com' . "\r\n" .
                   'Reply-To: jayarajvmu@gmail.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {


			$data = [
                'name' => $full_name,
                'email' => $email,
                'number' => $number,
                'service' => $service,
                'message' => $message1
            ];


	if ($this->MainModel->save_enquiry($data)) {
                $this->session->set_flashdata('emailsuccess', 'Mail sent successfully and enquiry saved.');
				redirect(base_url("/contact"));
				redirect(base_url("/".$redirect_page));


            } else {
                $this->session->set_flashdata('emailerror', 'Mail sent but enquiry could not be saved.');
				redirect(base_url("/".$redirect_page));

            }
        } else {
			$this->session->set_flashdata('emailerror', 'Can not able to send mail');

			redirect(base_url("/".$redirect_page));

        }

		}
    }


		 }