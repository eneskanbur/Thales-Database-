<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT * FROM instructor ";
        $result = mysqli_query($conn,$query);
        ?>
        <h4>Get Instructor's working projects:</h4>
        <form method="post" action="instructorProjectWorking.php">
            <select name="ssn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn = $row['ssn'];
                    echo "<option>", $ssn, "\n";
                }
                ?>
            </select>
            <input type="submit" value="get">
        </form>