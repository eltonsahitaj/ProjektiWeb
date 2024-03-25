<?php
if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Site</title>
    <link rel="icon" href="../../img/logo.png" type="image/icon">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>
    <style>
      .background-text a {
    color: white;
    text-decoration: none;
}
    </style>
</head>
<body>
    
  <?php include '../includes/navbar.php'; ?>

  <main>
    <img class="main-image" src="../image/bg.png" alt=""> 
    </main>
    <div class="container">
    <p class="p-main">Anime <br> <span style="font-size: 14px;"> Conservation About Anime</span></p>

    <p class="p-header1">What is this Anime Organization?</p>
        <p class="p-maintext">Anime is hand-drawn and computer-generated animation originating from Japan.<br>
        Outside Japan and in English, anime refers specifically to animation produced in Japan.<br> 
        However, in Japan and Japanese, anime describes all animated works, regardless of style or origin<br> 
              </p>
    </div>

    <table>
                <tr>
                    <th><span class="orange">CONSERVATION</span> STATUS
                        VULNERABLE</th>
                    <th><span class="orange">POPULAR ANIMES</span>
                        ONE PIECE</th>
                    <th><span class="orange">EPISODES</span>
                        1 TO 1100 EPISODES AND CONTINUING</th>
                </tr>
                <tr>
                    <th><span class="orange">WRITER</span>
                    Eiichiro Oda <br> It has been serialized in Shueisha's shōnen manga magazine Weekly Shōnen Jump since July 1997</th>
                    <th><span class="orange">DESCRIBES</span>
                    One Piece has received praise for its storytelling, world-building, art, characterization, and humor</th>
                    <th><span class="orange">AWARDS</span>
            It has received many awards and is ranked by critics, reviewers, and readers as one of the best manga of all time.</th>
                </tr>
                <tr>
                    <th><span class="orange">Naruto</span>
                    Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. </th>
                    <th><span class="orange">ABOUT</span>
                    It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</th>
                    <th><span class="orange">EPISODES</span>
                        1 TO 400</th>
                </tr>
     </table>
     
     <div class="container">
     <div class="all">
                <div class="right">
                    <img class="lion-female" src="../image/luffy.jfif" alt="">
                   
                </div>
                <div class="left">
                    <p class="p-main1">Anime Lovers</p>
                    <p class="p-main2">Monkey D.Luffy The Future PirateKing</p>
                    <p class="p-main3">Monkey D. Luffy, also known as "Straw Hat" Luffy, is a fictional character and the protagonist in the Japanese manga series One Piece created by Eiichiro Oda. Luffy made his debut as a young boy who acquires the properties of rubber after accidentally eating one of the Devil Fruits that belonged to "Red Hair" Shanks.</p>
            
                    <p class="p-main2">Goku(Kakarot)The Sayian</p>
            
                    <p class="p-main3">Goku is introduced as an eccentric, monkey-tailed boy who practices martial arts and possesses superhuman strength. He meets Bulma and joins her on a journey to find the seven wish-granting Dragon Balls. Along the way, he finds new friends who follow him on his journey to become stronger.</p>
            
                    <p class="p-main2">Naruto Uzumaki</p>
                    <p class="p-main3">Naruto Uzumaki is the titular protagonist of the manga Naruto, created by Masashi Kishimoto. He is a ninja from the fictional Hidden Leaf Village. As a boy, Naruto is ridiculed and ostracized on account of the Nine-Tailed Demon Fox—a malevolent creature that attacked Konohagakure—that was sealed away in his body.</p>
            
                </div>
     </div>
     </div>
     <br><br><br>
     <div class="main-continue">
    <div class="container solutions">
    <div class="mcone">
        <br>
        <p class="p-main1">Where To Watch</p>
        <p class="p-main2">Here or Aniwatch.To</p>
        <p class="p-main3">Unique storytelling: Anime often presents storytelling in unique and creative ways. It can incorporate complex narratives, character development, and plot twists that captivate and engage viewers. Artistic creativity: Anime showcases diverse art styles and animation techniques.
            </p>
            <br>
            <img style=" width: 100%;" src="../image/NarutoSh.jfif" alt="">
    </div>
    <div class="mctwo">
        <br>
        <br>
        
        <img style="width: 100%;" src="../image/dragonball.jpg" alt="">
        <br>
        <br>
        
        <p class="p-main3">Anime provides a unique window into Japanese culture, traditions, and societal norms. Through its narratives, settings, and character interactions, viewers can gain a deeper understanding of Japanese customs, folklore, and historical events..</p>
        <br>
        <br>
    </div>
    
</div>

   

<?php include("../includes/footer.php"); ?>




</body>
</html>

