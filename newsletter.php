<?php
function spamcheck($field)
  {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

  // Check if the "from" input field is filled out
  if (isset($_POST["newsletter"]))
    {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["newsletter"]);
    if ($mailcheck==FALSE)
      {
      echo "Invalid input";
      }
    else
      {
		$subject="Newsletter";
      $from = $_POST["newsletter"]; // sender
	  $message = 'Email: '. $from;
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("info@Imbuent.com",$subject,$message,"From: $from\n");
      
	  ?>
	  <html>
	  <head>
  <title>IMBUENT : TRAINING BY IIT PRIZE WINNER - 6 Six week Six months Training Ludhiana Punjab PLC VLSI VHDL Embedded system 8051 PIC ARM Automation MATLAB AVR SCADA Arduino</title>
  <meta name="description" content="Imbuent is an embedded system consulting, technology services providing and electronics product developing company." />
  <meta name="keywords" content="VLSI Training in Ludhiana, VHDL Training institutes in Ludhiana Punjab, Embedded Training Institute in Ludhiana Punjab,Arduino Robotics  Embedded System Training in Ludhiana Punjab, PLC Programming in  Ludhiana Punjab, PLC SCADA Training in Ludhiana Punjab, PLC Training in Ludhiana Punjab,Automation SCADA PLC Training Institute in Ludhiana Punjab, Industrial Automation Training Ludhiana, Learn PLC Programming in Ludhiana Punjab, Learn Embedded System in Ludhiana Punjab, Learn PCB Designing in Ludhiana Punjab, Industrial Training in Ludhiana Punjab, Six Weeks Training in Ludhiana Punjab, Six Months Training in Ludhiana Punjab, Matlab Training In Ludhiana, Matlab Simulink Training In Ludhiana, Matlab GUI Development In Ludhiana, Image Processing Training In Ludhiana, 8051 Training  in Ludhiana, PIC Training in Ludhiana, ARM Training in Ludhiana, AVR Training in Ludhiana, Microcontroller Training in Ludhiana, Embedded System Development in Ludhiana, FPGA Prototyping Training in Ludhiana,6 Weeks Training in Ludhiana Punjab, 6 months industrial training in Ludhiana Punjab, Embedded System Courses, B. Tech / BE  training Ludhiana, Embedded Linux Training in Ludhiana Punjab, Vocational Training in Ludhiana Punjab, Professional Training Ludhiana, Summer Training in Ludhiana Punjab, Diploma Training in Ludhiana Punjab">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="icon" href="#" type="image/ico">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
  <script type="text/javascript" src="js/mousewheel.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>

</head>
		<body>
			<div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><img src="images/logo.jpg" alt="Imbuent Embedded System Company & Training Ludhiana Punjab"/></a></h1>
		  <h2>Today's Solutions-Tomorrow's Technologies</h2>
        </div>
		<nav>
			<div class="socio">
				<a href="http://www.facebook.com" target="_blank"><img src="images/fb.png" alt="Embedded System Training Ludhiana Punjab facebook"/></a>
				<a href="http://twitter.com" target="_blank"><img src="images/twitter.png" alt="Embedded System Training Ludhiana Punjab twitter"/></a>
				<a href="http://www.youtube.com" target="_blank"><img src="images/yt.png" alt="Embedded System Training Ludhiana Punjab youtube"/></a>
			</div>
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
          </ul>
		</nav>
		<div class="clr"></div>
	  </div>
    </header>
	<div class="wrapper">
    <div id="site_content">
		<p>Thank you For Subscribing!</p>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	</div>
	</div>
	<footer>
		<div class="f-container">
			<div class="row">
				<div class="col-md-2">
					<h4>Embedded System</h4>
					<ul>
						<li><a href="training8051.html">8051 Micro-controller</a></li>  
						<li><a href="trainingpic.html">PIC Micro-controller</a></li> 
						<li><a href="trainingarm.html">ARM Micro-controller</a></li>
						<li><a href="trainingavr.html">AVR Micro-controller</a></li>
						<li><a href="wireless.html">Wireless Applications</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<div style="margin-top:40px"></div>
					<ul>
						<li><a href="trainingelinux.html">Embedded Linux</a></li>  
						<li><a href="#">Ardunio Board</a></li>
						<li><a href="traininggui.html">GUI Development</a></li>
						<li><a href="PCB_Desiging.html">PCB Designing</a></li> 
						<li><a href="robotic.html">Robotics</a></li> 
					</ul>
				</div>
				<div class="col-md-1">
					<div style="margin-top:40px"></div>
					<ul>
						<li><a href="#">VERILOG</a></li>  
						<li><a href="#">VLSI</a></li>
						<li><a href="trainingvhdl.html">VHDL</a></li>
						<li><a href="matlab.html">MATLAB</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>PLC Industrial Automation</h4>
					<ul>
						<li><a href="scada_drive.html">SCADA & Drives</a></li>  
						<li><a href="hmi-dcs.html">DCS & HMI</a></li> 
						<li><a href="trainingplc.html">Industrial Automation - PLC</a></li> 
					</ul>
				</div>
				<div class="col-md-4" style="float:right;">
					<h3>Testimonials</h3>
					<marquee direction="up" scrollamount="2">
					<ul class="testimonials">
						<li>
							<p>"It was great to do the  trainings in Imbuent. Ever Since I Stepped in to Imbuent I was able to discover skills and abilities that I was not aware of Now all those experiences have helped me expand, my horizon, driving me out of my limitation and experience so many new things."</p>
							<span class="name">Jaspreet Kaur, Completed Six Weeks And Six Months Training , Now Pursuing M.Tech.</span>
						</li>
						<li>
							<p>"The facilities are tactful, lovely, easy going, friendly and perceptive and have experiences and necessary qualification for teaching .The Spirit of co-cooperation and Competitive environment on campus encourages us to interact , brainstorm and accomplish our goals."</p>
							<span class="name">Kamaljeet Singh, Completed Six Weeks Industrial Training on 8051 Microcontroller , Now Working at Sigma Ludhiana</span>
						</li>
						<li>
							<p>"I really enjoyed the summer training program and thankful opportunity. Imbuent provided Me a wide learning platform with resource facilities who guided me throughout my Training."</p>
							<span class="name">Amardeep Singh, Completed Six Months Industrial Training, , Now Pursuing Masters  from Concordia University, Montreal, Canada</span>
						</li>
						<li>
							<p>"My experience with Imbuent was best and information in all aspected as per my requirements. I am very pleased that I made the right choice in choosing Imbuent to presue my training as this Company only guided me to that right path but also made me confident to face the real world And become successful."</p>
							<span class="name">Sumanpreet Kaur, Completed Six Weeks And Six Moths Training, Now Pursuing Masters from Ontario, Canada</span>
						</li>
						<li>
							<p>"The instructors were very inspirational. The Projects were challenging interesting .Overall these was enjoyable and worthwhile class. Furthermore it also helped me meet people in industry."</p>
							<span class="name">Bhavneet Singh, Completed Industrial Training on PIC Microcontroller after B.Tech , Now Working at Sigma Ludhiana</span>
						</li>
						<li>
							<p>"Extremely Useful Information, Great Workflow, Experienced and Knowledgeable Instructor. The training has Helped raised the quality of my Work Imbuent  Training Content."</p>
							<span class="name">Harmandeep Singh, Completed Industrial Training on PIC Microcontroller after BCA, Now Working at Amar Jacquard Ludhiana.</span>
						</li>
						<li>
							<p>"I would categorize my Comments in the following expectation from Imbuent almost everything was discussed. It was very information training. Trainer- Very Detail And patient to discuss everything I would like to thank you for giving us good training."</p>
							<span class="name">Tanvi K. Singh, Complete Industrial Training on 8051 Microcontroller Durining B.TECH , Now Working at TCS, Banagalore</span>
						</li>
						<li>
							<p>"I really appreciate the efforts and technologies in which Imbuent working in Ludhiana."</p>
							<span class="name">Pritam Singh, Sigma Industrial Control ,Ludhiana</span>
						</li>
						<li>
							<p>"The Best thing in Imbuent is that whatever they committed before training  , they will  complete entire Syllabus"</p>
							<span class="name">Manpreet Raju, Completed PIC Microcontroller and GUI Development Training after B.Tech, Now Pursuing Masters from Conestoga College, Canada</span>
						</li>
						<li>
							<p>"I highly appreciate and  Recommend   Imbuent For Industrial Automation – PLC Training. We are used same Industrial Automation Panel  what ever they are using for Students."</p>
							<span class="name">Gurdeep Singh, K. L. Industries ,Ludhiana</span>
						</li>
					</ul>
					</marquee>
				</div>
			</div>
		</div>
		<div class="row copyright">
			<div class="f-container">
				<p style="float:right;"><a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="privacypolicy.html">Privacy Policy</a> | <a href="disclaimer.html">Disclaimer</a> | <a href="contactus.html">Contact Us</a></p>
				<p style="float:left;">Copyright &copy; Imbuent Technologies Pvt. Ltd.</a></p>
				<div class="clr"></div>
			</div>
		</div>
		<div class="traleblazer">Creation & care by <a href="http://www.thetraleblazer.com" target="_blank">Traleblazer</a></div>
	</footer>
		</body>
	  </html>	  
	  <?php 
	  }
    }
	
?>