<?php
include "../model/BD.class.php";

class ImoveisController {

    private $model;
    private $table = "tabela_imoveis";

    public function __construct(){

        $this->model = new BD();
    }

    public function salvar($dados){
        $this->model->inserir($this->table, $dados);
    }
    
    public function update($dados){
        $this->model->update($this->table, $dados);
    }

    public function carregar(){
        
        return $this->model->select($this->table);
    }
    
    public function pesquisar($dados){
        return $this->model->pesquisar($this->table, $dados);

    }
    public function deletar($id){
        
        return $this->model->remove($this->table,$id);
    }

    public function buscar($id){
        
        return $this->model->buscar($this->table,$id);
    }

}