<?php
$name=$_POST['un'];
$pass=$_POST['pwd'];
$con=mysql_connect('localhost','root','');
if(!$con)
die("unable to connect");
$link=mysql_select_db("houserent",$con);
$q="select * from admin";
$r=mysql_query($q);
while($row=mysql_fetch_array($r))
{
	if(($row['un']==$name)&&($row['pwd']==$pass))
	{
		echo '<a href="adminhome.html">view home page</a>';
		
	}
	else
		echo "Invalid User";
}

?>
