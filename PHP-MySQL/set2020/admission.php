<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set2020 | Admission</title>

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
        <h4>Online Application for Self Reliant E-Training (SET) Programme for Women</h3>
        <p>(মহিলা ও শিশু বিষয়ক মন্ত্রণালয় -- নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ কর্মসূচি)</p>
        <hr>
    </div>

    <div class="container pt-3 container-box">
        <form action="admission-request-store.php" method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label text-right">Participant Name (অংশ গ্রহনকারীর নাম):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="name" name="name" value="" placeholder="Your Full Name (আপনার পুরো নাম)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="father-name" class="col-sm-4 col-form-label text-right">Father Name (অংশ গ্রহনকারীর পিতার নাম):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="father-name" name="father_name" value="" placeholder="Father Name (পিতার নাম)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="mother-name" class="col-sm-4 col-form-label text-right">Mother Name (অংশ গ্রহনকারীর মাতার নাম):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="mother-name" name="mother_name" value="" placeholder="Mother Name (মাতার নাম)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-4 col-form-label text-right">Mobile/Phone (মোবাইল নাম্বার):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="mobile" name="mobile" value="" placeholder="Mobile/Phone (মোবাইল নাম্বার)" required="required" size="15">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-right">Email ID/Address (ই-মেইল আইডি):</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control input-bg" id="email" name="email" value="" placeholder="Email ID/Address (ই-মেইল আইডি)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-sm-4 col-form-label text-right">Date of Birth (জন্মতারিখ):</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control input-bg" id="dob" name="dob" value="" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label text-right">Gender (নারী/পুরুষ):</label>
                <div class="col-sm-7">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male (পুরুষ)</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female (নারী)</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other (অন্যান্য)</label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label text-right">Marital Status (বৈবাহিক অবস্থা):</label>
                <div class="col-sm-7">
                    <input type="radio" name="marital_status" value="Married">
                    <label>Married (বিবাহিত)</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="marital_status" value="Unmarried">
                    <label>Unmarried (অবিবাহিত)</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="marital_status" value="Other">
                    <label>Other (অন্যান্য)</label>
                </div>
            </div>

            <div class="form-group row">
                <label for="last-education" class="col-sm-4 col-form-label text-right">Last Education (সর্বশেষ শিক্ষাগত যোগ্যতা):</label>
                <div class="col-sm-3">
                    <select class="form-control input-bg" id="last-education" name="last_education">
                        <option value="" selected>সর্বশেষ শিক্ষাগত যোগ্যতা</option>
                        <option value="SSC"> SSC </option>
                        <option value="HSC"> HSC </option>
                        <option value="Degree"> Degree </option>
                        <option value="Honours"> Honours </option>
                        <option value="Masters"> Masters </option>
                        <option value="PhD"> PhD </option>
                        <option value="Others"> Others </option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <select class="form-control input-bg" id="laptop" name="has_laptop">
                        <option value=""> কম্পিউটার/লেপটপ আছে?</option>
                        <option value="Yes">Yes (হ্যাঁ)</option>
                        <option value="Yes">No (না)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="birthcert" class="col-sm-4 col-form-label text-right">Birth Certificate Number (জন্মসনদ নাম্বার):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="birthcert" name="birthcert" value="" placeholder="Birth Certificate Number (জন্মসনদ নাম্বার)" required="required" size="20">
                </div>
            </div>

            <div class="form-group row">
                <label for="nid" class="col-sm-4 col-form-label text-right">NID Number (জাতীয় পরিচয়পত্র নাম্বার):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="nid" name="nid" value="" placeholder="NID Number (জাতীয় পরিচয়পত্র নাম্বার)" required="required" size="20">
                </div>
            </div>

            <div class="form-group row">
                <label for="division" class="col-sm-4 col-form-label text-right">Division & District (আপনার বিভাগ ও জেলার নাম):</label>
                <div class="col-sm-3">
                    <select class="form-control input-bg" id="division" name="division">
                        <option value="" selected>Select Division (আপনার বিভাগ)</option>
                        <option value="Dhaka">Dhaka (ঢাকা)</option>
                        <option value="Chittagong">Chattogram (চট্টগ্রাম)</option>
                        <option value="Rajshahi">Rajshahi (রাজশাহী)</option>
                        <option value="Rangpur">Rangpur (রংপুর)</option>
                        <option value="Barisal">Barisal (বরিশাল)</option>
                        <option value="Khulna">Khulna (খুলনা)</option>
                        <option value="Mymensingh">Mymensingh (ময়মনসিংহ)</option>
                        <option value="Sylhet">Sylhet (সিলেট)</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <select class="form-control input-bg" id="district" name="district">
                        <option value="" selected>Select District (আপনার জেলা)</option>
                        <option value="1">Bagerhat (বাগেরহাট)</option>
                        <option value="2">Bandarban (বান্দরবান)</option>
                        <option value="3">Barguna (বরগুনা)</option>
                        <option value="4">Barisal (বরিশাল)</option>
                        <option value="5">Bhola (ভোলা)</option>
                        <option value="6">Bogura (বগুড়া)</option>
                        <option value="7">Brahmanbaria (ব্রাহ্মণবাড়িয়া)</option>
                        <option value="8">Chandpur (চাঁদপুর)</option>
                        <option value="9">Chapainawabganj (চাঁপাইনবাবগঞ্জ)</option>
                        <option value="10">Chattogram (চট্টগ্রাম)</option>
                        <option value="11">Chuadanga (চুয়াডাঙ্গা)</option>
                        <option value="12">Comilla (কুমিল্লা)</option>
                        <option value="13">Cox's Bazar (কক্সবাজার)</option>
                        <option value="14">Dhaka (ঢাকা)</option>
                        <option value="15">Dinajpur (দিনাজপুর)</option>
                        <option value="16">Faridpur (ফরিদপুর)</option>
                        <option value="17">Feni (ফেনী)</option>
                        <option value="18">Gaibandha (গাইবান্ধা)</option>
                        <option value="19">Gazipur (গাজীপুর)</option>
                        <option value="20">Gopalganj (গোপালগঞ্জ)</option>
                        <option value="21">Habiganj (হবিগঞ্জ)</option>
                        <option value="22">Jamalpur (জামালপুর)</option>
                        <option value="23">Jessore (যশোর)</option>
                        <option value="24">Jhalokati (ঝালকাঠি)</option>
                        <option value="25">Jhenaidah (ঝিনাইদহ)</option>
                        <option value="26">Joypurhat (জয়পুরহাট)</option>
                        <option value="27">Khagrachhari (খাগড়াছড়ি)</option>
                        <option value="28">Khulna (খুলনা )</option>
                        <option value="29">Kishoreganj (কিশোরগঞ্জ)</option>
                        <option value="30">Kurigram (কুড়িগ্রাম)</option>
                        <option value="31">Kushtia (কুষ্টিয়া)</option>
                        <option value="32">Lakshmipur (লক্ষ্মীপুর)</option>
                        <option value="33">Lalmonirhat (লালমনিরহাট)</option>
                        <option value="34">Madaripur (মাদারীপুর)</option>
                        <option value="35">Magura (মাগুরা)</option>
                        <option value="36">Manikganj (মানিকগঞ্জ)</option>
                        <option value="37">Meherpur (মেহেরপুর)</option>
                        <option value="38">Moulvibazar (মৌলভীবাজার)</option>
                        <option value="39">Munshiganj (মুন্সিগঞ্জ)</option>
                        <option value="40">Mymensingh (ময়মনসিংহ)</option>
                        <option value="41">Naogaon (নওগাঁ)</option>
                        <option value="42">Narail (নড়াইল)</option>
                        <option value="43">Narayanganj (নারাযণগঞ্জ)</option>
                        <option value="44">Narsingdi (নরসিংদী)</option>
                        <option value="45">Natore (নাটোর)</option>
                        <option value="46">Netrokona (নেত্রকোণা)</option>
                        <option value="47">Nilphamari (নীলফামারী)</option>
                        <option value="48">Noakhali (নোয়াখালী)</option>
                        <option value="49">Pabna (পাবনা)</option>
                        <option value="50">Panchagarh (পঞ্চগড়)</option>
                        <option value="51">Patuakhali (পটুয়াখালী)</option>
                        <option value="52">Pirojpur (পিরোজপুর)</option>
                        <option value="53">Rajbari (রাজবাড়ী)</option>
                        <option value="54">Rajshahi (রাজশাহী)</option>
                        <option value="55">Rangamati (রাঙ্গামাটি)</option>
                        <option value="56">Rangpur (রংপুর)</option>
                        <option value="57">Satkhira (সাতক্ষীরা)</option>
                        <option value="58">Shariatpur (শরীয়তপুর )</option>
                        <option value="59">Sherpur (শেরপুর)</option>
                        <option value="60">Sirajganj (সিরাজগঞ্জ)</option>
                        <option value="61">Sunamganj (সুনামগঞ্জ)</option>
                        <option value="62">Sylhet (সিলেট)</option>
                        <option value="63">Tangail (টাঙ্গাইল)</option>
                        <option value="64">Thakurgaon (ঠাকুরগাঁও)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="permanent-address" class="col-sm-4 col-form-label text-right">Permanent Address (স্থায়ী ঠিকানা):</label>
                <div class="col-sm-7">
                    <textarea class="form-control" id="permanent-address" name="permanent_address" value="" placeholder="Permanent Address (স্থায়ী ঠিকানা)" rows="2"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="present-address" class="col-sm-4 col-form-label text-right">Present Address (বর্তমান ঠিকানা):</label>
                <div class="col-sm-7">
                    <textarea class="form-control" id="present-address" name="present_address" value="" placeholder="Present Address (বর্তমান ঠিকানা)" rows="2"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="trade" class="col-sm-4 col-form-label text-right">Trade Name (কোন ট্রেডে প্রশিক্ষণ নিতে আগ্রহী):</label>
                <div class="col-sm-3">
                    <select class="form-control input-bg" id="trade" name="trade_name">
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
                <div class="col-sm-4">
                    <select class="form-control input-bg" id="previoussession" name="has_previous_session">
                        <option value=""> পূর্বে আমাদের কোন সেশনে অংশগ্রহন করেছেন?</option>
                        <option value="Yes">Yes (হ্যাঁ)</option>
                        <option value="No">No (না)</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Yes" id="terms" required="required">
                        <label class="form-check-label" for="terms">
                            I have Read, Understood and Agree with the <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Terms & Conditions</a>.
                        </label>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">SET-2020 | Terms & Conditions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>These terms and conditions outline the rules and regulations for the use of Company Name's Website, located at Website.com.</p>

                            <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Website Name if you do not agree to take all of the terms and conditions stated on this page.</p>

                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: “Client”, “You” and “Your” refers to you, the person log on this website and compliant to the Company's terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                            <strong>License</strong>
                            <p>Unless otherwise stated, Company Name and/or its licensors own the intellectual property rights for all material on Website Name. All intellectual property rights are reserved. You may access this from Website Name for your own personal use subjected to restrictions set in these terms and conditions.</p>

                            <p>You must not:
                                <ul>
                                    <li>Republish material from Website Name</li>
                                    <li>Sell, rent or sub-license material from Website Name</li>
                                    <li>Reproduce, duplicate or copy material from Website Name</li>
                                    <li>Redistribute content from Website Name</li>
                                </ul>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="footer text-center">
                <a href="index.php" class="btn btn-danger">Cancel</a>
                <input type="reset" class="btn btn-primary">
                <input type="submit" class="btn btn-success" name="save" value="Submit">
            </div>

        </form>
        <br>
    </div>

    <br><br>
</body>
</html>
