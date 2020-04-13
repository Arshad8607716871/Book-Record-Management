<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++){
    $index='b'.$j;
    if(isset($_POST[$index]))
       $b_id[$i]=$_POST[$index];
       else
       $i--;
}
$con=mysqli_connect("localhost","root","","brm");
for($k=1;$k<=$size;$k++){
$q="delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion Form</title>
</head>
<body>
<h1>Book Record Management</h1>
<hr>
<p>
<?php 
 echo $size." Record Deleted";
 ?>
 </p>
 Want to delete More <a href="deleteform.php">Delete Again</a><br>
 Go to Home Page<a href="home.php" >Home</a>
</body>
</html>
