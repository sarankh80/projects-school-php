<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_school_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql = "SELECT * FROM user";
// $result = $conn->query($sql);
// // print_r($result->num_rows);exit;
// echo "<h1> Table User </h1>";
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// echo "<h1> Table Category </h1>";
// $sql_cat = "SELECT * FROM category";
// $result_cat = $conn->query($sql_cat);
// if ($result_cat->num_rows > 0) {
//     while($row = $result_cat->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"];
//     }
// } else {
//     echo "0 results";
// }
?>
<!doctype html>
<html lang="en">
    
<!-- Mirrored from protechtheme.com/edumart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 09:35:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <title>Edumart - Educational Template</title>
        <!-- Reset CSS -->
        <link href="css/reset.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="css/fonts.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="assets/select2/css/select2.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Magnific Popup -->
        <link href="assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
        <!-- Iconmoon -->
        <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
        <!-- Animate -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom Style -->
        <link href="css/custom.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Start Preloader -->
        <!-- <div id="loading">
            <div class="element">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div> -->
        <!-- End Preloader -->
        <!-- Start Header -->

      	<?php require_once('header.php'); ?>
        <!-- End Header --> 
        <!-- Start Banner Carousel -->
        <?php require_once('slide.php'); ?>
        <!-- End Banner Carousel --> 

        <!-- Start About Section -->
        <section class="about">
            <div class="container">
                <ul class="row our-links">
                    <li class="col-sm-4 apply-online clearfix equal-hight">
                        <div class="icon"><img src="images/apply-online-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>Apply Online</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="apply-online.html" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                    <li class="col-sm-4 prospects clearfix equal-hight">
                        <div class="icon"><img src="images/prospects-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3><span>Download</span>Prospects</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                    <li class="col-sm-4 certification clearfix equal-hight">
                        <div class="icon"><img src="images/certification-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>Certification</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-push-5 left-block"> <span class="sm-head">the Online Education portal</span>
                        <h2>Edumart Online</h2>
                        <p>Building on Edumart Group’s rich experience with online MBA at Edumart University Online! Designing and delivering both graduate and post-graduate programs across a variety of disciplines, Edumart University Online, offering online MBA has worked upon the knowledge-base created by our highly qualified faculties, our research, publishing and training experience, to create online MBA programs that offer a rich learning experience.</p>
                        <div class="know-more-wrapper"> <a href="about.html" class="know-more">Know More <span class="icon-more-icon"></span></a> </div>
                    </div>
                    <div class="col-sm-5 col-sm-pull-7">
                        <div class="video-block">
                            <div id="thumbnail_container"> <img src="images/about-video.jpg" id="thumbnail" class="img-responsive" alt=""> </div>
                            <a href="https://www.youtube.com/watch?v=i11RXCJVEnw" class="start-video video"><img src="images/play-btn.png" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section --> 

        <!-- Start Cources Section -->
        <section class="our-cources padding-lg">
            <div class="container">
                <h2> <span>Unique Features of our programs</span> What do you want to study?</h2>
                <ul class="course-list owl-carousel">
                    <li>
                        <div class="inner">
                            <figure><img src="images/course-img1.jpg" alt=""></figure>
                            <h3>Online <span>MBA General</span></h3>
                            <p>A comprehensive study of modern business...</p>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>2 Year</h4>
                                    <span> Courses</span> </div>
                                <a href="#"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="images/course-img2.jpg" alt=""></figure>
                            <h3>Online MBA <span>Operations</span></h3>
                            <p>A comprehensive study of modern business...</p>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>1 Year</h4>
                                    <span> Courses</span> </div>
                                <a href="#"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="images/course-img3.jpg" alt=""></figure>
                            <h3>Online MBA <span>Marketing</span></h3>
                            <p>A comprehensive study of modern business...</p>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>3 Year</h4>
                                    <span> Courses</span> </div>
                                <a href="#"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <figure><img src="images/course-img4.jpg" alt=""></figure>
                            <h3>Online MBA <span>Human</span><span>Resource</span></h3>
                            <p>A comprehensive study of modern business...</p>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>2 Year</h4>
                                    <span> Courses</span> </div>
                                <a href="#"><span class="icon-more-icon"></span></a> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Cources Section --> 

        <!-- Start Our Importance Section -->
        <section class="our-impotance padding-lg">
            <div class="container">
                <ul class="row">
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/study-time-ico.jpg" alt="Malleable Study Time">
                            <h3>Malleable Study Time</h3>
                            <p>Study material available online 24/7. Study in your free time, no time management issues, perfect balance between work and study time.</p>
                        </div>
                    </li>
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/placement-ico.jpg" alt="Placement Assistance">
                            <h3>Placement Assistance</h3>
                            <p>Edumart University Online has access to all of Edumart Group’s placement resources and alumni network, through which thousands of job opportunities are generated.</p>
                        </div>
                    </li>
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/easy-access-ico.jpg" alt="Easy To Access">
                            <h3>Easy To Access</h3>
                            <p>There is easy accessibility to online help in terms of online teachers and online forums. Teachers can be contacted with the help of video chats and e-mails.</p>
                        </div>
                    </li>
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/study-go-ico.jpg" alt="Study on the Go">
                            <h3>Study on the Go</h3>
                            <p>LMS that is easily accessible on a number of devices such as mobile phones, I-pads, computers and other such devices. Availability of ready reckoners such that students can remember the key points of the session learnt.</p>
                        </div>
                    </li>
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/get-innovative-ico.jpg" alt="Get an Innovative, In-depth Transition">
                            <h3>Get an Innovative, <span>In-depth Transition</span></h3>
                            <p>The transition to an environment of learning becomes easy with the availability of multiple sources of learning such as text books, power-point presentations, and story boards on various subjects.</p>
                        </div>
                    </li>
                    <li class="col-sm-4 equal-hight">
                        <div class="inner"> <img src="images/practical-ico.jpg" alt="Practical & Interactive Participation">
                            <h3>Practical & Interactive <span>Participation</span></h3>
                            <p>Assessments and interactivities are given at the end of every session such that the practical application of theory learnt can be gauged.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Our Importance Section --> 

        <!-- Start How Study Section -->
        <section class="how-study padding-lg">
            <div class="container">
                <h2> <span>There are many ways to learn</span> How do you want to study?</h2>
                <ul class="row">
                    <li class="col-sm-4">
                        <div class="overly">
                            <div class="cnt-block">
                                <h3>Self-paced distance 
                                    learning</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            </div>
                            <a href="#" class="more"><i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                        <figure><img src="images/how-study-img1.jpg" class="img-responsive" alt=""></figure>
                    </li>
                    <li class="col-sm-4">
                        <div class="overly">
                            <div class="cnt-block">
                                <h3>Study on 
                                    campus</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            </div>
                            <a href="#" class="more"><i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                        <figure><img src="images/how-study-img2.jpg" class="img-responsive" alt=""></figure>
                    </li>
                    <li class="col-sm-4">
                        <div class="overly">
                            <div class="cnt-block">
                                <h3> Our Learning
                                    Partners </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            </div>
                            <a href="#" class="more"><i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                        <figure><img src="images/how-study-img3.jpg" class="img-responsive" alt=""></figure>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End How Study Section --> 

        <!-- Start Why Choose Section -->
        <section class="why-choose padding-lg">
            <div class="container">
                <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
                <ul class="our-strength">
                    <li>
                        <div class="icon"><span class="icon-certification-icon"> </span></div>
                        <span class="counter">36</span>
                        <div class="title">Certified Courses</div>
                    </li>
                    <li>
                        <div class="icon"><span class="icon-student-icon"></span></div>
                        <span class="counter">258,658</span>
                        <div class="title">Students Enrolled </div>
                    </li>
                    <li>
                        <div class="icon"><span class="icon-book-icon"></span></div>
                        <div class="couter-outer"><span class="counter">95</span><span>%</span></div>
                        <div class="title">Passing to Universities</div>
                    </li>
                    <li>
                        <div class="icon"><span class="icon-parents-icon"></span></div>
                        <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                        <div class="title">Satisfied Parents</div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Why Choose Section --> 

        <!-- Start New & Events Section -->
        <section class="news-events padding-lg">
            <div class="container">
                <h2><span>There are many ways to learn</span>News and events</h2>
                <ul class="row cs-style-3">
                    <li class="col-sm-4">
                        <div class="inner">
                            <figure> <img src="images/new-event-img1.jpg" class="img-responsive">
                                <figcaption>
                                    <div class="cnt-block"> <a href="news.html" class="plus-icon">+</a>
                                        <h3>We have added new features to Dream Palace</h3>
                                        <div class="bottom-block clearfix">
                                            <div class="date">
                                                <div class="icon"><span class="icon-calander-icon"></span></div>
                                                <span>14 Feb</span> 2017</div>
                                            <div class="comment">
                                                <div class="icon"><span class="icon-chat-icon"></span></div>
                                                <span>24</span> comments</div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="col-sm-4">
                        <div class="inner">
                            <figure> <img src="images/new-event-img2.jpg" class="img-responsive">
                                <figcaption>
                                    <div class="cnt-block"> <a href="news.html" class="plus-icon">+</a>
                                        <h3>We have added new features to Dream Palace</h3>
                                        <div class="bottom-block clearfix">
                                            <div class="date">
                                                <div class="icon"><span class="icon-calander-icon"></span></div>
                                                <span>14 Feb</span> 2017</div>
                                            <div class="comment">
                                                <div class="icon"><span class="icon-chat-icon"></span></div>
                                                <span>24</span> comments</div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="col-sm-4">
                        <div class="inner">
                            <figure> <img src="images/new-event-img3.jpg" class="img-responsive">
                                <figcaption>
                                    <div class="cnt-block"> <a href="news.html" class="plus-icon">+</a>
                                        <h3>We have added new features to Dream Palace</h3>
                                        <div class="bottom-block clearfix">
                                            <div class="date">
                                                <div class="icon"><span class="icon-calander-icon"></span></div>
                                                <span>14 Feb</span> 2017</div>
                                            <div class="comment">
                                                <div class="icon"><span class="icon-chat-icon"></span></div>
                                                <span>24</span> comments</div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                <div class="know-more-wrapper"> <a href="news.html" class="know-more">More Post <span class="icon-more-icon"></span></a> </div>
            </div>
        </section>
        <!-- End New & Events Section --> 

        <!-- Start Campus Tour Section -->
        <section class="campus-tour padding-lg">
            <div class="container">
                <h2><span>Our campus have a lot to offer for our students</span>TAKE A CAMPUS TOUR</h2>
            </div>
            <ul class="gallery clearfix">
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg1.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour1.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg2.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour2.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg3.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour3.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg4.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour4.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg5.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour5.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg6.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour6.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg7.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour7.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg8.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour8.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg9.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour9.jpg" class="img-responsive" alt=""></figure>
                </li>
                <li>
                    <div class="overlay">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="images/tour-lg10.jpg"><span class="icon-enlarge-icon"></span></a> <a href="gallery.html" class="more"><span class="icon-gallery-more-arrow"></span></a> </div>
                    <figure><img src="images/tour10.jpg" class="img-responsive" alt=""></figure>
                </li>
            </ul>
        </section>
        <!-- End Campus Tour Section --> 

        <!-- Start logos Section -->
        <section class="logos">
            <div class="container">
                <ul class="owl-carousel clearfix">
                    <li><a href="#"><img src="images/logo1.jpg" class="img-responsive" alt=""></a></li>
                    <li><a href="#"><img src="images/logo2.jpg" class="img-responsive" alt=""></a></li>
                    <li><a href="#"><img src="images/logo3.jpg" class="img-responsive" alt=""></a></li>
                    <li><a href="#"><img src="images/logo4.jpg" class="img-responsive" alt=""></a></li>
                    <li><a href="#"><img src="images/logo5.jpg" class="img-responsive" alt=""></a></li>
                    <li><a href="#"><img src="images/logo6.jpg" class="img-responsive" alt=""></a></li>
                </ul>
            </div>
        </section>
        <!-- End logos Section --> 

        <!-- Start Testimonial -->
        <section class="testimonial padding-lg">
            <div class="container">
                <div class="wrapper">
                    <h2>Alumini Testimonials</h2>
                    <ul class="testimonial-slide">
                        <li>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                            <span>Thomas, <span>London</span></span> </li>
                        <li>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                            <span>Thomas, <span>London</span></span> </li>
                        <li>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                            <span>Thomas, <span>London</span></span> </li>
                    </ul>
                    <div id="bx-pager"> <a data-slide-index="0" href="#"><img src="images/testimonial-thumb1.jpg" class="img-circle" alt=""/></a> <a data-slide-index="1" href="#"><img src="images/testimonial-thumb2.jpg" class="img-circle" alt="" /></a> <a data-slide-index="2" href="#"><img src="images/testimonial-thumb3.jpg" class="img-circle" alt="" /></a> </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial --> 

        <!-- Start Footer -->
        <footer class="footer"> 
            <!-- Start Footer Top -->
            <div class="container">
                <div class="row row1">
                    <div class="col-sm-9 clearfix">
                        <div class="foot-nav">
                            <h3>About US</h3>
                            <ul>
                                <li><a href="#">Edumart Group of Institutions</a></li>
                                <li><a href="#">Our Institutes and Universities</a></li>
                                <li><a href="#">Management Team</a></li>
                                <li><a href="#">Approval and Recognition</a></li>
                                <li><a href="#">Evaluation & Assessments</a></li>
                            </ul>
                        </div>
                        <div class="foot-nav">
                            <h3>Courses</h3>
                            <ul>
                                <li><a href="#">2 Year Online MBA General</a></li>
                                <li><a href="#">Certificate in HRM</a></li>
                                <li><a href="#">Certificate in Marketing</a></li>
                                <li><a href="#">Certificate in Finance</a></li>
                                <li><a href="#">Corporate Programs</a></li>
                            </ul>
                        </div>
                        <div class="foot-nav">
                            <h3>Why Edumart</h3>
                            <ul>
                                <li><a href="#">Introduction</a></li>
                                <li><a href="#">Learn Everywhere</a></li>
                                <li><a href="#">Modern Curriculum</a></li>
                                <li><a href="#">Placement Assistance</a></li>
                                <li><a href="#">Eligibility</a></li>
                            </ul>
                        </div>
                        <div class="foot-nav">
                            <h3>Learning Experience</h3>
                            <ul>
                                <li><a href="#">Course Preparations</a></li>
                                <li><a href="#">Guided lessons</a></li>
                                <li><a href="#">Interactive Practice</a></li>
                                <li><a href="#">Virtual Classroom</a></li>
                                <li><a href="#">Peer Learning</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-logo hidden-xs"><a href="index.html"><img src="images/footer-logo.png" class="img-responsive" alt=""></a></div>
                        <p>© 2018 <span>Edumart</span>. All rights reserved</p>
                        <ul class="terms clearfix">
                            <li><a href="terms.html">TERMS OF USE</a></li>
                            <li><a href="privacy.html">PRIVACY POLICY</a></li>
                            <li><a href="#">SITEMAP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Top --> 
            <!-- Start Footer Bottom -->
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="connect-us">
                                <h3>Connect with Us</h3>
                                <ul class="follow-us clearfix">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="subscribe">
                                <h3>Subscribe  with Us</h3>
                                <!-- Begin MailChimp Signup Form -->
                                <div id="mc_embed_signup">
                                    <form action="http://protechtheme.us16.list-manage.com/subscribe/post?u=cd5f66d2922f9e808f57e7d42&amp;id=ec6767feee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="enter your email address" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_cd5f66d2922f9e808f57e7d42_ec6767feee" tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End mc_embed_signup--> 
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="instagram">
                                <h3>@INSTAGRAM</h3>
                                <ul class="clearfix">
                                    <li><a href="#"><figure><img src="images/insta-img1.jpg" class="img-responsive" alt=""></figure></a></li>
                                    <li><a href="#"><figure><img src="images/insta-img2.jpg" class="img-responsive" alt=""></figure></a></li>
                                    <li><a href="#"><figure><img src="images/insta-img3.jpg" class="img-responsive" alt=""></figure></a></li>
                                    <li><a href="#"><figure><img src="images/insta-img4.jpg" class="img-responsive" alt=""></figure></a></li>
                                    <li><a href="#"><figure><img src="images/insta-img5.jpg" class="img-responsive" alt=""></figure></a></li>
                                    <li><a href="#"><figure><img src="images/insta-img6.jpg" class="img-responsive" alt=""></figure></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom --> 
        </footer>
        <!-- End Footer --> 

        <!-- Scroll to top --> 
        <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
        <script src="js/jquery.min.js"></script> 
        <!-- Bootsrap JS --> 
        <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
        <!-- Select2 JS --> 
        <script src="assets/select2/js/select2.min.js"></script> 
        <!-- Match Height JS --> 
        <script src="assets/matchHeight/js/matchHeight-min.js"></script> 
        <!-- Bxslider JS --> 
        <script src="assets/bxslider/js/bxslider.min.js"></script> 
        <!-- Waypoints JS --> 
        <script src="assets/waypoints/js/waypoints.min.js"></script> 
        <!-- Counter Up JS --> 
        <script src="assets/counterup/js/counterup.min.js"></script> 
        <!-- Magnific Popup JS --> 
        <script src="assets/magnific-popup/js/magnific-popup.min.js"></script> 
        <!-- Owl Carousal JS --> 
        <script src="assets/owl-carousel/js/owl.carousel.min.js"></script> 
        <!-- Modernizr JS --> 
        <script src="js/modernizr.custom.js"></script> 
        <!-- Custom JS --> 
        <script src="js/custom.js"></script>
    </body>

<!-- Mirrored from protechtheme.com/edumart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 09:37:43 GMT -->
</html>
<?php $conn->close(); ?>