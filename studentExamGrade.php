<html>
    <head>
        <title>Exam grades</title>
    </head>
    <center>
<body>
        
        <?php
        include 'dbConnect.php';
        $courseCode = $_POST['courseCode'];
        $examname = $_POST['examname'];
        $semester = $_POST['semester'];
        $yearr = $_POST['yearr'];

       $query="select sssn, qno, pointsEarned
from gradesperquestion 
where courseCode='$courseCode' and examname='$examname' and semester='$semester' and yearr='$yearr'
";
 
  
        $result = mysqli_query($conn,$query);
        mysqli_close($conn); //for this page we dont need the connection any more.


        ?>
                <h4>List the student's exam grades</h4>
<table border="4" cellspacing="3" cellpadding="4">
    <tr>
     <th>studentssn</th>
      <th>qno</th>
      <th>pointsEarned</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
       $sssn=$row["sssn"];
       $qno=$row["qno"];
       $pointsEarned=$row["pointsEarned"];
        ?>

    <tr>
         <td><?php echo $sssn ?></td>
          <td><?php echo $qno ?></td>
             <td><?php echo $pointsEarned ?></td>


        </tr>

        <?php
    }
    ?>
    </body>
</html>
