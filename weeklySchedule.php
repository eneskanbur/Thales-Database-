<center><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
    <title>Instructor Weekly Schedule</title>
</head>
<body>

    <?php
    include 'dbConnect.php';
    $ssn = $_POST['ssn']; 
    $query = "select *, i.ssn from weeklyschedule w, instructor i where i.ssn = '$ssn' AND w.issn = i.ssn ";
    $result = mysqli_query($conn, $query);
    ?><table border ="7" cellspacing ="2" cellpadding="2">
        <tr>
            <th><font face="Arial,Helvetica,sans-serif">Instructor SSN</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Course Code</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Section ID</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Year</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Semester</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Day</font></th>
            <th><font face="Arial,Helvetica,sans-serif">Hour</font></th>
        </tr>
        <?php
        echo "<h4>$ssn's Weekly Schedule </h4>";

        while ($row = mysqli_fetch_assoc($result)) {
            $ssn = $row['ssn'];
            $coursecode = $row['courseCode'];
            $sectionId = $row['sectionId'];
            $yearr = $row['yearr'];
            $semester = $row['semester'];
            $dayy = $row['dayy'];
            $hourr = $row['hourr'];

            echo "<tr>"
            . "<td>$ssn</td>"
            . "<td>$coursecode</td>"
            . "<td>$sectionId</td>"
            . "<td>$yearr</td>"
            . "<td>$semester</td>"
            . "<td>$dayy</td>"
            . "<td>$hourr</td>"
            . "</tr>";
        }
        ?> 






    </table>



</body>
</html>