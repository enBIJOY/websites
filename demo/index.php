<!DOCTYPE html>
<html lang="en">
<head>
    <title>demo</title>
</head>
<body>
    <h1>
        <?php

            echo "Hello World";
            echo "Hi, Min sue woo";
            echo " My name is Bijoy";

        echo "My name is Bijoy <br>";
        echo "My". " ". "Pet <br>";
        
        $name = "phone";

        echo "$name  <br>";
        echo "My"." "."$name  <br>";
        echo 'singale coted veriable $name <br>';
        

        // contionals and booleans

        $classwork = "PHP Homework";
        $work = FALSE;

        if ($work) {
            $message = "You did the $classwork";
        } else {
            $message = "You did NOT the $classwork";
        }
        ?>
    </h1>

    <h1>
        <?php
        echo $message;
        ?>
    </h1>

</body>
</html>