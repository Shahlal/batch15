<!DOCTYPE html>
<html>
    <head>
        <title>PHP | Variables</title>

        <meta>
        <meta>
        <meta>
        <meta>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!--For the FontAwesome Icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row text-center jumbotron">
                <div class="col-sm-12">
                    <h1>PHP Variables</h1>

                    <?php
                        $txt = "Japan";
                        $x = 5;
                        $y = 10.5;
                        
                        echo("I love " . $txt . ".");
                        echo "<br>";
                        
                        $txt = "Bangladesh";

                        echo "I love " . $txt . ".";
                        echo "<br>";

                        $number1 = 5;
                        $number2 = 4;
                        $sum = $number1 + $number2;

                        echo $sum;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
