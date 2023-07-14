<?php
require_once "./admin/database/config.php";
require_once "./auxilliaries.php";

$blogs = new Admin($pdo, 'tbl_blogs');
$blogResult = $blogs->readAll("blog_id");

// $event = new Admin($pdo, 'tbl_events');
// $eventResult = $event->readWithLimit(3, "event_id");

// $testimonials = new Admin($pdo, 'tbl_testimonials');
// $testimonialResults = $testimonials->readWithLimit(3, "id");

// $projects = new Admin($pdo, 'tbl_testimonials');
// $testimonialResults = $testimonials->readWithLimit(3, "id");

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
    <link rel="stylesheet" href="./css/resources.css">
    <!-- ===============FONT AWESOME======================== -->
    <link rel="stylesheet" href="font-awesome-6/css/all.min.css">
    <!-- ===============ANIMATION ON SCROLL======================== -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="preloader">
        <img src="images/spinner.gif" alt="">
    </div>
    <nav class="navbar" id="navbar">
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
                        <li><a class="active" href="blog.php">Blog</a></li>
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
    <section class="event-container">
        <div class="about-img">
            <h1 data-aos="flip-down">Blogs</h1>
        </div>
        <div class="event-text" data-aos="zoom-out">
            <p>
                <span>W</span>elcome to our blog page. We believe that access to reliable information and resources is
                essential for achieving our mission of improving the health and well-being of women and girls
                around the West African Sub-Region.On this page, you'll find a curated list of resources related
                to women's health, including information on sexual and reproductive health. We hope that these
                resources will be helpful to you and that you'll share them with others who may benefit from this
                information.

            </p>
        </div>
        <div class="top-link">
            <a href="#navbar"><i class="fa fa-arrow-up"></i></a>
        </div>
        <div class="category">
            <h1 data-aos="flip-down">Blogs:</h1>
            <div class="category-details">
                <?php
                foreach ($blogResult as $blog) {
                ?>

                    <div class="category-details-info" data-aos="zoom-out">
                        <img src="./assets//uploads/<?php echo $blog['photo'] ?>" alt="">
                        <h3><?php echo $blog['blog_title'] ?></h3>
                        <p><?php echo $blog['blog_content_short'] ?></p>
                        <a href="./blogpost.php?blogid=<?php echo $blog['blog_id'] ?>">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="category-details-info" data-aos="zoom-in-right">
                    <img src="images/category-2.png" alt="">
                    <h3>Mental Health</h3>
                    <p>This category includes resources on mental health issues
                        that affect women, such as postpartum depression, anxiety, and trauma.</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="category-details-info" data-aos="zoom-in-right">
                    <img src="images/category-1.png" alt="">
                    <h3>Mental Health</h3>
                    <p>This category includes resources on mental health issues
                        that affect women, such as postpartum depression, anxiety, and trauma.</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="category-details-info" data-aos="flip-left">
                    <img src="images/category-2.png" alt="">
                    <h3>Mental Health</h3>
                    <p>This category includes resources on mental health issues
                        that affect women, such as postpartum depression, anxiety, and trauma.</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div> -->
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
                            <li><a href="./programmes.php">Programme</a></li>
                            <li><a class="active" href="./blog.php">Blog</a></li>
                            <li><a href="./event.php">Events</a></li>
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
            <p data-aos="fade-up"> &#169; <span id="date"></span> SPENDY'S BULWARK NGO. All Right Reserved</p>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/style.js"></script>
</body>

</html>