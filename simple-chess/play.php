<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="lib/chessboardjs/css/chessboard-0.3.0.css">
    <link rel="stylesheet" href="play.css">
  <link rel="icon" href="img/logo.png" type="image/x-icon">  
</head>
<body>
 <header >
 <nav>
   <ul class="mainMenu">
     <li><a href="chessking.php" >Home</a></li>
     <li><a href="play.php" class="active">Play</a></li>
     <li><a href="logout.php">Log Out</a></li>
   </ul>
 </nav>
<div class="logo">
<img src="img/logo.png" alt="LOGO">
 <h1>CH<span>essKi</span>NG</h1>
</div>
      
</header><br>



  
<div id="board" class="board">
  </div>
<div class="info">
    Niveli i veshtiresis:
    <select id="search-depth">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3" selected>3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <br>
    <span class="span">    Pozitat e shikuara: <span id="position-count"></span></span>
    <br>
    <span class="span" >Koha: <span id="time"></span></span>
    <br>
    <span class="span">Pozitat per sekond: <span id="positions-per-s"></span> </span>
    <br>
    <br>
    <div id="move-history" class="move-history">
    </div>
</div>
<script src="lib/jquery/jquery-3.2.1.min.js"></script>
<script src="lib/chessboardjs/js/chess.js"></script>
<script src="lib/chessboardjs/js/chessboard-0.3.0.js"></script>
<script src="script.js"></script>
<script>

</script>
</body>
</html>