<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>   
    <title>Set Training | PHP Variables Scope </title>
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
            <h4>PHP Variables Scope (Global and Local)</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            
            <?php

            $number1 = 555555555; // global scope
            function myTest1() {
                echo "<p>Variable number1 inside function is: $number1</p>";
            }
            myTest1();
            echo "<p>Variable number1 outside function is: $number1</p>";



            function myTest2() {
                $x = 5000; // local scope
                echo "Variable x inside function is: ".$x;
            }

            myTest2();

            echo "<p>Variable x outside function is: $x</p>";

            ?>
        </div>


    </div>
</div>

</body>
</html>
