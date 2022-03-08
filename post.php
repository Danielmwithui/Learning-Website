<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machakos University</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj
    +30JU5yEx1q6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  <!------------Navigation--------->  
  <nav>
      <img src="images/logo.png" alt="">
      <div class="navigation">
          <ul>
              <i id="menu-close" class="fas fa-times"></i>
              <li><a href="#">Home</a></li>
              <li><a    href="about.html">About</a></li>
              <li><a class="active"  href="blog.html">Blog</a></li>
              <li><a  href="course.html">Courses</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a  href="#">Login</a></li>
              <li><a  href="#">SignUp</a></li>
          </ul>
          <img   class="menu-btn" src="images/menu.png" alt="">
      </div>
  </nav>
  <!----------Home--------->
  <section id="blog-container">
    <div class="blogs  blogspost">

          <div class="post">
              <img src="images/b1.jpg" alt="">
              <h3>Learn web  Development In the Easiest Way</h3>
              <p>Chapter 1: Introduction to the
                Internet and World Wide Web
                This brief introduction covers the terms and concepts related to the Internet
                and the Web with which Web developers need to be familiar. For many
                students, some of this will be a review. Chapter 1 provides the base of
                knowledge on which the rest of the textbook is built.Chapter 2: HTML Basics
                As HTML5 is introduced, examples and exercises encourage students to
                create sample pages and gain useful experience. Solution pages for the
                Hands-On Practice are available in the student files.Chapter 3: Configuring Color and
                Text with CSS
                <br><br>
                The technique of using Cascading Style Sheets to configure the color and text
                on web pages is introduced. Students are encouraged to create sample pages
                as they read through the text. Solutions for the Hands-On Practice are
                available in the student files.Chapter 4: Visual Elements and
                Graphics
                This chapter discusses the use of graphics and visual effects on web pages,
                including image optimization, CSS borders, CSS image backgrounds, new
                CSS3 visual effects, and new HTML5 elements. Students are encouraged to
                create web pages as they read through the text. Sample solutions for the
                Hands-On Practice are available in the student files.Chapter 5: Web Design
                This chapter focuses on recommended web design practices and accessibility.
                Some of this is reinforcement because tips about recommended website
                design practices are incorporated into the other chapters</p>
                <a href="#">Read Next</a>
          </div>
        </div>
  </section>

<!--------footer------>
<footer>
    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing service</li>
    </div>
    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing service</li>
    </div>
    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing service</li>
    </div>
    <div class="footer-col">
        <h3>Guides</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing service</li>
    </div>
<div class="footer-col">
    <h3>Newsletter</h3>
    <p>You can trust us .We only send promo offers</p>
    <div class="subscribe">
        <input type="text" placeholder="Your Email address">
        <a href="#"class="orange">SUBSCRIBE</a>
    </div>
</div>
<div class="copyright">
    <p>Copyright &copy2022  All Rights reserved</p>
    <div class="pro-links">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-twitter"></i>
    </div>
</div>
</footer>
<script>
    $('#menu-btn').click(function()
   {
       $('nav .navigation ul').addClass('active')
   });
   $('#menu-close').click(function()
   {
       $('nav .navigation ul').removeClass('active')
   });
</script>
</body>
</html>