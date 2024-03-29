<?php 

echo "Hello <br>";


// echo $_signup . " " . $_login ;
// $_signup = $_POST['signup'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form is submitted
        // Assuming you have form fields named 'login' and 'signup'
    
        // Sanitize and validate the input
        // $_login = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
        $_signup = isset($_POST['signup']) ? htmlspecialchars($_POST['signup']) : "";
    
        // Now you can process the input or perform any other actions
        // echo "Login: " . $_login . "<br>";
        echo "Signup: " . $_signup;
    }

?>