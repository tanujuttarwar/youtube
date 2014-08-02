<?php
$uname=$_REQUEST['qs'];
mysql_connect("localhost","root","");
mysql_select_db("chat");
$data=mysql_query("select * from tbl_chat order by srno desc");
while($rec=mysql_fetch_row($data))
{
if($uname==$rec[1])
$color="red";
else
$color="green";
echo "<span style='color:$color'><i>".$rec[1]."says:</i>".$rec[2];
echo '</span><br>';
}

?>