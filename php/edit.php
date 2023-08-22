<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    ""

);
$db = mysqli_select_db($conn, "index");
$item = $_GET['e'];

if (isset($_POST['update'])) {
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $sql = "update user set name='$name',mobile='$mobile',city='$city' where id= '$item' ";

    mysqli_query($conn, $sql);
    header("location:index.php");

} else {



    $sql = "select * from user where id='$item'";
    $data = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($data)) {
        $name = $row['name'];
        $mobile = $row['mobile'];
        $city = $row['city'];
    }
} ?>







<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        /* Horizontally center */
        align-items: center;
        padding: 30px;

    }
</style>




<div class=container>
    <div class="card">
        <div class="card-header">
            <h3>Edit Student Details</h3>
        </div>
        <div class="card-body">


            <form method='POST'>



                <input type='text' class='form-control' value=<?php echo $name ?> name='name'
                    placeholder="student name"><br>
                <input type='text' class='form-control' value=<?php echo $mobile ?> name='mobile'
                    placeholder="mobile number"><br>
                <input type='text' class='form-control' value=<?php echo $city ?> name='city' placeholder="city"><br>

                <input type='submit' name='update' value='Update' class="btn btn-primary">


            </form>



        </div>
    </div>








</div>
</body>

</html>