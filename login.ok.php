<?php
    session_start();
    include("dbcon.php");
    if(isset($_POST['userid'])){
        $userid = $_POST['userid'];   
    }
    else{
        exit("<script>alert('비정상적인 접근'); location.href='index.php'; </script>");
    }
    if(isset($_POST['userpw'])){
        $userpw = $_POST['userpw'];   
    }
    else{
        exit("<script>alert('비정상적인 접근'); location.href='index.php'; </script>");
    }
    $sql = "select * from user where userid='{$userid}' and userpw='{$userpw}'";
    $rs = $db->query($sql);
    $login = $rs->rowcount();
    if($login>0){
        $login = $rs->fetch();
        $_SESSION['login'] = $login['id'];
        exit("<script>alert('성공했다 흔들어라!^^'); location.href='index.php';</script>");
    }
    else{
        exit("<script>alert('실패노 이기야!');location.href='index.php';</script>");
    }
?>