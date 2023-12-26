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
    <title>Add User Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container col-lg-5 col-md-10 mt-5 mb-3 border rounded ">
        <form action="process.php" method="GET">
            <?php
                if(isset($_GET['Error'])) {
                    echo $_GET['Error'];
                }
            ?>
            <div class="form-group ">
                <h2 class="text-center text-sucsess mt-2">Add User Information</h2>
                <label for="">Name: </label>
                <input class="form-control" type="text" name="Name">
                <br>
                <label for="">Mobile number: </label>
                <input class="form-control" type="number" name="Phone" id="">
                <br>
                <label for="">Email: </label>
                <input class="form-control" type="email" name="Email" id="">
                <br>
                <button type="submit" class="btn btn-success form-control px-5 mb-3">Submit</button>

                <input hidden name="mode" value="add">
            </div>
        </form>
    </div>




    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>