<?php
echo "registration Successful<br>";
$name=$_POST['n'];
$password=$_POST['pwd'];
$gender=$_POST['gen'];
$address=$_POST['add'];
$email=$_POST['mail'];
$con=mysql_connect('localhost','root','');
if(!$con)
die("unable to connect");
$link=mysql_select_db("houserent",$con);
$q="insert into registration(name,password,gender,address,email) values('$name','$password','$gender','$address','$email')";
$r=mysql_query($q);

?>
<html>
<body>
<a href="homepage.html">click here to go back to homepage</a>
</body>
</html>
