<center>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Advisor</title>
    </head>
    <body>

        <?php
        include 'dbConnect.php'; 

        $iname = $_POST['iname'];

       $query = "SELECT s.studentid, s.studentname, s.gradorugrad, e.email FROM instructor i, student s, emails e WHERE e.sssn = s.ssn and s.advisorSsn = i.ssn AND iname = '$iname' AND s.gradorugrad = '1'";
        $result = mysqli_query($conn,$query);
        mysqli_close($conn); //for this page we dont need the connection any more.


                      ?>
        <h4>List the graduate students of supervising</h4>
<table border="4" cellspacing="4" cellpadding="4">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>GradorUgra</th>
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