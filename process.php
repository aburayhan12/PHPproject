<?php 
include 'db-connection.php';

$id= $_GET['id'];
$mode= $_REQUEST['mode'];

if($mode=="add" || $mode=="edit") {
    $name = $_REQUEST["Name"];
    $phone = $_REQUEST["Phone"];
    $email = $_REQUEST["Email"];
}
$Err = "Please fill out all required fields";





// ------------CONNECION TEST--------------------------------------------------------------------
if($connect) {
    echo "Server Connected";
    echo "<br>";
}
else {
    echo "Server Not Connected";
    echo "<br>";
}



if($mode=="add") {
    if (empty($name) || empty($phone) || empty($email)) {
        header("Location: add-info.php?Error=$Err");
    } 
    else {
        $sql = "INSERT INTO `user_info_db` (`id`, `name`, `phone`, `email`) VALUES (NULL, '$name', '$phone', '$email')";
        $submitted = mysqli_query($connect, $sql);
    }

    if($submitted) {
        header("Location: index.php?action=submit success");
    }
    else {
        header("Location: add-info.php?Error=$Err");
    }
}
elseif($mode=="edit") {
    $sql= "UPDATE `user_info_db` SET name = '$name', phone = '$phone', email = '$email' WHERE id = $id";
    $submitted= mysqli_query($connect, $sql);

    if($submitted) {
        header("Location: index.php?action=edit success");
    }
    else {
        header("Location: add-info.php?Error=$Err");
    }

}
elseif($mode=="delete") {
    $sql= "DELETE FROM `user_info_db` WHERE `id` = $id";
    $submitted= mysqli_query($connect, $sql);

    if($submitted) {
        header("Location: index.php?action=delete success");
    }
    else {
        header("Location: add-info.php?Error=$Err");
    }
}
else {
    die();
}









?>