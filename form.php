
<?php

$admin_email = "dubai@travel.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" />
  <link rel="stylesheet" href="css/uikit.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Corben&family=Oswald:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <script src="js/uikit.js"></script>
  <script src="js/uikit-icons.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
  <body>

  <div data-role="page" id="welcome" >
  <div data-role="header">
      <div class="top-wrap uk-position-relative">
        <div class="nav"
          data-uk-sticky="cls-active:uk-background-muted uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top">
          <div class="uk-container">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
              <div class="uk-navbar-left">
                <div class="uk-navbar-item uk-padding-remove-horizontal">
                  <a class="uk-logo uk-margin-left" title="Logo" href="index.html" rel="external"> <img
                      src="img/Frame.png" alt="Logo" width="100px" /></a>
                </div>
              </div>
              <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@s">
                  <li>
                    <a href="index.html" rel="external"> Home </a>
                  </li>
                  <li>
                    <a href="about.html" rel="external"> About </a>
                  </li>
                  <li>
                    <a href="things.html" rel="external"> Things to do </a>
                  </li>
                  <li>
                    <a href="eat.html" rel="external"> Eat&Drink </a>
                  </li>
                  <li>
                    <a href="sleep.html" rel="external"> Where to sleep </a>
                  </li>
                  <li>
                    <a href="currency.html" rel="external"> Currency </a>
                  </li>
                  <li>
                    <a href="map.html" rel="external"> Map </a>
                  </li>
                  <li>
                    <a href="weather.html" rel="external"> Weather </a>
                  </li>
                  <li class="uk-active"><a href="contact.html" rel="external">Contact</a></li>
                </ul>
                <a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon
                  href="#offcanvas-nav"></a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

      <div data-role="main">
          
    <section class="uk-background-cover uk-background-center uk-padding-large" style="background-image: url(img/contact.png);">
      <div class="uk-conatiner uk-padding-large uk-padding-remove-top">
        <h1 class="uk-text-bold uk-margin-large-bottom uk-text-center">Contact us</h1>
        <div class="uk-child-width-expand@m" uk-grid>
     
        <div class="uk-flex uk-flex-column uk-align-center">

        <?php	
                    if (!$name ||!$email||!$message) die ("<div class='uk-alert-danger' uk-alert>Please complete all marked fields!</div>");

                  else {

            

                  echo "<div class='uk-alert-warning uk-width-large' uk-alert> ".$name.",<br>Your message: &quot;".$message."&quot; has been sent successfully at ".$admin_email.".<br> We will get back to you as soon as possible. Thank you!</div>";

                  }

                  //send mail
                    mail($admin_email, "Contact form", $message, "From".$email);

          ?>
        </div> 
        
        <div class="uk-width-large uk-align-center uk-align-left@s uk-padding-remove">
          <div class="uk-width-large uk-section-secondary uk-align-center uk-align-right@m uk-margin-remove uk-padding-large">
            <p> <span uk-icon="mail"></span>   <span class="uk-padding-small"> dubai@travel.com </span></p>
            <p> <span uk-icon="receiver"></span>   <span class="uk-padding-small"> 0164.657.456 </span> </p>
            <p> <span uk-icon="location"></span> <span class="uk-padding-small"> Marina Moon Tower 7 Dubai </span> </p>
            <p> <span uk-icon="clock"></span>  <span class="uk-padding-small"> 09:00 - 18:00 </span></p>
          </div>
        </div>
      </div>
      </div>
    </section>
      </div>
    
    </div>
  
   <!-- OFFCANVAS -->
  <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: false">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
      <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
      <ul class="uk-nav uk-nav-default">
        <li>
          <a href="index.html" rel="external"> <span uk-icon="home"></span> Home </a>
        </li>
        <li>
          <a href="about.html" rel="external"> <span uk-icon="info"></span> About </a>
        </li>
        <li>
          <a href="things.html" rel="external"><span uk-icon="users"></span> Things to do </a>
        </li>
        <li >
          <a href="eat.html" rel="external"> <span uk-icon="heart"></span> Eat&Drink </a>
        </li>
        <li>
          <a href="sleep.html" rel="external"> <span uk-icon="bookmark"></span> Where to sleep </a>
        </li>
        <li>
          <a href="currency.html" rel="external"> <span uk-icon="credit-card"></span> Currency </a>
        </li>
        <li>
          <a href="map.html" rel="external"> <span uk-icon="location"></span> Map </a>
        </li>
        <li>
          <a href="weather.html" rel="external"> <span uk-icon="bolt"></span> Weather </a>
        </li>
        <li class="uk-active">
          <a href="contact.html" rel="external"> <span uk-icon="mail"></span> Contact</a>
        </li>
    </div>
  </div>
  <!-- /OFFCANVAS -->
  </body>
</html>
