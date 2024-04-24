<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Find Graduate Or Undergraduate Student</title>
    </head>
    <center>
    <body>
        <?php 
        include 'dbConnect.php';

        $query="SELECT studentname FROM student";
        $result=mysqli_query($conn, $query);
        ?>
        <h4>Find Graduate Or Undergraduate Student:</h4>
        <form method="post" action="gradOrUgrad.php">
            <select name="studentname">
                <?php
                while ($row= mysqli_fetch_assoc($result)) {
                    $ssn=$row["studentname"];
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

