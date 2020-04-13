<?php
$con=mysqli_connect("localhost","root","","brm");
$q="select * from book";
$data=mysqli_query($con,$q);
$num=mysqli_num_rows($data);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Book Record</title>
<link rel="stylesheet" type="text/css" href="viewstyle.css">
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<h2>Delete Records</h2>
<a href="home.php"><button>Home</button></a>
<form action="deletion.php" method="post">
<table id="view">
<tr id="row1">
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
<th>Select</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($data);
?>
<tr id="row2">
<td><?php echo $row['bookid'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['author'];?></td>
<td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i; ?>"></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5"><input type="submit" value="Delete"></td>
</tr>
</table>
</form>
</body>
</html>