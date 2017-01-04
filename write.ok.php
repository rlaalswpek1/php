<?php
    include("dbcon.php");
    $sql = "insert into notice set title='{$_POST['title']}', contents='{$_POST['contents']}', writer='{$_POST['writer']}', wdate=now()";
    $db->query($sql);
?>
<script>
    location.href="notice.php";
</script>