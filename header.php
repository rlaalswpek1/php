<?php
    session_start();
    if(isset($_SESSION['login'])){}
    else{
        $_SESSION['login'] = "";
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Seven Knights</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="wrap">
    <header>
       <div class="logo"><a href="index.php"><img src="img/sena.png" alt="" class="logo"></a></div>
       <nav class="top">
           <ul>
               <li>
                   <?php
                        if($_SESSION['login']==""){
                   ?>
                       <a href="login.php">로그인 |</a>
                   <?php 
                        }
                        else{
                   ?>
                       <a href="logout.ok.php">로그아웃 |</a>
                    <?php
                        }
                    ?>
                </li>
               <li>
               <?php
                    if($_SESSION['login']==""){   
                ?>
                   <a href="join.php">회원가입 |</a>
                   <?php
                    }
                    else{
                   ?>
                   <a href="mypage.php">마이페이지 |</a>
                   <?php
                    }
                   ?>
               </li>
               <li><a href="notice.php">게시판  |</a></li>
           </ul>
       </nav>
    </header>