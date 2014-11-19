<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<meta charset="UTF-8">
		<meta name="description" content="Second-hand shop of cheap and brand new children clothes">
		<meta name="keywords" content="sell baby kid children clothes stuff buy cheap second-hand pregnancy clothes">
		<meta name="author" content="Yevgeniya Kobrina">
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
		<link rel="stylesheet" href="css/mycontact.css" type="text/css">
		
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="container">
			<header id="main-header" class="shadow">
				<div class="ribbon-wrapper"><div class="ribbon-development">Under development</div></div>
				<img id="logo" src="images/girl.jpg" alt="A Little Shop logo">
				<div id="header-text">
				<h1>A Little Shop</h1>
				<h4>Tons of beautiful children clothes for afordable price!</h4>
				</div>
			</header>

			<div id="content">
				<div id="reasons">
					<ul class="points">
						<li>
							<img src="images/dino.png" alt="Point 1">
							<h4>Save money</h4>
							<p>Why to buy expensive clothes when your baby is growing so fast? Grab good quality stuff here or even brand new.</p>
						</li>
						<li>
							<img src="images/dino.png" alt="Point 2">
							<h4>Be environmental friendly</h4>
							<p>Save an incalculable amount of unwanted clothing from dumps and landfills.</p>
						</li>
						<li>
							<img src="images/dino.png" alt="Point 3">
							<h4>Enjoy shopping online</h4>
							<p>Each item listed has several high-quality photos and a complete description.</p>
						</li>
						<li>
							<img src="images/dino.png" alt="Point 4">
							<h4>Make a bargain</h4>
							<p>Offer your price, get a discount on multiple buys, agree on the payment and delivery methods.</p>
						</li>
					</ul>
					<footer class="content-footer">
						<h3>More About LittleShop</h3>
						<p>What you can find here: baby and children clothes, toys, essensials, woman clothes, shoes, accessories... Or just ask us how to shop online with benefit!</p>
					</footer>
				</div>
				<div id="contact">
					<form id="contact-form" method="post" action="sendEmail.php">
						<header id="content-header">
							<h3>Ask for a help or make a deal!</h3>
						</header>
						<div class="alert"></div>
						<div>
							<label for="name">Name</label>
							<input type="text" name="name" id="name" placeholder="How should we call you?" autofocus autocomplete="on" value="<?php echo $_POST['name']; ?>" />
						</div>
						<div>
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" placeholder="yourmail@mail.com" autocomplete="on" required value="<?php echo $_POST['email']; ?>" />
						</div>
						<div>
							<label for="topic">Topic</label>
							<select name="topic">
								<option value="HowTo">How to buy</option>
								<option value="Payment" selected="selected">Payment issues</option>
								<option value="Deal">Propose a deal</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div>
							<label for="comment">Comment*</label>
							<textarea name="comment" id="comment" cols="40" maxlength="5000" placeholder="Write your text here" spellcheck required vale="<?php echo $_POST['comment']; ?>"></textarea>
						</div>
						<div>
							<em>* Required Fields</em>
							<input type="submit" value="Get In Touch" name="submit" id="submit">
						</div>
						<div class="clearfix"></div>
						<div class="content-footer">	
							<p>We would never use your personal information for anything unspecified</p>
						</div>
					</form>
				</div>
				<div class="clearfix"></div>
				<div id="testimonial">
					<img src="images/testimonial.png" alt="Customer Testimonial">
					<blockquote>
						"They are honest sellers. You always see and know WHAT you buy. Great stuff for great price. As I bought a lot, I recieved a discount for all my future purchaises." <strong>Anna, Helsinki</strong>
					</blockquote> <br />
					<blockquote>
						"I am charmed by the girls clothes! Very stylish, great quality and afordable prices. Got my parcel quickly." <strong>Riita, Oulu</strong>
					</blockquote>
				</div>
			</div>
			<footer id="main-footer">
				<p>Copyright &copy; 2014</p>
			</footer>
		</div><!-- /. container -->
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/submitContactForm.js" type="text/javascript"></script>
	</body>
</html>
