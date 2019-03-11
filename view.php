<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

mysqli_close($con);

?>
<!DOCTYPE html>
<html> 
<head>
	<title>View Book Record</title>
	<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
	<h1>Book Recoerd Management</h1>
		<table id="view_table">
			<tr>
				<th>BookID</th>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
			</tr>
			<?php
				for($i=1;$i<=$num;$i++)
				{ 
					$row=mysqli_fetch_array($result);
				?>
				<tr>
					<td><?php echo $row['bookid'];  ?></td>
					<td><?php echo $row['title'];  ?></td>
					<td><?php echo $row['price'];  ?></td>
					<td><?php echo $row['author'];  ?></td>
				</tr>
				<?php
			    }
				?>		

			
		</table>
		Go Back To HomePage <a href="HomePage.php">Click Here</a>
</body>
</html>