<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class=container>
        <table class="table">
            <br>
            <h1>Student details</h1>
            <a href="add.php" button type="button" class="btn btn-primary">Add student</button></a><br>

            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect(
                    "localhost",
                    "root",
                    ""

                );
                $db = mysqli_select_db($conn, "index");
                $sql = "select * from user";
                $data = mysqli_query($conn, $sql);

                $i = 1;
                while ($row = mysqli_fetch_array($data)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $mobile = $row['mobile'];
                    $city = $row['city'];

                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $i ?>
                        </th>
                        <td>
                            <?php echo $name ?>
                        </td>
                        <td>
                            <?php echo $mobile ?>
                        </td>
                        <td>
                            <?php echo $city ?>
                        </td>
                        <td><a href="edit.php?e=<?php echo $id ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?d=<?php echo $id ?>" class="btn btn-danger">Delete</a></td>

                    </tr>

                    <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
