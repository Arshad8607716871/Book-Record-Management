<?php
$size=sizeof($_POST);
$record=$size/4;
for($i=1;$i<=$record;$i++){
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}
$con=mysqli_connect("localhost","root","","brm");
for($i=1;$i<=$record;$i++){
$q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]'
 where bookid=$bookid[$i]";
}
 mysqli_query($con,$q);
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Updation Form</title>
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<p>
<?php 
 echo " Record Updated";
 ?>
 </p>
 Want to Update More <a href="updateform.php">Edit Again</a><br>
 Go to Home Page<a href="home.php" >Home</a>
</body>
</html>
