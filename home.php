<?php
require_once "./admin/database/config.php";
require_once "./auxilliaries.php";

$blogs = new Admin($pdo, 'tbl_blogs');
$blogResult = $blogs->readWithLimit(3, "blog_id");

$programme = new Admin($pdo, 'tbl_programme');
$programmeResult = $programme->readWithLimit(3, "programme_id");

$event = new Admin($pdo, 'tbl_events');
$eventResult = $event->readWithLimit(3, "event_id");

$testimonials = new Admin($pdo, 'tbl_testimonials');
$testimonialResults = $testimonials->readWithLimit(3, "id");

$projects = new Admin($pdo, 'tbl_testimonials');
$testimonialResults = $testimonials->readWithLimit(3, "id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spendysbulwark</title>
    <!-- ============== SWIPER JS=========================== -->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <!--=============== GOOGLE FONTS======================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- ===============CSS STYLES ======================== -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ===============FONT AWESOME======================== -->
    <link rel="stylesheet" href="font-awesome-6/css/all.min.css">
    <!-- ===============ANIMATION ON SCROLL======================== -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- ======================PRELOADER===================== -->
    <div class="preloader">
        <img src="images/spinner.gif" alt="">
    </div>
    <!--======================= HOME SECTION =================-->
    <section class="home" id="home">
        <nav class="navbar">
            <div class="logo">
                <a href="home.php"><img src="images/spendy-logo.png" alt=""></a>
            </div>

            <div class="navbar-list-container">
                <div class="navbar-list">
                    <div class="navbar-list-li">
                        <ul>
                            <li><a class="active" href="home.php">Home</a></li>
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

        <div class="home-content-details">
            <h3 data-aos="fade-left">Take Control <span>of</span> Your <span>Reproductive</span> Health</h3>
            <p data-aos="flip-left">We provide <span>Education</span>, <span>Resources</span>, and <span>Support</span>
                to help women make informed decisions about their Reproductive Health</p>
            <button class="btn" data-aos="fade-right"><a href="getInvolve.php">Get Involve</a></button>
        </div>
        <div class="volunteer-wrapper">
            <div class="container">
                <span class="number" data-val="1500">000</span>
                <span class="text">Projects</span>
            </div>
            <div class="container">
                <span class="number" data-val="1200">000</span>
                <span class="text">Volunteers</span>
            </div>
            <div class="container">
                <span class="number" data-val="800+">000</span>
                <span class="text">Donations</span>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="title" data-aos="fade-up">
            <h1>Who We Are</h1>
            <img src="images/Vector.jpg" alt="">
        </div>
        <div class="about-details">
            <div class="about-details-img" data-aos="zoom-in-up">
                <img src="images/spendy-7.jpg" alt="">
            </div>
            <div class="about-details-content" data-aos="zoom-in-down">
                <h1>About Us</h1>
                <p>
                    Spendy’s Bulwark was formed on the 5th of January, 2022 by Miss Spendilove Konadu; a BSc. Biochemistry student of the University for Development Studies to educate the girl child on the awareness of Reproductive Health Issues both in the university and its surroundings through social media and in-kind face-to-face interactions.
                    Our name Spendy’s Bulwark stands for breaking of female boundaries by creating a wall of confidence of multi-specialty in Women Reproductive Health.
                    The first activity undertaken was on 10th May, 2022 at the Bible Church Academy in Navrongo, Upper East Region where the Junior High School girls were educated on Vaginal Yeast Infection, its effect and preventive measures to undertake with a team of three young undergraduate students of the University for Development Studies, Navrongo Campus.
                </p>
                <button class="btn"><a href="aboutUs.php">View More</a></button>
            </div>

        </div>
        <div class="top-link">
            <a href="#home"><i class="fa fa-arrow-up"></i></a>
        </div>
    </section>
    <section class="project">
        <div class="title" data-aos="flip-down">
            <h1>Our Recent Projects</h1>
            <img src="images/Vector.jpg" alt="">
        </div>
        <div class="project-details">
            <?php foreach ($programmeResult as $programme) { ?>
                <div class="project-details-info" data-aos="zoom-in-down">
                    <img src="./assets/uploads/<?php echo $programme['photo'] ?>" alt="">
                    <div class="project-details-info-text">
                        <h4><?php echo $programme['programme_date'] ?></h4>
                        <p><?php echo $programme['programme_title'] ?></p>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="project-details-info" data-aos="fade-up">
                <img src="images/spendy-6.jpg" alt="">
                <div class="project-details-info-text">
                    <h4>10th May, 2023</h4>
                    <p>Vaginal Yeast Awarenes at Bible Church Academy</p>
                </div>
            </div>
            <div class="project-details-info" data-aos="zoom-in-down">
                <img src="images/spendy-14.jpg" alt="">
                <div class="project-details-info-text">
                    <h4>10th May, 2023</h4>
                    <p>Vaginal Yeast Awarenes at Bible Church Academy</p>
                </div>
            </div> -->
        </div>
        <div class="view-more-arrow" data-aos="zoom-in-up">
            <p>View more</p>
            <div class="view-more-arrow-img">
                <img src="images/Arrow - Right.png" alt="">
            </div>
        </div>
    </section>

    <section class="events">
        <div class="title" data-aos="zoom-out-down">
            <h1>Next Events</h1>
            <img src="images/Vector.jpg" alt="">
        </div>
        <div class="event-details">
            <?php foreach ($eventResult as $event) { ?>

                <div class="event-details-info" data-aos="zoom-out-down">
                    <div>
                        <p><span><?php echo $event['event_date'] ?></span><br />10:00 am – 8:00 pm</p>
                    </div>
                    <div>
                        <p><?php echo $event['event_title'] ?> </p>
                    </div>
                    <div class="event-details-info-location">
                        <i class="fa fa-location-dot"></i>
                        <p><?php echo $event['event_venue'] ?></p>
                    </div>
                </div>
            <?php } ?>

            <!-- <div class="event-details-info" data-aos="zoom-out-up">
                <div>
                    <p><span>May 9 – 14, 2023</span> <br />10:00 am – 8:00 pm</p>
                </div>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
                <div class="event-details-info-location">
                    <i class="fa fa-location-dot"></i>
                    <p> No 7 James Oni Street,<br />Lagos ,Nigeria</p>
                </div>
            </div>
            <div class="event-details-info" data-aos="zoom-out-down">
                <div>
                    <p><span>May 9 – 14, 2023</span><br />10:00 am – 8:00 pm</p>
                </div>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
                <div class="event-details-info-location">
                    <i class="fa fa-location-dot"></i>
                    <p>No 7 James Oni Street,<br />Lagos ,Nigeria</p>
                </div>
            </div> -->
            <div class="event-btn" data-aos="zoom-out-up">
                <button class="btn"><a href="event.php">View More</a></button>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="title" data-aos="flip-down">
            <h1>Testimonials</h1>
            <img src="images/Vector.jpg" alt="">
        </div>

        <div class="testimonial-details swiper-wrapper">
            <?php foreach ($testimonialResults as $blog) { ?>
                <div class="testimonials-details-info swiper-slide">
                    <p><?php echo $blog['detail'] ?></p>
                    <div class="testimonials-img">
                        <img src=" <?php
                                    echo "./assets/uploads/" . $blog['photo']
                                    ?>" alt="">

                        <div>
                            <h6><?php echo $blog['name'] ?></h6>
                            <h6><?php echo $blog['position'] ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="testimonials-details-info swiper-slide">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugit id tempore!</p>
                <div class="testimonials-img">
                    <img src="images/testimonial-2.png" alt="">
                    <div>
                        <h6>Khadijah Abdulkabir</h6>
                        <h6>Volunteer</h6>
                    </div>
                </div>
            </div>
            <div class="testimonials-details-info swiper-slide">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugit id tempore!</p>
                <div class="testimonials-img">
                    <img src="images/testimonial-3.png" alt="">
                    <div>
                        <h5>Khadijah Abdulkabir</h5>
                        <h6>Volunteer</h6>
                    </div>
                </div>
            </div> -->
        </div>


    </section>
    <section class="blog">
        <div class="title" data-aos="zoom-out-down">
            <h1>Our Blog</h1>
            <p>Latest Article</p>
        </div>
        <div class="blog-content">
            <?php foreach ($blogResult as $blog) { ?>

                <div class="blog-content-details" data-aos="zoom-in-down">
                    <img src=<?php echo "../assets/uploads/" . $blog['photo'] ?> alt="">
                    <div class="blog-content-info">
                        <h4><?php echo $blog['blog_date'] ?> </h4>
                        <p class="heading-bold"><?php echo $blog['blog_title'] ?></p>
                        <div class="line"></div>
                        <p> <?php echo $blog['blog_content_short'] ?> </p>
                        <div class="readmore">
                            <a href="blog.php">Read more <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
            <!-- <div class="blog-content-details" data-aos="zoom-in-up">
            <img src="images/spendy.jpeg" alt="">
            <div class="blog-content-info">
                <h4>May 16, 2023</h4>
                <p class="heading-bold">We've reached 1 million in donation and counting</p>
                <div class="line"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                <div class="readmore">
                    <a href="blog.php">Read more <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="blog-content-details"  data-aos="zoom-in-down">
            <img src="images/spendy-17.jpg" alt="">
            <div class="blog-content-info">
                <h4>May 16, 2023</h4>
                <p class="heading-bold">We've reached 1 million in donation and counting</p>
                <div class="line"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                <div class="readmore">
                    <a href="blog.php">Read more <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div> -->
        </div>
        <div class="viewmore">
            <a href="blog.php">Read more <i class="fa fa-arrow-right"></i></a>
        </div>
    </section>
    <section class="contact" data-aos="zoom-in-down">
        <img src="images/contact-frame.jpg" alt="">
        <div class="contact-info">
            <h1>Get in Touch</h1>
            <p>We'd love to hear from you</p>
            <button class="btn"><a href="contact.php">Contact Us</a></button>
        </div>
    </section>
    <!--=======================END OF HOME SECTION =================-->

    <!-- ================ANIMATION ON SCROLL========================= -->
    <script src="./js/swiper-bundle.min.js"></script>
    <!-- ================ANIMATION ON SCROLL========================= -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- ================JAVASCRIPT JS========================= -->
    <script src="./js/style.js"></script>
</body>

</html>