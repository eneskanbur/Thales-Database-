<?php
        include 'dbConnect.php';
        $query = "SELECT distinct Gradssn FROM project_has_gradstudent";
        $result = mysqli_query($conn,$query);
        ?>
<center>
        <h4>Details of the project the selected student is working on:</h4>
        <form method="post" action="gradStudentProject.php">
            <select name="Gradssn">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssn = $row['Gradssn'];
                    echo "<option>", $ssn, "\n";
                }
                ?>
            </select>
            <center>
                <p>
            <input type="submit" value="Get">
        </form>