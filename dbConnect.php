<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Işık University</title>
</head>
<body>
    <?php
    $dbname= "db3";
    $conn= mysqli_connect("127.0.0.1", "root", "", $dbname,'3306');
    // Check connection
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }
    else{
        echo "";
    }
    
    
    ?>
</body>
</html>
