<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('formuas');
	}
	public function save_data(){
		$firstname=$this->input->post['firstname'];
		$lastname=$this->input->post['lastname'];
		$gender=$this->input->post['gender'];
		$birth=$this->input->post['birth'];
		$category=$this->input->post['category'];
		$membership=$this->input->post['membership'];

		$this->load->model('M_msiswa');
		$this->M_msiswa->save_data($firstname,$lastname,$gender,$birth,$category,$membership);
		
		$data=['pesan'] -"berhasil";
		$this->template->load("theme","formuas", $data);
	}
	public function home(){
		$data="welcome";
		$this->template->load("theme","formuas", $data);
	}
	public function form(){
		$data="welcome";
		$this->template->load("theme","formuas", $data);
	}
	public function hasil(){
		$data="welcome";
		$this->template->load("theme","output_form", $data);
	}
}
