<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->view('header');
	}
	public function index(){
			
		$this->load->library('pagination');
		$config['base_url'] = site_url('news/index');
		$config['total_rows'] = $this->page_model->record_count();
		$config['per_page'] = 8;
		$config["uri_segment"] = 3;

		//სტილები
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";


		$this->pagination->initialize($config);
	 	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	 	$data['results'] = $this->page_model->show_pages($config['per_page'], $page);
		$data['links'] = $this->pagination->create_links();
		$this->load->view('news_list',$data);
		$this->load->view('footer');	

	}
	public function show($id){	
		$news=$this->page_model->current_page($id);
		$data['single_news']=$news;
		$this->load->view('single_news',$data);
		$this->load->view('footer');

	
	}
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'სათაური', 'trim|required|min_length[5]|max_length[20]',
			array(
				'required' => 'სათაურის შევსება სავალდებულოა',
				'min_length' => 'სათაურის სიგრძე უნდა იყოს 5 სიმბოლოზე მეტი',
				'max_length' => 'სათაურის სიგრძე არ უნდა აღემატებოდეს 20 სიმბოლოს',
				)
			);
		$this->form_validation->set_rules('content', 'ტექსტი', 'required',
			array(
				'required' => 'ტექსტის შევსება სავალდებულოა'
				)
			);
		
		
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $this->form_validation->run() == TRUE){
			$t=$this->input->post('title');
			$c=$this->input->post('content');
		}
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload() ){
			$error = array( 'error' => $this->upload->display_errors() );
			$this->load->view( 'add_news', $error );
		}else{
			$data = array( 'upload_data' => $this->upload->data() );
			$imageName=$data['upload_data']['file_name'];
		}
		

		if ( !empty($imageName) )
			{
				$this->db->set('title', $t);
				$this->db->set('content', $c);
				$this->db->set('image_name', $imageName);
				$this->db->insert('news');
		
				redirect('news');
			}
		$this->load->view('footer');
	}
	public function search(){
		if (! $this->page_model->get_search() ){
			$data['error'] = 'ჩანაწერი არ მოიძებნა';
			$this->load->view('search_fail', $data);
		}else{
		$data['query'] = $this->page_model->get_search();
		$this->load->view('search_result', $data);
		}
		$this->load->view('footer');
	}

}