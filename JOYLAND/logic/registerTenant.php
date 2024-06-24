<?php
    require "./app/database.php";
?>

<?php
$connection = $GLOBALS['connection'];

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $query = "INSERT INTO tenants(fname,lname,email)";
    $query .= "VALUES('{$fname}', '{$lname}', '{$email}')";
//    $conn = $GLOBALS['connection'];
    $create_post_query = mysqli_query($connection, $query);


    if ($create_post_query) {

        echo "data added";
    } else {
        die("Query failed".mysqli_error($connection));
    }
}
?>

