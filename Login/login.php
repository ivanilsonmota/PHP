<?php

require_once 'config.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    $pass =  $_POST['pass'];
    $con = Connection::getConn();

    $sql = 'SELECT * FROM users WHERE email = :email AND password = :pass';
    $sql = $con->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':pass', md5($pass));
    $sql->execute();

    if($sql->rowCount() > 0){
        echo 'Login efetuado com sucesso!';
    }else{
        echo 'E-mail e/ou senha inválidos!';
    }
}else {
    echo 'Digite um e-mail e uma senha!';
}

