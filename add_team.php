<!DOCTYPE html>
<html lang="en">
    
<head>
    
<!-- Database -->
<?php 
    
$db = new PDO( "mysql:host=localhost;dbname=Team","root",
"root"  );

    
// Insert Team Info Into Database
    $insert = "INSERT INTO team_name ( id, name, league )  VALUES ('".$_GET['id']."', '".$_GET['name']."', '".$_GET['league']."')";
    echo "<h1>*" . $insert . "*</h1>";
    
    $result = $db -> query($insert);
    
    // Perform the query:
$teams = $db->query( "SELECT * FROM `team_name`" ); // E.g. SELECT * FROM team_name
// Fetch the results of the query:
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
    

    <div class="container">
          <div class="intro-lead-in">W.P.B. SOCCER</div>
          <div class="intro-heading text-uppercase">Add New Team</div>
      </div>
    
    
 <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <form action="add_team.php?">
        <input type="text" name="id" placeholder="Team ID">
        <input type="text" name="name" placeholder="Team Name">
        <select name="league">
            <option value="Division A">Division A</option>
            <option value="Division B">Division B</option>
            <option value="Division C">Division C</option>
        </select>
        <input type="submit" value="Add Team" name="add_team">
        
            </form>
            
          </div>
        </div>
       </div>
    </section>
    
<?php while ( $row = $teams->fetch( PDO::FETCH_ASSOC ) ) {
 // Do something with $row, which is an array containing a row of data...
//close PHP
    ?>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
       <table>       
       <tr>
            <td>
                <?= $row['id'] ?>
            </td>
    
            
            <td>
                <?= $row['name'] ?>
            </td>
            
            <td>
                <?= $row['league'] ?>
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
 <!-- Scripts -->   

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
    
</html>