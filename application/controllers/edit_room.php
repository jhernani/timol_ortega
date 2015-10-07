<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_room extends CI_Controller {

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
	public function index()
	{
		if(!$this->session->userdata('username')){
				redirect(base_url());
			}else{
				
				if(!strcmp($this->input->post('submit'),"Edit")){
					$this->load->model('getrooms');
					$data['rooms'] = $this->getrooms->getSrooms($this->input->post('room_id'));
					$this->load->view('userheader');
					$this->load->view('view_edit_rooms',$data);
				}else{
					$this->load->model('getrooms');
					if($this->getrooms->disable_room()){
						redirect(base_url().'view_rooms');
					}else{
						redirect(base_url().'add_rooms');
					}
				}
			}
	}
}
