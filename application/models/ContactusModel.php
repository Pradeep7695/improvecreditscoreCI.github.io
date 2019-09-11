<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 04-07-2019
 * Time: 10:58 AM
 */
class ContactusModel extends CI_Model
{
	private $table = 'contact_us';
	private $id ='id';
	private $order = 'DESC';

	public function insertContact($post)
	{
		return $this->db->insert($this->table,$post);
	}

	public function getAllContact()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function editContactUs($id)
	{
	return	$this->db->select('*')
			         ->where(['id',$id])
			         ->get($this->table)->row();
	}

	public function update_contact_us($id,$post)
	{
		return $this->db->where(['id',$id])
			            ->update($this->table,$post);
	}

	/* fetch data to front ------- */

	public function fetchDataFront()
	{
	     $this->db->order_by($this->id,$this->order);
	     return $this->db->get($this->table)->result();
	}

}
