<?php

// get data
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $numb1 = $_POST["num1"];
    $numb2 = $_POST["num2"];

    // declare controller
    include "../controllers/calculator.ctlr.php";
    $calc = new calculator($numb1, $numb2);
    $calc->checkInput();
    
    
}
else {
    // return to home
    header("location: ../index.php");
}
