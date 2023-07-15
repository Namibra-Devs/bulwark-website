<?php
require_once "./admin/database/config.php";
require_once "./auxilliaries.php";

$team = new Admin($pdo, 'tbl_team_member');
$teamResult = $team->readAll("id");

$query = "SELECT tbl_team_member.name, tbl_team_member.photo, tbl_team_member.linkedin, tbl_team_member.twitter, tbl_team_member.instagram, tbl_designation.designation_name 
FROM tbl_team_member JOIN tbl_designation ON tbl_team_member.designation_id = tbl_designation.designation_id";
$query = $pdo->prepare($query);
$query->execute();
$teamResult = $query->fetchAll(PDO::FETCH_ASSOC);

$socialMedia = new Admin($pdo, 'tbl_social');

$socialTwitter = $socialMedia->read("social_name", "Twitter");
$socialYoutube = $socialMedia->read("social_name", "YouTube");
$socialWhatsapp = $socialMedia->read("social_name", "WhatsApp");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spendy Bulwark</title>
    <!--=============== GOOGLE FONTS======================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- ===============OWL CAROUSEL ======================== -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- ===============CSS STYLES ======================== -->
    <link rel="stylesheet" href="./css/aboutUs.css">
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
                        <li><a class="active" href="aboutUs.php">About Us</a></li>
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
    <section class="about">
        <div class="about-img">
            <h1 data-aos="zoom-out-up">ABOUT US</h1>
        </div>
        <div class="about-details" data-aos="zoom-in">
            <p>Spendy’s Bulwark was formed on the 5th of January, 2022 by Miss Spendilove Konadu; a BSc. Biochemistry student of the University for Development Studies to educate the girl child on the awareness of Reproductive Health Issues both in the university and its surroundings through social media and in-kind face-to-face interactions.
                <br><br> Our name Spendy’s Bulwark stands for breaking of female boundaries by creating a wall of confidence of multi-specialty in Women Reproductive Health.
                <br><br> The first activity undertaken was on 10th May, 2022 at the Bible Church Academy in Navrongo,
                Upper East Region where the Junior High School girls were educated on Vaginal Yeast Infection,
                its effect and preventive measures to undertake with a team of three young undergraduate students
                of the University for Development Studies, Navrongo Campus.
            </p>
        </div>
        <div class="top-link" title="Back to top">
            <a href="#navbar"><i class="fa fa-arrow-up"></i></a>
        </div>
        <div class="mission-vision-container">
            <div class="mission-vision-img" data-aos="fade-up">
                <div class="mission-vision-img-1">
                    <div class="img-1">
                        <img src="images/spendy-19.jpg" alt="">
                    </div>
                    <div class="img-2">
                        <img src="images/spendy-20.jpg" alt="">
                    </div>
                </div>
                <div class="mission-vision-img-2">
                    <img src="images/spendy-9.jpg" alt="">
                </div>
            </div>
            <div class="mission-vision" data-aos="fade-down">
                <div class="mission">
                    <div class="title">
                        <h3>Our Mission</h3>
                        <img src="images/Element-19.png" alt="">
                    </div>
                    <p>To provide multi-specialty education and Healthcare on Female Reproductive Health.</p>
                </div>
                <div class="vision">
                    <div class="title">
                        <h3>Our Vision</h3>
                        <img src="images/Element-19.png" alt="">
                    </div>
                    <p> To become the leading Female Healthcare Firm in Ghana and West African Sub-Region.</p>
                </div>
            </div>
        </div>
        <div class="what-we-do">
            <div class="title" data-aos="fade-down">
                <h1>What We Do</h1>
                <img src="images/Element-17.png" alt="">
            </div>
            <div class="reproduction-education">
                <div class="reproduction-education-details" data-aos="fade-down">
                    <div class="reproduction-education-details-title">
                        <img src="images/std.png" alt="">
                        <h4>Reproductive Health Education</h4>
                    </div>
                    <div class="reproduction-education-details-text">
                        <p>We provide education and resources to women and girls of all ages,
                            so they can make informed decisions about their reproductive health.</p>
                    </div>
                </div>
                <div class="reproduction-education-details" data-aos="fade-up">
                    <div class="reproduction-education-details-title">
                        <img src="images/uterus.png" alt="">
                        <h4>Sexual and Reproductive Health Services</h4>
                    </div>
                    <div class="reproduction-education-details-text">
                        <p>We provide education and resources to women and girls of all ages,
                            so they can make informed decisions about their reproductive health.</p>
                    </div>
                </div>
                <div class="reproduction-education-details" data-aos="fade-down">
                    <div class="reproduction-education-details-title">
                        <img src="images/contraceptive.png" alt="">
                        <h4>Access to Contraceptives</h4>
                    </div>
                    <div class="reproduction-education-details-text">
                        <p>We provide education and resources to women and girls of all ages,
                            so they can make informed decisions about their reproductive health.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="title" data-aos="fade-up">
                <h1>Meet Our Amazing Team</h1>
                <img src="images/Element-17.png" alt="">
            </div>
            <div class="team-description">
                <p>It was a turning point for our company with the meeting that made everything possible via dedication. The right people with a similar goal were
                    brought together, and their dedication and perseverance were highly appreciated.
                </p>
            </div>
            <div class="team-members">

                <?php foreach ($teamResult as $teamMember) { ?>
                    <div class="team-member" data-aos="fade-down">
                        <div class="team-member-img">
                            <img src="./assets/uploads/<?php echo $teamMember['photo'] ?>" alt="">
                        </div>
                        <div class="team-member-info">
                            <h5><?php echo $teamMember['name'] ?></h5>
                            <p><?php echo $teamMember['designation_name'] ?></p>
                        </div>
                        <div class="social-handles">
                            <a title="twitter" href="<?php echo $teamMember['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                            <a title="Linkedin" href="<?php echo $teamMember['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                            <a title="Instagram" href="<?php echo $teamMember['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                <?php } ?>

                <!-- <div class="team-member" data-aos="fade-down">
                    <div class="team-member-img">
                        <img src="images/obed.jpg" alt="">
                    </div>
                    <div class="team-member-info">
                        <h5>OBED TWUMASI</h5>
                        <p> Projects and Programs Manager</p>
                    </div>
                    <div class="social-handles">
                        <a title="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                        <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="team-member" data-aos="fade-down">
                    <div class="team-member-img">
                        <img src="images/akosua.jpg" alt="">
                    </div>
                    <div class="team-member-info">
                        <h5>AKOSUA AGYAPOMAA</h5>
                        <p>Secretary</p>
                    </div>
                    <div class="social-handles">
                        <a title="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                        <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="team-member" data-aos="fade-down">
                    <div class="team-member-img">
                        <img src="images/frank.jpg" alt="">
                    </div>
                    <div class="team-member-info">
                        <h5>FRANK KYERE</h5>
                        <p>Head of Finance and Sponsorship Team</p>
                    </div>
                    <div class="social-handles">
                        <a title="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                        <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="team-member" data-aos="fade-up">
                    <div class="team-member-img">
                        <img src="images/richmond.jpg" alt="">
                    </div>
                    <div class="team-member-info">
                        <h5>RICHMOND MENSAH</h5>
                        <p>Head of Media and Publicity</p>
                    </div>
                    <div class="social-handles">
                        <a title="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                        <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
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
                    <button class="btn"><a href="./register.php">VOLUNTEER</a></button>
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
                <a href="<?php echo $socialTwitter[0]['social_url'] ?>"><img src="images/twitter.png" alt="" /></a>
                <a href="<?php echo $socialYoutube[0]['social_url'] ?>"><img src="images/youtube.png" alt="" /></a>
                <a href="<?php echo $socialWhatsapp[0]['social_url'] ?>"><img src="images/whatsapp.png" alt="" /></a>
                <a href="#"><img src="images/video.png" alt="" /></a>
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
                            <li><a class="active" href="aboutUs.php">About Us</a></li>
                            <li><a href="programmes.php">Programme</a></li>
                            <li><a href="./blog.php">Blog</a></li>
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
            <p data-aos="fade-up"> &#169; <span id="date"></span> SPENDY'S BULWARK NGO. All Right Reserved</p>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/style.js"></script>
</body>

</html>