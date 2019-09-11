<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 01-07-2019
 * Time: 07:25 PM
 */
class ServiceModel extends CI_Model
{
	private $table = 'services';
	private $order = 'DESC';
	private $id = 'id';

	public function insertService($post)
	{
		$post['created_at'] = date('y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function showAllServices()
	{
		$this->db->order_by($this->id,$this->order);
	    return	$this->db->get($this->table)->result();
	}

	public function edit_service($id)
	{
	return	$this->db->select('*')
			     ->where('id',$id)
			     ->get($this->table)->row();
	}

	public function update_service($id,$post)
	{
		return	$this->db->where('id',$id)
				     ->update($this->table,$post);
	}

	/*------------- fetch data to front end  ------------- */

	public function fetchDataFrontEnd()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}


}
