<center></body>
</html>
<?php
include 'dbConnect.php';
$ssn = $_POST['ssn']; 
$query = "
select I.iname , PI.pName as projectName
from project_has_instructor PI JOIN instructor I on PI.issn = I.ssn
Where I.ssn = '$ssn' ";
$result = mysqli_query($conn, $query);
?><table border ="7" cellspacing ="2" cellpadding="2">
    <tr>
        <th><font face="Arial,Helvetica,sans-serif">Instructor Name</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Project Name</font></th>

    </tr>
<?php
echo "<h4>$ssn's Working Projects </h4>";

while ($row = mysqli_fetch_assoc($result)) {

    $studentName = $row['iname'];
    $pName = $row['projectName'];

    echo "<tr>"
    . "<td>$studentName</td>"
    . "<td>$pName</td>"
    ."</tr>";
}
?>