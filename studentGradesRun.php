
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Student Grades</title>
    </head>
    <body>
        <?php 
        include 'dbConnect.php';

        $query="SELECT ssn FROM student";
        $result=mysqli_query($conn, $query);
        ?>
        <center>
        <h4>  Get Student Grade:</h4>
        <center>
        <form method="post" action="studentGrades.php">
            <select name="ssn">
                <?php
                while ($row= mysqli_fetch_assoc($result)) {
                    $ssn=$row["ssn"];
                    echo "<option>",$ssn,"\n";
                }
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>
    </body>
</html>
