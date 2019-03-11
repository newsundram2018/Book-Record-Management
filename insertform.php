<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>
	<h1>Book Record Management</h1>
	<form action="insertion.php" method="POST">
		<table>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Insert" /></td>
			</tr>

		</table>
	</form>
	Go Back To HomePage <a href="HomePage.php">Click Here</a>
</body>
</html>