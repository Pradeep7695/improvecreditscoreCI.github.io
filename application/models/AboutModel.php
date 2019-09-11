<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 04-07-2019
 * Time: 06:29 PM
 */
class AboutModel extends CI_Model
{
	private $table = 'about_us';
	private $id = 'id';
	private $order = 'DESC';

	public function insertAbout($post)
	{
		return $this->db->insert($this->table,$post);
	}

	public function getAllAboutUs()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function editAbout($id)
	{
	return	$this->db->select('*')
			     ->where(['id',$id])
			     ->get($this->table)->row();
	}

	public function updateAbout($id , $post)
	{
		return $this->db->where(['id',$id])
			     ->update($this->table,$post);
	}

	/* ----fetch data to front end -------------- */

	public function fetchDataFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}


	/* ----------..//end ------------- */
}
