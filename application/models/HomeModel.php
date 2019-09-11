
application/x-httpd-php AdminModel.php ( PHP script text )
<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 17-04-2019
 * Time: 01:12 PM
 */
class HomeModel extends CI_Model
{
	 private  $table = 'register-user';
	 private $id = 'id';
	 
	 public function __construct() {
	     parent::__construct();
	 }
	
	public function adminAuth($username , $password)
	{
     $qry = $this->db->where(['username'=>$username , 'password'=>$password])
		              ->get('admin');
     if ($qry->num_rows())
	 {
	 	return $qry->row();
	 }
	 else
	 {
	 	return false;
	 }

	}

	public function changePass($id)
	{
		$qry = $this->db->where(['id'=>$id])
			->get($this->table);

		if ($qry->num_rows() > 0)
		{
			return $qry->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function updatePass($new_pass,$id)
	{
		$data = array(
			'password'=> $new_pass
		);
		return $this->db->where(['id'=>$id])
			->update($this->table,$data);
	}

}
