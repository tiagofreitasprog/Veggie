<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Produtos');
		$data['produtos'] = $this->Produtos->ultimas_entradas(20);
		$data['title'] = 'Home page';
		$this->load->view('loja/head/head.php',$data);
		$this->load->view('loja/index.php');
		$this->load->view('loja/footer/footer.php');
	}
	public function loja(){
		$this->load->model('Produtos');
		$data['produtos'] = $this->Produtos->ultimas_entradas(20);
		$data['title']  = 'Loja';
		$this->load->view('loja/head/head.php',$data);
		$this->load->view('loja/loja.php',$data);
		$this->load->view('loja/footer/footer.php');
	}
	public function carrinho(){
		$data['title']  = 'Carrinho';
		$this->load->view('loja/head/head.php',$data);
		$this->load->view('loja/carrinho.php');
		$this->load->view('loja/footer/footer.php');
	}
	public function blog(){
		$this->load->model('Blog');
		$data['title']  = 'Blog';
		$data['blog'] = $this->Blog->ultimas_entradas(20);
		$this->load->view('loja/head/head.php',$data);
		$this->load->view('blog/blog.php',$data);
		$this->load->view('loja/footer/footer.php');
	}
	
}
