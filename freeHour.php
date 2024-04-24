<center>
<?php

include 'dbConnect.php';
$iname = $_POST['iname'];
$query = "select i.ssn, T.dayy, T.hourr
from timeslot T, instructor i
where i.iname = '$iname' AND(T.dayy, T.hourr) not in (SELECT W.dayy, W.hourr
                                   from enrollment E NATURAL JOIN weeklyschedule W)";


      //  "SELECT * FROM project p, instructor i WHERE i.ssn = p.leadSsn";
$result = mysqli_query($conn, $query);

?><table border ="3" cellspacing ="2" cellpadding="2">
            <tr>
                <th><font face="Arial,Helvetica,sans-serif">Instructor SSN</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Day</font></th>
                <th><font face="Arial,Helvetica,sans-serif">Hour</font></th>
                 </tr>
               <?php

        echo "<h4>My Free Hours Report </h4>";

            while ($row = mysqli_fetch_assoc($result) ) {
                $ssn = $row['ssn'];
                $dayy = $row['dayy'];
                $hourr = $row['hourr'];

            echo "<tr>"
                . "<td>$ssn</td>"
                ."<td>$dayy</td>"
                ."<td>$hourr</td>"
                ."</tr>";
                }

            ?>
