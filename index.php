<?php
include "config.php";
session_start();
error_reporting(0);
if(isset($_SESSION['user_id'])){
  header("Location: welcome.php");
}

if(isset($_POST['register'])){
      $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
      $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
      $regEmail = mysqli_real_escape_string($conn, $_POST["reg_email"]);
      $phoneNumber = mysqli_real_escape_string($conn, $_POST["phone_number"]);
      $B_address = mysqli_real_escape_string($conn, $_POST["B_address"]);
      $H_address = mysqli_real_escape_string($conn, $_POST["H_address"]);
      $regPassword = mysqli_real_escape_string ($conn, md5($_POST["reg_password"]));
      $c_password = mysqli_real_escape_string($conn, md5($_POST["c_password"]));
      $checkEmail= mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$regEmail'"));

      if($regPassword !== $c_password){
            echo "<script>alert('password did not match');</script>";
      } elseif($checkEmail > 0) {
            echo
              "<script>alert('Email already exist');</script>";
          }else{
            $sql = "INSERT INTO users (first_name,last_name,email,phone_number,business_address,home_address,password) VALUES ('$firstName','$lastName','$regEmail','$phoneNumber','$B_address','$H_address','$regPassword')";
            $result = mysqli_query($conn, $sql);
            if($result){
                  $_POST['firstName'] = "";
                  $_POST['lastName'] = "";
                  $_POST['reg_email'] = "";
                  $_POST['phone_number'] = "";
                  $_POST['B_address'] = "";
                  $_POST['H_address'] = "";
                  $_POST['reg_password'] = "";
                  $_POST['c_password'] = "";
                  echo "<script>alert('registration successful');</script>";
                }else{
                  echo
                  "<script>alert('failed');</script>";
                }
          }      
}

if (isset($_POST["login"])) {
   $log_email = mysqli_real_escape_string($conn, $_POST["log_email"]);
   $log_password = mysqli_real_escape_string($conn, md5($_POST["log_password"]));
   $checkEmail= mysqli_query($conn, "SELECT id FROM users WHERE email='$log_email' AND password ='$log_password'");

   if (mysqli_num_rows($checkEmail) > 0) {
      $row = mysqli_fetch_assoc($checkEmail);
      $_SESSION["user_id"] = $row['id'];
      header("Location: Book-Order.php");
    }else{
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
      }
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="index.css">
      <title>Home</title>
</head>
<body>
   <div class="divheader">
        <br>
      <div>
         <button class="menu-btn" id="menu"><i class="fa-solid fa-bars menu1"></i></button>
         <div id="panel">
            <button class="panelBtn1" disabled>HOME</button><br>
            <button class="panelBtn2" disabled>ACOUNT</button><br>
            <button class="panelBtn2" disabled>BOOK ORDER</button><br>
            <button class="panelBtn2" disabled onclick="scrollDisplay()" id="priceT">CONTACT</button><br>
            <button class="panelBtn2" disabled >ORDER HISTORY<i class="fa-solid fa-file-lines icon"></i></button><br>
         </div>
      </div>
      <h3>POINT-5&nbsp;<span class="brand-name">DEPOT</span></h3>
      <nav class="navbar">
            <button class="navBtn1" disabled>HOME</button>	  
            <button class="navBtn2" disabled>BOOK-ORDER</button>
            <button class="navBtn2" disabled>ORDER-HISTORY</button>
            <button class="navBtn2" disabled>ACCOUNT</button>	  
      </nav>
      <button class="notifBtn"><i class="fa-solid fa-bell"></i></button>
   </div>

   <div class="c">
       <br><br><br>
       <p  class="note1">ORDER > PAYMENT > DELIVERY <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get done in 5minutes
      </p>

       <div class="container1">
         <div class="content1">
         <h2>AVAILABLE FOR ALL BOTTLED WATER AND CARBONATED SOFT DRINK</h2>
         <h4>OVER 8 WAREHOUSES AROUND NIGERIA FOR EASY ACCESS AND DELIVERY.<br>
                  ENJOY FREE ACCESS TO DIRECT COMPANY'S PRICE AND OTHER EXCLUSIVE OFFERS.
         <p class="t-c">OFFERS FREE DELIVERY WHEN YOU BUY A FULL TRUCK !  </p>
         </h4>
         </div>
            
         <div class="content2">
            <img src="image/logo.png" class="mainLogo">
          </div> 
       </div>
       <p class="text2">
       <button class="log" id="registerBtn">SIGN UP</button> &nbsp;<button class="log" id="loginBtn" >LOGIN</button>
       </p>
       <br><br
    </div>

   <div class="item">
      <div class="aside1">
            <div class="section1">
                  <div class="content3">
                        <img src="image/pc1.jpeg" class="image"/>
                        <img src="image/pp2.jpeg" class="image"/>
                  </div>
                  <div class="content3">
                        <img src="image/pp1.jpeg" class="image"/>
                        <img src="image/pc2.jpeg" class="image"/>
                  </div>
            </div>
            <div class="section2">
            <br>
                  <p class="logo4"><b>Become a Distributor now !</b>&nbsp;&nbsp;<i class="fa-solid fa-rocket logo4"></i> </p>
                  <div> 
                     <div class="flex">
                        <p><i class="fa-solid fa-arrow-up-short-wide icn"></i></p>
                        <p class="text6">PICK DRINKS IN DIFFERENT VARIETIES AS YOU WISH WITHOUT LIMIT</P>
                     </div>
                     <div class="flex">
                     <p><i class="fa-solid fa-plus icn"></i></p>
                     <p class="text6">ORDER FOR ALL DRINKS IN PALLET QUATITY @ COMPANY'S RATE</p>
                     </div> 
                     <div class="flex">
                        <p><i class="fa-solid fa-medal icn"></i></p>
                        <p class="text6">BE ONE OF THE LUCKY RANDOM USER TO EARN OUR FREE PROMO GIFTS</p>
                     </div>                    
                  </div>
            </div>
      </div>
      <div class="aside2">
            
            <section class="">
                  <p class="logo4"><b>Basic registration requirements :</b><br><p>
                        <ul class="font1">
                           <li>registered SIM line</li>
                           <li>National Identification Number</li>
                           <li>Business Proof</li>
                        </ul>
                  </p>
            </section>
       </div>
       <div class="aside3">
            <div class="content4 content5">
                  <div>
                        <img src="image/surprise.jpg"class="surprise"/>
                  </div>
                     <p> HAVING ISSUE ACTIVATING YOUR ACCOUNT ?<br><br>
                        <span><b>Report issue to any of our nearby<br> 
                        SERVICE-POINT  agent for account <br> 
                        registration & activation.</b>
                        </span>
                     </p>
            </div>
                  <div class="icon">
                     <p class="logo3 text5"> 
                        <i class="fa-solid fa-house-circle-check logo4"></i>
                        <b>SERVICE-POINTS</b></p>
                     <p><b>Kindly visit any verified MTN office for verification and activation processes.</b><br><br> OR <br><br>
                        <b>Directly visit any of our company.</b>
                     </p>
                  </div>
       </div>
      <div class="aside1 aside-1">         
         <div class="section1">      
            <div class="content3">
                  <img src="image/wh-1.jpeg" class="image"/>
                  <img src="image/wh-2.jpeg" class="image"/>
            </div>
            <div class="content3">
                  <img src="image/wh-3.jpeg" class="image"/>
                  <img src="image/wh-4.jpeg" class="image"/>
            </div>
         </div>
         <div class="section2 section-2"> 
            <p class="logo3 text6">
            <i class="fa-solid fa-location logo4"></i> <b>WAREHOUSE ADDRESSES</b></p>
            <p class="location"> 65, Presidential road, Gwagwalada, Abuja</p>
            <p class="location"> 1, High Tower site, Kano, Kano</p>
            <p class="location"> 45, Gen. Usman street, Kaduna, Kaduna </p>
            <p class="location"> 22, MRS Road, Victoria Island, Lagos </p>
            <p class="location">Road 4, Aket Upoma Estate, Ikot Eppene, Akwa Ibom</p>
            <p class="location"> 4, Opp. Kenneth University,Bayelsa </p>
            <p class="location">4, Airport Road, Ilorin, Kwara</p>
            <p class="location">A4 Estate, Ugbor Villa, GRA, Benin City, Edo</p>
            <p class="location">19, Trans Amadi Road, Port Harcourt, Rivers</p>
            <p class="location">4, Herbert Macaulay Way, Alagomeji, Yaba, Lagos</p>
         </div>
      </div>  
   </div>
      <br>
   <div class="loginModal" id="myModal">
      <button id="cancel1">&times;</button>
      <section class="selector">
         <div>
            <button class="btn-n btn-1" id="selector1">SIGN IN </button>
            <button id="selector2" class="btn-n btn-2">SIGN UP</button>
         </div>
         <br><br>
         <form action="" method="post" class="login">
             <p class="lab-1">EMAIL <br/>
                  <input class="input-1" type="email" name="log_email" id="email" placeholder="&nbsp;enter email address..." required/>
             </p>
                  <br>
             <p class="lab-1">PASSWORD<br/>
                  <input class="input-1" type="password" name="log_password" id="pass"  placeholder="&nbsp;enter password" required/>
             </p>
             <br/>
             <input type="submit" name="login" value="LOGIN" class="input-2"/><br/><br/>
               </br>
             <a href="forgot password" class="f-pass">forgotpassword</a><br/><br/><br/>
             <p>Don't have an accout yet? click SIGN UP</p>
         </form>

         <form class="register" method="post" action="" >
             <p class="lab-1 text3" ><b>CREATE AN ACCOUNT...</b></p>
             <input type="text" placeholder=" First Name" class="names names1" name="firstName"  value='<?php echo $_POST['$firstName']?>' required/>
             <input type="text" placeholder="Last Name" class="names names1" name="lastName"  value='<?php echo $_POST['$lastName']?>' required/><br>
             <input type="email" placeholder="email address" class="email names names2" name="reg_email" value='<?php echo $_POST['$reg_email']?>' required/>  <br>      
             <input type="tel" placeholder=" Phone Number" class="names phone names2" name="phone_number"  value='<?php echo $_POST['$phone_number']?>' required/><br>
             <input type="text" placeholder="Business address" class="email names address names2" name="B_address" value='<?php echo $_POST['$B_address']?>' required /> <br>
             <input type="text" placeholder="Home address" class="email names address names2" name="H_address" value='<?php echo $_POST['$H_address']?>' required /><br>
             <input type="password" placeholder=" password" class="names phone names2" name="reg_password" value='<?php echo $_POST['$reg_password']?>' required/>
             <input type="password" placeholder=" confirm password" name="c_password" class="names phone names2" value='<?php echo $_POST['$c_password']?>' required/>
             <br><br>
             <input type="submit" name="register" value="Register" class="input-2 reg"/><br/><br/><br/>      
         </form>
      </section>
   </div>

  <div class="divfoot">
      <br>
      <div class="contact">
        <div>
          <img src="image/work1.jpeg"class="surprise"/>
        </div>
        <div>
            <p class="content5 text4">HAPPY TO CONNECT WITH US !<br><br>
            <span class="logo3"><i class="fa-solid fa-phone "></i>&nbsp;&nbsp;&nbsp;&nbsp;<b>+0158806-521</b> <br>
            <i class="fa-solid fa-envelope"></i>point5@gmail.com</span></span></p>
        </div>
      </div>
      <br><br>
      <nav>
          <button>TERMS OF SERVICE</button>
            <button>Privacy Policy</button><br>
            <small class="logo3"> ©2022&nbsp; All rights reserved</small>
      </nav>
   </div>
   <script src="index.js"></script>
</body>
</html>
