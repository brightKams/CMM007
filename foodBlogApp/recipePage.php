<?php

include "connectdb.php";
include "inputValidate.php";

$recipe = strtolower(validateInput($_GET["recipe"]));
$recipe = $_GET["recipe"];
echo $recipe ;



?>