<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 02-07-2019
 * Time: 03:03 PM
 */
class WeDoModel extends CI_Model
{
	private $table = 'what_we_do';
	private $id = 'id';
	private $order = 'DESC';

	public function insertWeDo($post)
	{
		return $this->db->insert($this->table,$post);
	}

	public function showAllData()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function edit_what_we_do($id)
	{
		return $this->db->select('*')
			            ->where(['id',$id])
			            ->get($this->table)->row();
	}

	public function update_what_we_do($id , $post)
	{
		return $this->db->where(['id',$id])
			            ->update($this->table,$post);
	}
	/* --------------fetch data to front end  --------------- */

	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(4);
		return $this->db->get($this->table)->result();
	}

}
