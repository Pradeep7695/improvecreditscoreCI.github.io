<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 06-07-2019
 * Time: 03:42 PM
 */
class Feedback_form extends CI_Controller
{
	public function feedback()
	{
		if($_SERVER['REQUEST_METHOD']=='POST'){

			$to='info@improvecreditscore.in';

			$subject = "Feedback  Details";

			/* Details of Complainant */

			$data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

			$data.='<tr><td colspan="2" align="center">Feedback  Details :-</td></tr>';/* field name */

			$data.='<tr><td>First Name :</td><td>'.$_POST['fname'].'</td></tr>';

			$data.='<tr><td>Last Name :</td><td>'.$_POST['lname'].'</td></tr>';

			$data.='<tr><td>Contact No : </td><td>'.$_POST['contactno'].'</td></tr>';

			$data.='<tr><td> Email :</td><td>'.$_POST['email'].'</td></tr>';

			$data.='<tr><td> Pin Code :</td><td>'.$_POST['pincode'].'</td></tr>';

			$data.='<tr><td> City :</td><td>'.$_POST['city'].'</td></tr>';

			$data.='<tr><td>Message : </td><td>'.$_POST['msg'].'</td></tr>';

			$data.='</table>';

			$message=$data;

			$headers = "MIME-Version: 1.0" . "\r\n";

			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			$headers .= 'From: <'.$_POST['email'].'>' . "\r\n";

			header('Content-Type: application/json');

			if(mail($to,$subject,$message,$headers)){

				echo json_encode(['success'=>true,'message'=>'Enquiry sent successfully. Thankyou!'],true);

				/* echo "Enquiry sent successfully. Thankyou! "; */

			}

			else{

				echo json_encode(['error'=>true,'message'=>'Message sending failed. Please contact info@improvecreditscore.in'],true);

			}
		}
	}
}
