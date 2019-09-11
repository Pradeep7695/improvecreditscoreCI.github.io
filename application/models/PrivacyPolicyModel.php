<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 03-07-2019
 * Time: 01:11 PM
 */
class PrivacyPolicyModel extends CI_Model
{
	private  $table = 'privacy_policy';
	private $id = 'id';
	private $order = 'DESC';

	public function insertPrivacy($post)
	{
		return $this->db->insert($this->table,$post);
	}
	public function getAllPrivacy()
	{
		$this->db->order_by($this->id,$this->order);
	    return	$this->db->get($this->table)->result();
	}

	public function edit_privacy_policy($id)
	{
	return	$this->db->select('*')
			     ->where(['id',$id])
			     ->get($this->table)->row();
	}

	public function updatePrivacyPolicy($id , $post)
	{
      return $this->db->where(['id',$id])
		        ->update($this->table,$post);
	}

	/* get fetch data to front end ---- */

	public function fetchDataToFront()
	{
		$this->db->get($this->table);
	}

	/* ---------------------fetch data to front end -------------- */

	public function fetchDataFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->order_by(1);
		return $this->db->get($this->table)->result();
	}

}
