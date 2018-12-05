<!DOCTYPE html>
<html lang="en">
    
<head>
    
<!-- Database -->
 <?php 
if ( $_SERVER[ 'HTTP_HOST' ] == 'pbcs.us') {   
$db = new PDO ( "mysql:host=localhost;dbname=jpalonci_team","jpalonci_pbcs",
"codeschool1" ); 
} else {  
$db = new PDO( "mysql:host=localhost;dbname=Team","root",
"root"  );
} 

$week1 = $db->query( "SELECT * FROM `schedule` WHERE date = '2018-02-11' " );
$week2 = $db->query( "SELECT * FROM `schedule` WHERE date = '2018-02-18' " );
$week3 = $db->query( "SELECT * FROM `schedule` WHERE date = '2018-02-25' " );
    ?>
    
<!-- Stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<link rel="stylesheet" href="css/main.css">
    
</head>
    
<body>
    
<nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo%20sm.png"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="index.php#register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="schedule.php">Fixtures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="index.php#standings">Standings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="index.php#gallery" >Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="index.php#rules">Rules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#index.phpcontact">Contact</a>
      </li>
        
    </ul>
      
  </div>
</nav>   
    
 <div class="container">
    <div class="intro-lead-in">W.P.B. SOCCER</div>
    <div class="intro-heading text-uppercase">League Schedule</div>
 </div>
    
    

    <!-- Display Schedule -->
    
    
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <table>
                <th class="schedule">Week 1</th>
                <th class="schedule">Time</th>
                <th class="schedule">Home Team</th>
                <th class="schedule">-</th>
                <th class="schedule">Away Team</th>
                <th class="schedule">Field</th>
                
                
                    <?php while ( $row = $week1->fetch ( PDO::FETCH_ASSOC ) ) {
                    
                    ?>
           
                <tr>
                    <td>
                        <?= $row['date'] ?>
                    </td>
           
                    <td>
                        <?= $row['time'] ?>
                    </td>
           
                    <td>
                        <?= $row['team1'] ?>
                    </td>
           
                   
           
                <td>vs</td>
           
           
                    <td>
                        <?= $row['team2'] ?>
                    </td>
    
            
                    <td>
                        <?= $row['field'] ?>
                    </td>
                    
           
                </tr>
                
        <!-- HTML-->
        <?php
          } //    end of while loop
         
        ?>
            </table>
               <br />
           </div>
        </div>
      </div>
    </section>
    
    <!-- Week 2 -->
    
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <table>
                <th class="schedule">Week 2</th>
                <th class="schedule">Time</th>
                <th class="schedule">Home Team</th>
                <th class="schedule">-</th>
                <th class="schedule">Away Team</th>
                <th class="schedule">Field</th>
                    <?php while ( $row = $week2->fetch ( PDO::FETCH_ASSOC ) ) {
                    
                    ?>
           
                <tr>
                    <td>
                        <?= $row['date'] ?>
                    </td>
           
                    <td>
                        <?= $row['time'] ?>
                    </td>
           
                    <td>
                        <?= $row['team1'] ?>
                    </td>
           
                   
           
                <td>vs</td>
           
           
                    <td>
                        <?= $row['team2'] ?>
                    </td>
    
            
                    <td>
                        <?= $row['field'] ?>
                    </td>
           
                </tr>
        <!-- HTML-->
        <?php
          } //    end of while loop
         
        ?>
            </table>
              <br />
           </div>
        </div>
      </div>
    </section>
    
    <!-- Week 3 -->
    
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <table>
                <th class="schedule">Week 3</th>
                <th class="schedule">Time</th>
                <th class="schedule">Home Team</th>
                <th class="schedule">-</th>
                <th class="schedule">Away Team</th>
                <th class="schedule">Field</th>
                    <?php while ( $row = $week3->fetch ( PDO::FETCH_ASSOC ) ) {
                    
                    ?>
           
                <tr>
                    <td>
                        <?= $row['date'] ?>
                    </td>
           
                    <td>
                        <?= $row['time'] ?>
                    </td>
           
                    <td>
                        <?= $row['team1'] ?>
                    </td>
           
                   
           
                <td>vs</td>
           
           
                    <td>
                        <?= $row['team2'] ?>
                    </td>
    
            
                    <td>
                        <?= $row['field'] ?>
                    </td>
           
                </tr>
        <!-- HTML-->
        <?php
          } //    end of while loop
         
        ?>
            </table>
           </div>
        </div>
      </div>
    </section>
    
        <!--Footer-->
<footer class="page-footer bg-faded  pt-4 mt-4">
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="text-uppercase">WPB Soccer League</h5>
                <p>League Manager | Gary Murray</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <p>m | 561.123.4567 <br />
                   e | gary@wpbsoccer.com</p>
            </div>
            <!--/.Second column-->
        </div>
    </div>

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright: WPB Soccer League
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
    

    
 <!-- Scripts -->   

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
    
</html>

<!-- in php

<select>
    while ($row = result ->fetch( .. ASSOC)) {
    echo "<option value = '$row['id']'> $row['name']</option>
    }

</select>

-->