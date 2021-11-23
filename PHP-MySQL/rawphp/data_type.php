<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    
    <title>Set Training | PHP Data Type </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Design Tutorials by SET">
    <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, MySQL">
    <meta name="author" content="Shahlal Hossain">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

    </style>
</head>

<body>

<br><br>
<div class="container pt-3">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>PHP Data Types</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php
            // PHP String
            $x = "Hello World!";
            $y = 'Hello Bangladesh!';
            var_dump($x);
            echo "<br>";
            echo $y;
            echo "<br>";

            // Integer
            $x = 5985;
            var_dump($x);
            echo "<br>";

            // PHP Float
            $x = 150.365;
            var_dump($x);
            echo "<br>";

            // PHP Boolean
            $x = TRUE;
            $y = FALSE;
            var_dump($x);
            echo "<br>";
            var_dump($y);
            echo "<br>";

            // PHP Array
            // $countries = array("Bangladesh","Japan","Canada","Thailand","China","India");
            // $countries = ["Bangladesh","Japan","Canada","Thailand","China","India"];

            $countries = ["Bangladesh",5646546532123,233.54654,"Japan","China","India"];
            
            var_dump($countries);
            echo "<br>";

            // PHP Math
            echo (pi()); // returns 3.1415926535898
            echo "<br>";

            echo (min(0, 150, 30, 20, -8, -200)); // returns -200
            echo "<br>";

            echo (max(0, 150, 30, 20, -8, -200)); // returns 150
            echo "<br>";

            echo (abs(-6.7)); // returns 6.7
            echo "<br>";

            echo (sqrt(64)); // returns 8
            echo "<br>";

            echo (round(0.51)); // returns 1
            echo "<br>";

            echo (round(0.49)); // returns 0
            echo "<br>";

            echo (rand());
            echo "<br>";

            echo (rand(100000, 999999));
            echo "<br>";

            // PHP Constant
            // Syntax: define(name, value)
            define("GREETING", "Welcome to SET Training Program");
            echo GREETING;

            ?>
        </div>


    </div>
</div>

</body>
</html>
