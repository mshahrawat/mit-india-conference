
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Contact Us</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="additional.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="body">

    <nav class="navbar navbar-default navbar-fixed-top" id="navbarr">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img alt="logo" src="images/logo.jpg" id="logobrand">
          </a>
        </div>

        <div id="navbar-scroller" class="navbar-collapse collapse">
          <ul class="nav nav-pills">
            <li role="presentation"><a href="mit-india-conference.html">Home</a></li>
            <li role="presentation"><a href="mit-india-conference.html#about">About</a></li>
            <li role="presentation"><a href="mit-india-conference.html#speakers">Speakers</a></li>
            <li role="presentation"><a href="mit-india-conference.html#tata">Tata Center at MIT</a></li>
            <li role="presentation"><a href="conference-contact.html">Contact Us</a></li>
            <li role="presentation" class="active"><a href="mit-india-conference.html#register">Register</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!--<div id="flag">
      <img id="flagtop" src="images/indianflagtop.jpg">
    </div>-->

    <div id="contact">
      <div class="container" id="contact">
        <h1 id="center">Contact Us</h1>

        <!--<form>
          <fieldset class="form-group">
            <label for="InputName">Name</label>
            <input type="name" class="form-control" id="InputName" placeholder="Enter Name">
          </fieldset>

          <fieldset class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
            <small class="text-muted">We'll never share your email with anyone else.</small>
          </fieldset>

          <fieldset class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="6" placeholder="Enter Message"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary" id="sendmessage">Send Message</button>
        </form>-->
        <form class="form-horizontal" role="form" method="post" action="contact.php">
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
          </div>
          <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
          </div>
          <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                  <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
          </div>
          <div class="form-group">
              <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                  <?php echo "<p class='text-danger'>$errHuman</p>";?>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                  <?php echo $result; ?>    
              </div>
          </div>
      </form> 

      </div>
    </div>

    <hr>

    <footer id="foot">
      <p> &copy; 2016 MIT India Conference</p>
    </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
