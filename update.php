<!-- PHP CODE -->
<?php
// including connection file
include("connect.php");
// Accepting data from the previous page
$rid=$_REQUEST['rid'];
// sql query to select a particular record
$qry="select * from reg where rid='$rid'";
$sql=mysqli_query($conn,$qry);
// passing record into an array $row
$row=mysqli_fetch_array($sql);
if(isset($_POST['btn']))
{
    
    $n=$_POST['txtn'];
    $sn=$_POST['txtsn'];
    $e=$_POST['txte'];
    $c=$_POST['txtc'];
    $cn=$_POST['txtcn'];
    $q=$_POST['txtq'];
    $co=$_POST['txtco'];
    $f=$_POST['txtf'];
    $p=$_POST['txtp'];
    $r=$_POST['txtr'];
    // update query
    $qry="update reg set name='$sn',sname='$sn',email='$e',con='$c',cname='$cn',qal='$q',course='$co',fees='$f',paid='$p',remain='$r' where rid='$rid'";
    $sql=mysqli_query($conn,$qry);
    if($sql)
    echo "<script>alert('Data Updated'</scipt>";
    else
    echo "<script>alert('Data not Updated'</scipt>";
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>registration</title>
    </head>
    <body>
        
       <!-- Header table -->
       <table border="1" width="80%" align="center" height="20%">
        <tr>
            <td width="10%" bgcolor="#00CCCCC">
                <img src="img/logo.jpg" alt="mzumbe logo" width="150px" height="150px">
            </td>
            <td bgcolor="#000000" style="font-size: 60px;color:red;font-variant:small-caps;font-family: arial;text-shadow: 4px 4px 4px white;" align="center">
            Student Management System
            </td>
        </tr>
    </table>
     <!-- menu table -->
     <table border="1" id="menu" width="80%" align="center" height="8%">
        <tr>
            <td><a href="index.php">HOME</a></td>
            <td><a href="reg.php">REGISTRATION</a></td>
            <td><a href="view.php">STUDENT RECORD</a></td>
            <td><a href="viewdel.php">EDIT</a></td>
        </tr>
    </table>

    <!-- Registration table -->
    <table border="1" bgcolor="white" width="80%" align="center" height="8%">
        <tr>
            <td>
                <center>
                    <fieldset style="width: 400px;font-size: 30px;">
                    <legend>Registration Form</legend>
                    <form action="" method="post" oninput="txtr.value=parseInt(txtf.value)-parseInt(txtp.value)" enctype="multipart/form-data">
                    <table border="0" align="center" width="400px" cellpadding="10" style="color: navy;font-size: 20px;">
                    <tr><td>Name</td><td><input type="text" name="txtn" required></td></tr>
                    <tr><td>Surname</td><td><input type="text" name="txtsn" required></td></tr>
                    <tr><td>Email</td><td><input type="text" name="txte" required></td></tr>
                    <tr><td>Contact</td><td><input type="text" name="txtc" required></td></tr>
                    <tr><td>College Name</td><td><input type="text" name="txtcn" required></td></tr>
                    <tr><td>Qualification</td><td><input type="text" name="txtq" required></td></tr>
                    <tr><td>Course</td><td><input type="text" name="txtco" required></td></tr>
                    <tr><td>Fees</td><td><input type="text" name="txtf" required></td></tr>
                    <tr><td>Paid</td><td><input type="text" name="txtp" required></td></tr>
                    <tr><td>Remaining</td><td><input type="text" name="txtr" required></td></tr>
                    <tr><td></td><td><input type="submit" value="update" name="btn"></td></tr>
                </table>
                    </form>
                    </fieldset>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>
