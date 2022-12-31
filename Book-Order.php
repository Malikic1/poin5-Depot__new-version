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
					<button class="navBtn1">BOOK-ORDER</button>
					<button class="navBtn2">ORDER-HISTORY</button>
					<button class="navBtn2">STOCK</button>	
					<button class="navBtn2" onclick="location.href='account.php'">ACCOUNT</button>	  
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

				<p><u>NOTE:</u> <b>You'll receive text message on<br> delivery info after confirmation of booked-order</b></p>
		</div>
		<a href="logout.php">logout</a>
		<h2>&nbsp;&nbsp; USER ID: 3155140<?php echo $_SESSION["user_id"]; ?></h2>
		<form>
	  	<div class="bookContent">
	           	Book Order Here ¬<br>
				&nbsp;&nbsp;&nbsp; <span class="text5 logo2">Type:</span>&nbsp;
 				<span class="guide">?Guide</span>
                
    			<select id="type">
	    			<option>-select-</option>
	    			<option value="1" class="bottleWater">Bottled Water only</option>
	     			<option value="2">Soft Drink only</option>
	    			<option value="3">Both</option>
	   			</select>

				<br><br>

	   		<div class="div-water div-n" id="divWater">
				<div class="bottle-water">
	  				<input class="checkbox" type="checkbox">
 					<label class="checkbox-label">AQUARITE WATER</label>
					<br>
 					<input class="checkbox" type="checkbox">
 					<label class="checkbox-label">AQUAFINA WATER</label>
					<br>
 					<input class="checkbox" type="checkbox">
 					<label class="checkbox-label">BIGI WATER</label>
					<br>
 					<input class="checkbox" type="checkbox">
 					<label class="checkbox-label">EVA WATER</label>
					<br>
				</div>
				<div class="QTY1">
					<label><b>Qty</b></label><input type="number" class="qty-1 qty-n" id="aquarite" name="aquarite" oninput="calc()"><br>
					<label><b>Qty</b></label><input type="number" class="qty-1 qty-n" id="aquafina" name="aquafina" oninput="calc()"><br>
					<label><b>Qty</b></label><input type="number" class="qty-1 qty-n" id="bigi-w" name="bigi-water" oninput="calc()"><br>
					<label><b>Qty</b></label><input type="number" class="qty-1 qty-n" id="eva" name="eva" oninput="calc()">
				</div>   
			</div>
			      <a class="total" id="water-amount"></a><br>

		<div class="div-soft div-n" id="divSoft">
			<br>	
			<div>
  					<button class="softDrink-brand co-1">BIGI</button><span></span>
  					<button class="softDrink-brand"><b>PEPSI</b></button>
  					<button class="softDrink-brand co-2"><b>COKE</b></button>
  					<button class="softDrink-brand co-3"><b>5-alive</b></button>
  				</div>
  			<br>
				<table>
					<thead>
						<th>BRAND</th>
						<th>PET SIZE</th>
						<th>BIG SIZE</th>
					</thead>
					<tbody>
						<tr>
							<td><button disabled class="b-t1 b-t">Cola</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="cola1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="cola2"></td>
						</tr>
						<tr>
							<td><button disabled class="b-t2 b-t">Orange</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="orange1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="orange2"></td>
						</tr>
						<tr>
							<td><button disabled class="b-t3 b-t">Tropical</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()"  id="tropica1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="tropica2"></td>
						</tr>
						<tr>
							<td><button disabled class="b-t4 b-t">Chap</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="chap1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="chap2"></td>
						</tr>
						<tr></tr>
						<tr>
							<td><button disabled class="b-t1 b-t">PEPSI</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="pepsi1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="pepsi2"></td>
						</tr>
						<tr>
							<td><button disabled class="b-t2 b-t">MIRINDA</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="mirinda1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="mirinda2"></td>
						</tr>
						<tr></tr>
						<tr>
							<td><button disabled class="b-t1 b-t">COKE</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="coke1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="coke2"></td>
						</tr>
						<tr>
							<td><button disabled class="b-t2 b-t">FANTA</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="fanta1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()"id="fanta2"></td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td><button disabled class="b-t1 b-t">5 alive</button></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="alive1"></td>
							<td><input type="number" class="qty qty-n" oninput="calculate()" id="alive2"></td>
						</tr>
						
						</tbody>
					</table>
 							<a class="total" id="soft-amount"></a>
						<br>
						<p class="grandTotal">TOTAL BILL + VAT </p>
		   </div>
			<br>
		<div class="divmain">
	  		<div class="available">
	    		<p class="text5 logo2">CURRENT PRICE LIST</p>
				<table>
	  				<tr><th>BOTTLED WATER </th></tr>
	  				<tr><td>AQUARITE WATER <td >@###</span></td></tr>
	  				<tr><td>AQUAFINA WATER
	  				<td>@###</td></tr>
	  				<tr><td>BIGI WATER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<td>@###</td></tr>
	  				<tr><td>EVA WATER &nbsp;&nbsp;&nbsp;&nbsp;	
	  				<td>@###</td></tr>
	  			</table>
	  					<br>
	  			<table>
	  				<tr><th>SOFT DRINK PET</th></tr>
	  				<tr><td>BIGI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td>@###</td></tr>
	  				<tr><td>COCACOLA&nbsp;&nbsp;
	  				<td>@###</td></tr>
	  				<tr><td>MALTINA&nbsp;&nbsp;&nbsp;
	  				<td>@###</td></tr>
	  				<tr><td>PEPSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td>@###</td></tr>
	  				<tr><td>5 alive &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td>@###</td></tr>
				</table>
					<br>
	  			<table>
	  				<tr><th>SOFT DRINK BIG</th></tr>
	  				<tr><td>BIGI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td>@###</td></tr>
	  				<tr><td>COCACOLA&nbsp;&nbsp;
	  				<td>@###</td></tr><tr><td>MALTINA&nbsp;&nbsp;&nbsp;
					<td>@###</td></tr>
	  				<tr><td>PEPSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td >@###</td></tr>
	  				<tr><td>5 alive &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<td >@###</td></tr>
				</table>
	 		 </div>
	  
	  		<div class="delivery">
				<fieldset>
 					<legend class="text5 logo2">Delivery Info</legend>
	    				<label>FULL-NAME</label><input type="text"><br>
	    				<label>MOBILE </label><input type="tel"><br>
	    				<label>ADDRESS INFO</label><input type="text">
	    			<div class="complain">
	      				<p class="note2">Write to us your complains</p>
	      				<textarea>	        
	      				</textarea>
	      				<br>
	    	  			<button>Send</button>
	    			</div>
				</fieldset>
	  		</div>
			</div>
				<br><br>
				<button class="confirm"><b>BOOK ORDER</b></button>
		</form>
			<br><br>
			<div id="priceTracker">	  
					<em class="chartTitle">2022 monthly average price</em><span ><button id="cancel">&times;</button></span>
				<br>
					<button class="unit unit1"></button><span class="Unit-label">PET &nbsp;</span>
					<button class="unit unit2"></button><span class="Unit-label">BIG&nbsp;</span>
					<button class="unit unit3"></button><span class="Unit-label">WATER&nbsp;</span>
				<br>
					<em class="chartTitle1">PEPSI</em>
					<canvas id="priceChart"></canvas><br>

					<em class="chartTitle1">BIGI</em>
					<canvas id="priceChart1"></canvas><br>

					<em class="chartTitle1">COCACOLA</em>
					<canvas id="priceChart2"></canvas><br>

					<em class="chartTitle1">5 alive</em>
					<canvas id="priceChart3"></canvas>

			</div>	
			<br><br>
			<div class="divfoot">
				<br>
				<nav>
				  <button>TERMS OF SERVICE</button>
				  <button>Privacy Policy</button><br>
					 <small class="logo3"> ©2022 Point5Depot. All right's reserved.</small>
				</nav>
   
		  </div>
		</div>
  		<script src="index.js"></script>
	</body>
</html>
   