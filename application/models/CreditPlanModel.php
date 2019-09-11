<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 25-06-2019
 * Time: 01:40 PM
 */

class CreditPlanModel extends CI_Controller
{
	private  $table = '';
	private  $id ='id';
	private  $order = 'DESC';
	public function insertCreditPlan($data)
	{
		$data['created_at']=date('Y-m-d');
    	return	$this->db->insert($this->table,$data);
	}

	public function showCreditPlan()
	{

	}

}
