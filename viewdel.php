<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Editpage</title>
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
    <!-- Display record table -->
    <table border="1" bgcolor="white" width="80%" align="center" height="8%">
     <tr>
         <td valign="top">
            <table border="1" align="center" width="80%" cellpadding="10" style="color: navy;font-size: 20px;">
            <tr style="background-color: #003366;color: white;">
                <td>Firt Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>College Name</td>
                <td>Qualification</td>
                <td>Course</td>
                <td>Fees</td>
                <td>Paid</td>
                <td>Remaining</td>
                <td>Delete</td>
                <td>update</td>
              
            <?php
                // including connection file
                include ("connect.php");
                $qry="select * from reg";
                $sql=mysqli_query($qry);
                // Accessing all records from the database using loop
                while($row=msql_fetch_array($qry))
                {
                    // Filling data into cells
                ?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['sname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['con'];?></td>
                    <td><?php echo $row['cname'];?></td>
                    <td><?php echo $row['qal'];?></td>
                    <td><?php echo $row['course'];?></td>
                    <td><?php echo $row['fees'];?></td>
                    <td><?php echo $row['paid'];?></td>
                    <td><?php echo $row['remaining'];?></td>
                      <!-- creating link to delete page -->
                <td align="center"><a style="color: red;" href="delete.php?rid=<?php echo $row['rid'];?>">
                <img src="img/del.jpg" width="30px" height="30px">
                </a></td>
                <!-- creating link to update page -->
                <td align="center"><a style="color: red;" href="update.php?rid=<?php echo $row['rid'];?>">
                    <img src="img/up.jpg" width="30px" height="30px">
                    </a></td>
                </tr>
                </tr>
                <?php
                }
                ?>
            </table>
         </td>
     </tr>   

    </table>
    </body>
</html>