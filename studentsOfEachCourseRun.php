<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<center>
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT distinct E.courseCode , E.yearr, E.semester FROM enrollment E ";
        $result = mysqli_query($conn,$query);
        $result1 = mysqli_query($conn,$query);
        $result2 = mysqli_query($conn,$query);
        ?>
        
    <form method="post" action="studentsOfEachCourse.php">
            <h4> Select Course Code</h4>
            <select name="courseCode">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn= $row['courseCode'];
                    echo "<option>", $ssn, "\n";
                    
                }
                ?>
                
                 </select>
                            <br>
            <h4> Select year</h4>
                <select name= 'yearr'>
                <?php
                while ($roww = mysqli_fetch_assoc($result1)) {
                  $yearr = $roww['yearr'];
                    echo "<option>", $yearr, "\n";
                    
                }
                ?>
                     </select>
            <br>
            <h4> Select semester</h4>
                    <select name="semester">
                <?php
                while ($row = mysqli_fetch_assoc($result2)) {
                    $semester = $row['semester'];
                    echo "<option>", $semester, "\n";
                    
                }
                ?>
            </select>
            <br>
            <br>
             <br>
            <input type="submit" value="Get">
        </form>
        

</body>
</html>
