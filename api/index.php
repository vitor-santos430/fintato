<?php

header('Content-Type: application/json; charset=utf-8');

require_once 'classes/Despesa.php';
require_once 'classes/Usuario.php';
require_once 'classes/Receita.php';

class Rest{
    public static function open($requisicao){
        //trata URL
        $url = explode('/', $_REQUEST['url']);
        
        //Extrai Classe
        $classe = ucfirst($url[0]);
        array_shift($url);

        //Extrai Metodo
        $metodo = $url[0];
        array_shift($url);

        //Parametros da requisição
        $parametros = array();
        $parametros = $url;


        try{
            //Verifica existencia da classe
            if(class_exists($classe)){
                if(method_exists($classe, $metodo)){
                    $retorno = call_user_func_array(
                        array(new $classe, $metodo), $parametros);
    
                    return json_encode(array(
                        'status' => 'sucesso',
                        'dados' => $retorno
                    ));
                } else{
                    return json_encode(
                        array(
                            'status' => 'erro',
                            'dados' => 'Metodo inexistente!'
                        ));
                }
            }else {
                return json_encode(
                    array(
                        'status' => 'erro',
                        'dados' => 'Classe inexistente!'
                    ));
            }
        }catch(Exception $e){       // Excption quando não exisitr produto
            return json_encode(
                array(
                    'status' => 'erro',
                    'dados' => $e->getMessage()
                ));
        }
    }
}

if(isset($_REQUEST)){
    echo Rest::open($_REQUEST);
}