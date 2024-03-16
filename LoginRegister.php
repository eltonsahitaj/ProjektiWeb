<?php
if(!isset($_SESSION)){
    session_start();
}

require();
if(isset($_POST['submit'])){
    $Modeli = new Modeli();

    $Modeli->setEmail($_POST['Email']);
    $kontrollo = $Modeli->kontrollo();

    if($kontrollo==true){
        $_SESSION['Email'] = true;
        session_destroy();

    }else{
        $Modeli->setUsername($_POST['Username']);
        $Modeli->setEmail($_POST['Email']);
        $Modeli->setPassword($_POST['Passwordi']);

        $Modeli->insertoDhenat();
        session_destroy();
        
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>

    <title>Login Form</title>
    
</head>

<body>

    <div class="box">
        <div class="flip-card-inner">
            <div class="box-login">
                <ul>
                    <form name="Login" action="LoginRegister.php" method="POST" onsubmit="validimiLogIn()">
                      <?php
                      if(isset($_SESSION['PasswordGabim']))
                      {
                        echo
                        '<script>alert("Passwordi eshte gabim!");</script>';
                      }
                      if(isset($_SESSION['Emaili Eshte Gabim']))
                      {
                        echo
                        '<script>alert("Emaili eshte gabim!");</script>';

                      }
                        
                      ?>
                      <h1>LOGIN</h1>

                        <div class="email-login">
                            <input class="inpt" type="email" name="email" id="" placeholder="Email " required>
                            <i class='fa fa-envelope'></i>
                        </div>

                        <div class="password-login">
                            <input class="inpt" type="password" name="password" id="password-login"
                                placeholder="Password" required>
                            <i id="eye-login" class="fa fa-eye-slash"></i>
                        </div>

                        <div class="forget">
                            <input type="checkbox" name="checkbox1" id="checkbox">
                            <label for="checkbox">Remember me</label>
                            <a href="#">Forget Password?</a>
                        </div>
                        <button type="submit" onsubmit="validimiLogin()" class="btn" ><a> href="index.php"></a>LOGIN</button>
                    </form>
                    <div class="register-link">
                        <p>Dont have an account? <a href="#" onclick="flip()">Sign Up</a></p>
                    </div>
                </ul>
            </div>
            <div class="box-signup">
                <ul>
                    <form name="Signup" action="LoginRegister.php" method="POST" onsubmit="">
                      
                    <?php
                    print_r($_POST);
            if (isset($_SESSION['regMeSukses'])) {
              echo '<script>alert("U regjistrua me sukses!");</script>';
      }
      if (isset($_SESSION['emailkziston'])) {
        echo '<script>alert("Email ekziston");</script>';
      }
      elseif(isset($_SESSION['nrleternjoftimitEkziston'])) {
        echo '<script>alert("Username-i ekziston");</script>';
      }
      ?>         
                    
                    
                    
                    <h1>SIGN UP</h1>
                        <div class="user-signup">
                            <input class="inpt" type="text" name="" id="username" placeholder="User Name">
                            <i class="fa fa-user"></i>
                        </div>

                        <div class="email-signup">
                            <input class="inpt" type="email" name="email" id="email-login" placeholder="Email "
                                required>
                            <i class='fa fa-envelope'></i>

                        </div>

                        <div class="password-signup">
                            <input class="inpt" type="password" name="password" id="password-signup"
                                placeholder="Password" required>
                            <i id="eye-signup" class="fa fa-eye-slash"></i>

                        </div>

                        <div class="forget">
                            <input type="checkbox" name="checkbox1" id="checkbox1">
                            <label for="checkbox1">Remember me</label>
                            <a href="#">Forget Password?</a>
                        </div>
                        <button type="submit" class="btn">SIGN UP</button>

                    </form>
                    <div class="register-link">
                        <p>Already have an account? <a href="#" onclick="flipAgain()">Log In</a></p>
                    </div>
                </ul>
            </div>
        </div>
    </div>

</body>
<script src="script.js"></script>


</html>