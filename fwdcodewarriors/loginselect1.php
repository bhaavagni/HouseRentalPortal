<?php
$a=$_POST['name'];
$pwd=$_POST['password'];
$con=mysql_connect('localhost','root','');
if(!$con)
die("unable to connect");
$link=mysql_select_db("houserent",$con);
$q="select * from registration";
$r=mysql_query($q);
$count=0;
while($row=mysql_fetch_array($r))
{
	if(($row['name']==$a)&&($row['password']==$pwd))
	{
		echo '<a href="action.html">Start Accessing</a>';
		$count++;break;
		
	}
}
if($count==0)
echo "Invalid User";

?>
