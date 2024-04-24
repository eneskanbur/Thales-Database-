<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <center>
    <body>
       
        <?php
        include 'dbConnect.php';
        $name = $_POST['studentname'];
        $query="SELECT gradorUgrad FROM student where '$name'=studentname";
        $result = mysqli_query($conn,$query);
        mysqli_close($conn);

        while($row= mysqli_fetch_assoc($result)){
            $gradorUgrad = $row["gradorUgrad"];
            if($gradorUgrad == 0){
                echo "Ugrad";
            }else{
                echo "Grad";
            }
            //echo "$gradorUgrad"
        }
        ?>
    </body>
</html>
