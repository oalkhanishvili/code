<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function show_pages($limit, $start){
		$this->db->select('id, title, content, image_name');
		$this->db->from('news');
		$this->db->limit($limit, $start);
		$query=$this->db->get();

		if ( $query->num_rows() > 0 ){
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function record_count() {
        return $this->db->count_all("news");
    }
    public function current_page($id){
    	$this->db->select('title,content,image_name');
		$this->db->from('news');
		$this->db->where('id',$id);

		$result=$this->db->get()->row_array();

		return $result;
    }
    public function get_search(){
		$match = $this->input->post('search');
		$this->db->like('title', $match);
		$query = $this->db->get('news');

		if ( $query->num_rows() > 0 ){
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
}
