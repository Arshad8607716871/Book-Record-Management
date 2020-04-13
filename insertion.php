<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect("localhost","root","","brm");
$q="insert into book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion Form</title>
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<p>
<?php 
 if($status==1){
     echo"Record Inserted";
 }
 else
 echo"Insertion Failed"
 ?>
 </p>
 Insert More <a href="insertform.php">Insert Again</a><br>
 Go to HomePage<a href="home.php" >Home</a>
</body>
</html>