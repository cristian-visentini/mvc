<?php
require 'enviroment.php';

/* 
if(ENVIROMENT == 'production'){

}else{
    
}
Usar para atribuir valores diferentes as variaveis de conexao, para quando o site estiver no ar, apenas 
comentar a const no arquivvo enviroment
*/


global $PDO;
try{
    $DbName = '';
    $User = 'root';
    $Host = 'localhost';
    $Password = '';

    $PDO = new PDO('mysql:dbname='.$DbName.';host=.'.$Host, $User, $Password);

}catch(PDOException $e){
    echo $e->getMessage();
}