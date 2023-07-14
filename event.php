<?php
require_once "./admin/database/config.php";
require_once "./auxilliaries.php";

$event = new Admin($pdo, 'tbl_events');
$eventResult = $event->readAll("event_id");

// $event = new Admin($pdo, 'tbl_events');
// $eventResult = $event->readWithLimit(3, "event_id");

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
    <link rel="stylesheet" href="./css/event.css">
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
                        <li><a href="blog.php">Blog</a></li>
                        <li><a class="active" href="event.php">Events</a></li>
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
            <h1 data-aos="flip-down">EVENTS</h1>
        </div>
        <div class="event-text" data-aos="zoom-out-up">
            <p>
                <span>W</span>elcome to our event page . We organize various events throughout
                the year to promote our mission of empowering women and girls. On this page, you'll
                find information about our upcoming events, including dates, times, and locations.
                We invite you to join us at these events and help us make a positive impact

            </p>
        </div>
        <div class="top-link">
            <a href="#navbar"><i class="fa fa-arrow-up"></i></a>
        </div>
        <div class="category">
            <h1>Events:</h1>
            <div class="category-details">
                <?php foreach ($eventResult as $event) { ?>
                    <div class="category-details-info" data-aos="flip-left">
                        <img src="./assets/uploads/<?php echo $event['photo'] ?>" alt="">
                        <h3><?php echo $event['event_title'] ?></h3>
                        <p><?php echo $event['event_content_short'] ?></p>
                        <a href="./eventpost.php?eventid=<?php echo $event['event_id'] ?>">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                <?php } ?>

                <!-- <div class="category-details-info" data-aos="slide-up">
                    <img src="images/spendy-1.jpeg" alt="">
                    <h3>Community Events</h3>
                    <p>Our community events promote awareness and engagement with our mission.</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="category-details-info" data-aos="zoom-in-down">
                    <img src="images/spendy-23.jpg" alt="">
                    <h3>Advocacy Events</h3>
                    <p>Our advocacy events aim to raise awareness and
                        advocate for policies and programs that support women's rights and gender equality</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="category-details-info" data-aos="flip-right">
                    <img src="images/event5.png" alt="">
                    <h3>Fundraising Events</h3>
                    <p>Our fundraising events help us raise funds to support our programs and services.</p>
                    <a href="#">Read more<i class="fa fa-arrow-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="women-empowerment-conference-container" data-aos="zoom-out-up">
            <h3>Women Empowerment Conference </h3>
            <p>Event Description: Join us for a dynamic Women Empowerment Conference aimed at inspiring and
                empowering women to reach their full potential. This conference will bring together influential
                speakers, thought leaders, and change-makers who will share their insights, experiences, and
                strategies for success. Through engaging workshops, panel discussions, and networking opportunities, we will explore various aspects of women's
                empowerment and work towards creating a more inclusive and equitable society.</p>
        </div>
        <div class="sexual-reproductive-health-container" data-aos="slide-up">
            <h3>Event Details: </h3>
            <ul>
                <li>Planned Parenthood: A trusted source of information on sexual and reproductive
                    health, with blog on birth control, STIs, and pregnancy.</li>
                <li>Bedsider: A free online birth control support network that offers information, tools,
                    and blog to help women find the right contraceptive method for them.</li>
                <li>Our Bodies, Ourselves: A nonprofit organization that provides evidence-based information
                    on women's health, including reproductive health, sexuality, and relationships.</li>
                <li>Our Bodies, Ourselves: A nonprofit organization that provides evidence-based information on women's health,
                    including reproductive health, sexuality, and relationships.</li>
                <li>Our Bodies, Ourselves: A nonprofit organization that provides evidence-based information on women's health,
                    including reproductive health, sexuality, and relationships.</li>
            </ul>

            <p style="font-weight: bold; font-size: .95rem;">Registration for the Women Empowerment Conference is now open.
                Limited seats are available, so secure your spot early.</p>
            <button class="btn"><a href="register.php">Register</a></button>
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
                            <li><a href="programmes.php">Programme</a></li>
                            <li><a href="blog.php">Resource</a></li>
                            <li><a class="active" href="event.php">Events</a></li>
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