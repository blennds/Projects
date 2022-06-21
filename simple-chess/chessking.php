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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="icon" href="img/logo.png" type="image/x-icon">  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>ChessKing</title>  
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  
 
</head>
<body>
    <header >
 <nav>
   <ul class="mainMenu">
     <li><a href="chessking.php" class="active">Home</a></li>
     <li><a href="play.php">Play</a></li>
     <li><a href="logout.php">Log Out</a></li>
   </ul>
 </nav>
<div class="logo">
<img src="img/logo.png" alt="LOGO">
 <h1>CH<span>essKi</span>NG</h1>
</div>
      
</header>
   <section id="sec-1">
      <video src="Checkmate.mp4" autoplay loop muted ></video>
   </section>

  
  <a href="#sec-1">
       <button class="arrow-btn"><h1>↑</h1></button>
        </a>

  
      <div class="text">
          <h1>CH<span>essKi</span>NG</h1>
          <p>Play chess , Raise your IQ</p>
          
        <a href="#sec-2">
       <button >How to Play?</button>
        </a>
      </div>

 
  


  <section id="sec-2">
 <div class="square">
    <h1 class="heading">How to Play?</h1>
    
 

    
<div class="chess-board"> 

  <div class="chess-board-information"> 
  <h1 class="chess-heading">Chess Board</h1>
  <p class="chess-paragraph">A chessboard is a gameboard used to play chess. It consists of 64 squares, 8 rows by 8 columns, on which the chess pieces are placed. It is square in shape and uses two colours of squares, one light and one dark, in a checkered pattern. During play, the board is oriented such that each player's near-right corner square is a light square. The pieces are set out as shown in the photo. Thus, on White's first rank, from left to right, the pieces are placed in the following order: rook, knight, bishop, queen, king, bishop, knight, rook. On the second rank is placed a row of eight pawns. Black's position mirrors White's. The correct positions of the king and queen may be remembered by the phrase "queen on her own color" ─ i.e. the white queen begins on a light square and the black queen on a dark square. </p>
  </div>
  
  
 <div class="board">  
<img src="img/chess-boardd.png" alt="CHESS BOARD">
</div>
</div>



      <div class="chess-board-reverse"> 

  <div class="chess-board-information-reverse"> 
  <h1 class="chess-heading-reverse">Movement</h1>
  <p class="chess-paragraph-reverse">White moves first, after which players alternate turns, moving one piece per turn, except for castling(moving the king two squares toward a rook of the same color on the same rank, and then placing the rook on the square that the king crossed), when two pieces are moved. A piece is moved to either an unoccupied square or one occupied by an opponent's piece, which is captured and removed from play. All pieces capture by moving to the square that the opponent's piece occupies. A player may not skip a turn, even when having to move is detrimental. Each piece has its own way of moving. In the diagrams, the dots mark the squares to which the piece can move if there are no intervening pieces of either color (except the knight, which leaps over any intervening pieces). All pieces except the pawn can capture an enemy piece if it is located on a square to which they would be able to move if the square was unoccupied. The squares on which pawns can capture enemy pieces are marked in the diagram with black crosses. </p>
  </div>
  
  
 <div class="board-reverse">  
<img src="img/movement.png" alt="CHESS BOARD">
</div>
</div>

   

      <div class="chess-board"> 

  <div class="chess-board-information"> 
  <h1 class="chess-heading">Movement</h1>
  <p class="chess-paragraph">The king moves one square in any direction. There is also a special move called castling that involves moving the king and a rook. The king is the most valuable piece, attacks on the king must be immediately countered, and if this is impossible, immediate loss of the game ensues.<br>
A rook can move any number of squares along a rank or file, but cannot leap over other pieces. Along with the king, a rook is involved during the king's castling move.<br>
A bishop can move any number of squares diagonally, but cannot leap over other pieces.<br>
A queen combines the power of a rook and bishop and can move any number of squares along a rank, file, or diagonal, but cannot leap over other pieces.<br>
A knight moves to any of the closest squares that are not on the same rank, file, or diagonal. (Thus the move forms an "L"-shape).<br>
A pawn can move forward to the unoccupied square immediately in front of it on the same file, or on its first move it can advance two squares along the same file. A pawn can capture an opponent's piece on a square diagonally in front of it by moving to that square. It cannot capture a piece while advancing along the same file.  </p>
  </div>
  
  
 <div class="board">  
<img src="img/chess-pieces.jpg" alt="CHESS BOARD">
</div>
</div>

      <div class="chess-board-reverse"> 

  <div class="chess-board-information-reverse"> 
  <h1 class="chess-heading-reverse">Check and Checkmate</h1>
  <p class="chess-paragraph-reverse">When a king is under immediate attack, it is said to be in check. A move in response to a check is legal only if it results in a position where the king is no longer in check. This can involve capturing the checking piece; interposing a piece between the checking piece and the king (which is possible only if the attacking piece is a queen, rook, or bishop and there is a square between it and the king); or moving the king to a square where it is not under attack. Castling is not a permissible response to a check.<br>
The object of the game is to checkmate the opponent; this occurs when the opponent's king is in check, and there is no legal way to get it out of check. It is never legal for a player to make a move that puts or leaves the player's own king in check. In casual games, it is common to announce "check" when putting the opponent's king in check, but this is not required by the rules of chess and is not usually done in tournaments. </p>
  </div>
  
  
 <div class="board-reverse">  
<img src="img/checkmate.jpg" alt="CHESS BOARD">
</div>
</div>




  </section>



<footer>
  <div class="container">
    <div class="row">
      <div class="footer-navigation col-sm-12 col-md-6 col-lg-3 ">
<h2>Navigation</h2>
<ul>
  <li><a href="chessking.php" class="">Home</a></li>
  <li><a href="play.php">Play now</a></li>
  <li><a href="change-pass.php">Change Password</a></li>
  
</ul>

  </div>
 
  <div class="footer-follow col-sm-12 col-md-6 col-lg-3 ">
<h2>Follow</h2>
<ul>
  <li><a href="#"  target="_blank">Facebook</a></li>
  <li><a href="https://www.instagram.com/dionhoti1/?hl=en" target="_blank">Twitter</a></li>
  <li><a href="#" target="_blank">Linkedin</a></li>
</ul>
  </div>

 <div class="footer-contact col-sm-12 col-md-6 col-lg-3">
<h2>Contact</h2>
<ul> 
  <li><b>Email: <br> cheskingat@gmail.com </li>
  <li>Tel: <br> 049/674/727</b></li>
</ul>

  </div>
  <div class="footer-legal col-sm-12 col-md-6 col-lg-3">
<h2>Legal</h2>
<ul>
  <b><li>Legal</li>
  <li>Privacy</li></b>
</ul>

  </div>
  </div>
</div>

  <div class="footer-bottom">
   <p> copyright &copy;2022 All rights reserved</p>
  </div>
</footer> 

  

<script>

   $(".arrow-btn" ).hide();  
$(document).ready(function(){
  $(window).scroll(function(){
  	var arrow = $(window).scrollTop();
	  if (arrow > 600) {
	    $(".arrow-btn").show();
	  }

	  else{
		  $(".arrow-btn" ).hide(); 
	  }
  })
})

  
  
  
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 600) {
	    $("header").css("background" , "lightblue");
	    $("header").css("transition" , "1s");
	  }

	  else{
		  $("header").css("background" , "#1f1f1f");  	
	    $("header").css("transition" , "1s");
	  }
  })
})

  
</script>

</body>
</html>