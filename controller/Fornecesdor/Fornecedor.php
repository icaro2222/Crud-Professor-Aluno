<?php

/**
 * Salvar como fornecedor.php
 * herda da classe crudfornecedor
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

 include_once '../../db/DB.php';

require_once 'CrudFornecedor.php';

 class Fornecedor extends CrudFornecedor {
    
    protected $tabela = 'fornecedor';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome, endereco) VALUES (:nome, :endereco)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
    //deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }

    //deleta  1 item
        public function deleteNome($nome) {
            $sql = "DELETE FROM $this->tabela WHERE nome = :nome";
            $stm = DB::prepare($sql);
            $stm->bindParam(':nome', $nome, PDO::PARAM_INT);
            return $stm->execute();
        }
    
}
