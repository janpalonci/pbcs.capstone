<!DOCTYPE html>
<html lang="en">
    
<head>
    
<!-- Database -->
<?php 
    if ( $_SERVER[ 'HTTP_HOST' ] == 'pbcs.us') {   
$db = new PDO ( "mysql:host=localhost;dbname=jpalonci_ecommerce","jpalonci_pbcs",
"codeschool1" ); 
} else {  
$db = new PDO( "mysql:host=localhost;dbname=Team","root",
"root"  );
} 
    
?>

<!-- Stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<link rel="stylesheet" href="css/main.css">
    
</head>
    
<body>
    
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.html"><img class="img-responsive" src="img/logo%20sm.png"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fixtures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Standings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
        
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  
    
<header class="masthead">
    <div class="container">
          <div class="intro-lead-in">W.P.B. SOCCER</div>
          <div class="intro-heading text-uppercase">West Palm's Premier Soccer League</div>
          <a id="btnLand" class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#services">Learn More</a>
      </div>
    
</header>
    
 <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <p class="section-subheading text-muted">
WPB Soccer is a fun men’s rec league for adults aged 21 and up. We provide a fun and organized 7 v 7 soccer league for players of all skill levels. We cater for all players whether you are a rookie just starting to pick up soccer or the next Pele. All skill levels are welcome to play and enjoy the beautiful game. Don’t have a team? Don’t worry, just sign up as a free agent and we will find you a team. Every team gets a FREE pitcher at our sponsorship bar O’Shea’s Downtown WPB after every game. At WPB SOCCER we don’t just build teams and leagues, we build friendships through our pre season, post season parties, bus trips and social events. We’re more than just a league !!!
          </div>
        </div>
       </div>
    </section>
    
<!-- Register -->
    
    <section id="register">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>Free Agent</h5>
                    <p>Sign up as a free agent and we will find a team for you! $70 Fee</p>
                </div>
                <div class="col">
                    <h5>Team</h5>
                    <p>Register your entire team with a one time payment. $600 cash, $650 online.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Schedule -->
    
    <section id="schedule">
        <div class="container">
            <table>
                <th>Week 1</th>
                <th>Sunday Feb 11th</th>
                <th>F</th>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </section>
    
 <!-- Scripts -->   

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
    
</html>