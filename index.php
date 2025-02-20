<!DOCTYPE html>
<html>
<head>
<title>Leo IP Law - Leonardo Peres Intellectual Property Law</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", Verdana, sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

.footer { text-align:center;}

.image-container {
  position: relative;
  width: 100%;
  max-height: 80vh; /* Ensures the image does not exceed the viewport */
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.background-image {
  width: 100%;
  height: 100%;
  max-height: 80vh; /* Prevents excessive height */
  object-fit: contain; /* Keeps full image visible without cropping */
}

.text-overlay {
  position: absolute;
  bottom: 10%; /* Moves text near the bottom of the image */
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  color: white;
  background: rgba(0, 0, 0, 0.5); /* Optional for readability */
  padding: 10px 20px;
  border-radius: 10px;
  width: 90%; /* Adjust width to prevent overflow */
  max-width: 600px; /* Keeps it from getting too wide on large screens */
}
.fa-icon {
    font-size: 50px;  /* Increase the icon size */
    display: inline-block;
    padding: 20px;  /* Add padding around icons */
}

.w3-section {
    display: flex;
    justify-content: center;  /* Center icons horizontally */
    align-items: center;  /* Center icons vertically */
    flex-wrap: wrap;  /* Ensure responsiveness */
}
.carousel-container {
    position: relative;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
    height: 300px;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    box-sizing: border-box;
    text-align: center;
    padding: 40px;
}

.slide i {
    display: block;
    margin-bottom: 20px;
}

.prev, .next {
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
    user-select: none;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

{
  box-sizing: border-box;
}

.icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
   }

.icon-container p {
    font-size: 18px;
    margin: 0;
    text-decoration: none;
}

.icon-container a {
    text-decoration: none;
}

.w3-bar-item.active {
    background-color: #000 !important;  /* Highlight color */
    color: #fff !important;  /* Text color */
}

/* Set a background color */
body {
  background-color: #474e5d;
  
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -12px;
  background-color: white;
  border: 4px solid #474e5d;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}


/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
*.right::after {
  left: -12px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
/* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }

/* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

/* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

/* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }

/* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

.image-container {
  position: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.image-container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}

.dots-container .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #717171;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.dots-container .dot.active {
    background-color:rgb(255, 255, 255);
}

</style>

<script>

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.w3-sidebar .w3-bar-item');

    function changeActiveLink() {
        let index = sections.length;

        while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

        navLinks.forEach((link) => link.classList.remove('active'));
        if (index >= 0) {
            navLinks[index].classList.add('active');
        }
    }

    changeActiveLink();
    window.addEventListener('scroll', changeActiveLink);
});

let slideIndex = 0;
showSlides(slideIndex);

function moveSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    if (n >= slides.length) { slideIndex = 0; } // Loop back to the first slide
    if (n < 0) { slideIndex = slides.length - 1; } // Loop back to the last slide
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " active";
}
  </script>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="logo.jpg" style="width:100%">
  <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <p>ABOUT</p>
  </a>
  <a href="#experience" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <p>EXPERTISE</p>
  </a>
  <a href="#background" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <p>BACKGROUND</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <p>CONNECT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#experience" class="w3-bar-item w3-button" style="width:25% !important">EXPERTISE</a>
    <a href="#background" class="w3-bar-item w3-button" style="width:25% !important">BACKGROUND</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONNECT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
   <section id="home">
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
  <div class="image-container">
  <img src="FC_2092.jpg" alt="Leo" class="background-image">
  <div class="content">
    <h1><strong>Leonardo A. Peres</strong></h1>
    <h2>Intellectual Property Law</h2>
    <p>Brazilian Bar Association OAB/RS 132.059</p>
  </div>
</div>   
    </header>
</section>
</div>

  <!-- About Section -->
   <section id="about">
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About me</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Leonardo A. Peres is a lawyer specializing in Intellectual Property, with experience in trademark search and clearance, IP portfolio management, data protection, and digital law. He has led teams focused on trademark analysis and provided legal counsel on IP matters, including AI, software, and copyright, within both public institutions such as the European Commission, and private companies. He has also worked at a law firm handling trademark and patent registrations, domain name disputes, and data protection compliance for major clients. Additionally, he has experience in legal translation and international project management at the United Nations Office in Geneva. He holds an LL.M. in Intellectual Property and ICT Law from KU Leuven, an LL.B. from the Federal University of Rio Grande do Sul, and a Master's in International Relations from the University of Brasilia.
    </p>
   <!-- End About Section -->
  </div>
  </section>
  
  <!-- Portfolio Section -->
<section id="experience">
  <div class="w3-padding-64 w3-content" id="experience">
    <h2 class="w3-text-light-grey">Expertise</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="slide">
                <i class="fa fa-trademark fa-5x"></i> <!-- Placeholder for FA icon -->
                <h2 class="slide-title">Trademark Law</h2>
                <p>Expertise in trademark law includes conducting comprehensive trademark searches, clearances, and strategy development for international registrations. Experience in managing global IP portfolios, assessing trademark risks, and ensuring smooth registrations. Handling trademark disputes, advising on brand protection strategies, and ensuring compliance with jurisdictional requirements.</p>
            </div>
            <div class="slide">
                <i class="fa fa-gamepad fa-5x"></i> <!-- Placeholder for FA icon -->
                <h2 class="slide-title">Video Game Law</h2>
                <p>Intellectual property protection for software, copyright issues in game development, and domain name disputes affecting gaming brands. Experience in advising on licensing, data protection compliance, and the legal challenges surrounding digital distribution. Knowledge of regulatory frameworks ensures compliance and protection of creative assets in the gaming industry.</p>
            </div>
            <div class="slide">
                <i class="fa fa-film fa-5x"></i> <!-- Placeholder for FA icon -->
                <h2 class="slide-title">Entertainment Law</h2>
                <p>Handling intellectual property matters related to audiovisual works and digital content. Expertise in copyright and licensing for creative industries, addressing domain name infringements, and negotiating contracts for content distribution. A strong understanding of legal frameworks ensures the protection and commercialization of entertainment assets.</p>
            </div>
            <div class="slide">
                <i class="fa fa-microchip fa-5x"></i> <!-- Placeholder for FA icon -->
                <h2 class="slide-title">Tech and Digital Law</h2>
                <p>Advising on data protection, domain name disputes, and software intellectual property matters. Experience in compliance projects for major corporations, contract review, legal opinions on digital law issues, and software licensing. A deep understanding of regulatory challenges in digital environments ensures effective risk management and legal compliance for tech companies.</p>
            </div>
            <div class="slide">
                <i class="fa fa-desktop fa-5x"></i> <!-- Placeholder for FA icon -->
                <h2 class="slide-title">AI Regulation</h2>
                <p>Knowledge of AI regulation, analyzing the intersection of AI and intellectual property, with a focus on the implications of the AI Act and experience on AI issues within the European Commission. Legal research on AI and copyright, regulatory reports, and delivering training on AI-related legal frameworks. Expertise in compliance strategies and risk assessment ensures alignment with evolving AI regulations and policies.</p>
            </div>
        </div>
        <a class="prev" onclick="moveSlides(-1)">&#10094;</a>
        <a class="next" onclick="moveSlides(1)">&#10095;</a>
    </div>
    <div class="dots-container" style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
  </div>
</section>

<!-- Background Section -->
 <section id="background">
  
<div class="w3-padding-64 w3-content w3-text-grey" id="background">
    <h2 class="w3-text-light-grey">Background</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="timeline">
    <div class="container left">
    <div class="content">
      <h2>2024-Present</h2>
      <p>Senior Trademark Search and Clearance Specialist</p>
      <p>TramaTM, Slovakia</p>
    </div>
    </div>
    <div class="container left">
    <div class="content">
      <h2>2024</h2>
      <p>Legal Officer Trainee</p>
      <p>Central Intellectual Property Service, European Commission, Belgium</p>
    </div>
</div>
    <div class="container right">
    <div class="content">
      <h2>2024</h2>
      <p>Master of Laws (LL.M.) in Intellectual Property and Information, Communication and Technology Law</p>
        <p>KU Leuven, Belgium</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2022-2024</h2>
      <p>Data Protection, Digital Law, and Intellectual Property Intern/Attorney</p>
      <p>Silveiro Advogados, Brazil</p>
    </div>
</div>
  <div class="container right">
    <div class="content">
      <h2>2023</h2>
      <p>Bachelor of Laws</p>
      <p>Federal University of Rio Grande do Sul, Brazil</p>
    </div>
  </div>

  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Master in International Relations</p>
      <p> University of Brasilia, Brazil</p>
    </div>
  </div>

  <div class="container left">
    <div class="content">
      <h2>2015-2016</h2>
      <p>Project Management Intern</p>
      <p>United Nations Office at Geneva, Switzerland</p>
    </div>
</div>

  <div class="container right">
    <div class="content">
      <h2>2013</h2>
      <p>Bachelor in International Relations</p>
        <p>Federal University of Santa Maria, Brazil</p>
    </div>
  </div>

  <div class="container left">
    <div class="content">
      <h2>2015-2022</h2>
      <p>Legal and Technical Translator</p>
      <p>Freelance</p>
    </div>
</div>
</div>
</section>
  <!-- End Background Section -->

  <!-- Contact Section -->
   <section id="contact">
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Connect</h2>
    <hr style="width:200px" class="w3-opacity">
       
    <div class="w3-section">
    <div class="icon-container">
   <a href="https://www.instagram.com/leoiplaw" target="_blank" class="fa-icon">
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <p>@leoiplaw</p>
        </a>
</div>
<div class="icon-container">
            <a href="https://www.linkedin.com/in/leonardo-a-peres-742586253/" target="_blank" class="fa-icon">
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p>LinkedIn</p>
        </a>
    </div>
</div>
  <!-- End Contact Section -->
  </div>
  </section>

  
    <!-- Footer -->
     <p class="w3-medium footer">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a> | © Leonardo A. Peres </p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
