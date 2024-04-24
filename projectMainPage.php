<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Projects</title>
</head>
<body>
    <title>All Projects</title>
   
   <?php
 include 'dbConnect.php';
   $query = "SELECT * FROM project ";
   $result = mysqli_query($conn, $query);
   $num = mysqli_num_rows($result);
  
   ?>
   <h2 align="center"  style="color:#006699">Projects</h2> </b>
   <table  border="20" cellspacing="4" cellpadding="10"  align="center" style="width: 80%;">
       <tr>
           <th>Lead Ssn</th>
           <th>Project Name</th>
            <th>Subject</th>
           <th>Budget</th>
           <th>Start Date</th>
           <th>End Date</th>
           <th>Controlling Department</th>
       </tr>
           <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $leadSsn = $row["leadSsn"];
        $pName = $row["pName"];
        $subject = $row["subject"];
        $budget = $row["budget"];
        $startDate = $row["startDate"];
        $enddate = $row["enddate"];
        $controllingDName = $row["controllingDName"];
        ?>

    <tr>
            <td>
              <?php echo $leadSsn; ?></td>
            <td><?php echo  $pName; ?></td>
            <td><?php echo  $subject; ?></td>
            <td><?php echo $budget; ?></td>
            <td><?php echo  $startDate; ?></td>
            <td><?php echo  $enddate; ?></td>
            <td><?php echo $controllingDName; ?></td>
        </tr>

        <?php
    }
    ?>
</body>
</html>
