<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css">
  <link rel="icon" href="img/logo.png">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
   *{
        font-family: "Poppins";
      }
    .showcase {
    margin-top: 40px;
  } 

 ul li a{
  color: #fff;
  font-weight: 600; 
}  
  .section-parallax {
  background-image: url(img/parallax.jpg);
  height: 350px;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover; 
} 
.container h4{
  position: relative;
  bottom: -70px;
  margin-top: -20px;
  margin-bottom: 0;
  padding-bottom: -20;

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
  .mis-vis .card-panel {
    width: 100%;
    padding-right: 0;
    padding-left: 0;
  }
  .mis-vis .card-panel p {
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;
  }
  
.main-header {
  background: url(img/bg1.jpg);
  background-size: cover;
  background-position: center;
  min-height:550px;
  font-family: "Poppins",  sans-serif;
  color: #fff;
  padding-top: 0;
  font-weight:600;
}

  </style>
  <title>Enter Light Maritime & Ship Management Services</title>
</head>

<body>
  <!-- Header -->
  <header class="main-header ">
    <!-- nav -->
     <div class="navbar-fixed">
      <nav id="nav" class="cyan darken-4">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo"><img src="img/logo.png" width="55" alt=""></a>
                <a href="#" data-target="mobile-menu" class="sidenav-trigger hide-on-large-only" style="display:inline-block"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="active-link"><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
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

 
 

    <!-- Showcase -->
    <div class="showcase container">
      <div class="row">
        <div class="col s12 m10 offset-m1 center">
          <h1 class="tagline">Navigating Excellence with Every Crew</h1>
          <p class="flow-text">“Excellently Supplies Knowledgeable Skilled
            And Trained Filipino Seafarers.”</p>
          <br>
        </div>
      </div>
    </div>
  </header>
 
  <!-- Section: Icon Boxes -->
  <section class="section mis-vis section-icons center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons grey-text text-darken-4 medium">track_changes</i>
            <h5 class="grey-text text-darken-4">Mission</h5>
            <p class="truncate">To be one of the leading supplier of globally competitive,
              efficient and disciplined marine officers and ratings.,
              who will cater the needs of our international shipping employers.</p>
              <a href="#modal1" class="btn cyan darken-3 white-text modal-trigger hoverable">read more</a>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons grey-text text-darken-4 medium">visibility</i>
            <h5 class="grey-text text-darken-4">Vision</h5>
            <p class="truncate">To be the leading provider of innovative and sustainable maritime solutions, fostering excellence and safety in global shipping through our dedicated and skilled workforce. We aim to set the standard for crew management and ship operations, ensuring a positive impact on the maritime industry and the environment.</p>
            <a href="#modal2" class="btn cyan darken-3 white-text modal-trigger hoverable">read more</a>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons grey-text text-darken-4 medium">diversity_2</i>
            <h5 class="grey-text text-darken-4 title-card">Crew Management</h5>
            <p class="truncate">At Enter Light Maritime & Ship Management Services, we pride ourselves on providing exceptional crew management solutions. Our team is dedicated to sourcing, training, and retaining highly skilled seafarers who meet the highest international standards. We ensure that our crew members are well-prepared and supported, enabling safe and efficient operations on all vessels. With a focus on continuous development and adherence to global maritime regulations, we guarantee that our clients receive the best personnel for their shipping needs.</p>
            <a href="#modal3" class="btn cyan darken-3 white-text modal-trigger hoverable">read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- modal mission-->
  <div class="modal" id="modal1">
    <div class="modal-content center">
      <i class="material-icons grey-text text-darken-4 medium">track_changes</i>
      <h4>Mission</h4>
      <p>To be one of the leading supplier of globally competitive,
        efficient and disciplined marine officers and ratings.,
        who will cater the needs of our international shipping employers.</p>
    </div>
  </div>
  <!-- modal vision -->
  <div class="modal" id="modal2">
    <div class="modal-content center">
      <i class="material-icons grey-text text-darken-4 medium">visibility</i>
      <h4>Vision</h4>
      <p>To be the leading provider of innovative and sustainable maritime solutions, fostering excellence and safety in global shipping through our dedicated and skilled workforce. We aim to set the standard for crew management and ship operations, ensuring a positive impact on the maritime industry and the environment.</p>
    </div>
  </div>
  <!-- modal crew management -->
  <div class="modal" id="modal3">
    <div class="modal-content center">
      <i class="material-icons grey-text text-darken-4 medium">diversity_2</i>
      <h4>Crew Management</h4>
      <p>At Enter Light Maritime & Ship Management Services, we pride ourselves on providing exceptional crew management solutions. Our team is dedicated to sourcing, training, and retaining highly skilled seafarers who meet the highest international standards. We ensure that our crew members are well-prepared and supported, enabling safe and efficient operations on all vessels. With a focus on continuous development and adherence to global maritime regulations, we guarantee that our clients receive the best personnel for their shipping needs.</p>
    </div>
  </div>
 
  <!-- vessel parallax -->
  <section class="section-parallax">
    <div class="container">
      <h4 class="center white-text">“In the heart of every sailor is the spirit of adventure and the will to conquer the seas.”</h4>
    </div>
  </section>
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

 

  <!--Import jQuery before materialize.js-->
  <!-- Add jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/materialize.js"></script>
  <script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>
  <script src="js/index.js"></script>

</body>

</html>