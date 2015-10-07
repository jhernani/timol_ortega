<?php
/*defined('BASEPATH') OR exit('No direct script access allowed');*/

class site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->clear_cache();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('homeheader');
		$this->load->view('homecontent');
	}
	public function login(){
		
		$this->load->library('form_validation');
		$this->load->helper('security');

		
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|max_length[45]|callback_checkusername|xss_clean');
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[5]|max_length[45]|xss_clean');

		if($this->form_validation->run()== FALSE){
			$this->load->view('homeheader');
			$this->load->view('homecontent');
		}else{
			$this->load->model('model_login');
			$result = $this->model_login->login_user();
			if($result){
				$this->session->set_userdata($result);
				redirect(base_url().'userprofile');		
			}else{
				$this->load->view('homeheader');
				$this->load->view('homecontent');
			}
		}
		
	}

	public function updateuser(){

		$this->load->library('form_validation');
		$this->load->helper('security');

		#rules
		$this->form_validation->set_rules('firstname','First Name', 'trim|required|min_length[3]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('lastname','Last Name', 'trim|required|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email|min_length[6]|max_length[50]|valid_email|is_unique[users.email]|xss_clean');
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|max_length[45]|is_unique[users.username]|xss_clean');
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[45]|matches[confirm]|xss_clean');
		$this->form_validation->set_rules('confirm','Confirm Password', 'trim|required|min_length[6]|max_length[45]|matches[password]|xss_clean');

		if($this->form_validation->run()== FALSE){
			$this->load->view('login');
		}else{

			$this->load->model('update_user');
			if($this->update_user->userupdate()){
				echo 'updated';
			}else{
				echo 'failed';
			}
		}

		

	}

	public function register(){
		$data['status'] = NULL;		
		$this->load->view('register');
	}
	public function createuser(){
		$this->load->library('form_validation');
		$this->load->helper('security');

		#rules
		$this->form_validation->set_rules('firstname','First Name', 'trim|required|min_length[3]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('lastname','Last Name', 'trim|required|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email|min_length[6]|max_length[50]|valid_email|is_unique[users.email]|xss_clean');
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|max_length[45]|is_unique[users.username]|xss_clean');
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[45]|matches[confirm]|xss_clean');
		$this->form_validation->set_rules('confirm','Confirm Password', 'trim|required|min_length[6]|max_length[45]|matches[password]|xss_clean');

		if($this->form_validation->run()== FALSE){
			$this->load->view('register');
		}else{
			$this->load->model('insertuser');

			if($query = $this->insertuser->insert_user()){
				echo 'inserted';
			}else{
				echo 'failed';
			}
		}

	}

	public function createroom(){
		$this->load->library('form_validation');
		$this->load->helper('security');

		#rules
		$this->form_validation->set_rules('room_number','Room Number', 'trim|required|numeric|is_unique[rooms.room_id]|xss_clean');
		$this->form_validation->set_rules('occupants','Maximum Number of Occupants', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('building','Building', 'trim|required|xss_clean');
		$this->form_validation->set_rules('room_type','Room Type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gender_preference','Gender Preference', 'trim|required|xss_clean');
		
		if($this->form_validation->run()== FALSE){
			$this->load->view('userheader');
			$this->load->view('addrooms');
		}else{
			$this->load->model('insertroom');

			if($query = $this->insertroom->insert_room()){
				redirect(base_url().'view_rooms');
			}else{
				redirect(base_url().'add_rooms');
			}
		}

	}
	public function edit_room_info(){
		$this->load->library('form_validation');
		$this->load->helper('security');

		#rules
		$this->form_validation->set_rules('room_number','Room Number','trim|numeric|xss_clean');
		$this->form_validation->set_rules('occupants','Maximum Number of Occupants','trim|numeric|xss_clean');
		$this->form_validation->set_rules('building','Building','trim|xss_clean');
		$this->form_validation->set_rules('room_type','Room Type','trim|xss_clean');
		$this->form_validation->set_rules('gender_preference','Gender Preference','trim|xss_clean');
		
		if($this->form_validation->run()== FALSE){
			$this->load->view('userheader');
			$this->load->view('view_edit_rooms');
		}else{
			$this->load->model('getrooms');
			$this->getrooms->edit_room_info();
			if($this->getrooms->edit_room_info()){
				redirect(base_url().'view_rooms');
			}else{
				redirect(base_url().'add_rooms');
			}
		}
	}
		public function edit_tenant_info(){
		$this->load->library('form_validation');
		$this->load->helper('security');

		$this->form_validation->set_rules('tenant_id','Tenant ID', 'trim|min_length[3]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('fname','First Name', 'trim|min_length[3]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('mname','Last Name', 'trim|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('fname','First Name', 'trim|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('email','Email Address', 'trim|valid_email|min_length[6]|max_length[50]|valid_email|xss_clean');
		$this->form_validation->set_rules('tenant_id','Tenant ID', 'trim|numeric|is_unique[tenants.users_user_id]|xss_clean');
		$this->form_validation->set_rules('month','Month', 'trim|numeric|xss_clean');
		$this->form_validation->set_rules('day','Month', 'trim|numeric|xss_clean');
		$this->form_validation->set_rules('year','Month', 'trim|numeric|xss_clean');
		
		if($this->form_validation->run()== FALSE){
			$this->load->view('userheader');
			$this->load->view('edit_tenant_view');
		}else{
			$this->load->model('gettenant');
			if($this->gettenant->edit_tenant_info()){
				redirect(base_url().'tenant');
			}else{
				redirect(base_url().'add_rooms');
			}
		}

	}

	public function check_email($email){
		$this->load->model('insertuser');

		$email_valid = $this->insertuser->check_email($email);

		if($email_valid){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function check_username($username){
		$this->load->model('insertuser');

		$username_valid = $this->insertuser->check_username($username);

		if($username_valid){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function checkusername($username){

		$this->load->model('users');
		if($this->users->CheckUsername($username)!=NULL){
			return TRUE;
		}else{
			return FALSE;
		}


	}

	public function edit() {
		$this->load->view('edit');
	}
	public function userprofile() {
			if(!$this->session->userdata('username')){
				redirect(base_url());
			}else{
				$this->load->view('userheader');
				$this->load->view('usercontent');
			}
				
	}
	public function logout(){
		delete_cookie('ci_session');
		$this->session->session_destroy();

		redirect(base_url());
	}

	public function addtenant(){
		$this->load->library('form_validation');
		$this->load->helper('security');

		#rules
		$this->form_validation->set_rules('fname','First Name', 'trim|required|min_length[3]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('mname','Last Name', 'trim|required|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('fname','First Name', 'trim|required|min_length[2]|max_length[14]|xss_clean');
		$this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email|min_length[6]|max_length[50]|valid_email|is_unique[tenants.email]|xss_clean');
		$this->form_validation->set_rules('tenant_id','Tenant ID', 'trim|required|numeric|is_unique[tenants.users_user_id]|xss_clean');
		$this->form_validation->set_rules('month','Month', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('day','Month', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('year','Month', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('room','Room', 'trim|required|numeric|xss_clean');

		if($this->form_validation->run()== FALSE){
				$this->load->model('rooms_building');
				$data['rooms'] = $this->rooms_building->getRoomidone();
				$this->load->model('gettenant');
				$data['datatable'] = $this->gettenant->getAlltenants();
				$this->load->view('userheader');
				$this->load->view('tenantmanagement',$data);
		}else{
			$this->load->model('insertuser');
			if($query = $this->insertuser->insert_tenant()){
				redirect(base_url().'tenant');
			}else{
				redirect(base_url().'tenant');
			}
		}

	}

	function clear_cache()
	{
	    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	    $this->output->set_header("Pragma: no-cache");
	}


}
