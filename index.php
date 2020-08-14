<?php
error_reporting(0);
require_once 'conection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Al Ahli | Welcome</title>
    <link rel="stylesheet" href="style1.css">

	
</head>

	<header>
	<a href="index.php"><img src="alahlilogo.jpg" alt="alahlilogo" style="width:100px;height:120px;">
	
      <div class="container">
        <div id="branding">
		
          
			
		  
	        </div>
			
		
        <nav>
		
          <ul> 
            <li class="current"><a href="index.php">News</a></li>
            <li class="current"><a href="fixtures.php">Fixtures</a></li>
            <li class="current"><a href="players.php">Players</a></li>
            <li class="current"><a href="clubhistory.php">Club History</a></li>
            <li class="current"><a href="registration.php"> Become a Fan</a></li>
			<li class="current"><a href="ourpartners.php"> Our partners</a></li>
			
          </ul>
        </nav>
      </div>
    </header>
	

<body background="images/er.jpg">
<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
<h2>Latest Updates...</h2>


	
	<div class="container">
  <img src="images/N1.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>'The Young boys games are fundamental'-Manager</h1>
    
  </div>

</div>
</br>
	<table align="center">
		
			
		<tr style='font-weight:bold; background-color:#ffffff'><td background="images/news2.jpg" height="676" width="995"></td><td><h1>Tyler's stats: Smalling's scoring feat</h1></br><h5>It was a first competitive win at Wembley for Jurgen Klopp. He had lost the 2013 Champions League final with Borussia Dortmund against Bayern Munich, the League Cup final of 2016 to Manchester City and had a 4-1 defeat in the Premier League to Spurs last season.

Liverpool enjoyed their 10th win in 16 Premier League games in London under Klopp, but it was his first away to Spurs. He has now beaten all of the London clubs he has faced away in a Premier League game - with Fulham still to come this season So that means of those non-defenders still playing, Matt Ritchie now holds the record for most away matches without netting, which stands at 38 for Bournemouth and Newcastle.

</h5></td></tr>
	</table>

	</br>
	<table align="center">
		
			
		<tr style='font-weight:bold; background-color:#ffffff'><td background="images/news4.jpg" height="676" width="995"></td><td><h1>Sturridge seizes his chance</h1></br><h5>Roberto Firmino stole the show for Liverpool against Paris Saint-Germain with his stoppage-time winner but the substitute's magical moment came only after the man who had replaced him in the starting line-up had delivered one of his own.

Daniel Sturridge really is back now.

It was the 29-year-old striker who pounced to give Liverpool the lead against the French champions, nodding home from close range to convert Andrew Robertson's first-time cross.

</h5></td></tr>
	</table>
    
  </div>

</body>
    <footer>
      <p>© 2018, #Al-Ahli Football Club. All Rights Reserved</p>
      <a href="logout.php"><p>Log out</p>
      <a href="admin.php"><p>Admin Panel</p>
    </footer>
</html>