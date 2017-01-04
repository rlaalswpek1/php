<?php
    include("dbcon.php");
    include("header.php");
?>
<div class="mainbox">
    <div class="boxoutbox">  
        <div class="boxbox">세븐나이츠</div>
        <div class="listnum">번호</div>
        <div class="title">제목</div>
        <div class="contents">내용</div>
        <div class="writer">작성자</div>
        <div class="wdate">작성일</div>
    <?php
        $sql = "SELECT * FROM notice ORDER BY wdate DESC";
        $rs = $db->query($sql);
        foreach($rs as $row){
    ?>
        <div class="listnum"></div>
        <div class="title"><?=$row['title']?></div>
        <div class="contents"><?=$row['contents']?></div>
        <div class="writer"><?=$row['writer']?></div>
        <div class="wdate"><?=$row['wdate']?></div>
    <?php
        }
    ?>
    </div>
    <a href="write.php"><div class="gowrt">글쓰기</div></a>
</div>
<?php
    include("footer.php");
?>