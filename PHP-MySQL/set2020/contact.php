<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set2020 | Contact Us</title>

    <!-- Bootstrap as External CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- Bootstrap and other JS as External JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <!-- Internal CSS -->
    <style>
        /* Fixes dropdown menus placed on the right side */
        .ml-auto {
            left: auto !important;
            right: 0px;
        }

        .vertical-line {
            border-left: 2px solid green;
            height: 500px;
        }
    </style>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
            <img src="http://set2020.com.bd/images/siteconfigs/1621148396.png" alt="SET2020" height="90px" width="90px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="about.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="admission.php">Admission</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="services.php">Services</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="courses.php">Courses</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="class-schedule.php">Class Schedule</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="notices.php">Notice Board</a></li>
            <!-- <li class="nav-item"><a class="nav-link btn btn-outline-success" href="gallary.php">Image Gallary</a></li> -->
            <li class="nav-item"><a class="nav-link btn btn-success" href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</div>
<br><br>

<div class="container pt-3">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ কর্মসূচি</h4>
            <p>Self Reliant E-Training (SET) Programme for Women</p>
            <hr>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <h4 class="title">Contact Information</h4>
            <p class="subtitle">You can reach us directly.</p>
            <hr>

            <i class="bi bi-telephone-forward"> &nbsp;&nbsp; <strong>Hotline (হটলাইন):</strong> +8801313945500</i> <br>
            <i class="bi bi-envelope"> &nbsp;&nbsp; <strong>Email (ই-মেইল):</strong> set2020bd@gmail.com </i><br>
            <i class="bi bi-globe2"> &nbsp;&nbsp; <strong>Website (ওয়েবসাইট):</strong> <a href="http://set2020.com.bd/">set2020.com.bd</a></i> <br><br>

            <i class="bi bi-facebook"> &nbsp;&nbsp; <strong>Facebook Page:</strong></i><br>
            <a href="https://www.facebook.com/Self-Reliant-E-Training-SET-Programme-for-Women-100724725091009">Self-Reliant-E-Training-For-Women</a>
            <br><br>
            <i class="bi bi-youtube"> &nbsp;&nbsp; <strong>YouTube Channel:</strong></i><br>
            <a href="https://www.youtube.com/channel/UC98XcYZSoUryGcuP3UsQJtg">Self-Reliant-E-Training-For-Women</a>
        </div>

        <div class="col-sm-1"></div>
        <div class="vertical-line"></div>
        <div class="col-sm-1"></div>

        <div class="col-sm-5">
            <div class="contact-form">
                <h4 class="title">Contact Us</h4>
		        <p class="subtitle">We are here assist you.</p>
                <hr>
                <form action="feedback.php">
        			<input type="text" class="form-control input-bg" id="name" name="name" value="" placeholder="Your Full Name (আপনার পুরো নাম) *" required="required" size="50">
                    <br>
        			<input type="text" class="form-control input-bg" id="mobile" name="mobile" value="" placeholder="Mobile/Phone (মোবাইল নাম্বার) *" required="required" size="15">
                    <br>
                    <input type="email" class="form-control input-bg" id="email" name="email" value="" placeholder="Email ID/Address (ই-মেইল আইডি) *" required="required" size="50">
                    <br>
                    <textarea class="form-control" id="message" name="message" value="" placeholder="Your Message (আপনার মতামত/অভিযোগ) *" rows="4"></textarea>
                    <br>
                    <div class="footer text-right">
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <input type="reset" class="btn btn-primary">
                        <input type="submit" class="btn btn-success" name="save" value="Get a Call Back">
                    </div>
                    <br>
        		</form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
