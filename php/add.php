<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    ""

);
$db = mysqli_select_db($conn, "index");
if (isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $sql = "INSERT into user(name,mobile,city) values ('$name','$mobile','$city')";
     try{

        mysqli_query($conn, $sql);
        header("location:index.php");
    }
    catch( mysqli_sql_exception){
        echo $conn->error;
    }

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>

<body>
    <style>
    .container{
        display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center; 
            padding: 30px;

    }
    
    </style>




    <div class=container>
<div class="card">
  <div class="card-header">
   <h3>Enter Student Details</h3>
  </div>
  <div class="card-body">
  <form action="add.php" method='POST'>

<input type='text' class='form-control' name='name' placeholder="student name"><br>
<input type='text' class='form-control' name='mobile' placeholder="mobile number"><br>
<input type='text' class='form-control' name='city' placeholder="city"><br>

<input type='submit'  name= 'submit'  value='Add' class="btn btn-primary">


</form>


   
  </div>
</div>







   
    </div>
</body>

</html>


