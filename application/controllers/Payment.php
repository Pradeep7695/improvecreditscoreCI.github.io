<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 25-06-2019
 * Time: 09:56 AM
 */

class Payment extends CI_Controller
{
	/* payment success */

	public function razorPaySuccess()
	{
		$data = [
			'user_id' => $_SESSION['id'],//$this->input->post('id'),
			'payment_id' => $this->input->post('razorpay_payment_id'),
			'amount' => $this->input->post('totalAmount'),
			'plan_name'  => $this->input->post('plan_name'),
			'package_validity'  => $this->input->post('package_validity'),
			'product_id' => $this->input->post('product_id'),
		];
		$insert = $this->db->insert('payments', $data);

		$arr = array('msg' => 'Payment successfully credited', 'status' => true);
		echo json_encode($arr);
	}

	public function RazorThankYou()
	{
		$this->load->view('thank_you');
	}

}
