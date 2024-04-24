<center>
<?php

include 'dbConnect.php';
$ssn = $_POST['issn'];
$yearr = $_POST['yearr'];
$semeste = $_POST['semester'];
$query = "select distinct c.courseCode, c.courseName, c.ects 
from course c, sectionn s
where s.issn = '$ssn' and s.yearr= '$yearr' and s.semester = '$semeste' and s.courseCode = c.courseCode";
$result = mysqli_query($conn, $query);

?><table border ="6" cellspacing ="2" cellpadding="2">
            <tr>
                <th><font face="Arial,Helvetica,sans-serif">Course Code</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Course Name</font></th>
                <th><font face="Arial,Helvetica,sans-serif">ECTS</font></th>          
                 </tr>
               <?php     
        echo "<h4> $ssn's Course(s) </h4>";
            while ($row = mysqli_fetch_assoc($result) ) {
                $ssn = $row['courseCode'];
                $yearr = $row['courseName'];
                $semeste = $row['ects'];

            echo "<tr>"
                . "<td>$ssn</td>"
                . "<td>$yearr</td>".
                 "<td>$semeste</td>".
             
            
                       "</tr>";
                }
           
            ?> 

