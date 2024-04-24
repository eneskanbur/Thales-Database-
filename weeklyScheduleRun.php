<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT distinct ssn FROM instructor ";
        $result = mysqli_query($conn,$query);
        ?>
        <h4>Get Instructor's weekly schedule:</h4>
        <form method="post" action="weeklySchedule.php">
            <select name="ssn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn = $row['ssn'];
                    echo "<option>", $ssn, "\n";
                }
                ?>
            </select>
            <input type="submit" value="Get">
        </form>