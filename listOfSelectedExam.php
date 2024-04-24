<center>
<?php

include 'dbConnect.php';
$ssn = $_POST['courseCode'];
$examname =$_POST['examname'];
$yearr = $_POST['yearr'];
$semeste = $_POST['semester'];
$query = "select sssn, qno, pointsEarned 
from gradesperquestion 
where courseCode='$ssn' and examname='$examname' and semester='$semeste' and yearr='$yearr'";
$result = mysqli_query($conn, $query);
mysqli_close($conn);

?><table border ="6" cellspacing ="2" cellpadding="2">
            <tr>
                <th><font face="Arial,Helvetica,sans-serif">Studens Ssn</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Q.No</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Points Earned</font></th>          
                 </tr>
               <?php     
        echo "<h4> $ssn's List </h4>";
            while ($row = mysqli_fetch_assoc($result) ) {
                $ssn = $row['sssn'];
                $yearr = $row['qno'];
                $semeste = $row['pointsEarned'];

            echo "<tr>"
                . "<td>$ssn</td>"
                . "<td>$yearr</td>".
                 "<td>$semeste</td>".
             
            
                       "</tr>";
                }
           
            ?> 

