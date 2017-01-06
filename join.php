<?php
include("header.php");
?>
<div class="mainbox">
    <div class="loginbox">
        <div class="boxbox">회원가입</div>
        <form action="" class="form">
            <label for="">아이디<em>*</em> :<input type="text" size="10" placeholder="아이디" required></label>
            <label for="">비밀번호<em>*</em> :<input type="password" size="10" placeholder="비밀번호" required></label>
            <label for="">비밀번호확인<em>*</em> :<input type="password" size="10" placeholder="비밀번호 확인" required></label>
            <label for="">닉네임<em>*</em> :<input type="text" size="10" placeholder="닉네임" required></label>
            <label for="">생년월일 :<input type="date" required></label>
            <label for="">이메일주소 :<input type="email" size="10" placeholder="이메일" required></label>
            <button type="submit">가입하기 </button>
         </form>    
        </div>
</div> 
<?php
include("footer.php")
?>