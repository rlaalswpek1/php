<?php
include("header.php");
?>
<div class="mainbox">
    <div class="loginbox">
        <div class="boxbox">로그인 </div>
        <form action="login.ok.php" method="post">
            <input type="text" placeholder="아이디" class="id" name="userid" required>
            <input type="password" placeholder="비밀번호" class="pw" name="userpw" required>
            <button type="submit">로그인하기 </button>
         </form>    
        </div>
</div>
<?php
include("footer.php")
?>