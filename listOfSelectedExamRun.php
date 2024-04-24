<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT distinct courseCode , examname , yearr, semester FROM gradesperquestion ";
        $result = mysqli_query($conn,$query);
        $result1 = mysqli_query($conn,$query);
        $result2 = mysqli_query($conn,$query);
        $result3= mysqli_query($conn,$query);
        ?>
        
    <form method="post" action="listOfSelectedExam.php">
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
                <h4> Select Exam Name</h4>
            <select name="examname">
                <?php
                while ($row = mysqli_fetch_assoc($result1)) {
                    $examname= $row['examname'];
                    echo "<option>", $examname, "\n";
                    
                }
                ?>
                
                
                 </select>
                            <br>
            <h4> Select year</h4>
                <select name= 'yearr'>
                <?php
                while ($roww = mysqli_fetch_assoc($result2)) {
                  $yearr = $roww['yearr'];
                    echo "<option>", $yearr, "\n";
                    
                }
                ?>
                     </select>
            <br>
            <h4> Select semester</h4>
                    <select name="semester">
                <?php
                while ($row = mysqli_fetch_assoc($result3)) {
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
        
    