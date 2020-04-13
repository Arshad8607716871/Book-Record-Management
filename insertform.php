<!DOCTYPE html>
<html>
<head>
<title>Insertion Form</title>
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<h2>Insertion Form</h2>
<a href="home.php"><button style="float:right">Home</button></a>
<form action="insertion.php" method="post">
<table>
<tr>
<th>Title</th>
<td><input type="text" placeholder="Title" name="title" required></td>
</tr>
<tr>
<th>Price</th>
<td><input type="text" placeholder="Price" name="price" required></td>
</tr>
<tr>
<th>Author</th>
<td><input type="text" placeholder="Author" name="author"></td>
</tr>
<tr>
<th></th>
<td colspan="2"><input type="submit" value="Insert"></td>
</tr>
</table>
</form>
</body>
</html>