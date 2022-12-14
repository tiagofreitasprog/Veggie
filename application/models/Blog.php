<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Model {
	public $nome;
	public $mensagem;
    public $imagem;

	public function ultimas_entradas($entradas){
		$query = $this->db->get('blog', $entradas);
		return $query->result();
    }
    public function inserir_produtos(){
    	$this->nome = $this->input->post('nome');
    	$this->mensagem = $this->input->post('mensagem');
        $this->imagem = $this->input->post('imagem');
    	$this->db->insert('produtos', $this);
    }
}
