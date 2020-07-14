<?php
$c=mysql_connect("localhost","root","");
$l=mysql_select_db("houserent",$c);
$q="select * from owner where type='Independent home' order by location";
$r=mysql_query($q);

while($res=mysql_fetch_array($r))
{
	echo "owner:".$res[name]."\t"."location of house:".$res[location]."\t"."price:".$res[price]."<br>";
        echo '<a href="indvalues.php">CONTACT</a>';
}
?>



	

	