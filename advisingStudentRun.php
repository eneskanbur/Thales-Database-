<center>
<?php
        include 'dbConnect.php';
        $query = "SELECT * FROM instructor ";
        $result = mysqli_query($conn,$query);
        ?>
        <h4>Get Instructor's advisor student details:</h4>
        <form method="post" action="advisingStudent.php">
            <select name="iname">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['iname'];
                    echo "<option>", $name, "\n";
                }
                ?>
            </select>
            <input type="submit" value="Get">
        </form>