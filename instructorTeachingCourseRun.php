<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT distinct issn ,yearr,semester FROM examofsection ";
        $result = mysqli_query($conn,$query);
        $result1 = mysqli_query($conn,$query);
        $result2 = mysqli_query($conn,$query);
        ?>
        
<form method="post" action="instructorTeachingCourse.php">
            <h4> Select Instructor id</h4>
            <select name="issn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn= $row['issn'];
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
        
    