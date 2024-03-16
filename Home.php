<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Home Page</title>
<link rel="stylesheet" href="homestyle.css">
  
</head>

<body>

<header class="header">
  <a href="#" class="logo"><img src="Logo.png" alt=""></a>

  <nav class="navbar">
    <a href="" id="">Home</a>
    <a href="#" id="">AboutUs</a>
    <a href="#" id="">Faq</a>
    <a href="#" id="">Series</a>
    <a href="LoginRegister.php" id="">Sing Up</a>
  </nav>
  <div class="invisible"></div>
 

</header>

<div class="left">
                <br><br><br>
                <h2 id="text6">Animes</h2>
                <img class="images" id="slideshow">
                <button id="bt1" onclick="changeImg()">Next</button>
            </div>

<section class="home">
  <div class="text-content">
    <h2>The Akatsuki</h2>
    <span>Is now Assembled.</span>
    <p>The Akatsuki were not all evil. While they did have their own agenda, many of the members simply wanted to achieve peace and stability in the world. Unfortunately, their methods were often brutal and violent, which led to them being labelled as villains.</p>
    <div class="button">
      <button class="btn">Explore</button>
      <button class="btn">More</button>

    </div>
  </div>
  <div class="image">
    <div class="imageset1">
      <img src="Akatsukii.jpg" alt="">
    </div>
  </div>
</section>

<section class="about">
  <h2 class="heading">About <span>Akatsuki</span></h2>
  <div class="content">
    <img src="Itachii.jpg" alt="">
    <div class="text">
      <h2>Akatsuki Members Who Tried to change the NinjaWorld</h2>
      <h3>Pain,Itachi,Tobi,Hidan,Etc.</h3>
      <p>Akatsuki was the most feared organization in Naruto. Originally founded by Yahiko, it was turned into a criminal organization after his death. Feared far and wide, Akatsuki comprised of rogue ninjas from different villages. These included some of the strongest, most fearsome fighters in the entire series.</p>
      <br>
      <p>Itachi - To protect your country/nation. Sasori and Deidara - To be known in the world for creating diplomatic changes that last a long time (represented as bombs/terrorist attacks in countries and civil workers, politicians and soldiers being puppets of the government.) Zetsu - Protect land and nature/territory.</p>    
    </div>
  </div>


</section>


<script>
  let i=0;

  function changeImg(){
  let imgArray = ['luffy.jfif','berserk.jfif','Narutosh.jfif'].src =imgArray[i];

  if(i<imgArray.length -1){
    i++
  }else
  {
    i=0;
  }
}
document.addEventListener(onload, changeImg());
</script>
</body>
</html>