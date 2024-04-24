<html>

    <body>
        <?php
        include 'dbConnect.php';
        $ssn = $_POST['ssn'];
       $query="select E.courseCode, E.yearr, E.semester, E.grade
        from enrollment E 
        where E.sssn = '$ssn';";

        $result = mysqli_query($conn,$query);
        mysqli_close($conn); //for this page we dont need the connection any more.


        ?> 
        <center>
                <h4>List the student's Grades</h4>
                <center>
<table border="4" cellspacing="3" cellpadding="4">
    <tr>
        <th>CourseCode</th>
        <th>yearr</th>
        <th>semester</th>
         <th>grade</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $courseCode = $row["courseCode"];
       $yearr = $row["yearr"];
        $semester = $row["semester"];
        $grade=$row["grade"];

        ?>

    <tr>

            <td><?php echo $courseCode; ?></td>
            <td><?php echo $yearr; ?></td>
            <td><?php echo $semester; ?></td>
            <td><?php echo $grade; ?></td>
        </tr>

        <?php
    }
    ?>
    </body>
</html>