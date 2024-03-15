<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="./commonStyle.css">
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    <!-- Header -->
    <header>
        <div id="logo">
            <a href="./index.html">
                <img src="./img/logo-white.png" alt="">
                </a>
        </div>
        <ul class="nav" id="nav">
            <ul class="navLogo">
                <a href="./index.html">
                    <img src="./img/logo-white.png" alt="">
                </a>
            </ul>
            <li class="nav-link"><a href="MainPage.html">Home</a></li>
            <li class="nav-link"><a href="">About Us</a></li>
            <li class="nav-link"><a href="./contact.html">FAQ</a></li>
            <li class="sociallinkContainer">
                <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
            </li>
        </ul>
        <div id="barContainer">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </header>

    <!-- Contact form -->
    <?php
    $Message = "";

    if(isset($_GET['error']))
    {
        $Message = "Please Fill in the Blanks ";
        echo '<div class = "alert alert-danger">'.$Message.'</div>';
    }
           
    if(isset($_GET['success'])){

       $Message = "Message Has Been Sent";  
       echo '<div class = "alert alert-danger">'.$Message.'</div>';
    }

    ?>
    <section class="gridSection contactSection">
        <div class="contactformContainer">
            <h1 class="sectionHeader">Get in touch</h1>
            <form action="contactus.php" class="contactForm">
                <div>
                    <input type="text" name="UName" id="" placeholder="UserName" class="contactInput">
                    <input type="text" name="email-signup" id="" placeholder="Email" class="contactInput">
                </div>                               
                <textarea name="Message" id="" cols="30" rows="5" placeholder="Message" class="contactInput"></textarea>
                <button type="submit" name="btn-send" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

    <h1 class="addressHeader">Find us Quickly</h1>
    <div class="address">
        <div class="eachAddress">
            <h1>Prishtine</h1>
            <p>Phone: (383) 49-423338</p>
            <p>Address: RR.SelimBajramaj 4</p>
            <p>Email: EltonSahitaj@website.com</p>
        </div>

      

        
    <!-- footer -->
    <footer>
        <div class="joinSection">
            <div class="joinDesc">
                <h1 class="sectionHeader">Join with us</h1>
                <p class="sectionPara">
                    Once you have created your account, you can purchase Anime Gifts from website
                </p>
            </div>
            <button class="btn primaryBtn">JOIN NOW</button>
        </div>

        <div class="footerCopyright">
             <p>&copy; 2023 AnimePage By EltonSahitaj<a href="#" class="developedBy">Anime Insider</a>.</p>
        </div>
    </footer>

    <script >

    </script>    
</body>
</html>