<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    include 'dbConnect.php';
    $query = "SELECT * FROM instructor ";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    ?>

    <h2 align="center" style="color:#006699">Instructors</h2>
    <table border="20" cellspacing="6" cellpadding="10" align="center" style="width: 70%;">
        <tr>
            <th>Instructor SSN</th>
            <th>Instructor Name</th>
            <th>Instructor rank</th>
            <th>Instructor baseSal</th>
            <th>Instructor department</th>
            <th>Instructor extrasalary</th>
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $ssnn = $row["ssn"];
            $name = $row["iname"];
            $rank = $row["rankk"];
            $basesal = $row["baseSal"];
            $dep = $row["dName"];
            $extra = $row["extraSalary"];
            ?>
            
            <tr>
                <td><?php echo $ssnn; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $rank; ?></td>
                <td><?php echo $basesal; ?></td>
                <td><?php echo $dep; ?></td>
                <td><?php echo $extra; ?></td>
            </tr>
            
        <?php
        }
    
    
    ?>

</table>
    
</body>
</html>
