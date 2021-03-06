<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Keep Sandy Springs Beautiful</title>
<link rel="stylesheet" type="text/css" href="css/site.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<script type="text/javascript" src="imagesjs/menu.js"></script>
<link rel="SHORTCUT ICON" href="images/favicon.ico">
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="../imagespngfix.js"></script>
<![endif]-->
</head>

<body>

	<div id="wrap">
				<div id="header">
						<img src="images/Header.jpg" alt="" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="59,88,138,171" href="" alt="Keep Sandy Springs Beautiful" />
</map>
	  </div>
				<div id="BodyCopy" class="clearfix">
							<div id="Content">
							<h3>Thank You</h3>
							<div id="php">
							<?php
				// Note ///////////////////////////////////////////////////
				// Fill in the sitename variable (name of your web site)
				// and the your_email variable with your email address
				///////////////////////////////////////////////////////////
	
				$site_name = "Keeping Sandy Springs Beautiful";
				$your_email = "cwchitwood@yahoo.com";
				
				
				
				// No need to edit anything below this line ----------------------------------------------
				$name = $_POST["name"];
				$email = $_POST["email"];
				$message = $_POST["message"];
	

				// Send the email to you
				if(mail($your_email, "Email From $site_name", "
				From: $name
				Email: $email
	
				Message: 
				$message
				","From:$email\r\nReply-to:$email")){
						echo "<br>Your message has been successfully sent.";
					}else{
						echo "The message could not be sent. Please try again or contact <a href=\"mailto:$your_email\" title=\"Send Email to $your_email\">$your_email</a>.";
				}
				?>
				<!-- End PHP mail function -->
							</div>
									
							</div>
							
							<div id="navbar">
								<ul id="menu">
								  <li><a title="Keep Sandy Springs Beautiful" href="index.html">Home</a></li><br />
								  <li><a title="../about Us" href="about/index.html">About&nbsp;Us</a></li><br />
									<li><a href="#">Get&nbsp;Involved</a><br />
										<ul>
											<li><a title="Volnteer" href="getinvolved/volunteer.html">Volunteer</a></li>
											<li><a title="Support" href="getinvolved/support.html">Support</a></li>
										</ul>
									</li>
								  <li><a href="#">Events</a><br />
										<ul>
											<li><a title="One for the Chipper" href="events/oneforchipper.html">One for the Chipper</a></li>
											<li><a title="Earth Day" href="events/earthday.html">Earth Day</a></li>
											<li><a title="Arbor Day" href="events/arborday.html">Arbor Day</a></li>
										</ul>
									</li>
									
								  <li><a href="#">Education</a><br />
										<ul>
											<li><a title="Community" href="education/community.html">Community</a></li>
											<li><a title="Teachers" href="education/teachers.html">Teachers</a></li>
										</ul>
									</li>
								  <li><a href="#">Programs</a><br />
										<ul>
											<li><a title="Adopt a Road" href="programs/adoptroad.html">Adopt a Road</a></li>
											<li><a title="Evergreen Business" href="programs/evergreenbusiness.html">Evergreen Business</a></li>
										</ul>
									</li>
									<li><a title="Contact Us" href="contact/index.html">Contact&nbsp;Us</a></li>
								</ul>
								
								<p>Keep Sandy Springs North Fulton Beautiful<br />470 Morgan Falls Road Atlanta, GA 30350</p>
							</div>
				</div>
	</div>
	
	<div id="footer">
		Copyright &copy; 2005, Keep Sandy Springs Beautiful North Fulton Beautiful. All Rights Reserved.
	</div>
</body>
</html>
