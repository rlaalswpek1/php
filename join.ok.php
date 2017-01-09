<?php
include ("dbcon.php");
$sql = "insert into user set userid='{$_POST['userid']}', userpw='{$_POST['userpw']}', nick='{$_POST['nick']}', birth='{$_POST['birth']}', mail='{$_POST['mail']}'";
$db->query($sql);
?>


<script>
    location.href="login.php"
</script>