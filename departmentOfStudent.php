<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Department of Students</title>
    </head>
    <center>
    <body>
         <?php
 include 'dbConnect.php';
 $dname = $_POST['dName']; 
$query = "SELECT  s.studentid, s.studentname, s.gradorugrad, e.email
          FROM Student s
          JOIN emails e ON e.sssn = s.ssn
          WHERE s.dname = '$dname'";
$result = mysqli_query($conn, $query);

?>

<h4>List the students of department </h4>
<table border="4" cellspacing="4" cellpadding="4">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>GradorUgrad</th>
        <th>Email</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $studentid = $row["studentid"];
        $studentname = $row["studentname"];
        $gradorugrad = $row["gradorugrad"];
        $email = $row["email"];
        ?>

    <tr>
            <td>
                <a href="deptView.php?dno=<?php echo $studentid; ?>"><?php echo $studentid; ?></a>
            </td>
            <td><?php echo $studentname; ?></td>
            <td><?php echo $gradorugrad; ?></td>
            <td><?php echo $email; ?></td>
        </tr>

        <?php
    }
    ?>

</table>

         
          
    </body>
</html>


