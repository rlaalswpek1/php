<?php
include("header.php");
?>
<div class="mainbox">
    <div class="loginbox">
        <div class="boxbox">회원가입</div>
        <form action="join.ok.php" class="form" method="post" id="form">
            <label for="userid">아이디<em>*</em> :<input type="text" size="10" placeholder="아이디" name='userid' id="userid" pattern=".{3,20}" required></label>
            <label for="userpw">비밀번호<em>*</em> :<input type="password" size="10" placeholder="비밀번호" name="userpw" id="userpw" pattern=".{3,10}" required></label>
            <label for="pwcheck">비밀번호확인<em>*</em> :<input type="password" size="10" placeholder="비밀번호 확인" id="pwcheck" pattern=".{3.10}" required></label>
            <label for="nick">닉네임<em>*</em> :<input type="text" size="10" placeholder="닉네임" name="nick" id="userpw" required pattern=".{1,20}"></label>
            <label for="birth">생년월일 :<input type="date" name="birth" id="birth" required></label>
            <label for="mail">이메일주소 :<input type="email" size="10" placeholder="이메일" name="mail" id="mail" required></label>
            <button type="button" id="join">가입하기 </button>
         </form>    
         </form>    
        </div>
</div>
<script type="text/javascript">
$("#join").click(function(){
    userpw = $("#userpw").val();
    pwcheck=$("#pwcheck").val();
    if(userpw!=pwcheck){
        alert("시발년아 다시해보세요");
    }else{
        alert("가입되었습니다 시발년아");
    }
});
</script>
<?php
include("footer.php")
?>