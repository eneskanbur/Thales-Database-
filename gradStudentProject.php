
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
    </head>
    <center>
    <body>

        <?php
        include 'dbConnect.php'; 

        $ssn = $_POST['Gradssn'];

       $query = "SELECT p.leadSsn,p.pName,p.subject,p.budget,p.startDate,p.enddate,p.controllingDName
               From project_has_gradstudent pg , project p WHERE  p.pName = pg.pName AND pg.Gradssn = '$ssn'";
        $result = mysqli_query($conn,$query);
        mysqli_close($conn); //for this page we dont need the connection any more.


                      ?>
  <table border ="7" cellspacing ="2" cellpadding="2">
    <tr>
        <th>Leader Ssn</th>
        <th>Project Name</th>
        <th>Subject</th>
        <th>Budget</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Controlling Department</th>
    </tr>
<?php
echo "<h4> $ssn's Project Details </h4>";

while ($row = mysqli_fetch_assoc($result)) {

    $leadSsn = $row['leadSsn'];
    $pName = $row['pName'];
    $subject = $row['subject'];
    $budget = $row['budget'];
    $startDate = $row['startDate'];
    $enddate = $row['enddate'];
    $controllingDName = $row['controllingDName'];

    echo "<tr>"
    . "<td>$leadSsn</td>"
    . "<td>$pName</td>"
    ."<td>$subject</td>"
    ."<td>$budget</td>"
    ."<td>$startDate</td>"
    ."<td>$enddate</td>"
    ."<td>$controllingDName</td>"
    ."</tr>";
}
?>
</table>



    </body>
</html>
