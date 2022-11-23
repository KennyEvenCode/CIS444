<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="flex column centerX">
        <h1>Add two numbers at the end to finish the pattern below</h1>
        <form action="includes/calculate.inc.php" method="POST" class="flex centerX">
            <h2>1, 2, 3, 5, 8, 13, &nbsp;&nbsp;</h2> 
            <?php 
                if(isset($_GET['number1'])) {
                    $n1 = $_GET['number1'];
                }
                if(isset($n1)) {
                    echo "<input type='text' name='num1' id='num1' class='input' value='$n1'>";
                }
                else {
                    echo "<input type='text' name='num1' id='num1' class='input'>";
                }
            ?> 
            <h2>&nbsp;&nbsp; , &nbsp;&nbsp;</h2>
            <?php 
                if(isset($_GET['number2'])) {
                    $n2 = $_GET['number2'];
                }
                if(isset($n2)) {
                    echo "<input type='text' name='num2' id='num2' class='input' value='$n2'>";
                }
                else {
                    echo "<input type='text' name='num2' id='num2' class='input'>";
                }
            ?> 
            <h2>&nbsp;&nbsp;&nbsp;</h2>
            <input type="submit" value="Check It!">           
        </form>
        <?php
            if (isset($_GET['status'])){
                switch ($_GET['status']) {
                    case "missingNumber":
                        echo "<p class='inputHint bad'>Please Guess Two Numbers</p>";
                        break;
                    case "invalid":
                        echo "<p class='inputHint bad'>Not a Number!</p>";
                        break;
                    case "success":
                        echo "<p class='inputHint good'>Correct!</p>";
                        break;
                    case "incorrect":
                        echo "<p class='inputHint bad'>Incorrect. Try Again!</p>";
                        break;
                    default:
                        break;
                }
            }
        ?>
    </body>
</html>