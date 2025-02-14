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



		$data['scroll'] = $this->MainModel->get_scroll();
		$this->load->view('index', $data);
	}

	public function about()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('about', $data);
	}
	public function clients()
	{
		$data['clients'] = $this->MainModel->get_all_clients();
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('clients',  $data);
	}


	public function contact()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('contact', $data);
	}
	public function services()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('services', $data);
	}
	

	public function servicetrademark()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicetrademark', $data);
	}

	public function servicepatent()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicepatent', $data);
	}
	
	public function servicecopyright()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicecopyright', $data);
	}
	public function servicedesign()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicedesign', $data);
	}

	public function serviceinternationaltm()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('serviceinternationaltm', $data);
	}

	public function servicemsme()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicemsme', $data);
	}

	public function servicebarcode()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicebarcode', $data);
	}


	public function servicefssai()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicefssai', $data);
	}
	public function serviceiso()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('serviceiso', $data);
	}


	public function servicegst()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicegst', $data);
	}
	

	public function servicepartnershipdeed()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicepartnershipdeed', $data);
	}
	
	
	
	public function servicehalal()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicehalal', $data);
	}

	public function serviceprivatelimieted()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('serviceprivatelimieted', $data);
	}

	public function serviceimportexport()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('serviceimportexport', $data);
	}

	public function servicepf()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('servicepf', $data);
	}


	
	public function serviceesi()
	{
		$data['scroll'] = $this->MainModel->get_scroll();

		$this->load->view('serviceesi', $data);
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


		 if($this->form_validation->run()){
			$full_name = $this->input->post('name');  
			$email = $this->input->post('email');
			$number = $this->input->post('number');  
			$service = $this->input->post('service');
			$message1 = $this->input->post('message');


   
		$to = 'trueandtrademd@gmail.com';
        $subject = 'Get a Qoute';
		$message = "Enquery Details from customer \r\n \r\n";
        $message .= "Full Name : ".$full_name . "\r\n";
        $message .= "Email : ".$email."\r\n";
		$message .= "subject : ".$service."\r\n";
		$message .= "Messsage : ".$message1."\r\n";
 

        $headers = 'From: noreply@trueandtrade.com' . "\r\n" .
                   'Reply-To: trueandtrademd@gmail.com' . "\r\n" .
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