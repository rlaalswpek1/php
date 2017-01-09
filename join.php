<?php
include("header.php");
?>
<div class="mainbox">
    <div class="loginbox">
        <div class="boxbox">회원가입</div>
        <form action="join.ok.php" class="form" method="post">
            <label for="">아이디<em>*</em> :<input type="text" size="10" placeholder="아이디" name='userid' required></label>
            <label for="">비밀번호<em>*</em> :<input type="password" size="10" placeholder="비밀번호" name="userpw" required></label>
            <label for="">비밀번호확인<em>*</em> :<input type="password" size="10" placeholder="비밀번호 확인" name="userpw" required></label>
            <label for="">닉네임<em>*</em> :<input type="text" size="10" placeholder="닉네임" name="nick" required></label>
            <label for="">생년월일 :<input type="date" name="birth" required></label>
            <label for="">이메일주소 :<input type="email" size="10" placeholder="이메일" name="mail" required></label>
            <button type="submit">가입하기 </button>
         </form>    
        </div>
</div> 
<?php
include("footer.php")
?>