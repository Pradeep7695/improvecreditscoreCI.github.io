<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 02-07-2019
 * Time: 12:10 PM
 */
class CreditScoreModel extends CI_Model
{
	private $table = 'improve_credit_score';
	private $id =  'id';
	private $order  = 'DESC';

	public function insertCredit($post)
	{
		$post['created_at'] = date('d-m-y');
		return $this->db->insert($this->table,$post);
	}

	public function AllCreditScore()
	{
		$this->db->order_by($this->id,$this->order);
		return$this->db->get($this->table)->result();
	}

	public function edit_credit_score($id)
	{
		return $this->db->select('*')
			     ->where('id',$id)
			     ->get($this->table)->row();
	}

	public function update_improve_credit_score($id , $post)
	{
	return	$this->db->where(['id',$id])
			         ->update($this->table,$post);
	}

	/* -----------fetch data to front end -------------- */

	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}


}
