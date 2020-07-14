<?php
$c=mysql_connect("localhost","root","");
$l=mysql_select_db("houserent",$c);
$loc=$_POST['loc'];
$query="select * from owner  where type like 'i%' or 'I%' and location='$loc' ";
$r=mysql_query($query);

while($res=mysql_fetch_array($r))
{
	echo "owner:".$res['name']."\t"."location of house:".$res['location']."\t"."price:".$res['erent']."<br>";
        echo '<a href="indvalues.php">CONTACT</a>';
}
?>



	

	