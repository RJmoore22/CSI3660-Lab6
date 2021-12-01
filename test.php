<html>
<head>
<title>CSI3660 Project Webpage</title> </head>
<body>
<h1>Welcome to my CSI3660 website</h1>
 <p>
 Group Members:
Jonathan Slifkin, Ryan Moore, Angelo Arteche

Service and implementation plan:
Snake game hosted on web server has leaderboard


The service that we plan to implement is a web server that hosts the classic game of snake.The web server will be hosted on the google cloud platform. The service will consist of a menu, the game of snake, and games that have been played will have their score recorded and displayed on a leaderboard. The functionality for the game of snake has already been worked on. Information for the leaderboard will be stored and retrieved from a database.
To build this project our team will first finish programming the game itself using Java. Then we will implement the game files into a website and upload that onto the Google Cloud Platform Virtual Machine.The leaderboard will retrieve information including the users username and the score they achieved upon completion of a game, this information will be stored and retrieved in a MySQL database using SQL.
  </p>
<?php
echo "<img src='http://i.imgur.com/ITOi4Jn.gif' /><br />"; for ($i = 0; $i < 6; $i++) {
if (($i % 2) == 0) {
echo "<img src='https://i.imgur.com/6eXBVUq.gif' /><br />";
} else {
echo "<img src='https://i.imgur.com/rhVBbcS.gif' /><br />";
} }
?>
 </body>
 </html>

