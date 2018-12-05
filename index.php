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
    
?>

<!-- Stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"  href="css/main.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
    
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
        <a class="nav-link js-scroll-trigger" href="#register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="schedule.php">Fixtures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#standings">Standings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#gallery" >Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#rules">Rules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
      </li>
        
    </ul>
      
  </div>
</nav>  
    
<header class="masthead">
    <div class="container">
          <div class="intro-lead-in">W.P.B. SOCCER</div>
          <div class="intro-heading text-uppercase">West Palm's Premier Soccer League</div>
          <a id="btnLand" class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#about">Learn More</a>
      </div>
    
</header>
    
 <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
              <br />
            <p class="section-subheading">
WPB Soccer is a fun men’s rec league for adults aged 21 and up. We provide a fun and organized 7 v 7 soccer league for players of all skill levels. We cater for all players whether you are a rookie just starting to pick up soccer or the next Pele. All skill levels are welcome to play and enjoy the beautiful game. Don’t have a team? Don’t worry, just sign up as a free agent and we will find you a team. Every team gets a FREE pitcher at our sponsorship bar O’Shea’s Downtown WPB after every game. At WPB SOCCER we don’t just build teams and leagues, we build friendships through our pre season, post season parties, bus trips and social events. We’re more than just a league !!!<br />
                <br />
          </div>
        </div>
       </div>
    </section>
    
<!-- Register -->
    
    <section id="register">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Register</h2>
                     <br />
                 </div>
                <div class="col">
                    <h5>Free Agent</h5>
                    <p>Sign up as a free agent and we will find a team for you! You will be placed on the diviosion and team that best matches your skill level. Cost: $70</p>
                    <a id="btnRegi" class="btn btn-success btn-xl text-uppercase" href="https://www.paypal.com/webapps/shoppingcart?flowlogging_id=754fe9a3bd7f&mfid=1521498818079_754fe9a3bd7f#/checkout/openButton">Register</a>
                </div>
                <div class="col">
                    <h5>Team</h5>
                    <p>Create your own club and register your entire team with a one time payment. Cost: $600 cash | $650 online.</p>
                    <a id="btnRegi" class="btn btn-success btn-xl text-uppercase" href="https://www.paypal.com/webapps/shoppingcart?flowlogging_id=6f0c4074cfa93&mfid=1521498905563_6f0c4074cfa93#/checkout/openButton">Register</a>
                </div>
            </div>
        </div>
    </section>
    
<!-- League Table  -->
     <section id="standings">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">League Tables</h2>
                     <br />
                 </div>
                <div class="col">
                    <h5 class="text-center">Division A</h5>
                    <div class="divA">
                    </div>
                </div>
                <div class="col">
                    <h5 class="text-center">Division B</h5>
                    <div class="divB">
                    </div>
                </div>
                <div class="col">
                    <h5 class="text-center">Division C</h5>
                    <div class="divC">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery -->
    
    <section id="gallery" class="d-flex justify-content-center">
        <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Gallery</h2>
                     <br />
                 </div>
            <div class="row">
                <div class="mx-auto d-block">
                <div class="img-w mx-auto d-block">
                    <img src="https://sportpesatodaygames.com/wp-content/uploads/2018/03/fotbal_slavia_sparta2.jpg" alt="" /></div>
                <div class="img-w mx-auto d-block">
                    <img src="https://scontent.fmia1-1.fna.fbcdn.net/v/t31.0-8/11538159_631407046996913_3001722172131283998_o.jpg?oh=b06303c87a447189aa94816734d72747&oe=5B448645" alt="" /></div>
                <div class="img-w mx-auto d-block">
                    <img src="https://i2-prod.chroniclelive.co.uk/incoming/article12797757.ece/ALTERNATES/s615/IFP_BEM_230314footy_10JPG.jpg" alt="" /></div>
                <div class="img-w mx-auto d-block">
                    <img src="https://scontent.fmia1-1.fna.fbcdn.net/v/t31.0-8/11538990_631407723663512_6953094838412917421_o.jpg?_nc_cat=0&oh=eec704f2db92fc7eb0328a74e250c777&oe=5B3DD6D2" alt="" /></div>
                <div class="img-w mx-auto d-block">
                    <img src="https://scontent.fmia1-1.fna.fbcdn.net/v/t1.0-9/10527894_10154362703955384_84296516945320222_n.jpg?_nc_cat=0&oh=5777caca0bf9ad6788e75efbdd4bf8c7&oe=5B3ADB6F" alt="" /></div>
                <div class="img-w mx-auto d-block">
                    <img src="https://talksport.com/sites/default/files/field/image/201308/christian-eriksen_1.jpg" alt="" /></div>
                </div>
            </div>
        </div>
</section>
    
  <!-- Rules -->
    <section id="rules">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
              <br />
            <h2 class="section-heading text-uppercase">Rules</h2>
            <br />
            <p class="section-subheading">
                Any violence towards another player or match official will get you banned for life. If the same team gets 2 players banned for violent conduct, the team gets banned. No exceptions. Remember this is a fun Sunday rec league. No refund will be issued if player or team gets banned.
              </p>
              <ul class="section-subheading">

                  <li>7 Players On The Field | Two 22-Minute Halvs | Running Clock (Except For Injuries) | 5 Minute Halftime Interval</li>
                  <li>Ties During Regulas Season Remain A Tie | Playoff Ties Will Be Decided In Overtime & Penalty Shootout | Game Will Be Refereed By WPB Soccer Staff</li>
                  <li>No Slide Tackled | No Offside's</li>
              </ul>

          </div>
        </div>
       </div>
    </section>
    
    <!-- Button trigger modal -->
    <div id="rulesBtn" class="container">
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#rulesModal">
                Learn More
            </button>
            </div>

<!-- Modal -->
<div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="rulesModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">League Rules</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="section-subheading text-muted">
                COIN FLIP/BEGINNING OF GAME<br />
<br />
• The beginning of the game will start with the WPB Soccer staff using an “odd/even,” or coin flip. The winning team will then have one of two options: kick-off or choose a goal to defend.<br />
<br />


REFEREES<br />
<br />


• Palm Beach Soccer will provide a paid referee for each soccer match. Referees will have final say in any judgment call or issue regarding rules. Referees have the power to remove any player(s) from a game and/or the league, if deemed necessary. Any rules clarification must be brought to the attention of a PBS staff member prior to the continuance of the game.<br />
<br />


KICKOFF<br />
<br />


• Consists of the ball being placed at midfield. The ball must complete 1 full forward rotation before touched by another player.<br />
<br />


TEAM SIZE AND ROSTERS<br />
<br />


• Each team shall field 7 players on the field at one time. PBS rules allow a team to play a legal game shorthanded with as few as 5 players. Teams may have as many players on their roster as they want but we recommend keeping it at 13 or below to ensure everyone has ample playing time. Registered teams may draft players during the regular season. A play off roster of no more than 14 players will be required to be submitted for teams that make it to the playoffs. Any violation of the roster rules for playoffs will result in a forfeit.<br />

<br />

FORFEITS<br />
<br />


• Teams will have until 10 minutes past the designated start time to field a legal team. Shorthanded teams may play a legal game with a minimum of 5 players.Teams fielding less than 5 players. Exception: Teams may play a “legal game” with less than 5 players with the opposing teams consent. Teams who agree to play under these conditions will lose the option of receiving a forfeit win. Teams may pick up non-roster players during the regular season in order to field a full team. Non-roster players will not be allowed during playoffs.<br />
<br />


SUBSTITUTIONS<br />
<br />


• Teams may substitute “on the fly.” There is no limit on the amount of substitutions per team/per game. *NOTE in order to substitute a player the original player must be off the court/field before the new player enters the field of play. Any violation of this rule will result in a two-minute penalty where they must play a man down. During the course of the regular season teams are allowed to “pick up” players in order to field a full team. In playoffs no non-roster players will be allowed to play.<br />
<br />


TIME<br />
<br />


• Play will be divided into (2) 25 minute halves separated by a brief halftime. There will be a running clock maintained by the referee. The clock will stop only during injuries.<br />
<br />


TIE GAMES/SCORING<br />
<br />


• Regular season games ending in a tie score will be recorded as tie games. Sudden death will be used in the playoffs.<br />
<br />


RULES<br />
<br />


• GOALKEEPERS -<br />
<br />


Teams will be allowed to have a designated goalkeeper.<br />
<br />


• THE GOAL BOX -<br />
<br />


A goal box will be marked off in front of each goal. All goal kicks will be taken from the goal box.<br />
<br />


• YELLOW/RED CARDS -<br />
<br />


Yellow and Red cards will be issued to player for offenses deemed necessary by the referee. These offenses include but are not limited to: Un sportsmanlike conduct, Excessive Challenges. Physical Play, etc. If a yellow card is issued to a player it will result in a two-minute penalty where the offending team will play down one player for two minutes or until a goal is scored against the offending team. If a red card is issued to a player that player will be ejected from the contest and their team will be assessed a 4 minute penalty where they will play down one player for four minutes or until two goals are scored against them. After the end of the penalty they may return to full strength, but the offending player cannot return to the game. Any player who is ejected is subject to an additional one game suspension. Two yellow cards in one contest is equivalent to a red card.<br />
<br />


• FREE KICK -<br />
<br />


All free kicks are indirect or direct based upon FIFA regulations. A team receives a Free Kick after stoppages other than when a Dropped Ball or Goalkeeper Throw-In is required. Before the team takes the Free Kick, the ball must be stationary. All opposing players are at least 8 yards from the spot of the Free Kick. The spot of the Free Kick is from where the foul occurred. Advantage is played until the referee deems it not to be of advantage to the fouled team. The goalkeeper may not pick up the ball with his hands from a back pass or a throw in from a member of his own team.This will result in an indirect free kick.<br />
<br />


• SLIDE TACKLING –<br />
<br />


Slide tackling will not be allowed. Intentional slide tackles will result in an indirect kick being awarded to the opposing team at the point of the infraction. Multiple violations will result in yellow card to the offending player and possible ejection from the game (red card.)<br />
<br />


• OFFSIDE'S -<br />
<br />


No Offside’s<br />
<br />


• OUT OF BOUNDS -<br />
<br />


Anytime the ball goes over the designated lines the ball is considered out of bounds. The  team will put the ball back into play from the spot where the ball went out of bounds<br />
<br />


• FIGHTING –<br />
<br />


Fighting is not allowed and will NOT be tolerated. All parties involved in fighting will be subject to ejection from the game at the referees discretion and subject to ejection from the league at PBS staff discretion.<br />
<br />


STANDINGS<br />
<br />


• Standings will be posted online.<br />
<br />


PLAYOFFS<br />
<br />


• Playoffs will follow the last week of regular season and will be single elimination.<br />
<br />


• SEEDING – Teams will be seeded based upon a points system. Teams will be awarded 3 points for a win, 1 point for a tie, and 0 points for a loss. In most cases all teams will advance to playoffs as long as they are not in violation of the forfeit policy. *Note: In some situations the last ranked team in the league may not be eligible for playoffs. This will be decided on a league by league basis.<br />
<br />


• PLAYOFF GAMES – Playoff games will follow the same format as the regular season. If teams are tied at the end of regulation time in the playoffs, sudden death will be used. A sudden death overtime will involve a (2) five-minute halves. If neither team scores during the sudden death overtime period, there will be a penalty shootout.<br />
<br />


SHOOTOUT SPECIFICS:<br />
<br />


1. Each team selects 5 players - any player can be selected even if they are not playing at the end of regulation. A coin toss will decide which team shoots first. The referee will decide which goal to shoot. Shots will be placed and not dribbled.<br />
<br />


2. Teams will take alternating direct penalty shots from 15 paces off the goal line.<br />
<br />


3. If tied after the 1st round, the 2nd round will be SUDDEN DEATH i.e. 1st player from Team A scores & 1st player from Team B misses - Team A wins. Players who shot in the 1st shootout are not eligible to shoot again until all remaining players present have shot. If and when 1 team begins to utilize players for the second time, the other team may “recycle” players as well.<br />
<br />


LEAGUE POLICIES<br />
<br />


GAMES:<br />
<br />


During the regular season one game will be played within time allotted. Games will be divided into (2) 22-minute halves with a brief half-time break. During the regular season, no overtime will be used. The clock runs continuously during the game except for an injury.
<br />


SPORTSMANSHIP:<br />


<br />
The idea of West Palm Beach Soccer is to have fun. We hope that all participants keep that in mind when becoming involved. Although the games may become intense, you still can be competitive while maintaining good sportsmanship. With this being said, any behavior deemed unacceptable by staff may result in suspension and/or ejection from a game or the league. Abuse of officials/referees and other staff will not be tolerated. WPBSoccer reserves the right to remove a player from a game or a league if they are considered to be bringing down the quality of the league. WPBSoccer will not tolerate fighting! Fighting will be an automatic ejection from any game and in most cases ejection from the league for the remainder of the season. There will be no refund to any player or team for suspensions or life time bans.<br />


<br />
FORFEITS:<br />


<br />
If your team forfeits a match during the season, the following rules apply:<br />
<br />
First Offense: Loss of game and warning issued.<br />
<br />
Second Offense: Loss of game and staff reserves the right to remove team from playoffs.<br />
<br />
Third Offense: Removal from the league<br />


<br />
Any forfeited game will result in an automatic 3-0 win to the other team.<br />


<br />
If you know in advance that your team is going to forfeit a game, we encourage you to call our office so as to help us schedule your opponent a game. This does not mean that your team will not receive the loss as a forfeit.<br />


<br />
Teams have until ten minutes past the designated start time to field a full squad (or the league minimum of players required according to rules). If at that time a team is unable to field a legal team, it will be up to the staff and the opposing captain to determine whether a team will receive a forfeit win or if a team will allow the opposing team to play a legal game with less than league minimum of players required according to the rules.<br />
<br />
STANDINGS:<br />
<br />
The updated standings will be posted weekly. The standings will be posted on our website The standings will display each teams rank. Rank is based on a points system. Teams will be awarded 3 points for a win, 1 point for a tie, and 0 points for a loss.<br />
<br />
PLAYOFFS:<br />
<br />
Playoffs will begin immediately following the end of the regular season and will typically last between 1 week. After teams have been seeded according to their records all captains will receive an email with the 1st week of playoff game times roughly 3 days before their league. Teams will not receive an email or any other weeks of playoffs! It is ALL TEAMS responsibility to check the playoff brackets at the league or online to find out what time they will be playing the following week if they win. In playoffs it is not uncommon, (and in some cases will be necessary), for teams to have more than one match in a given day. No non-roster players will be allowed during playoffs. All players must have signed the waiver by the second week of the season in order to be eligible for playoffs. All eligible teams will make the playoffs. Playoff eligible teams will be determined on a league by league basis. Teams that have violated the forfeit policy during the course of regular season will not be eligible for playoffs. In certain situations teams at or near the bottom of the standings may not advance to the playoffs. Check with PBS league coordinator to see if this applies to your league. Playoffs are single elimination.<br />
<br />
Seeding:<br />
<br />
Teams are seeded according to winning percentage, In the event of a tie we also evaluate head to head, point differential, strength of schedule and various other criteria. Teams may be dropped from their regular season level based on the above criteria. Teams may play more than one game per day/night, and/or play games on days/nights other than the regularly scheduled league day/night if necessary. PBS reserves the right to schedule playoff games on days other than the leagues regularly scheduled night.<br />
<br />
WAIVERS:<br />
<br />
In order to participate in the league, each participant must sign the team waiver. Waivers are provided at the facility must be completed before participating. Players not present the first week of play will still be required to sign a waiver with our staff before participating. Players must sign the waiver by the second week of the season in order to be eligible for playoffs.v
<br />
PLAYER ELIGIBILITY:<br />
<br />
Any questions regarding rules, policies, or eligibility of players must be addressed before the start of the playoff game. Any team that would like to challenge the eligibility of an opposing player must do so before the start of the game. Players who have been placed on the roster and signed the waiver are eligible for playoffs. A formal protest may be filed before a game if an opposing player’s eligibility is in question. The player in question will be required to provide his/her player information (name, address, phone #, signature) in writing to a PBS staff member prior to the start of the game. This qualifies as an official protest. Any protest made during a game or after a game will NOT be considered a formal protest. The game will then be played in its entirety as scheduled. Teams will be notified of all rulings on the identified eligibility discrepancy by the following business day – decisions will not be made on site. If the protest is proven to be legitimate, it will result in the forfeiture of the game in question. Games subsequent to the protested game may be rescheduled. The above procedure will also apply for any other “logged” protests. All rulings by PBS staff are considered final.<br />
<br />
STAFF:<br />
<br />
To coordinate and run the league, our refs and/or staff will be available at all times to help the league run as smoothly as possible. If you have questions regarding schedules, policies, rule interpretations, directions to the sponsor bar, etc. please ask.<br />
<br />
LEAGUE CANCELLATION/RAINOUT:<br />
<br />
Leagues may be canceled due to extreme weather conditions, dangerous or unplayable surface conditions, facility constraints, etc. PBS staff makes every effort to play all scheduled games, thus we will not cancel games until absolutely necessary. Therefore, if you are calling concerning a decision on a cancellation, remember we will not have an answer until close to the start of the league.<br />
<br />
If the league is canceled, PBS staff will change the weather hotline immediately. CSSC will then email/text all of the captains to let them know (if possible.) It is then the captains responsibility to inform all teammates of the cancellation. If a league is canceled on site, PBS staff will attempt to contact those teams still scheduled to play the remainder of the league day/night. Depending on the time of cancellation, some teams will have to be notified on site. If we do cancel, follow next week’s schedule (ex. If April 13 is cancelled teams should follow the April 20 schedule for their next game). The games that are cancelled will be made up towards the end of the season if time allows. In extreme circumstances, PBS reserves the right to run a shortened season without a refund. PBS also reserves the right to schedule games on days other than your regularly scheduled league day/night if necessary.<br />
<br />
PRIZES/T-SHIRTS:<br />
<br />
The winning team will recieve a trophy that must be returned at the start of new season<br />
<br />
REFUNDS<br />
<br />
Refunds will be given on a case by case basis. Refunds will NOT be done for individuals or teams that get banned from the league for un sportsmanlike behavior, fighting, abuse to official, WPB Soccer staff or volunteers.<br />
              </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>
</div>
    
<section id="contact">    
 <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
              <br />
            <h2 class="section-heading text-uppercase">Get In Touch!</h2>
              <br />
            <p class="section-subheading">
If you're ready to join the league or just curious about the process, give us a call or fill out our contact form below. We will be happy to answer any of your questions.<br />
                <br />   
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
 <script src="js/index.js"></script>
<script src="js/leagueTable.js"></script>


</body>
    
</html>