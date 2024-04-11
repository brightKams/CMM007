<?php
include "connectdb.php" ;
include "inputValidate.php" ;

$filterSearch = trim(strtolower(validateInput($_GET['filterSearch'])));

echo " Hello This is Php ";

// Test
echo $filterSearch ;

if (empty($filterSearch)) {
    header("Location: index.html");
}

elseif ($filterSearch == "beverages") {
    header("Location: beverages.html");
    exit();
}
elseif ($filterSearch == "deserts") {
    header("Location: deserts.html");
    exit();
}
elseif ($filterSearch == "vegan") {
    header("Location: vegan.html");
    exit();
}
elseif ($filterSearch == "appetizers") {
    header("Location: appetizers.html");
    exit();
}
elseif ($filterSearch ==  trim("main courses")) {
    header("Location: mainCourses.html");
    exit();
}
elseif ($filterSearch == "main Courses") {
    header("Location: sideDishes.html");
    exit();
}








?>