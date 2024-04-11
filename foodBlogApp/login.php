<?php
include "connectdb.php";
include("inputValidate.php");


echo "<br> " . $dbname;
if (empty(validateInput($_POST["email"])) || empty(validateInput($_POST["password"]))) {
    echo "Complete the empty Field(s)";
    header('Location: login.html');
} else {
    $email = validateInput($_POST["email"]);
    $password = validateInput($_POST["password"]);
    $sql = "SELECT email FROM bloguser WHERE email = '$email' and password = '$password' ";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) {
        # code...
        session_start();
        header("Location: index.php");
    } else {
        echo "<h1>Incorrect Password or email </h1>";
        header("Location: login.html");
    }
}
