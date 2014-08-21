<?php
$img=$_REQUEST['qs'];
$uname=$_REQUEST['qs2'];
mysql_connect("localhost",'root','');
mysql_select_db('chat');
mysql_query("insert into tbl_chat values('','$uname','$img')");


?>