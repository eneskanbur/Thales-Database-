<?php
        include 'dbConnect.php';
        $query = "SELECT * FROM student ";
        $result = mysqli_query($conn,$query);
        ?>
<center>
        <h4>Get the student advisor:</h4>
        <form method="post" action="studentAdvisor.php">
            <select name="ssn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['ssn'];
                    echo "<option>", $name, "\n";
                }
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>