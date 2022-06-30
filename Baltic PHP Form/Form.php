<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="Design.css" media="screen">
    <meta charset="utf-8">
    <title>My PHP Final project</title>
  </head>
  <body>
    <?php
    $fnameerr= $lnameerr= $emailerr= $phonenumbererr= $websiteerr= $commenterr= $gendererr= $countryerr= "";
    $fname= $lname= $email= $phonenumber= $website= $comment= $gender= $country= "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // code...
      if (empty($_POST["fname"])) {
        // code...
    $fnameerr = "";
      }
    else
      // code...
      $fname= test_input($_POST["fname"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
     $fnameerr = "Only letters and white space allowed";
   }
}
if (empty($_POST["lname"])) {
  // code...
$lnameerr = "";
}
else
// code...
$lname= test_input($_POST["lname"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
$lnameerr = "Only letters and white space allowed";
}

   if (empty($_POST["email"])) {
     // code...
     $emailerr = "";
   }
   else {
     // code...
     $email = test_input($_POST["email"]);
     if (!filter_var( $email,FILTER_VALIDATE_EMAIL)) {
       $emailerr = "invalid email format";
     }
   }


   if (empty($_POST["phonenumber"])) {
     // code...
     $phonenumbererr = "";
   }
   else {
     // code...
     $phonenumber = test_input($_POST["phonenumber"]);
   if(!preg_match('/^[0-9]{10}+$/', $phonenumber)) {

   $phonenumbererr = "Invalid Phone Number";
   }
 }

   if (empty($_POST["website"])) {
     // code...
     $websiteerr = "";
   } else {
     // code...
     $website=test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       // code...
       $websiteerr = "Invalid URL";
     }
   }
   if (empty($_POST["country"]))  {
     //code...
     $countryerr= "";
   } else {
     // code...
     $country = test_input($_POST["country"]);
   }

   if (empty($_POST["gender"])) {
     // code...
     $gendererr = "";
   } else {
     // code...
     $gender = test_input($_POST["gender"]);
   }


 if (empty($_POST["comment"])) {
   // code...
   $commenterr="";
 } else {
   // code...
   $comment = test_input($_POST["comment"]);
 }


function test_input ($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
     ?>
<!-- This is the heading atop the page-->
<div class= "header">
  <h1> Welcome to the Page! </h1>
</div>
<br>
  <div class="maincode">
  <form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
<br>
 First Name:  <input type="text" name="fname" placeholder="First Name">
  <span class= "error">* <?php echo $fnameerr;?> </span>
<br> <br>
   Last Name:  <input type="text" name="lname" placeholder="Last Name">
  <span class= "error">* <?php echo $lnameerr;?> </span>
  <br> <br>

  Email:
    <input type="text" name="email" placeholder="Your Email">
  <span class= "error">* <?php echo $emailerr;?> </span> <br> <br>
Phone number:
   <input type="number" name="phonenumber" placeholder="Your Number">
 <span class="error">* <?php echo $phonenumbererr;?> </span> <br> <br>
  Website:
   <input type="text" name="website" placeholder="Website">
  <span class = "error">* <?php echo $websiteerr;?> </span> <br> <br>

  Country:
 <select id="country" name="country">
    <option value="">Choose a Country</option>
    <option value="Australia">Australia</option>
    <option value="Canada">Canada</option>
    <option value="Denmark">Denmark </option>
    <option value="England">England</option>
    <option value="France">France</option>
    <option value="Germany">Germany</option>
    <option value="India">India</option>
    <option value="Italy">Italy</option>
    <option value="Norway">Norway</option>
    <option value="Portugal">Portugal</option>
    <option value="Spain">Spain</option>
    <option value="Sweden">Sweden</option>
    <option value="USA">USA</option>
  </select>
    <span class = "error">* <?php echo $countryerr;?> </span>
  <br> <br>

  Gender:

  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $gendererr;?></span>
  <br><br>

  Comment: <textarea name="comment" rows="4" placeholder="Please Leave Your Comments Here"> </textarea>
<p> <span class="error">* required field </span></p>
   <br>


          <input type="Submit" name="Submit" value="Sign Up">

 </div>
    </form>
<div class="output">
  <?php

echo "<h2>Thank You For Subscribing to our services <br> These are your details :</h2>";
?>
<div class="bottext">
<?php
echo $fname;
echo $lname;
echo "<br>";
echo "<br>";
echo $email;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $website;
echo "<br>";
echo $country;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;

?>
</div>
  </body>
</html>
