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
                    text = "사랑해요 연예가중계";
                    break;
                case "kris":
                    text = "깜지써라 씹쌔야";
                    break;
                case "jave":
                    text = "살아있다 그분은..";
                    break;
                case "ileene":
                    text = "말백이 싸-압 극혐";
                    break;
                case "rachel":
                    text = "응늬AMI";
                    break;
                case "spike":
                    text = "스핵만나는것도 실력이야ㅉㅉ";
                    break;
                case "dellons":
                    text = "ㅇㅋㄷㅋ";
                    break;
                    }
            $("section > div").text(text);
        });
    </script>
</html>