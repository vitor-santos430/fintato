<?php
class Conexao{
    function conecta(){
        return new PDO('mysql: host=localhost; dbname=db_fintato;','root','');
    }
}