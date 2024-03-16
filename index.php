<?php
if(!isset($_SESSION))
{
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
    />
    <title>Anime World</title>
    <link rel="stylesheet" href="page_style.css" />
  </head>

  <body>
    <header>
    <div class="wrapper">
      <div class="page-1">
        <!-- background image starts -->
        <div class="header">
          <div class="logo">
            <img src="Logo.png" alt="Logo" />
          </div>
          <div class="container-1">
            <div class="home border"><a href="Home.html">Home</a></div>
            <div class="home border"><a href="ContactUss.php">About Us</a></div>
            <div class="home border"><a href="#">FAQ</a></div>
            
          

            <?php include '../includes/navbar.php'; ?>
          
            </div>
      </header>
        <div class="explore"><a href="#">EXPLORE</a></div>
    
      <!-- background image ends -->
      <!-- Contents starts -->
      <div class="page-2" id="popular">
        <!-- Inside Contents starts -->
        <div class="container-2">
          <h1>POPULAR</h1>
          <div class="content">
            <div class="image"><img src="luffy.jfif" alt="One Piece" /></div>
            <div class="article">
              <h1>One Piece</h1>
              <p>One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. 
                It has been serialized in Shueisha's shōnen manga magazine Weekly Shōnen Jump since July 1997
                , with its individual chapters compiled in 108 tankōbon volumes as of March 2024.
              </p>
              

            </div>
          </div>
          <div class="content">
            <div class="image">
              <img src="Berserk.jfif" alt="Berserk" />
            </div>
            <div class="article">
              <h1>Berserk</h1>
              <p>
                Berserk is a Japanese manga series written and illustrated by Kentaro Miura.
                 Set in a medieval Europe-inspired dark fantasy world, the story centers on the characters of Guts
                , a lone swordsman, and Griffith, the leader of a mercenary band called the "Band of the Hawk"
               
              </p>
            </div>
          </div>
          <div class="content">
            <div class="image"><img src="NarutoSh.jfif" alt="Naruto" /></div>
            <div class="article">
              <h1>Naruto</h1>
              <p>
                Naruto Uzumaki, is a loud, hyperactive, adolescent ninja who constantly searches for approval and recognition on his journey to becoming Hokage in his village.
First episode date: October 28, 2009 (USA)
               
              </p>
            </div>
          </div>

          <div class="content">
            <div class="image"><img src="" alt="" /></div>
            <div class="article">
              <h1></h1>
              <p>
                
               
              </p>
            </div>
          </div>

          <div class="content">
            <div class="image"><img src="" alt="Naruto" /></div>
            <div class="article">
              <h1></h1>
              <p>
               
              </p>
            </div>
          </div>
          
    </div>

    <?php include("../includes/footer.php"); ?>
  </body>
</html>