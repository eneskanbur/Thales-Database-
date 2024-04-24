<center>
<?php

include 'dbConnect.php';
$ssn = $_POST['courseCode'];
$yearr = $_POST['yearr'];
$semeste = $_POST['semester'];
$query = "select s.studentname
from enrollment e, student s
where e.yearr= '$yearr' and e.semester = '$semeste' and e.courseCode = '$ssn' and e.sssn = s.ssn";
$result = mysqli_query($conn, $query);

?><table border ="6" cellspacing ="2" cellpadding="2">
            <tr>
                <th><font face="Arial,Helvetica,sans-serif">Student Name</font></th>          
                 </tr>
               <?php     
        echo "<h4> Students </h4>";
            while ($row = mysqli_fetch_assoc($result) ) {
                $ssn = $row['studentname'];

            echo "<tr>"
                . "<td>$ssn</td>".
         
                       "</tr>";
                }
           
            ?> 

