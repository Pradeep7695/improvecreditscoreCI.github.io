<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SliderModel');
		$this->load->model('ServiceModel');
		$this->load->model('CreditScoreModel');
		$this->load->model('WeDoModel');
		$this->load->model('TestimonialModel');
		$this->load->model('ContactusModel');
		$this->load->model('PrivacyPolicyModel');
		$this->load->model('RefundPolicyModel');
		$this->load->model('TermsConModel');
		$this->load->model('UserAuthModel');
	}

	public function index()
	{
		$data['Slider'] = $this->SliderModel->fetchDataToFront();
		$data['Service']  = $this->ServiceModel->fetchDataFrontEnd();
		$data['CreditScore'] = $this->CreditScoreModel->fetchDataToFront();
		$data['whatWeDo']  = $this->WeDoModel->fetchDataToFront();
		$data['testimonial']   = $this->TestimonialModel->fetchDataToFront();
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('index',$data);
	}

	/* -------------login user -------------------------- */
	public function login()
	{
		if ($this->session->userdata('id'))
			redirect('profile');

		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('login',$data);
	}

	public function loginAuth()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');

		if ($this->form_validation->run())
		{ //success validation

			$email   = $this->input->post('email');
			$password  = md5($this->input->post('password'));

			$this->load->model('UserAuthModel');
			$user = $this->UserAuthModel->loginAuth($email , $password);

			if ($user)
			{
				$session_data = array(
					'id'     => $user->id,
					'fname'   => $user->fname,
					'lname'   => $user->lname,
					'telephone' => $user->telephone,
					'contactno' => $user->contactno,
					'email'     => $user->email,
					'password'  => $user->password,
					'pincode'   => $user->pincode,
					'city'      => $user->city
				);

				$this->session->set_userdata($session_data);

				$this->session->set_flashdata('feedback','Login Success, Thank You '. $email);
				$this->session->set_flashdata('feedback_class','alert-success');
				redirect('profile');
			}
			else
			{
				$this->session->set_flashdata('feedback','Invalid Email/Password, Try Again !');
				$this->session->set_flashdata('feedback_class','alert-danger');
				redirect('login');
			}


		}
		else
		{ //faild to validation
			$this->session->set_flashdata('feedback','Invalid Email/Password, Try Again !');
			$this->session->set_flashdata('feedback_class','alert-danger');
			redirect('login');
		}

	}


	/* -------------..//end login register ------------------- */
	public function register()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('register',$data);
	}

	/* ------------register user --------------- */
	public function create_user()
	{
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('telephone','Telephone No','required');
		$this->form_validation->set_rules('contactno','Contact No','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|min_length[5]|is_unique[register-user.email]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('pincode','Pin Code','required');
		$this->form_validation->set_rules('city','City','required');

		if ($this->form_validation->run())
		{  //validation success
		 	$data = array(
		 		'fname'  		=> $this->input->post('fname'),
				'lname'  		=> $this->input->post('lname'),
				'telephone'     => $this->input->post('telephone'),
				'contactno'     => $this->input->post('contactno'),
				'email'         => $this->input->post('email'),
				'password'      => md5($this->input->post('password')),
				'pincode'       => $this->input->post('pincode'),
				'city'			=> $this->input->post('city')
			);
		 	unset($data['submit']);
		 	$result = $this->UserAuthModel->registerUser($data,$this->input->post('email'));

		 	if ($result)
			{
				if($this->UserAuthModel->sendEmail($this->input->post('email')))
				{  //email send
					$this->session->set_flashdata('feedback','Successfully registered. Please click on link that has just been sent to your email account to verify your email. ');
					$this->session->set_flashdata('feedback_class', 'alert-success');
					return redirect('register');
				}
				else
				{  //failed to email send
					$this->session->set_flashdata('feedback','failed to register Try Again');
					$this->session->set_flashdata('feedback_class', 'alert-danger');
					return redirect('register');
				}
			}
			else
			{
				$this->session->set_flashdata('feedback','failed to register Try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				return redirect('register');
			}

		}
		else
		{  //validation success
			$this->session->set_flashdata('feedback','failed to register Try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			return redirect('register');
		}

	}

	public function confirmEmail($hashcode){
		if($this->UserAuthModel->verifyEmail($hashcode)){
			$this->session->set_flashdata('feedback','Your account has been successfully verified. Please login to the system. ');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			return redirect('login');
		}
		else{
			$this->session->set_flashdata('feedback','Email address is not confirmed. Please try to re-register.');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			return redirect('login');
		}
	}

	/* ------------end register user --------------- */

	public function contact_us()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('contact-us',$data);
	}

	public function about_us()
	{
		$this->load->model('AboutModel');
		$data['AboutData']   = $this->AboutModel->fetchDataFront();
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('about-us',$data);
	}

	public function credit_score_improvement_plans()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('credit-score-improvement-plans',$data);
	}

	public function refund_policy()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$data['Refund']   = $this->RefundPolicyModel->fetchDataFront();
		$this->load->view('refund-policy',$data);
	}

	public function term_condition()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$data['TermsCondition'] = $this->TermsConModel->fetchDataFront();
		$this->load->view('term-condition',$data);
	}
	public function privacy_policy()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$data['Privacy']    = $this->PrivacyPolicyModel->fetchDataFront();
		$this->load->view('privacy-policy',$data);
	}

	public function feedback()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('feedback-form',$data);
	}

	public function testimonial()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$data['testimonial']   = $this->TestimonialModel->fetchDataToFront();
		$this->load->view('testimonial',$data);
	}


	public function profile()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		if (!$this->session->userdata('id'))
		{
			return redirect('login');
		}

		$this->load->view('my-profile',$data);
	}

	/* ----------user profile -------------------- */


	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('login');
	}

}
