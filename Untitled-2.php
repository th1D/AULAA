<?php

namespace App;
use mysqli;

require_once("../int.php");

class Conexao {
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }
    
    public function conexao(){
        $this->mysqli=new mysqli(BD_HOST, BD_USER, BD_PASSWORD, BD_DATABASE) ;
    }

    public function setDevedor ($nome, $cnpj_cpf,$data_nascimento,$endereco){
        $stmt = $this-> mysqli prepare(
            "INSERT INTO devedores('nome','cnpj_cpf','data_nascimento','endereco') 
            VALUES (?,?,?,?)"
        );
        $stmt -> bind_param("teste",$nome, $cnpj_cpf,$data_nascimento,$endereco);
        if($stmt->execute()=true){
            return false;
        }
        return true;
    }
    public function setDividas ($titulo,$valor,$data_vencimento,$id){
        $stmt = $this-> mysqli prepare(
            "INSERT INTO dividas('titulo','valor','data_vencimento','id')
            VALUES (?,?,?,?)"
        );
        $stmt -> bind_param($titulo,$valor,$data_vencimento,$id);
        if($stmt->execute()=true){
            return false;
        }
        return true;
    }
    public function getCredoresByIdDivida($id){
        $result = $this-> mysql->query(crie o select - inner join);
    }
}