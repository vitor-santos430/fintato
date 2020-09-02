<?php


class Rest{
    public static function open($requisicao){
        
        if(isset($_REQUEST['url'])){
          //trata URL
          $url = explode('/', $_REQUEST['url']);
          
          //Extrai Classe
          $classe = ucfirst($url[0]);
          array_shift($url);

          // //Extrai Metodo
          // $metodo = $url[0];
          // array_shift($url);

          // //Parametros da requisição
          // $parametros = array();
          // $parametros = $url;

          //Verifica existencia da classe
          if(isset($classe)){
            require_once "frontend/".$classe."/index.php";
          }
        }else{
          require_once "frontend/Home/index.php";
        }
    }
}

if(isset($_REQUEST)){
    echo Rest::open($_REQUEST);
}

