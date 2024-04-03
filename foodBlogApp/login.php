<?php
include "connectdb.php" ;
 
    echo $dbname ;
    if(empty($_POST["email"]) || empty($_POST["password"])) {
        echo "Complete the empty Field(s)" ;
    }
    else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT email FROM bloguser WHERE email = '$email' and password = '$password' ";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result ) == 1) {
            # code...
            header("Location: index.html");
        }

        else
        {
            echo "<h1>Incorrect Password or email </h1>";
            header("Location: login.html");
        }
    }
?>

