<?php

require_once('..');
if(!isset($_SESSION))
{
  session_start();

}

if(isset($_POST['login'])){
  $Modeli = new Modeli();
  $Modeli->setEmail($_POST['Email']);
  $kontrollo = $Modeli->kontrollo();


  if($kontrollo == true){
$Modeli->setPassword($_POST['password']);
$kontrolloLlogarin = $Modeli->$kontrolloLlogarin();


if ($kontrolloLlogarin == true) {
  $_SESSION['aksesi'] = $kontrolloLlogarin['aksesi'];
  $_SESSION['UserName'] = $kontrolloLlogarin['Username'];
  $_SESSION['email'] = $kontrolloLlogarin['email'];
  $_SESSION['Password'] = $kontrolloLlogarin['password'];
  echo "<script>document.location='../faqet/index.php'</script>";
} else {
  $_SESSION['PasswordGabim'] = true;
  echo "<script>
  document.location='../faqet/LoginRegister.php';
  </script>";
}
} else {
$_SESSION['Emaili gabim'] = true;
echo "<script>
document.location='../faqet/LoginRegister.php';
</script>";

  }
}