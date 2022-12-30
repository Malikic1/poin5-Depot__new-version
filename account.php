<?php
include 'session-start.php';
?>
<!DOCTYPE html>
<html lang="en">
	 <head>
		<title>Hs</title>
  		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
  		<link rel="stylesheet" href="index.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  		<script src="js/index.js"></script>
 
	</head>
	<body class="fade">
<div class="divheader divheader1">
  		 <br>
  			<div>
  				<button class="menu-btn" id="menu"><i class="fa-solid fa-bars menu1"></i></button>
  				<div id="panel">
						<button class="panelBtn2">STOCK</button><br>
						<button class="panelBtn2">ACOUNT</button><br>
    					<button class="panelBtn1" disabled>BOOK ORDER</button><br>
    					<button class="panelBtn2" onclick="scrollDisplay()" id="priceT">PRICE TRACKER<i class="fa-solid fa-chart-line icon"></i></button><br>
    					<button class="panelBtn panelBtn2">ORDER HISTORY<i class="fa-solid fa-file-lines icon"></i></button><br>
  				</div>

  			</div>
			<h3>POINT-5&nbsp;<span class="brand-name">DEPOT</span></h3>
			<nav class="navbar">  
					<button class="navBtn2"  onclick="location.href='Book-Order.php'">BOOK-ORDER</button>
					<button class="navBtn2">ORDER-HISTORY</button>
					<button class="navBtn2">STOCK</button>	
					<button class="navBtn1">ACCOUNT</button>	  
			</nav>
				<button class="notifBtn"><i class="fa-solid fa-bell"></i></button>
			<span class="brand brand1">CocaCola  <i class="fa-solid fa-glass-water logo1"></i> <br>
  				<span class="brand brand4">Pepsi  <i class="fa-solid fa-glass-water logo3"></i></span><br>
				<span class="brand brand2">alive <i class="fa-solid fa-glass-water logo2"></i></span><br>
				<span class="brand brand3">Bigi <i class="fa-solid fa-glass-water logo3"></i></span>
			</span>
		</div>
		<div class="note1">
	  	 <br><br><br><br><br>

				<h4><span style="color: aliceblue;">&nbsp;USER'S ID :</span> <b>&nbsp;&nbsp;3155140<?php echo $_SESSION["user_id"]; ?></b></h4>
                <div>
                    <i class="fa-solid fa-user icn" style="margin-left: 1rem;"></i>
                </div>
                <br><br>
                <div class="flex">
                    <button class="acc-btn">ORDER STATUS</button>
                    <button class="acc-btn">SHIPPING</button>
                   <button class="acc-btn">CUSTOMER SERVICE</button>
                    <button class="acc-btn" onclick="location.href='logout.php'">LOGOUT</button>

                </div>
		</div>
    </body>        
</html>