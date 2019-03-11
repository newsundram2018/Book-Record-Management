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
	<title>Delete Book Record</title>
	<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
	<h1>Book Record Management</h1>
	<form action="deletion.php" method="post">
		<table id="view_table">
			<tr>
				<th>bookid</th>
				<th>title</th>
				<th>price</th>
				<th>author</th>
				<th>Select To Delete</th>
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
					<td><input type="checkbox" value="<?php echo $row['bookid']; ?>"></td>
				</tr>
				<?php
			    }
				?>
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Delete"></td>
				</tr>		

			
		</table>
	</form>
	Go Back To HomePage <a href="HomePage.php">Click Here</a>
</body>
</html>