<?php
require_once "./admin/database/config.php";
require_once "./auxilliaries.php";

if (isset($_GET['blogid'])) {
    $id = $_GET['blogid'];

    $blogpost = new Admin($pdo, 'tbl_blogs');
    $blogpostFullResult = $blogpost->read("blog_id", $id);
    $blogpostResult = $blogpostFullResult[0];
    // print_r($blogpostResult);
} else {
    //post doesnt exist
    // header("location: home.php");
    header("location: home.php");
}

// $blogResult = $blogs->readAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spendysbulwark</title>
    <!--=============== GOOGLE FONTS======================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- ===============OWL CAROUSEL ======================== -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- ===============CSS STYLES ======================== -->
    <link rel="stylesheet" href="./css/blog.css">
    <!-- ===============FONT AWESOME======================== -->
    <link rel="stylesheet" href="font-awesome-6/css/all.min.css">
    <!-- ===============ANIMATION ON SCROLL======================== -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="preloader">
        <img src="images/spinner.gif" alt="">
    </div>
    <nav class="navbar">
        <div class="logo">
            <a href="home.php"><img src="images/spendy-logo.png" alt=""></a>
        </div>

        <div class="navbar-list-container">
            <div class="navbar-list">
                <div class="navbar-list-li">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutUs.php">About Us</a></li>
                        <li><a href="programmes.php">Programme</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="event.php">Events</a></li>
                    </ul>
                </div>
                <form action="">
                    <input type="text" placeholder="Search... ">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="nav-btns">
                <button class="donate-btn"><a href="donate.php">Donate</a></button>
                <button class="contact-btn"><a href="contact.php">Contact</a></button>
            </div>
        </div>

        <div class="toggle">
            <i class="fa fa-bars"></i>
        </div>
    </nav>

    <section class="programmes-container">


        <div class="girls-education-programmes" data-aos="flip-down">

            <div class="girls-education-programmes-details">
                <div class="about-img">

                    <img src="./assets/uploads/<?php echo $blogpostResult['photo'] ?>" width="100%">
                </div>
                <h1><?php echo $blogpostResult['blog_title'] ?></h1>
                <div>
                    <?php echo $blogpostResult['blog_content'] ?>
                    <!-- The Girls' Education Program aims to provide access to education for girls in underprivileged communities,
                    with a particular focus on ensuring that girls have access to quality education, remain in school, and complete their education.
                    <li>Program Description: The Girls' Education Program works to address the barriers that prevent girls from accessing education, such as poverty, cultural norms, and gender discrimination. The program provides a range of services to support girls'
                        education, including scholarships, school supplies, mentoring, and life skills training.</li>
                    <li>Program Objectives: The program aims to improve girls' access to education,
                        reduce dropout rates, and increase the number of girls who complete their education.</li>
                    <li>Program Outcomes: Since its inception, the Girls' Education Program has provided scholarships to over 10,000 girls and supported over 50 schools in underprivileged communities. The program has helped
                        increase girls' enrollment in school and reduce dropout rates.</li>
                    <li>Program Objectives: The program aims to improve girls' access to education, reduce dropout rates, and
                        increase the number of girls who complete their education.</li>
                    <li>Program Outcomes: Since its inception, the Girls' Education Program has provided scholarships to over 10,000 girls and supported over 50 schools in underprivileged communities. -->
                    <!-- The program has helped increase girls' enrollment in school and reduce dropout rates.</li> -->
                </div>
                <div class="girls-education-img">
                    <div class="italic-publisher">
                        <h5><?php echo $blogpostResult['publisher'] ?></h5>
                    </div>
                </div>
            </div>
            <div class="girls-education-img-2">
                <img src="images/blog2.png" alt="">
            </div>

        </div>

        <div class="contact-container">
            <div class="contact-img" data-aos="zoom-in">
                <div class="contact-img-text">
                    <h1>Get in Touch</h1>
                    <p>We'd love to hear from you</p>
                </div>
                <div class="contact-img-btn">
                    <button class="btn"><a href="#">VOLUNTEER</a></button>
                </div>
            </div>
        </div>
        <div class="contact-numbers-container">
            <div class="contact-numbers" data-aos="fade-down">
                <p>CONTACT OF TWO EXECUTIVE OFFICERS</p>
                <h3>+233 55 857 9327  +233 24 844 1894</h3>
            </div>
            <div class="contact-email" data-aos="fade-up">
                <p style="font-weight: bold;">spendysbulwark@gmal.com</p>
            </div>
            <div class="social-icons" data-aos="fade-down">
                <a href="#"><img src="images/twitter.png" alt=""></a>
                <a href="#"><img src="images/youtube.png" alt=""></a>
                <a href="#"><img src="images/whatsapp.png" alt=""></a>
                <a href="#"><img src="images/video.png" alt=""></a>
            </div>
        </div>
        <div class="footer-1">
            <div class="logo" style="display: flex; gap: .6rem; align-items: center;" data-aos="fade-up">
                <img src="images/spendy-logo.png" alt="">
                <p style="font-weight: bold; text-transform: uppercase;">spendys bulwark</p>
            </div>

            <div class="navbar-list-container">
                <div class="navbar-list">
                    <div class="navbar-list-li">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="aboutUs.php">About Us</a></li>
                            <li><a href="programmes.php">Programme</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="event.php">Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-btns" data-aos="fade-down">
                    <button class="donate-btn"><a href="donate.php">Donate</a></button>
                </div>
            </div>
        </div>
        <div class="footer-2">
            <p data-aos="fade-down">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
            <p data-aos="fade-up"> &#169; SPENDY'S BULWARK NGO. All Right Reserved</p>
        </div>
    </section>




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/style.js"></script>
</body>

</html>