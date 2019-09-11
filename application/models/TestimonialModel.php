<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 02-07-2019
 * Time: 04:38 PM
 */
class TestimonialModel extends CI_Model
{
	private $table = 'testimonial';
	private $id = 'id';
	private $order  = 'DESC';

	public function insertTestimonial($post)
	{
		return $this->db->insert($this->table,$post);
	}

	public function allTestimonial()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}
	public function edit_testimonial($id)
	{
		return $this->db->select('*')
			            ->where(['id'=>$id])
			            ->get($this->table)->row();
	}

	public function update_testimonial($id , $post)
	{
		return $this->db->where(['id'=>$id])
			            ->update($this->table,$post);
	}

	/* count all user of testimonial  */

	public function getAllTestimonial()
	{
		return $this->db->get($this->table)->num_rows();
	}

	/* fetch data to front end  */

	public function fetchDataToFront()
	{
	    $this->db->order_by($this->id,$this->order);
	    return $this->db->get($this->table)->result();
	}


}
