<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>spendysbulwark</title>
  <!--=============== GOOGLE FONTS======================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet" />
  <!-- ===============OWL CAROUSEL ======================== -->
  <link rel="stylesheet" href="./css/owl.carousel.min.css" />
  <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
  <!-- ===============CSS STYLES ======================== -->
  <link rel="stylesheet" href="./css/contact.css" />
  <!-- ===============FONT AWESOME======================== -->
  <link rel="stylesheet" href="font-awesome-6/css/all.min.css" />
  <!-- ===============ANIMATION ON SCROLL======================== -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <div class="preloader">
    <img src="images/spinner.gif" alt="" />
  </div>
  <nav class="navbar">
    <div class="logo">
      <a href="home.php"><img src="images/spendy-logo.png" alt="" /></a>
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
          <input type="text" placeholder="Search... " />
          <button type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </div>
      <div class="nav-btns">
        <button class="donate-btn"><a href="donate.php">Donate</a></button>
        <button class="contact-btn">
          <a href="contact.php">Contact</a>
        </button>
      </div>
    </div>

    <div class="toggle">
      <i class="fa fa-bars"></i>
    </div>
  </nav>

  <div class="form-container">
    <div class="form-group">
      <div class="form-contact" data-aos="fade-right">
        <h2>Contact Us</h2>
        <div class="contact-socials">
          <a href="#"><i class="fa fa-location-dot"></i>Kumasi, Ghana</a>
          <a href="#"><i class="fa fa-envelope"></i>spendys98@gmail.com</a>
          <a href="#"><i class="fa fa-phone"></i>+233278889044</a>
        </div>
      </div>
      <div class="form-get-in-touch" data-aos="fade-left">
        <h1>Get in Touch</h1>
        <form action="">
          <input type="text" name="" id="" placeholder="Your Name" />
          <input type="email" name="" id="" placeholder="Your Email" />
          <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
          <button type="submit" class="btn">Send</button>
        </form>
      </div>
    </div>
  </div>
  <div class="footer-1">
    <div class="logo" style="display: flex; gap: 0.6rem; align-items: center" data-aos="fade-up">
      <img src="images/spendy-logo.png" alt="" />
      <p style="font-weight: bold; text-transform: uppercase">
        spendys bulwark
      </p>
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
    <p data-aos="fade-down">
      Lorem Ipsum is simply dummy text of the printing and typesetting
      industry. Lorem Ipsum has been the industry's standard dummy text ever
      since the 1500s, when an unknown printer took a galley of type
    </p>
    <p data-aos="fade-up">
      &#169; <span id="date"></span> SPENDY'S BULWARK NGO. All Right Reserved
    </p>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="js/style.js"></script>
</body>

</html>