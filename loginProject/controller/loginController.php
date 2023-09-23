<?php

if ($_GET) {
    //echo('funcionou....');
    //print_r($_GET);
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];
    
    if ($usuario == 'admin' && $senha == 'admin') {
        
        //Cria a sessão "login"
        session_start();
        $_SESSION['login'] = 'usuario';
        
        //Se o usuário e senha estiver correta 
        //redireciona para a home.
        header('location:../home.php');
    } else {
        //Caso contrário redireciona para a index
        //com o código de erro.
        header('location:../index.php?cod=171');
        session_abort();
    }
} else {
    //redireciona a navegação para a pagina informada.
    header('location:../index.php');
    session_abort();
}