<?php
        include 'dbConnect.php';
        
        $query = "SELECT  distinct dName FROM student ";
        $result = mysqli_query($conn,$query);
        ?>
<center>
        <h4>Select a department</h4>
        <form method="post" action="departmentOfStudent.php">
            <select name="dName">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn = $row['dName'];
                    echo "<option>", $ssn, "\n";
                }
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>