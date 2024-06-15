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

    <style>
      *{
        font-family: "Poppins";
      }
  .main-header {
  background: url(img/contacts.jpg);
  background-size: cover;
  background-position: center;
  min-height:200px;
  font-family: "Poppins",  sans-serif;
  color: #fff;
  padding-top: 0;
  font-weight: 600;
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

 .container h4{
  position: relative;
  bottom: -70px;
  margin-top: -20px;
  margin-bottom: 0;
  padding-bottom: -20;

  }

  .tagline{
  font-family: "Poppins",  sans-serif;
  font-size: 50px;
  font-weight: 800;
}
ul.footer-links li a{
  color: white;
}
ul.footer-links li a:hover{
color: #eeff41;
}
#address{
  margin-top: 0;
}
    </style>
    <title>Contact us</title>
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
                    <li class="active-link"><a href="contactus.php">Contact us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
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
          <p class="flow-text tagline">CONTACTS</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col s12 m6 ">
        <div class="card-panel z-depth-0 cyan darken-4 white-text " >
          <p class="center"><i class="material-icons medium">email</i></p>
          <p class="center flow-text" style="margin-top: 0; margin-bottom: 0;">Get in Touch</p>
            <p>Address: 2185 Pasig Line st. Sta Ana Manila, Metro Manila 1009</p>
            <li class="divider"></li>
            <p>Mobile No.: <a href="tel:09359209886">+63  9359209886</a></p>
            <li class="divider"></li>
            <p>Email: <a href="mailto:info@enterlightmaritime.com">info@enterlightmaritime.com</a></p>
            <li class="divider"></li>
            <p>Working Days & Hours: Monday - Friday from 8:00AM to 4:00PM </p>
        </div>
      </div>
      <div class="col s12 m6 ">
        <div class="card-panel grey lighten-4">
            <form action="" method="post">
              <p class="flow-text center">Share Your Thoughts!</p>
                <div class="input-field">
                  <input type="text" name="fname" id="fname" placeholder="Input Your First Name" class="validate">
                  <label for="fname">First Name</label>
                </div>   
                <div class="input-field">
                  <input type="text" name="lname" id="lname" placeholder="Input Your Last Name" class="validate">
                  <label for="lname">Last Name</label>
                </div>   
                <div class="input-field">
                  <input type="email" name="email" id="email" placeholder="Input Your Email Address" class="validate">
                  <label for="email">Email Address</label>
                </div>
                <div class="input-field">
                  <textarea name="text-area" id="text-area" class="materialize-textarea" placeholder="Input Your Message"></textarea>
                  <label for="text-area">Your Message</label>
                </div>     
                <button class="btn cyan darken-3 hoverable" name="submit-btn" id="submit-btn">Submit</button>
            </form>
        </div>
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
        <div class="col l4 offset-l2 s12 footer-links">
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
  <script src="js/materialize.js"></script>
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