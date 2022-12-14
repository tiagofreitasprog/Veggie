<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Model {
	public $nome;
	public $descricao;

	public function ultimas_entradas($entradas){
		$query = $this->db->get('produtos', $entradas);
		return $query->result();
    }
    public function inserir_produtos(){
    	$this->nome = $this->input->post('nome');
    	$this->descricao = $this->input->post('descricao');
    	$this->db->insert('produtos', $this);
    }
}
