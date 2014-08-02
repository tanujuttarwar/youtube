<script src='jquery-1.3.1.js'></script>
<?php
$un = $_POST['txtuname'];
echo "user:$un";

?>
<script>

SetInterval("funread()",1000);
Simg="";
function funimg(+)
{
Simg="<img src="+t.src+">";
<?php echo "funimg<br>" ?>
}

function funread()
{
uname="<?php echo $un ?>";
$.post("read.php",{qs:uname},function(messages){d.getElementById('txtarea').innerHTML=messages});
<?php echo "funread<br>" ?>
}

function funinsert()
{
uname="<?php $un ?>";
txt=d.getElementById("txtmsg").value;
if(Simg!="")
{
txt+="....."+Simg;
Simg="";
}
d.getElementById('txtmsg').value="";
//$.post("insert.php",{qs:txt,qs2:uname},function(){});
<?php echo "funinsert<br>" ?>
}
</script>


<body bgcolor='lightblue'>
<table><tr><td>
<div id='txtarea' style="width:200; height:130; background-color:lightgreen; overflow:scroll; font-size:10">
<td valign="top">
<span id="images">
<img src="smile.png" onclick=funimg(this)/>
<img src="shoked.png" onclick=funimg(this)/>
</span>
</td>
</div>
<tr><td><input id='txtmsg'/>
<input type='button' value='send' onclick='funinsert()'/>
</table>
</body>
















