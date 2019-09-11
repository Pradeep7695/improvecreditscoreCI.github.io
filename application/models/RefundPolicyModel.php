<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 02-07-2019
 * Time: 06:02 PM
 */
class RefundPolicyModel extends CI_Model
{
	private $table = 'refund_policy';
	private $id = 'id';
	private $order = '';

	public function insertRefund($post)
	{
		return $this->db->insert($this->table,$post);
	}
	public function getAllRefund()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function edit_refund($id)
	{
       return $this->db->select('*')
		           ->where('id',$id)
		           ->get($this->table)->row();
	}

	public function update_refund($id , $post)
	{
		return $this->db->where(['id',$id])
			            ->update($this->table,$post);
	}

	/* -------------fetch data to front end ---------------- */

	public function fetchDataFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
