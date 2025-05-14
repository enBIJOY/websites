<!DOCTYPE html>
<html lang="en">
<head>
    <title>demo</title>
</head>
<body>
    <h2>
        <?php

            echo "concatinate"."my name is bijoy <br>";

            echo 'another tex with single cout <br>';
            echo "its double couted <br>";

            $pen = "red pen";

            echo "$pen";

            echo '$pen'." "."not print as veriable <br>";

            echo "$pen"." "."is not stolen <br>";



            // Conditionals and booleans

            /*
            $bookname = "PHP Book";
            $read = TRUE;

                if($read){
                    $message = "You have read $bookname";
                } else {
                    $message = "You have NOT read $bookname";
                }
            */
            

            $Classwork = "Conditionals homework";
            $work = FALSE;

                if($work){
                    $message = "You did the $Classwork";
                } else{
                    $message = "You did NOT the $Classwork";
                }
        ?>
    </h2>
    <h1>

    <?php 
    echo "$message"; 
    //echo "$message2";
    ?>

    </h1>
</body>
</html>