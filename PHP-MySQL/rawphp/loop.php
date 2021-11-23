<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   
    <title>Set Training | Loop in PHP </title>

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
            <h4>Loop in PHP</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php
            
            // for ($x = 1; $x <= 10; $x++) {
            //     echo "The number is: $x <br>";
            // }

            $colors = array("red", "green", "blue", "yellow", "black color", "orange", "white", "purple");
            foreach ($colors as $value) {
                echo ucwords($value)."<br>";
            }
            
            ?>
        </div>
    </div>
</div>
</body>
</html>