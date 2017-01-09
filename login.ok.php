<?php
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
    $sql = "select * from user where userid='{$userid}', userpw='{$userpw}'";
    $db->query($sql);

    
?>