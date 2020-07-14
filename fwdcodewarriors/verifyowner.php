<?php
$n=$_POST['name'];
$typ=$_POST['tp'];
$lc=$_POST['loc'];
$nr=$_POST['rooms'];
$fl=$_POST['floor'];
$ren=$_POST['erent'];
$nr=(int)$nr;
$fl=(int)$fl;
$ren=(int)$ren;
$con=mysql_connect('localhost','root','');
$link=mysql_select_db('houserent',$con);
$q="insert into owner values('$n','$typ','$nr','$fl','$ren','$lc')";
$r=mysql_query($q);
mysql_close();
?>
<html>
<body bgcolor="yellow">
Your request has been forwarded to admin! 
<form action="homepage.html">
<input type="submit" value="Back to home page">
</form>
</body>
</html>