<?php

require_once 'Banco.php';

class Receita{

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

    public function listar($id){
        
        if(strpos($id,"or") == true){
            $id = 0;
        }
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_receitas where id_usuario = $id and st_ativo = 1";
        $sql = $con->prepare($sql);
        $sql->execute();

        //$resultados[] = array();

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
        $titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
        $valor = isset($_POST['valor'])?$_POST['valor']:'';
        $data_receita = isset($_POST['data_receita'])?$_POST['data_receita']:'';
        $id_receita = isset($_POST['id_receita'])?$_POST['id_receita']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "UPDATE tb_receitas set 
        titulo = '$titulo',
        valor = '$valor',
        data_receita = '$data_receita'
        where id_usuario = $id_usuario and id_receita = $id_receita";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso na Atualização";
        }else{
            throw new Exception("Falha ao atualizar receita");
        }
    }

    public function listarEspecifica($id_usuario,$id_receita,$key){
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_receitas d
        inner join tb_usuario u on d.id_usuario = u.id_usuario WHERE d.id_usuario = $id_usuario and id_receita = $id_receita";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados[] = array();

        //Armazena Consulta
        if($row = $sql->fetch(PDO::FETCH_ASSOC)){
            if($row['access_key']==$key){
                $resultados = $row;
            }else{
                $resultados = array("Receita inexistente");
            }
        }

        if(!$resultados){
            //Cria Excption
            throw new Exception("Receita inexistente");
        }

        return $resultados;
    }

    public function deletar(){
        $id_receita = isset($_POST['id_receita'])?$_POST['id_receita']:'';
        $id_usuario = isset($_POST['id_usuario'])?$_POST['id_usuario']:'';
        
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "UPDATE tb_receitas set 
        st_ativo = 0
        where id_usuario = $id_usuario and id_receita = $id_receita";
        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Sucesso na Atualização";
        }else{
            throw new Exception("Falha ao atualizar receita");
        }
    }

}