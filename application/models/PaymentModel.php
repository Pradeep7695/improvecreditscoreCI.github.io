<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 01-07-2019
 * Time: 04:41 PM
 */
class PaymentModel extends  CI_Model
{
	private $table = 'payments';
	private $id = 'id';
	private $order = 'DESC';

    public function insertPay($data)
	{
		$data['created_at'] = date('d-m-y');
		return $this->db->insert('payments',$data);
	}

	public function getPaymentHistory()
	{
		$id = $this->session->userdata('id');
		$this->db->order_by($this->id,$this->order);
		$this->db->where('user_id',$id);
		return $this->db->get('payments')->result();
	}

	/* -----------single Payment Details  --------- */
     public function singlePaymentRecord($id)
	 {

	 }

	 //premium member
	  public function premium_member()
	  {
	  	$query=$this->db->select('*')->from('register-user')
			->join('payments','payments.user_id=`register-user`.id','left')
			->where('payments.user_id is not ',null)
			->order_by('payments.id','desc')
			//->group_by('payments.user_id')
		  	->get();
	  	  return $query->result();
	  }

	  // single user details
	public function PremiumMemberDetails($id)
	{
		return	$this->db->select('*')
			->where(['id'=>$id])
			->get($this->table)->row();

	}

     /* ------------..//end single payment details --------- */
	/* ----------------get single record for user in pdf ---------------- */

	public function fetch_single_payment_details($id)
	{
		$this->db->where(['id'=>$id]);
		$data = $this->db->get($this->table)->row();

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

			$output .= '
			  <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Credit Score Improvement Plans Invoice</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;">
<div style="width: 680px; text-align: center;">
    <p style="margin-top: 0px; margin-bottom: 20px; text-align: left;">Thank you for your interest in Credit Score Improvement Plans. Your order has been Generated.</p>

    <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
        <tr>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="1">Customer Details</td>
            <!--<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="1">Payment Details </td>-->
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px; line-height: 20px;">
              
                <b>Invoice Id :</b> '.uniqid().'<br/>
                <b>Date :</b> <b>'. date('d-m-Y') .'</b><br/>
                <b>Full Name:</b>&nbsp;&nbsp;&nbsp;'. $this->session->userdata('fname').' '. $this->session->userdata('lname') .'<br/>
                <b>Mobile No.:</b>&nbsp;&nbsp;&nbsp;'. $this->session->userdata('contactno') .'<br/>
                <b>Telephone No.:</b>&nbsp;&nbsp;&nbsp;'. $this->session->userdata('telephone') .'<br/>
                <b>Email:</b> &nbsp;&nbsp;&nbsp; '. $this->session->userdata('email').'<br/>              
                <b>Pin Code:</b> &nbsp;&nbsp;&nbsp; '. $this->session->userdata('pincode') .'<br/>
                <b>City :</b> &nbsp;&nbsp;&nbsp; '.$this->session->userdata('city').'<br/> 
                
                </td>       
            </td>
        </tr>
        </tbody>
    </table>

 
    <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
        
        <tr>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Sr. No.</td>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: center; padding: 7px; color: #222222;">Credit Plan Name</td>

            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: center; padding: 7px; color: #222222;">Package Validity</td>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: center; padding: 7px; color: #222222;">Payment Id</td>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: center; padding: 7px; color: #222222;">Total Amount</td>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">1</td>
            <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">
                <b>'.$data->plan_name.'</b>
            </td>
            <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">
               <b>'. $data->package_validity .'</b>
            </td>
            <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">
              <b>'. $data->payment_id .'</b>
            </td>
            <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">
               <b>'. $data->amount .'</b>
            </td>
        </tr>


        </tbody>

   
          </table>
        </div>
   </body>
</html>
			';


		$output .= '</table>';
		return $output;
	}

	/* ----------------..//end single record for user in pdf ------------ */

	/* -------------count all paymentable user ------------- */
	public function getAllPaymentUser()
	{
		$qry = $this->db->get($this->table);
		return $qry->num_rows();
	}

}
