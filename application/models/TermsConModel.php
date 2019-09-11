<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 12-07-2019
 * Time: 06:01 PM
 */
class TermsConModel extends CI_Model
{
	private $table = 'terms_condition';
	private $id = 'id';
	private $order = 'DESC';

	public function insertTerms($post)
	{
		return $this->db->insert($this->table,$post);
	}

	public function getAllTermsData()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}
	public function editTerms($id)
	{
	return	$this->db->select('*')
			     ->where(['id'=>$id])
			     ->get($this->table)->row();
	}

	public function updateTermsCon($id , $post)
	{
	return	$this->db->where(['id'=>$id])
			     ->update($this->table,$post);
	}

	//fetch data to front

	public function fetchDataFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
