<?php
echo "<h2> APARTMENTS</h2><br>";
echo "Filter By:";
echo '<a href="apricefil.php"><button>Price</button></a>';

echo '<form  action="alocationfil.php" method="POST">Location:<input type="text" name="loc">
<input type="submit" value="search"></form>';

$c=mysql_connect("localhost","root","");
$l=mysql_select_db("houserent",$c);
$q="select * from owner where type like 'a%' or 'A%'";
$r=mysql_query($q);

while($res=mysql_fetch_array($r))
{
	//echo "owner:".$res['name']."\t"."location of house:".$res['location']."\t"."price:".$res['erent'];
      //  echo '<a href="indvalues.php">CONTACT</a>';
		//echo "<br><br>";
		echo '<form action="indvalues.php" method="post" >';
	echo "owner:".$res['name']."\t"."location of house:".$res['location']."\t"."price:".$res['erent']."<br>";
       $id=$res['name'];?>
	   <input type = "hidden" name="abc" value="<?php echo $id ?>"/>
	   <button name= <?php echo $id ?> value=<?php echo $id ?> > 
	   Contact</button>

	<?php
		 echo ' </form>'; 
}
?>


	

	