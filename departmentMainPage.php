<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Department</title>
</head>
<body>
    <title>All Departments</title>
   
   <?php
 include 'dbConnect.php';
   $query = "SELECT * FROM department ";
   $result = mysqli_query($conn, $query);
   $num = mysqli_num_rows($result);
  
   ?>
   <h2 align="center"  style="color:#006699">Departments</h2> </b>
   <table  border="20" cellspacing="4" cellpadding="10"  align="center" style="width: 80%;">
       <tr>
           <th>Department Name</th>
           <th>Department budget</th>
            <th>Department headssn</th>
           <th>Department BuildingName</th>
       </tr>
           <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $departmentname = $row["dName"];
        $budget = $row["budget"];
        $headssn = $row["headSsn"];
        $builname = $row["buildingName"];
        ?>

    <tr>
            <td>
              <?php echo $departmentname; ?></td>
            <td><?php echo  $budget; ?></td>
            <td><?php echo  $headssn; ?></td>
            <td><?php echo $builname; ?></td>
        </tr>

        <?php
    }
    ?>
</body>
</html>
