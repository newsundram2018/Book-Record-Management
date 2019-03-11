<?php
$size=sizeof($_POST);
echo $size;
$j = 1;
		for ($i=1;$i<=$size;$i++,$j++)
 		{
 			$index="b".$j;
 	 		if(isset($_POST[$index]))
 			 $b_id[$i]=$_POST[$index];
 			else
 				$i--;
		}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for ($k=1;$k<=$size;$k++)
{
	
	$q="DELETE FROM book WHERE bookid=".$b_id[$k];
	mysqli_query($con,$q);
	echo $b_id;
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
</head>
<body>
	<h1>Book Record Management</h1>
	 <p>
	 	<?php
	 		echo $size."Record Deleted";
	 	  ?>
	 </p>
Go Back To HomePage <a href="HomePage.php">Click Here</a>
</body>
</html>