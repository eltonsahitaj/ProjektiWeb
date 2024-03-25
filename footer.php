<footer>
    <br>
    <br>
    <div class="container footers">
     <div class="contact info">
        <p class="p-main4">Contact Us</p>
        <p class="p-main4">North Runway</p>
        <p class="p-main4">Privacy Policy </p>
        <p class="p-main4">Terms & Conditions </p>

     </div>

     <div class="contactinfo1">
            <a class="fotterlinks" href=""><i class="fa-brands fa-instagram"></i></a>
            <a class="fotterlinks" href=""><i class="fa-brands fa-facebook"></i></a>
            <a class="fotterlinks" href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a class="fotterlinks" href=""><i class="fa-solid fa-phone"></i></a>

     </div>
     <div class="contact info">

    </div>
 <br>
 </footer>

 <style>
    .fotterlinks{
  margin: 10px;
  color: white;
  font-size: 20px;
  
}
footer{
  background-color: #333333;
  
}

@media screen and (max-width: 768px) {
    .container.footers {
        flex-direction: column;
        text-align: center;
    }

    .container.footers > div {
        margin-bottom: 20px;
    }

    .container.footers iframe {
        width: 90%; 
        height: 250px; 
    }
}

@media screen and (max-width: 480px) {
    .fotterlinks {
        font-size: 18px; 
    }

    .container.footers iframe {
        height: 200px;
    }
}
 </style>