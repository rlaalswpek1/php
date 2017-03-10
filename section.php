<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>세븐나이츠</title>
</head>
<body>
    <section>
           <img src="./img/rudy.png" alt="rudy" width="245" id="rudy">
           <img src="./img/kris.png" alt="kris" width="245" id="kris">
           <img src="./img/jave.png" alt="jave" width="245" id="jave">
           <img src="./img/ileene.png" alt="ileene" width="245" id="ileene">
           <img src="./img/rachel.png" alt="rachel" width="245" id="rachel">
           <img src="./img/spike.png" alt="spike" width="295" id="spike">
           <img src="./img/dellons.png" alt="dellons" width="225" id="dellons">
           <div></div>
        </section>
<?php 
    include("footer.php")
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $("section > img").on("click",function(){
            var name = $(this).attr("id");
            var text = "";
            switch(name){
                case "rudy":
                    text = '<h2>루디 :</h2><br> "세븐나이츠에게 축복을.." ';
                    break;
                case "kris":
                    text = '<h2>크리스 :</h2><br> "나를 동정하지마라 루디.." ';
                    break;
                case "jave":
                    text = '<h2>제이브 : </h2><br> "내가 신이다.." ';
                    break;
                case "ileene":
                    text = '<h2>아일린 : </h2><br> "소중한것을 잃지않겠다" ';
                    break;
                case "rachel":
                    text = '<h2>레이첼 : </h2><br> "친구인척해라 ^^" ';
                    break;
                case "spike":
                    text = '<h2>스파이크 : </h2><br> "우리엄마 미국갔거든!" ';
                    break;
                case "dellons":
                    text = '<h2>델론즈 : </h2><br> "쿠쿡..전쟁을 『시작』한다." ';
                    break;
                    }
            $("section > div").html(text);
        });
    </script>
</html>