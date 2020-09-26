<?php

require_once 'Banco.php';

class Receita{
    // public $titulo;
    // public $valor;
    // public $data;

    public function registrar(){
        $titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
        $valor = isset($_POST['valor'])?$_POST['valor']:'';
        $data_receita = isset($_POST['data_receita'])?$_POST['data_receita']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "INSERT INTO tb_receitas(titulo,valor,data_receita,id_usuario,st_ativo) values ('$titulo',$valor,'$data_receita', $id_usuario, 1)";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso no Registro";
        }else{
            throw new Exception("Falha ao registrar receita");
        }
    }

    public function listar(){
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_receitas";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados[] = array();

        //Armazena Consulta
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $row;
        }

        if(!$resultados){
            throw  new Exception("Nenhuma receita cadastrada!");
        }

        return $resultados;
    }

    public function editar(){
        
    }

    public function listaReceitaEspecifica($id){

    }

    public function deletar($id){
        return $id;
    }

}