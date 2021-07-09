<?php 
// including connection file
include("connection.php");
// Getting rid of previous pages
$rid=$_REQUEST['rid'];
// SQL query to delete
$qry="delete from reg where rid='$rid'";
//Executing  query
$sql=mysqli_query($qry);
if($sql)
// calling display page
header("location:viewdel.php");
?>