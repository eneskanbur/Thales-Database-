<center>
<?php

include 'dbConnect.php';
$ssn = $_POST['issn'];
$yearr = $_POST['yearr'];
$semeste = $_POST['semester'];
$query = "SELECT examname,date,courseCode,yearr,semester,sectionId FROM examofsection WHERE issn='$ssn' AND yearr='$yearr' AND semester ='$semeste'";
$result = mysqli_query($conn, $query);

?><table border ="6" cellspacing ="2" cellpadding="2">
            <tr>
                <th><font face="Arial,Helvetica,sans-serif">Exam Name</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Exam Date</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Course Code</font></th>
                
             <th><font face="Arial,Helvetica,sans-serif">Year</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Semester</font></th>
                 <th><font face="Arial,Helvetica,sans-serif">Section ID</font></th>
           
                 </tr>
               <?php     
        echo "<h4>$ssn's Exam List </h4>";
            while ($row = mysqli_fetch_assoc($result) ) {
                $examname = $row['examname'];
                $edate = $row['date'];
                $coursecode = $row['courseCode'];
                $yearr = $row['yearr'];
                $semester = $row['semester'];
                $sectionId = $row['sectionId'];
            echo "<tr>"
                . "<td>$examname</td>"
                . "<td>$edate</td>".
                 "<td>$coursecode</td>".
                 "<td>$yearr</td>"
                . "<td>$semester</td>".
                 "<td>$sectionId</td>".
             
            
                       "</tr>";
                }
           
            ?> 

