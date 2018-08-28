<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./styles/style.css"/>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1", maximum-scale=1.0>
		<title>پرداخت موفق</title>
	</head>
	<body>
		<div class="main-border">
		
		
			<div class="pay-border">
				<p id="pay-msg">! پرداخت موفقیت آمیز </p>
			</div>
		
			<div class="mablagh-border"> 
				<div class="gray-mablagh-border">
					<p id="mablagh">: مبلغ</p>
				</div>
				<p id="howmuch-toman-num"><?php session_start(); $Amount = $_SESSION["Amount"];echo $Amount;?></p>
				<p id="howmuch-toman-text">تومن</p>
			</div>
			
			
			
			
			<div class="babat-border">
				<div class="gray-babat-border">
					<p id="babat">: تاریخ</p>
				</div>
				<p id="About-What"><?php require("./class/jdatetime.class.php");date_default_timezone_set("Asia/Tehran"); echo jDateTime::date("l j F Y",false,false);?></p>
			</div>
			
			
			
			
			<div class="blue-border">
				<img src="./images/CreedGram.png" alt="CreedGram Logo" id="CGImage" size="400px"/>
				<div id="CG-text">
					کرید گرام
				</div>
			</div>
			
			
			
			
			
			
		</div>
	</body>
</html>
