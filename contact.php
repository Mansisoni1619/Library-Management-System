<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Page</title>
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="contact">
		<div class="content">
			<h1>Contact Us</h1>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="text">
						<h3>Address</h3>
						<p>Barkatullah University Institute of Technology<br>Bhopal(M.P.)<br>462016</p>
					</div>	
				</div>
				<div class="box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
				</div>
				<div class="text">
						<h3>Phone</h3>
						<p>6265613868
						   9340044094
						   7089135093
						   8349064981</p>
					</div>	
				</div>
				<div class="box">
				<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="text">
						<h3>Email</h3>
						<p>sonimansi633@gmail.com
						   vaishalidarbar0429@gmail.com
					       sakshisinghbaghel27@gmail.com
					       swatimeshram200@gmail.com
					       </p>
					</div>	
				</div>
			</div>
			<div class="contactForm">
				<form method="POST" action="insert.php">
					<h2>Send Message</h2>
					<div class="inputbox">
						<input type="text" name="name" class="input-field"  placeholder="Full Name" title="Enter your full name" required>
					</div>
					<div class="inputbox">
						<input type="email" name="email" class="input-field" title="Please enter correct email-id format(@gmail.com)" placeholder="Email Id" required>
					</div>
					<div class="inputbox">
					    <input type="text" name="message" placeholder="Type your message..."></input>
					</div>
					<div class="inputBox">
					<input type="submit" name="btn-send" value="SUBMIT">
				</div>
				</form>
			</div>
		</div> 
	</div>
</section>
<div class="button">
    	<center> <br>  
    <a href="next.php">
      <button type="button" class="btn-open first">Back</button></a>
</center>
<div class="profile">
	<h2><u>Developers</u></h2>
	<br>
<div class="gallery">
    <img src="developer/swati.jpeg" alt="swati" width="600" height="400">
	<div class="pic"><p>Swati Meshram<br>swatimeshram200@gmail.com</p></div>
    <div class="icon"><center><a href="https://www.linkedin.com/in/swati-meshram-a19a341a8/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:30px; color:blue" aria-hidden="true"></i></a></center>
</div>
</div>
<div class="gallery">
    <img src="developer/sakshi.jpeg" alt="sakshi" width="600" height="400">
    <div class="pic"><p>Sakshi Singh Baghel<br>sakshisinghbaghel27@gmail.com</p></div>
    <div class="icon"><center><a href="https://www.linkedin.com/in/sakshi-singh-baghel-12bb081b1/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:30px; color:blue" aria-hidden="true"></i></a></center></div>
</div>
<div class="gallery">
    <img src="developer/vaishali.jpeg" alt="vaishali" width="600" height="400">
    <div class="pic"><p>Vaishali Darbar<br>Vaishalidarbar0429@gmail.com</p></div>
    <div class="icon"><center><a href="https://www.linkedin.com/in/vaishali-darbar-2400601b0/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:30px; color:blue" aria-hidden="true"></i></a></center></div>
</div>
<div class="gallery">
    <img src="developer/mansi.jpeg" alt="mansi" width="600" height="400">
    <div class="pic">
    <p>Mansi Soni<br>sonimansi633@gmail.com</p></div>
    <div class="icon"><center><a href="https://www.linkedin.com/in/mansi-soni-91aa80171" target="_blank"><i class="fa fa-linkedin-square" style="font-size:30px; color:blue" aria-hidden="true"></i></a></center></div>
  </div>
</div>
</body>
</html>