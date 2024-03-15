<php

if(isset($_POST['btn-send']))
{

  $Username = $_POST['UName'];
  $Email = $_POST['Email'];
  $Message = $_POST['Message'];

  if(empty($UserName)  || empty($Email)  || empty($Message))
  {
    header('Location:ContactUss.php?error')

  }
  else 
  {
    $to = "admin@onlineitutts.com";
      
    if(mail($to,$Message,$Email))
    {
      header("Location:ContactUss.php?success");


    }
  }
}
else
{
  header("Location:ContactUss.php?");
}



?>