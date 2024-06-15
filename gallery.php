<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Import Google Icon Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Import materialize.css -->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
  <!-- Let browser know website is optimized for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="icon" href="img/logo.png">
  <title>Gallery</title>
  <style>
     *{
        font-family: "Poppins";
      }
    .img-container {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .hoverable img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hoverable img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
  li.active-link a{
  font-weight: 600;
  color: #212121;
  background-color: #4db6ac;
  }
  .main-header #nav-mobile li a:hover{
  font-weight: 600;
  color: #212121;
  background-color: #4db6ac;
} 

.main-header {
  background: url(img/gallery.jpg );
  background-size: cover;
  background-position: center;
  min-height:200px;
  font-family: "Poppins",  sans-serif;
  color: #fff;
  padding-top: 0;
  font-weight: 600;
}

.tagline{
  font-family: "Poppins",  sans-serif;
  font-size: 60px;
}

  </style>
</head>

<body>
    <!-- nav -->
  <header class="main-header">
    <div class="navbar-fixed">
      <nav id="nav" class="cyan darken-4 z-depth-0">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo"><img src="img/logo.png" width="55" alt=""></a>
                <a href="!#" data-target="mobile-menu" class="sidenav-trigger hide-on-large-only" style="display:inline-block"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li class="active-link"><a href="gallery.php">Gallery</a></li>
                </ul>
            </div>
          </nav>
      </div>
      <!-- sidenav -->
 <ul id="mobile-menu" class="side-nav sidenav collapsible grey lighten-3" style="border: none;">
    <li>
      <div class="user-view">
        <a href="#!"><i class="material-icons icon right sidenav-close white-text" style="opacity: 0.8;">close</i></a>
        <div class="background">
          <img src="img/bgsidenav.jpg" class="responsive-img">
        </div>
        <a href="#logo"><img class="circle" src="img/logo.png"></a>
        <a href="/index"><span class="white-text name">Enter Light Maritime & Ship Management Services</span></a>
        <!-- <a href="#name"><span class="white-text email">Recruitment Agency</span></a> -->
      </div>
    </li>
    <!-- collapsible -->
  
    <li>
      <div class="collapsible-header"><a href="index.php" class="black-text scrollspy">
        <i class="material-icons left black-text">home</i>Home</a>
      </div>
    </li>
    <li class="divider"></li>
    <li id="services">
      <div class="collapsible-header"><a href="aboutus.php" class="black-text scrollspy">
        <i class="material-icons left black-text">groups_2</i>About us</a>
      </div>
    </li>
    <li class="divider"></li>
    <li>
      <div class="collapsible-header"><a href="contactus.php" class="black-text scrollspy">
        <i class="material-icons left black-text">perm_phone_msg</i>Contact us</a>
      </div>
    </li>
    <li class="divider"></li>
    <li>
      <div class="collapsible-header"><a href="gallery.php" class="black-text scrollspy">
        <i class="material-icons left black-text">collections</i>Gallery</a>
      </div>
    </li>
    <li class="divider"></li>
   
    <li><a href="" target="_blank" class="modal-trigger blue-text"><i class="material-icons blue-text">facebook</i> Like us on facebook</a></li>
  </ul>


      <!--showcase  -->
      <div class="showcase container">
      <div class="row">
        <div class="col s12 m10 offset-m1 center">
          <p class="flow-text tagline">GALLERY</p>
        </div>
      </div>
    </div>
  </header>
<div class="container">
  <div class="row">
   <div class="col s12 center ">
   <h4 class="cyan-text text-darken-4"><B> BULK AND GENERAL CARGO & OFFSHORE</B></h4>
   </div>
  </div>
</div>
  <div class="container img-container">
    <div class="row">
      <!-- First Block -->
      <div class="col s12 m4 center-align hoverable">
        <img src="img/TAMIMI 1.jpg" alt="Picture 1" class="responsive-img materialboxed">
        <p>TAMIMI 1</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/TAMIMI 2.jpg" alt="Picture 2" class="responsive-img materialboxed">
        <p>TAMIMI 2</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/TAMIMI 3.jpg" alt="Picture 3" class="responsive-img materialboxed">
        <p>TAMIMI 3</p>
      </div>
    </div>

    <div class="row">
      <!-- Second Block -->
      <div class="col s12 m4 center-align hoverable">
        <img src="img/TAMIMI 8.jpg" alt="Picture 4" class="responsive-img materialboxed">
        <p>TAMIMI 8</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/OCEAN FALCON.jpg" alt="Picture 5" class="responsive-img materialboxed">
        <p>OCEAN FALCON</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/SPRING WEALTH 2.jpg" alt="Picture 6" class="responsive-img materialboxed">
        <p>SPRING WEALTH</p>
      </div>
    </div>

    <div class="row">
      <!-- Third Block -->
      <div class="col s12 m4 center-align hoverable">
        <img src="img/AOS EAGLE.jpg" alt="Picture 7" class="responsive-img materialboxed">
        <p>AOS EAGLE</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/AOS VENTURE.jpg" alt="Picture 8" class="responsive-img materialboxed">
        <p>AOS VENTURE</p>
      </div>

      <div class="col s12 m4 center-align hoverable">
        <img src="img/CL SHA HE1.jpeg" alt="Picture 9" class="responsive-img materialboxed">
        <p>CL SHA HE</p>
      </div>
    </div>
  </div>

    <!-- Footer -->
 <footer class="page-footer cyan darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">We Committed to excellence, we strive to exceed industry standards and deliver superior service, fostering long-term partnerships and contributing to the global maritime industry. </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="index.php">Home</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="aboutus.php">About us</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="contactus.php">Contact us</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="gallery.php">Gallery</a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright cyan darken-4">
      <div class="container">
        Enter Light Maritime & Ship Management Services &copy; 2024
        <a class="grey-text text-lighten-4 right" href="#!">Terms & Conditions</a>
      </div>
    </div>
  </footer>

  <!-- Import jQuery and materialize.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.materialboxed').materialbox();
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    });
  </script>
</body>

</html>
