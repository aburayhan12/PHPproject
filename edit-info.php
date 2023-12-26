<?php include 'db-connection.php';

if ($connect) {
    echo "server connect ok";
}
else {
    echo "server not connect";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container col-lg-5 col-md-10 mt-5 mb-3 border border-rounded">
        <form action="process.php" method="GET">
            <?php
                if(isset($_GET['Error'])) {
                    echo $_GET['Error'];
                }
            ?>
            <?php

            $id = $_GET['id'];
            $sql= "SELECT * FROM `user_info_db` WHERE id = $id";
            $result= mysqli_query($connect, $sql);

            $row= mysqli_fetch_assoc($result);

            ?>


            <div class="form-group">
                <h2 class="text-center text-sucsess mt-2">Edit User Information</h2>
                <label for="">Name: </label>
                <input class="form-control" type="text" name="Name" value="<?php echo $row['name']?>">
                <br>
                <label for="">Phone: </label>
                <input class="form-control" type="text" name="Phone" id="" value="<?php echo $row['phone']?>">
                <br>
                <label for="">Email: </label>
                <input class="form-control" type="text" name="Email" id="" value="<?php echo $row['email']?>">
                <br>
                <button type="submit" class="btn btn-success form-control px-5 mb-3">Submit</button>

                <input hidden name="mode" value="edit">
                <input hidden name="id" value="<?php echo $row['id']?>">
            </div>
        </form>
    </div>


    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>