<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('bawah');
	}

	public function pelangi()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('lagu/pelangi');
		$this->load->view('bawah');
	}

	public function balon()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('lagu/balon');
		$this->load->view('bawah');
	}

	public function cicak()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('lagu/cicak');
		$this->load->view('bawah');
	}

	public function kebun()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('lagu/kebun');
		$this->load->view('bawah');
	}

	public function baby()
	{
		$this->load->view('atas');
		$this->load->view('nav');
		$this->load->view('lagu/baby');
		$this->load->view('bawah');
	}
}
