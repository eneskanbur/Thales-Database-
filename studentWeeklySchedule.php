<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
    <title>Student's weekly schedule</title>
</head>
<body>
<center>
    <?php
    include 'dbConnect.php';
    $ssn = $_POST['sssn']; 
    $query = "select * from weeklyschedule w, Enrollment e where e.sssn = '$ssn' AND w.courseCode = e.courseCode  ";
    $result = mysqli_query($conn, $query);
    ?><table border ="7" cellspacing ="2" cellpadding="2">
        <tr>
            
            <th>Course Code</th>
            <th>Section ID</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Day</th>
            <th>Hour</th>
        </tr>
        <?php
        echo "<h4> $ssn's Weekly Schedule </h4>";

        while ($row = mysqli_fetch_assoc($result)) {
           
            $coursecode = $row['courseCode'];
            $sectionId = $row['sectionId'];
            $yearr = $row['yearr'];
            $semester = $row['semester'];
            $dayy = $row['dayy'];
            $hourr = $row['hourr'];

            echo "<tr>"
            
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
<center>
</html>