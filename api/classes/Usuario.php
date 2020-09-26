<?php

require_once 'Banco.php';

class Usuario{
    // public $nome;
    // public $email;
    // public $senha;
    // public $access_key;

    public function cadastrar(){
        $nome = isset($_POST['nome'])?$_POST['nome']:'';
        $email = isset($_POST['email'])?$_POST['email']:'';
        $senha = isset($_POST['senha'])?crypt($_POST['senha']):'';
        $access_key = $this->keyGenerate();

        if($nome != "" || $email != "" || $senha != ""){
            //cria conexão
            $conecta = new Conexao;
            $con = $conecta->conecta();

            //realiza consulta ao Banco de Dados
            $sql = "INSERT INTO tb_usuario(nome,email,senha,access_key,adm,st_ativo) values ('$nome','$email','$senha','$access_key',0,1)";
            $sql = $con->prepare($sql);
            if($sql->execute()){
                return "Sucesso no Registro";
            }else{
                throw new Exception("Falha ao registrar usuario");
            }
        }else{
            return "Campo em branco";
        } 

    }

    public function editarDados(){
        $id = $_POST['id'];
        $nome = isset($_POST['nome'])?$_POST['nome']:'';
        $email = isset($_POST['email'])?$_POST['email']:'';
        $senha = $_POST['senha']!=""?crypt($_POST['senha']):'';

        if($nome != "" || $email != ""){
            //cria conexão
            //cria conexão
            $conecta = new Conexao;
            $con = $conecta->conecta();

            //realiza consulta ao Banco de Dados
            if($senha!=""){
                $sql = "UPDATE tb_usuario SET 
                nome = '$nome',
                email = '$email',
                senha = '$senha'
                where id_usuario = $id";
            }else{
                $sql = "UPDATE tb_usuario SET 
                nome = '$nome',
                email = '$email'
                where id_usuario = $id";
            }
            $sql = $con->prepare($sql);
            if($sql->execute()){
                return "Sucesso na atualização";
            }else{
                throw new Exception("Falha ao atualizar usuario");
            }
        }else{
            return "Campo em branco";
        } 

    }

    public function login(){
        $email = isset($_POST['email'])?$_POST['email']:'';
        $senha = isset($_POST['senha'])?$_POST['senha']:'';

        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_usuario WHERE email = '$email'";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados = "";

        //Armazena Consulta
        if($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $senhaBanco = $row['senha'];
            if(crypt($senha, $senhaBanco) == $senhaBanco){
                $resultados = array(
                    'accessKey'=>$row['access_key'],
                    'msg'=>"Login efetuado com sucesso!",
                    'id'=>$row['id_usuario']
                );
            }
            else{
                $senhaBanco = "";
            }
        }else{
            throw new Exception("E-mail ou senha inválido");
        }

        if(isset($senhaBanco)){
            if($senhaBanco==""){
                //Cria Excption
                throw new Exception("E-mail ou senha inválido");
            }
        }    
        
        return $resultados;
    }

    public function listarUsuarioEspecifico($id = "",$key = ""){
        if($id!="" and $key!=""){
            //cria conexão
            $conecta = new Conexao;
            $con = $conecta->conecta();

            //realiza consulta ao Banco de Dados
            $sql = "SELECT * FROM tb_usuario WHERE id_usuario = $id";
            $sql = $con->prepare($sql);
            $sql->execute();

            $resultados[] = array();

            //Armazena Consulta
            if($row = $sql->fetch(PDO::FETCH_ASSOC)){
                if($row['access_key']==$key){
                    $resultados = $row;
                }else{
                    $resultados = array("Usuário inexistente");
                }
            }

            if(!$resultados){
                //Cria Excption
                throw new Exception("Usuário inexistente");
            }
        }else{
            $resultados = array("Você tem que fazer login");
        }
        return $resultados;
    }

    public function excluir(){
        $id = isset($_POST['id'])?$_POST['id']:'';

        $conecta = new Conexao;
        $con = $conecta->conecta();

        // Exclui usuario 
        $sql = "UPDATE tb_usuario set 
                st_ativo = 0
                where id_usuario = $id";

        $sql = $con->prepare($sql);

        if($sql->execute()){
            return "Usuário Excluído com Sucesso!";
        }else{
            throw new Exception("Falha ao excluir usuário");
        }
    }

    public function keyGenerate(){
        
        $generate = md5(mt_rand());
        
        //cria conexão
        $conecta = new Conexao;
        $con = $conecta->conecta();

        //realiza consulta ao Banco de Dados
        $sql = "SELECT * FROM tb_usuario WHERE access_key = '$generate'";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados = array();

        //Armazena Consulta
        if($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $row;
        }

        if(!$resultados){
            $key = $generate;
        }
        
        return $key;
    }

}