<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="./commonStyle.css">
    <link rel="stylesheet" href="style3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
        <div class="d1">
            <div class="titull">
                <div class="lista">
                    <h4>Crimson's</h4>
                    <ul>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Crimson's blog</a></li>
                    </ul>
                </div>
                <div class="lista">
                    <h4>Need Help?</h4>
                    <ul>
                        <li><a href="../Faq\Faq.php">FAQ</a></li>
                        <li><a href="../Contactus/Kontakt.php" onclick="con()">Crimson's Support</a></li>
                        <li><a href="../Contactus/Kontakt.php" onclick="con()">Contact Form</a></li>
                    </ul>
                </div>
                <div class="listap">
                    <h4>Payment Methods</h4>
                    <div class="ulp">
                        <a href=""><i class='bx bxl-visa'></i></a>
                        <a href=""><i class='bx bxl-mastercard' ></i></a>
                        <a href=""><i class='bx bxl-bitcoin' ></i></a>
                        <a href=""><i class='bx bxl-paypal' ></i></a>
                    </div>
                </div>
                <div class="lista">
                    <h4>Follow us</h4>
                    <div class="rrjetet">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <script >

    </script>    
</body>
</html>