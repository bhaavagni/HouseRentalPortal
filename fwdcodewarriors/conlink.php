<?php
$c=mysql_connect("localhost","root","");
$l=mysql_select_db("houserent",$c);
$q="select * from owner";
$count=0;
$r=mysql_query($q);


while($res=mysql_fetch_array($r))
{
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



	

	