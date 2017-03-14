<?php
    include("dbcon.php");
    include("header.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        exit("<script>location.href=''</script>");
    }
    $sql = "SELECT * FROM notice where id=".$id;
    $row = $db->query($sql)->fetch();
?>
<div class="mainbox"> 
    <div class="boxbox">글보기</div>
    <form action="write.ok.php" method="post" id='wf'>
         <div class="viewheader">
             <div class="viewtitlelogo">제목</div>
             <div class="viewtitle"><?= $row['title'] ?></div>
         </div>
         <div class="viewbody">
             <div class="viewcontentlogo">내용</div> 
             <div class="viewcontent"><?= $row['contents']?></div>
         </div>
    </form>
</div>
<?php
    include("footer.php");
?>