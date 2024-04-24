<html>

    <body>
      
        <?php
        include 'dbConnect.php';
        $ssn = $_POST['studentid'];
        $query="select c.courseCode, c.courseName, c.ects
            from course c
            where c.courseCode in (select cu.courseCode
                        from  curriculacourses CU, student S
                        where s.studentid = '$ssn' and s.currCode = CU.currCode and s.dname =CU.dname)";

        $result = mysqli_query($conn,$query);
        mysqli_close($conn);


        ?>
                <h4 align = "center"</h4>
                
    <table border="4" cellspacing="3" cellpadding="4">
    <tr>
        <th>CourseCode</th>
        <th>courseName</th>
        <th>ects</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $CourseCode = $row["courseCode"];
        $courseName = $row["courseName"];
        $ects = $row["ects"];

        ?>

    <tr>
          
            <td><?php echo $CourseCode; ?></td>
            <td><?php echo $courseName; ?></td>
            <td><?php echo $ects; ?></td>
        </tr>

        <?php
    }
    ?>
    </body>
</html> 


</html>