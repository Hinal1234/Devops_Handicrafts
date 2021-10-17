<?php include 'sendemail.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us Form</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Main.css">
    <script src="https://kit.fontawesome.com/2873537827.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
 <!--Navbar-->
 <nav class="navbar navbar-expand-sm navbar-dark bg-black" style="top: 40px;">
        <div class="container">
            <a href="#" class="navbar-brand">HandiCrafts Online </a>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse" id="navbarCollapse"></div>
          <ul class="navbar-nav ml-auto">
              <li class="navbar-item">
                  <a href="AfterSignIn.html" class="nav-link">Home</a>
              </li>
              <li class="navbar-item active">
                  <a href="CatalogsPage.html" class="nav-link"> Products</a>
              </li>
              <li class="navbar-item">
                  <a href="#" class="nav-link">About</a>
              </li>
              <li class="navbar-item ">
                  <a href="contact.php" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class=" fas fa-shopping-cart fa-2x"></i>
                  </a>

              </li>
              <li class="nav-item">
                <a href="UserLoginPage.html" class="nav-link">
                    <i class=" fas fa-user fa-2x"></i>
                </a>

            </li>
          </ul>

        </div>
    </nav>
    <!--End of Navbar-->
    <?php echo $alert; ?>
    <img class="bg" src="contactbg.jpeg" alt="Signup Page">
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>Country</div>
            <div><i class="fas fa-envelope"></i></i>contact@email.com</div>
            <div><i class="fas fa-phone"></i>+00 123456789</div>
            <div><i class="fas fa-clock"></i>Mon - Fri 8:00 am to 5:00pm</div>
        </div>
        <div class="contact-form">
            <h2> Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="Message" rows="5" placeholder="Your Message/Queries/Feedback" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
        </div>
    </div>

    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>
