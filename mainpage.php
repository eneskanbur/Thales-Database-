<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Database</title>
    
</head>
<center>
<body>
    <style>
  h1 {
    font-size: 70px;
    }    
    </style>

<script>
    
    function studentpage(){
         window.location.href = "studentmainpage.php";
    }
    function instructorpage(){
         window.location.href = "instrumainpage.php";
    }
    function departmentMainPage(){
         window.location.href = "departmentMainPage.php";
    }
    function projectMainPage(){
         window.location.href = "projectMainPage.php";
    }
</script>

<div class="container">
    <h1 class="headext" style="color: #0099ff">Thales University Database</h1>
    
</div>

    <section>
           <table style="margin-left: auto; margin-right: auto;" style="width: 80%;">
  <tr>
    <td><button onclick="studentpage()" 
                style="background-color:red;color:white;width:200px;height: 50px;"> Student </button >
      </td>
  </tr>
   
</table>
            
    </section>

    <section>
   <table style="margin-left: auto; margin-right: auto;"   >
  <tr>
    <td>
        <button onclick="instructorpage()" 
                style="background-color:black;color:white;width:200px;height: 50px;"> Instructor </button>
      </td>
  </tr>
</table>
    
</section>

<section>
   <table style="margin-left: auto; margin-right: auto;"   >
  <tr>
    <td>
        <button onclick="departmentMainPage()" style="background-color:red;color:white;width:200px;height: 50px;"> Departments</button >
      </td>
  </tr>
</table>
    
</section>

<section>
   <table style="margin-left: auto; margin-right: auto;"   >
  <tr>
    <td>
        <button onclick="projectMainPage()" style="background-color:black;color:white;width:200px;height: 50px;"> Projects </button >
      </td>
  </tr>
</table>
    
</section>

</body>
</html>
