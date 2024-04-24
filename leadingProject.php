<center></body>
</html>
<?php
include 'dbConnect.php';
$ssn = $_POST['ssn']; 
$query = "SELECT * FROM project p, instructor i WHERE p.leadSsn = i.ssn AND i.ssn = '$ssn' ";
$result = mysqli_query($conn, $query);
?><table border ="7" cellspacing ="2" cellpadding="2">
    <tr>
        <th><font face="Arial,Helvetica,sans-serif">Leader Ssn</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Project Name</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Subject</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Budget</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Start Date</font></th>
        <th><font face="Arial,Helvetica,sans-serif">End Date</font></th>
        <th><font face="Arial,Helvetica,sans-serif">Controlling Department</font></th>
    </tr>
<?php
echo "<h4>$ssn's Leading Projects </h4>";

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