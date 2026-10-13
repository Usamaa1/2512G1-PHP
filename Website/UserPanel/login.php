
<?php

include "../connection/connection.php";


if(isset($_POST['loginBtn']))
{



$email = $_POST['email'];
$password = $_POST['password'];

$role = "user";



  $getQuery = "SELECT * FROM `users` WHERE `email` = :email";


  $getPrepare = $connection->prepare($getQuery);
  $getPrepare->bindParam(':email',$email,PDO::PARAM_STR);






  


}






?>








<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact — Sprylo</title>
  <meta name="description"
    content="Get in touch with Sprylo customer support — order help, returns, warranty claims, and partnership inquiries." />
  <meta name="theme-color" content="#4F46E5" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>




  <main id="main">

 

    <section>
      <div class="container">
          <form class="contact-form" method="post">
            <h2 style="text-align: center; font-size: var(--text-xl); margin-bottom: var(--s2); padding-bottom:30px">Login Page</h2>
         
      

    
              <div class="field">
                <label for="c-email">Email</label>
                <input id="c-email" name="email" type="email" required placeholder="you@example.com" />
              </div>
              <div class="field">
                <label for="c-email">Password</label>
                <input id="c-email" name="password" type="password" required placeholder="***************" />
              </div>
     
         
          

            <button name="loginBtn" class="btn btn--indigo btn--block" type="submit"
              style="padding: 16px; font-size: var(--text-base); margin-top: var(--s2)">Login →</button>

          
          </form>

     
      </div>
    </section>



  </main>


  <script src="assets/js/main.js" defer></script>
</body>

</html>