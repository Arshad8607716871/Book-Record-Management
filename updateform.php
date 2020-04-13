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
<title>Update Book Record</title>
<link rel="stylesheet" type="text/css" href="viewstyle.css">
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<h2>Edit Records</h2>
<a href="home.php"><button>Home</button></a>
<form action="updation.php" method="post">
<table id="view">
<tr id="row1">
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($data);
?>
<tr id="row2">
<td><?php echo $row['bookid'];?>
    <input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row['bookid'];?>" ></td>
<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title'];?>" ></td>
<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price'];?>" ></td>
<td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author'];?>" ></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5"><input type="submit" value="Update"></td>

</tr>
</table>
</form>
</body>
</html>