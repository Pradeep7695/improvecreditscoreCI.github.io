<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 20-06-2019
 * Time: 05:42 PM
 */

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('PaymentModel');
		$this->load->model('ContactusModel');
		$this->load->model('UserAuthModel');
	}

	public function User_profile()
	{
		$this->load->model('UserAuthModel');
		$data['userDetails'] = $this->UserAuthModel->getAllUserData();
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('user_profile',$data);
	}

	public function edit_profile($id)
	{
		$this->load->model('UserAuthModel');
	    $data['editUser'] =	$this->UserAuthModel->findUserProfile($id);
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('edit_profile',$data);
	}

	public function update_profile($id)
	{
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('telephone','Telephone No','required');
		$this->form_validation->set_rules('contactno','Contact No','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|min_length[5]');
		$this->form_validation->set_rules('pincode','Pin Code','required');
		$this->form_validation->set_rules('city','City','required');

		if ($this->form_validation->run())
		{  //suceess
		   $data  = $this->input->post();
		   unset($data['submit']);
		   $this->load->model('UserAuthModel');
		   $updateUser = $this->UserAuthModel->update_user($id , $data);
		   if ($updateUser)
		   {  //update success
				$this->session->set_flashdata('feedback','update success');
			   $this->session->set_flashdata('feedback_class','alert-success');
				return redirect('user/user_profile/'.$id);
		   }
		   else
		   {  //update failed
			   $this->session->set_flashdata('feedback','Failed to Update');
			   $this->session->set_flashdata('feedback_class','alert-danger');
			   return redirect('user/edit_profile/'.$id);
		   }

		}
		else
		{  //failed
			$this->session->set_flashdata('feedback','Failed to Update');
			$this->session->set_flashdata('feedback_class','alert-danger');
			return redirect('edit_profile/'.$id);
		}

	}


	/* ---------------change password ---------------- */
	public function change_password()
	{
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('change_password',$data);
	}
	public function reset_password()
	{
		$email = $this->session->userdata('email');
		$npassword = $this->input->post('npass');
		$cpassword = $this->input->post('cpass');
		/* var_dump($cpassword);
       exit;*/
		if($npassword == $cpassword)
		{
			$data = array(
				'password' => md5($this->input->post('cpass')),
			);
			$result = $this->UserAuthModel->resetpass($email, $data);
			$this->session->set_flashdata('feedback','Password Change Successfully Please Login');
			$this->session->set_flashdata('feedback_class','alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('user/change_password');
		}
		else
		{
			$this->session->set_flashdata('feedback','Invalid New Password & Confirm Password');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('user/change_password');
		}
	}
    /* -------------------../change password ------------- */

	/*---------------forgot password ------------------- */
	 public function forgot_password()
	 {
		 $data['ContactData']   = $this->ContactusModel->fetchDataFront();
	 	$this->load->view('forgot_password',$data);
	 }
	 public function forgotPassword()
	 {
	      $email = $this->input->post('email');
	      $check_email  = $this->UserAuthModel->get_user_by_email($email);

	      if ($check_email)
		  {
			$this->UserAuthModel->SendEmailForgotPassword($check_email);
			  $this->session->set_flashdata('feedback','Password has been Send Successfully on '.$email.'Please Update Your Password');
			  $this->session->set_flashdata('feedback_class','alert-success');
			return redirect('login');
		  }
		  else
		  {
			  $this->session->set_flashdata('feedback','Email id Not Found, Try Again');
			  $this->session->set_flashdata('feedback_class', 'alert-danger');
			  return redirect('user/forgot_password');
		  }

	 }

	/* ----------------..//end forgot password ------------ */

	/* -----------------user payment history ------------------ */

	public function payment_history()
	{
		$this->load->model('PaymentModel');
		$data['PaymentHistory'] = $this->PaymentModel->getPaymentHistory();
		$data['ContactData']   = $this->ContactusModel->fetchDataFront();
		$this->load->view('payment-history',$data);
	}


	/* -------------Download Payment History in pdf ----------- */

	public function pdfPaymentDetails()
	{
		if ($this->uri->segment(3))
		{
			$this->load->library('pdf');
			$this->load->model('PaymentModel');
			$id = $this->uri->segment(3);
			$html_content = '<h3 align="center">Payment Details</h3>';
			$html_content .= $this->PaymentModel->fetch_single_payment_details($id);
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$id.".pdf", array("Attachment"=>0));
		}
	}
	/* -----------..//end payment hostory pdf ----------------- */
}
