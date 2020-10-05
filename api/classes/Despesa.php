<?php

require_once 'Banco.php';

class Despesa{

    public function registrar(){
        $titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
        $valor = isset($_POST['valor'])?$_POST['valor']:'';
        $data_gasto = isset($_POST['data_gasto'])?$_POST['data_gasto']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "INSERT INTO tb_despesas(titulo,valor,data_despesa,id_usuario,st_ativo) values ('$titulo',$valor,'$data_gasto', $id_usuario, 1)";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso no Registro";
        }else{
            throw new Exception("Falha ao registrar gasto");
        }
    }

    public function listar($id){
        if(strpos($id,"or") == true){
            $id = 0;
        }
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_despesas where id_usuario = $id and st_ativo = 1";
        $sql = $con->prepare($sql);
        $sql->execute();

        //$resultados[] = array();

        //Armazena Consulta
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $row;
        }

        if(!$resultados){
            throw  new Exception("Nenhum gasto cadastrado!");
        }

        return $resultados;
    }

    public function editar(){
        $titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
        $valor = isset($_POST['valor'])?$_POST['valor']:'';
        $data_gasto = isset($_POST['data_gasto'])?$_POST['data_gasto']:'';
        $id_gasto = isset($_POST['id_gasto'])?$_POST['id_gasto']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "UPDATE tb_despesas set 
        titulo = '$titulo',
        valor = '$valor',
        data_despesa = '$data_gasto'
        where id_usuario = $id_usuario and id_despesa = $id_gasto";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso na Atualização";
        }else{
            throw new Exception("Falha ao atualizar gasto");
        }
    }

    public function listarEspecifica($id_usuario,$id_despesa,$key){
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_despesas d
        inner join tb_usuario u on d.id_usuario = u.id_usuario WHERE d.id_usuario = $id_usuario and id_despesa = $id_despesa";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados[] = array();

        //Armazena Consulta
        if($row = $sql->fetch(PDO::FETCH_ASSOC)){
            if($row['access_key']==$key){
                $resultados = $row;
            }else{
                $resultados = array("Despesa inexistente");
            }
        }

        if(!$resultados){
            //Cria Excption
            throw new Exception("Despesa inexistente");
        }

        return $resultados;
    }

    public function deletar(){
        $id_gasto = isset($_POST['id_gasto'])?$_POST['id_gasto']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "UPDATE tb_despesas set 
        st_ativo = 0
        where id_usuario = $id_usuario and id_despesa = $id_gasto";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso na Atualização";
        }else{
            throw new Exception("Falha ao atualizar gasto");
        }
    }

}