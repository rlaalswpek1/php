<?php
    include("header.php");
?>
<div class="mainbox"> 
    <div class="boxbox">글쓰기</div>
    <form action="write.ok.php" method="post" id='wf'>
        <input type="text" placeholder="제목" class="wtitle" name='title' required>
        <br/>
        <textarea name="contents" class="wcontents" cols="30" rows="10" form="wf" required></textarea>
        <br/>
        <input type="text" placeholder="글쓴이" class="wwrite" name='writer' required>
        <button type='submit'>작성하기</button>
    </form>
</div>
<?php
    include("footer.php");
?>