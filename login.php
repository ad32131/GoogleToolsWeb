<?php


if( $_POST['username'] === "admin"){
    if( $_POST['password'] === "test"){
        session_start();
        $_SESSION['admin'] = 'true';
        echo("<script>location.href='main.php';</script>");
    }else{
        echo("<script>alert('로그인실패');</script>");
        echo("<script>location.href='index.php';</script>");
    }
}else{
    echo("<script>alert('로그인실패');</script>");
    echo("<script>location.href='index.php';</script>");
}

?>