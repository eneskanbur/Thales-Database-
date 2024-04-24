<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Exam Selection</title>
    </head>
    <center>
    <body>
        <?php 
        include 'dbConnect.php';        
        
        $query="SELECT  distinct courseCode,  examname,  semester , yearr FROM gradesperquestion  ";
        $result=mysqli_query($conn, $query);          
         $result1=mysqli_query($conn, $query);      
          $result2=mysqli_query($conn, $query);    
           $result3=mysqli_query($conn, $query);    
        ?>
        <h4>Get the result list of selected exam:</h4>
        <form method="post" action="studentExamGrade.php">
            <select name="courseCode">
                <?php                
                while ($row= mysqli_fetch_assoc($result)) {
                    $courseCode=$row['courseCode'];
                    echo "<option>",$courseCode,"\n"; 
                    
                     
                }
                
                ?>
            </select>
            
             <select name="examname">
                <?php                
                while ($row= mysqli_fetch_assoc($result1)) {
                    $examname=$row['examname'];
                    
                    echo "<option>",$examname,"\n"; 
                    
                }
                
              
                ?>
            </select>
            
                    <select name="semester">
                <?php
                while ($row = mysqli_fetch_assoc($result2)) {
                    $semester = $row['semester'];
                    echo "<option>", $semester, "\n";
                    
                }
                ?>
            </select>
                
            
            <select name="yearr">
                <?php                
                while ($row= mysqli_fetch_assoc($result3)) {
                    $yearr=$row['yearr'];
                    
                    
                    echo "<option>" , $yearr,"\n"; 
                    
                     
                }
                
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>
    </body>
</html>