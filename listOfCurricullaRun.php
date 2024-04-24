<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Student Curriculla </title>
    </head>
    <body>
        <?php 
        include 'dbConnect.php';

        $query="SELECT studentid FROM student";
        $result=mysqli_query($conn, $query);
        ?>
        <h4 align="center" > Find Student Courses:</h4>
        <form method="post" action="listOfCurriculla.php">
            <center>
            <p>
            <select name="studentid">
                
                <?php
                while ($row= mysqli_fetch_assoc($result)) {
                    $ssn=$row["studentid"];
                    echo "<option>",$ssn,"\n";
                }
                ?>
            </select>
            <p>
            <center>
            <input type="submit" value="Get">
            <center>
        </form>
    </body>