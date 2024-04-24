<?php
        include 'dbConnect.php';
        $query = "SELECT distinct sssn FROM enrollment ";
        $result = mysqli_query($conn,$query);
        ?>
<center>
        <h4>Get Student Weekly Schedule:</h4>
        <center>
        <form method="post" action="studentWeeklySchedule.php">
            <select name="sssn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn = $row['sssn'];
                    echo "<option>", $ssn, "\n";
                }
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>