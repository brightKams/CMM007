<?php

// echo "Hello <br>";


// echo $_signup . " " . $_login ;
// $_signup = $_POST['signup'];


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Form is submitted
//     // Assuming you have form fields named 'login' and 'signup'

//     // Sanitize and validate the input
//     // $_login = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
//     $_signup = isset($_POST['signup']) ? htmlspecialchars($_POST['signup']) : "";

//     // Now you can process the input or perform any other actions
//     // echo "Login: " . $_login . "<br>";
//     echo "Signup: " . $_signup;
// }

?>



<?php

include('connectdb.php');
include("inputValidate.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    #validating user inputs
    #$user_id = htmlspecialchars($_REQUEST["userID"]);
    // OR CREATING AN INPUT VALIDATION FUNCTION TO TEST ALL DATA INPUT
    // function validateInput($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    $firstname =   validateInput($_POST['fname']);
    $lastname =   validateInput($_POST['lname']);
    $email =   validateInput($_POST['email']);
    $password =   validateInput($_POST['password']);
    $confirmPassword =   validateInput($_POST['confirmPassword']);

    // TESTING IF THE RECORDSFROM SIGN UP ARE ACCESSIBLE FROM PHP
    // echo $firstname . " " . $lastname . " " . $email . " " . $password . " " .  $password . " " . $confirmPassword;

    if ($password !== $confirmPassword) {
        echo "password and confirm password are not same";
        header("Location: signup.html");
    } else {
        $query = "SELECT * FROM bloguser WHERE email = '$email' ";
        $result1 = mysqli_query($db, $query);
        if (mysqli_num_rows($result1) > 0) {
            echo "<h3> Record Exists in the database </h3>";
            header("Location: signup.html");
        } else {

            $sql = "INSERT INTO bloguser (first_name, last_name, email, password) VALUES ('$firstname','$lastname','$email', '$password')";

            $result = mysqli_query($db, $sql);

            if ($result) {
                echo "Registered Successfully";
                header("Location: login.html");
            } else {
                echo "Something Went Wrong!";
                header("Location: signup.html");
            }
        }
    }

}

else {
    header("Location: signup.html");
}
// CLOSE CONNECTION TO DATABASE
mysqli_close($db);
?>