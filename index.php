<?php include 'db-connection.php';

// if ($connect) {
//     echo "server connect ok";
// }
// else {
//     echo "server not connect";
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">User Information</h2>
        <a href="add-info.php" target="_blank"><button class="btn btn-success px-3 mb-2 float-right"><i
                    class="fa-solid fa-user-plus"></i> Add User</button></a>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sl no.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `user_info_db`";
                    $showAllData = mysqli_query($connect, $sql);
                    

                    
                    while ($row = mysqli_fetch_assoc($showAllData)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <a href="edit-info.php?id=<?php echo $row['id'] ?>" target="_blank"><button
                                class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="process.php?id=<?php echo $row['id']?>&mode=delete"><button
                                class="btn btn-danger btn-sm">Delete</button></a>
                    </td>
                </tr>

                <?php } ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Abu Rayhan</td>
                    <td>01719857898</td>
                    <td>aburayhan.bpi@gmail.com</td>
                    <td>
                        <a href="edit-info.php"><button class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="#"><button class="btn btn-danger btn-sm">Delete</button></a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>



    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>