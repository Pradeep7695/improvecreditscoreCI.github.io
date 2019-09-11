<?php 
/**
 * Post_model
 *
 * @author      Carl Victor Fontanos
 * @authorurl   www.carlofontanos.com
 * @version     1.0
 *
 */
 
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_post($post_type){
        $this->db->where('post_type',$post_type);
        $this->db->order_by('ID', 'DESC');
        return $this->db->get('posts')->result();
    }
    
    public function getPostById($id){
        $qry = $this->db->where(['ID'=>$id])->get('posts');
        return $qry->row();
    }
    public function insert_post($post_data_array) {

        //$current_user = current_user();
        
        $post_content = $post_data_array['post_content'];
        $post_title = $post_data_array['post_title'];
        $post_image = $post_data_array['post_image'];
        $post_excerpt = '';
        $post_type = $post_data_array['post_type'];
     
        /*  extract($post_data_array);
        
        if(!empty($post_author) && $this->user_model->is_user($post_author)){
            $author = $post_author;
        } elseif(is_user_logged_in()) {
            $author = $current_user->ID;
        } else {
            $author = $this->user_model->get_superadmin();
        } */
        
        $post_data = array(
           /*  'post_author'       =>  $author, */
            'post_date'         =>  date("Y-m-d H:i:s", time()),
            'post_date_gmt'     =>  date("Y-m-d H:i:s", time()),
            'post_content'      =>  $post_content,
            'post_title'        =>  $post_title,
            'post_excerpt'      =>  $post_excerpt,
            'post_status'       =>  'publish',
            'post_image'        =>  $post_image,
            'post_type'         =>  $post_type,
            'post_name'         =>  url_title($post_title, 'dash', TRUE),
            'post_modified'     =>  date("Y-m-d H:i:s", time()),
            'post_modified_gmt' =>  date("Y-m-d H:i:s", time()),
        );
        
        $cleaned_data = $this->security->xss_clean($post_data);
        
        $this->db->insert('posts', $cleaned_data);
        
        $check_insert = $this->db->get_where('posts', $cleaned_data, 1, 0);
        
        if($check_insert->num_rows() > 0){
            
            //$category = $post_category;
            $post = $check_insert->row();
            //self::insert_post_category($post->ID, $category);
            return $post->ID;
            
        } else {
            return false;
            
        }
    }
    
    public function updatePostById($id, $data)
    {
        return $this->db->where(['id'=>$id])->update('posts',$data);
        
    }
    
}