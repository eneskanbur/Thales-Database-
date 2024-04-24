
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Student Advisor</title>
    </head>
    <body>
<center>
        <?php
        include 'dbConnect.php'; 

        $ssn = $_POST['ssn'];

       $query = "SELECT i.ssn,i.iname,i.rankk,i.baseSal,i.dName,i.extraSalary From Student s ,Instructor i WHERE i.ssn = s.advisorSsn   AND s.ssn = '$ssn'";
        $result = mysqli_query($conn,$query);
        mysqli_close($conn); //for this page we dont need the connection any more.

        echo "<h4> $ssn's Advisor </h4>";
                      ?>
      
<table border="4" cellspacing="4" cellpadding="4">
    <tr>
        <th>Instrutor ssn </th>
        <th>Instructor Name</th>
        <th>rankk</th>
        <th>baseSal</th>
          <th>department name</th>
        <th>extra Salary</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $inssn = $row["ssn"];
        $name = $row["iname"];
        $rank = $row["rankk"];
        $basesal = $row["baseSal"];
        $dname = $row["dName"];
        $extra = $row["extraSalary"];
        ?>

    <tr>
            <td>
              <?php echo $inssn; ?>
            </td>
            <td><?php echo $name; ?></td>
            <td><?php echo $rank; ?></td>
            <td><?php echo $basesal; ?></td>
             <td><?php echo $dname; ?></td>
            <td><?php echo $extra; ?></td>
        </tr>

        <?php
    }
    ?>

</table>



    </body>
</html>