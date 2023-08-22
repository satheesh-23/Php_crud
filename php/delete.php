<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    ""

);
$db = mysqli_select_db($conn, "index");
$item = $_GET['d'];
$sel="select * from user where id='$item'";
$data = mysqli_query($conn, $sel);
while($row=mysqli_fetch_array($data))
{
    $student=$row['name'];
}

if(isset($_POST['delete']))
{
    $sql = "delete from user where id='$item'";
    if(mysqli_query($conn, $sql))
    {
        header("location:index.php");
    }
    
}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
<form method='post'>
<div class="card">
  <div class="card-header">
    <h3>Confirm Delete</h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p> <?php echo"Are you want to delete <b>$student</b> details"?> </p>
      <footer>
        <a href="index.php" class= "btn btn-secondary" >cancel</a>
        
        <input type='submit' name='delete' class="btn btn-danger " value='confirm delete'>
      </footer>
    </blockquote>
  </div></div>
</div>
</form>
</body>
</html>







<?php


