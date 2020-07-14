<?php
$c=mysql_connect("localhost","root","");
$l=mysql_select_db("houserent",$c);
$q="select * from owner";
$r=mysql_query($q);
$id2=$_POST['abc'];
$id=$_POST[$id2];
//echo $id;
//echo "Bhaavagni";
while($res=mysql_fetch_array($r))
{

  if($id==$res['name'])
	{
	  $q="select name,type,nof,floor,erent,location from owner where name='$id'";
      $r2=mysql_query($q);
	  
       while($x=mysql_fetch_array($r2))
		{
		   
		  echo  "Owner :".$x['name']."<br>";
		  echo "<table>";
		  echo "<tr><td> Type :</td><td>".$x['type']."</td></tr>";
		  echo "<tr><td> No of Rooms :</td><td>".$x['nof']."</td></tr>";
		  echo "<tr><td> Floor No :</td><td>".$x['floor']."</td></tr>";
		  echo "<tr><td> Room Rent  :</td><td>".$x['erent']."</td></tr>";
		  echo "<tr><td> Location :</td><td>".$x['location']."</td></tr>";

          echo "</table>";



			  
		  
		  } 
      
     }

}
?>
<html>
<body>
<form action="success.html" method="post">
<button value="Confirm booking">Confirm Booking</button>
</form>
</body>
</html>