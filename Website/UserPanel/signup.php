
<?php
session_start();
include "../connection/connection.php";
if (isset($_SESSION['email'])) {

  header("location:index.php");
  
  }

if(isset($_POST['signupBtn']))
{


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$role = "user";






  $insertQuery = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `password`, `phone`, `address`, `city`, `country`, `role`) VALUES (:firstName, :lastName, :email, :password, :phone, :address, :city, :country, :role)";


  $insertPrepare = $connection->prepare($insertQuery);


 $password = password_hash($password,PASSWORD_ARGON2I);




  $insertPrepare->bindParam(':firstName',$firstName,PDO::PARAM_STR);
  $insertPrepare->bindParam(':lastName',$lastName,PDO::PARAM_STR);
  $insertPrepare->bindParam(':email',$email,PDO::PARAM_STR);
  $insertPrepare->bindParam(':password',$password,PDO::PARAM_STR);
  $insertPrepare->bindParam(':phone',$phone,PDO::PARAM_STR);
  $insertPrepare->bindParam(':address',$address,PDO::PARAM_STR);
  $insertPrepare->bindParam(':city',$city,PDO::PARAM_STR);
  $insertPrepare->bindParam(':country',$country,PDO::PARAM_STR);
  $insertPrepare->bindParam(':role',$role,PDO::PARAM_STR);

  if($insertPrepare->execute()){
    echo "<script>alert('User Registered!')</script>";
  }


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
            <h2 style="text-align: center; font-size: var(--text-xl); margin-bottom: var(--s2); padding-bottom:30px">Sign Up Page</h2>
         
            <div class="field-row">
              <div class="field">
                <label for="c-first">First name</label>
                <input id="c-first" name="firstName" type="text" required placeholder="Jhon" />
              </div>
              <div class="field">
                <label for="c-last">Last name</label>
                <input id="c-last" name="lastName" type="text" required placeholder="Doe" />
              </div>
            </div>

            <div class="field-row">
              <div class="field">
                <label for="c-email">Email</label>
                <input id="c-email" name="email" type="email" required placeholder="you@example.com" />
              </div>
              <div class="field">
                <label for="c-email">Password</label>
                <input id="c-email" name="password" type="password" required placeholder="***************" />
              </div>
            </div>
         
              <div class="field">
                <label for="c-email">Phone</label>
                <input id="c-email" name="phone" type="text" required placeholder="+92-000-0000" />
              </div>
              <div class="field">
                <label for="c-email">Address</label>
                <input id="c-email" name="address" type="text" required placeholder="Suite 9 Amsterdam" />
              </div>
              <div class="field">
                <label for="c-email">City</label>
                <input id="c-email" name="city" type="text" required placeholder="Enter your city" />
              </div>
              <div class="field">
                <label for="c-email">Country</label>
                <input id="c-email" name="country" type="text" required placeholder="Enter your country" />
              </div>

            <button name="signupBtn" class="btn btn--indigo btn--block" type="submit"
              style="padding: 16px; font-size: var(--text-base); margin-top: var(--s2)">Signup →</button>

          
          </form>

     
      </div>
    </section>



  </main>


  <script src="assets/js/main.js" defer></script>
</body>

</html>