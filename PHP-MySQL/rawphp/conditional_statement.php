<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   
    <title>Set Training | PHP Conditioanl Statement </title>

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
            <h4>PHP Conditioanl Statements</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php
            $age = 21;
 
            // Only IF
            if ($age < 15) {
                echo "Ohho! You are too young";
            } elseif ($age > 20) {
                echo "Your age is more than 20";
            } else {
                echo "Welcome to SET Training Program.";
            }


            // Switch
            $districtID = 5;
            switch ($districtID) {
                case 1:
                    echo "Your Location is Dhaka";
                    break;
                case 2:
                    echo "Your Location is Khulna";
                    break;
                case 3:
                    echo "Your Location is Barisal";
                    break;
                case 4:
                    echo "Your Location is Pabna";
                    break;
                case 5:
                    echo "Your Location is Rangpur";
                    break;
                default:
                    echo "You are not in Bangladesh";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>