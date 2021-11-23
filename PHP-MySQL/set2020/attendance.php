<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set2020 | Attendance</title>

    <!-- Bootstrap as External CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
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
                <li class="nav-item"><a class="nav-link btn btn-success" href="admission.php">Admission</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="courses.php">Courses</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="class-schedule.php">Class Schedule</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="notices.php">Notice Board</a></li>
                <!-- <li class="nav-item"><a class="nav-link btn btn-outline-success" href="gallary.php">Image Gallary</a></li> -->
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <br><br>

    <div class="container pt-3 text-center">
        <h4>নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ</h3>
        <p>Online Application for Self Reliant E-Training (SET) Programme for Women</p>
        <p class="text-success"><strong>Online Attendance</strong></p>
        <hr>
    </div>

    <div class="container pt-3 container-box">
        <form action="" method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label text-right">Participant Name (অংশ গ্রহনকারীর নাম):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="name" name="name" value="" placeholder="Your Full Name (আপনার পুরো নাম)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-4 col-form-label text-right">Mobile/Phone (মোবাইল নাম্বার):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="mobile" name="mobile" value="" placeholder="Mobile/Phone (মোবাইল নাম্বার)" required="required" size="15">
                </div>
            </div>

            <div class="form-group row">
                <label for="trade" class="col-sm-4 col-form-label text-right">Trade Name (কোন ট্রেডের প্রশিক্ষণার্থী):</label>
                <div class="col-sm-7">
                    <select class="form-control input-bg" id="trade" name="trade">
                        <option value=""> ট্রেড সিলেক্ট করুন</option>
                        <option value="1"> Microsoft Office</option>
                        <option value="3"> Graphic Design</option>
                        <option value="4"> Computer Hardware</option>
                        <option value="5"> Software Development</option>
                        <option value="6"> Search Engine Optimization</option>
                        <option value="7"> Digital Marketing</option>
                        <option value="8"> গহনা তৈরি</option>
                        <option value="9"> ক্রিস্টাল শোপিস তৈরি</option>
                        <option value="10"> বিউটিফিকেশন</option>
                        <option value="11"> নকশী কাথা ও এম্ব্রয়ডারি</option>
                        <option value="12"> পোল্ট্রি ও ডেইরি</option>
                        <option value="13"> ফ্যাশন ডিজাইন</option>
                        <option value="14"> খাদ্য প্রক্রিয়াজাতকরণ ও সংরক্ষণ</option>
                        <option value="15"> মাশরুম ও মধু চাষ</option>
                        <option value="16"> হর্টিকালচার ও নার্সারি</option>
                        <option value="17"> ইলেক্ট্রনিক প্রোডাক্ট সার্ভিসিং</option>
                        <option value="18"> কুকিং এন্ড ক্যাটারিং</option>
                        <option value="19"> হাউজকিপিং এন্ড কেয়ারগিভিং</option>
                        <option value="21"> হিউমেন রিসোর্স ম্যানেজমেন্ট</option>
                        <option value="22"> সাপ্লাই চেইন মেনেজমেন্ট</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-11 text-right">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                    <input type="reset" class="btn btn-primary">
                    <input type="submit" class="btn btn-success" name="save" value="Submit">
                </div>
            </div>

        </form>
        <hr>
    </div>
</body>
</html>
