<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 20-06-2019
 * Time: 06:14 PM
 */

class UserAuthModel extends CI_Model
{
	private $table = 'register-user';
	private $order = 'DESC';
	private $id = 'id';

	public function registerUser($data , $email)
	{
		$this->db->where('email',$email);
		$qry = $this->db->get($this->table);
		if ($qry->num_rows()==0)
		{
			return $this->db->insert($this->table,$data);
		}
		else
		{
			$this->session->set_flashdata('feedback','Email Id is already Register!');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			redirect('register');
		}
	}

	/* --login user -- */
	public function loginAuth($email , $password)
	{
		$qry = $this->db->where(['email'=>$email,'password'=>$password , 'status'=> 1])
			             ->get('register-user');

		if ($qry->num_rows())
		{
			return $qry->row();
		}
		else
		{
			return false;
		}
	}

	public function getAllUserData()
	{
	$id = $this->session->userdata('id');
		$condition = "id =" . "'" . $id . "'";
	$qry =	$this->db->where($condition)
			     ->limit(1)
		         ->get('register-user');
	if ($qry->num_rows() == 1)
	{
		return $qry->result();
	}
	else
	{
		return false;
	}
 }

	public function findUserProfile($id)
	{
		$q = $this->db->select(['*'])
		            	->where('id', $id)
			         ->get('register-user');
		     return $q->row();
	}

	public function update_user($id,$data)
	{
		return	$this->db->where(['id'=>$id])
			             ->update($this->table,$data);
	}

	/* -------show all user on dashboard ------- */
	//ten record on dashboard only
	public function getTenRecordDashboard()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(10);
		return $this->db->get($this->table)->result();
	}

	public function allRegisterUser()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function singleUserRecord($id)
	{
		return $this->db->select('*')
			      ->where(['id'=>$id])
			      ->get($this->table)->row();
	}

	//free member

	public function free_membership()
	{
		/*$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();*/
		$query=$this->db->select('*')->from('register-user')
			->join('payments','payments.user_id=`register-user`.id','left')
			->where('payments.user_id',null)
			->order_by('register-user.id','desc')
			->get();
		return $query->result();
	}

	public function freeMemberDetails($id)
	{
		return $this->db->where(['id'=>$id])
			     ->get($this->table)->row();
	}


	/* --------..//end ------------------------- */
	/* ------------------------change password ------------------ */
	/*public function changePass($id)
	{
		$qry = $this->db->where(['id'=>$id])
			->get($this->table);

		if ($qry->num_rows() > 0)
		{
			return $qry->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function updatePass($new_pass,$id)
	{
		$data = array(
			'password'=> $new_pass
		);
		return $this->db->where(['id'=>$id])
			->update($this->table,$data);
	}*/
	public function resetpass($email, $data)
	{
		/* var_dump($data);
         exit;*/
		$this->db->where('email', $email);
		$query = $this->db->update($this->table, $data);
		return $query;
	}

	/* ------------------..//end change password  ---------------- */

	/*  -------------forgot Password by user email ------------------------ */
	  public function get_user_by_email($email)
	  {
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('email',$email);
			$qry = $this->db->get();
			return $qry->row();

	  }

	   public function SendEmailForgotPassword($receiver)
	   {
		   $email = $receiver->email;
		   $query1 = $this->db->query("SELECT *  from $this->table where email = '".$email."' ");
		   $row = $query1->result_array();
		   if($query1->num_rows()>0)
		   {
			   $passwordplain = "";
			   $passwordplain  = rand(99999,999999);
			   $newpass['password'] = md5($passwordplain);
			   $this->db->where('email', $email);
			   $this->db->update('register-user', $newpass);

			   $from = "no-reply@improvecreditscore.in"; //senders email address
			   $subject = 'Change Password';  //email subject

			   $message ='<table width="600" cellspacing="0" cellpadding="0" border="0">
                <tbody>
             
                <tr>
                <td style="border:1px solid rgb(0,143,165)" valign="middle" height="80" align="center">
                <a href="https://www.improvecreditscore.in/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.improvecreditscore.in/&amp;source=gmail&amp;ust=1542180511472000&amp;usg=AFQjCNFAK8_gFhh_aTvL0UuQkg6nCVpuVg"><img src="https://www.improvecreditscore.in/assets/images/credit-logo.png" class="m_-8492784028029723014gmail-CToWUd CToWUd" width="240" height="64"></a>
                </td>
                </tr>
                <tr>
                <td style="color:rgb(255,255,255);font-family:Arial,Helvetica,sans-serif;font-size:24px;padding:15px 10px;font-weight:bold" valign="middle" bgcolor="#18244E" align="center">Welcome to Improve Credit Score</td>
                </tr>
                <tr>
                <td style="border-left:1px solid rgb(0,143,165);text-align:left;border-right:1px solid rgb(0,143,165);color:rgb(0,0,0);padding:10px;font-family:Arial,Helvetica,sans-serif;font-size:15px;font-weight:normal" valign="middle" align="center">
                <p style="margin-top:0px">Dear Sir/Mam,</p>
                <p>Thanks for contacting regarding to forgot password,</P><P> Your <b>Password</b> is <b>'.$passwordplain.'</b></P><P>Please Update your password.</P>
                <P>Thanks & Regards<br>Improve Credit Score</p>
                
                </td>
                </tr>
                <tr>
                <td valign="middle" height="60" bgcolor="#18244E" align="center"><span style="width:100%;height:auto;float:left;padding:10px 0px;margin:0px;background:rgb(51,51,51) none repeat scroll 0% 0%"><img src="https://ci4.googleusercontent.com/proxy/hKCXIWW3PqvUmYaHjLzt3CVD2fbUeVVNpSZ7lH04H57NNyajNtG_2slX86c5TrOljc_7QV2ccQYhpNI1=s0-d-e1-ft#http://www.accessone.io/images/social.png" usemap="#m_-8492784028029723014_m_291425461368058052_Map" class="m_-8492784028029723014gmail-CToWUd CToWUd" width="127" height="30"></span></td>
                </tr>
                </tbody>
                </table>';

			   //config email settings
			   $config['protocol'] = 'smtp';
			   $config['smtp_host'] = 'ssl://mail.improvecreditscore.in';//'ssl://smtp.gmail.com';
			   $config['smtp_port'] = '465'; //'587';
			   $config['smtp_user'] = $from;
			   $config['smtp_pass'] = 'Admin@123456';//'itarsia#2005';  //sender's password
			   $config['mailtype'] = 'html';
			   $config['charset'] = 'iso-8859-1';
			   $config['wordwrap'] = 'TRUE';
			   $config['newline'] = "\r\n";

			   $this->load->library('email', $config);
			   $this->email->initialize($config);
			   //send email
			   $this->email->from($from);
			   $this->email->to($email);
			   $this->email->subject($subject);
			   $this->email->message($message);

			   if($this->email->send()){
				   //for testing
				   echo "sent to: ".$email."<br>";
				   echo "from: ".$from. "<br>";
				   echo "protocol: ". $config['protocol']."<br>";
				   echo "message: ".$message;
				   return true;
			   }
			   else
			   {
				   echo "email send failed";
				   return false;
			   }

		   }

	   }

	 /* --------------..//end forgot password -----------*/

	/* ---------------------email id verify via user email ------------------ */
	public function sendEmail($receiver){

		$from = "no-reply@improvecreditscore.in"; //senders email address
		$subject = 'Verify email address';  //email subject
		$message ='<table width="600" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr>
            <td style="border:1px solid rgb(0,143,165)" valign="middle" height="80" align="center">
            <a href="https://www.improvecreditscore.in" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.improvecreditscore.in/&amp;source=gmail&amp;ust=1542180511472000&amp;usg=AFQjCNFAK8_gFhh_aTvL0UuQkg6nCVpuVg"><img src="https://www.improvecreditscore.in/assets/images/credit-logo.png" class="m_-8492784028029723014gmail-CToWUd CToWUd" width="240" height="64"></a>
            </td>
            </tr>
            <tr>
            <td style="color:rgb(255,255,255);font-family:Arial,Helvetica,sans-serif;font-size:24px;padding:15px 10px;font-weight:bold" valign="middle" bgcolor="#18244E" align="center">Welcome to IMPROVE CREDIT SCORE</td>
            </tr>
            <tr>
            <td style="border-left:1px solid rgb(0,143,165);text-align:left;border-right:1px solid rgb(0,143,165);color:rgb(0,0,0);padding:10px;font-family:Arial,Helvetica,sans-serif;font-size:15px;font-weight:normal" valign="middle" align="center">
            <p style="margin-top:0px">Dear <b>'.$this->input->post('fname').'</b>,</p>
            <p style="text-align: center;">Thanks so much for joining Imporve Credit Score ! To finish Signing up, you just need to confirm that we got your email right</p>

            <p style="text-align: center;"><strong>Getting Started</strong></p>
            <p style="text-align: center">Click on the below <span class="m_-8492784028029723014gmail-il">verification</span> link </p>
            <p><a href=\'https://www.improvecreditscore.in/confirmEmail/'.md5($receiver).'\' style="color:rgb(248,156,32)" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.improvecreditscore.in/confirmEmail/'. md5($receiver) .'&amp;source=gmail&amp;ust=1542180511472000&amp;usg=AFQjCNGEA2yDG7hz4MCFneeQMZ2CykW7pg">https://www.improvecreditscore.in/'. md5($receiver) .'</a></p>
           
           
            <p style="text-align: center">If you have any queries, do not hesitate to email us at <a href="mailto:info@improvecreditscore.in" style="color:rgb(248,156,32)" target="_blank">info@improvecreditscore.in</a></p>
            </td>
            </tr>
            <tr>
            <td valign="middle" height="60" bgcolor="#18244E" align="center"><span style="width:100%;height:auto;float:left;padding:10px 0px;margin:0px;background:rgb(51,51,51) none repeat scroll 0% 0%">
               <p style="text-align: center">Copyright © 2019, All Rights Reserved. Improve Credit Score. <br> Mumbai, Maharashtra, India</p>
            </td>
            </tr>
            </tbody>
            </table>';

		//config email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://mail.improvecreditscore.in';//'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465'; //'587';
		$config['smtp_user'] = $from;
		$config['smtp_pass'] = 'Admin@123456';//'itarsia#2005';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = 'TRUE';
		$config['newline'] = "\r\n";

		$this->load->library('email', $config);
		$this->email->initialize($config);
		//send email
		$this->email->from($from);
		$this->email->to($receiver);
		$this->email->subject($subject);
		$this->email->message($message);


		if($this->email->send()){
			//for testing
			echo "sent to: ".$receiver."<br>";
			echo "from: ".$from. "<br>";
			echo "protocol: ". $config['protocol']."<br>";
			echo "message: ".$message;
			return true;
		}
		else
		{
			echo "email send failed";
			return false;
		}

	}

	function verifyEmail($key)
	{
		$data = array('status' => 1);
		$this->db->where('md5(email)',$key);
		return $this->db->update($this->table, $data);    //update status as 1 to make active user
	}

    /* ----------------------..//end email verify ----------------------------- */
	/* --------------count total register user ---------------- */

	public function getCountUser()
	{
		$qry = $this->db->get($this->table);
		 return $qry->num_rows();
	}

}
