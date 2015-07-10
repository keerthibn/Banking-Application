<!DOCTYPE html>
<head>
	<link rel="stylesheet" type"text/css" href="css/home.css">
	<script type="text/javascript" src="js/newcust.js"></script>
	<title> Guru99 Add New Customer</title>
	
</head>

<body>
	
	<h2 id="header">Guru99 Bank</h2>
	
	<form  method="post" name="customer" action="mnewcustcheck.php" onsubmit="return Validate()" >
		<table width="200">
			<tr>
				<td><div class="message">*</div>Customer Name:</td>
				<td><input type="text" name="name" ></td>
				<td> <label class="message" id="message" ></td>
				
			</tr>
			
			<tr>
				<td><div class="message">*</div>Customer ID:</td>
				<td><input type="text" name="id" ></td>
				<td> <label class="message" id="message7" ></td>
				
			</tr>
			
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="M" checked>Male
				<input type="radio" name="gender" value="F">Female</td>
			</tr>
			
			<tr>
				<td>Date of Birth:</td>
				<td><input type="date" name="bday" ></td>
			</tr>
			
			<tr>
				<td><div class="message">*</div>Address:</td>
				<td><input type="text" name="address" ></td>
				<td> <label class="message" id="message1"></td>
			</tr>
			
			<tr>
				<td><div class="message">*</div>City:</td>
				<td><input type="text" name="city" ></td>
				<td> <label class="message" id="message2"></td>
			</tr>
			
			<tr>
				<td><div class="message">*</div>State:</td>
				<td><input type="text" name="state" ></td>
				<td> <label class="message" id="message3"></td>
			</tr>
			
			<tr>
				<td><div class="message">*</div>Pin:</td>
				<td><input type="number" name="pin" ></td>
				<td> <label class="message" id="message4"></td>
			</tr>
			
			<tr>
				<td><div class="message">*</div>Mobile number:</td>
				<td><input type="number" name="mobile" ></td>
				<td> <label class="message" id="message5"></td>
				
			</tr>
			
			<tr>
				<td><div class="message">*</div>E-mail:</td>
				<td><input type="email" name="email" ></td>
				<td> <label class="message" id="message6"></td>
			</tr>
			
			<tr> 	
				<td><input type="submit" value="Submit"></td>
				<td><input type="submit" value="Reset"></td>
			</tr>
		</table><br>
	</form>
	
	<!--Navigation Bar-->
	<nav>
		<ul>
			<br><br/>
			<li><a href="manager.html">Manager</a></li><br/>
			<li><a href="newcust.php">New Customer</a></li><br/>
			<li><a href="editcust.php">Edit Customer</a></li><br/>
			<li><a href="delcust.php">Delete Customer</a></li><br/>
			<li><a href="newacc.php">New Account</a></li><br/>
			<li><a href="editacc.php">Edit Account</a></li><br/>
			<li><a href="delacc.php">Delete Account</a></li><br/>
			<li><a href="deposit.php">Deposit</a></li><br/>
			<li><a href="withdraw.php">Withdrawal</a></li><br/>
			<li><a href="mfund.php">Fund Transfer</a></li><br/>
			<li><a href="mchgpassword.php">Change Password</a></li><br/>
			<li><a href="mbalance.php">Balance Enquiry</a></li><br/>
			<li><a href="managerstm.php">Mini Statement</a></li><br/>
			<li><a href="managercustmstm.php">Customised Statement</a></li><br/>
			
			<li><a href="login.php">Log out</a></li><br/>
		</ul>
	</nav>
	
	<?php include 'connect.php';?>
	
	
	
</body>


</html>