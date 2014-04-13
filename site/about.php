<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Eliza Zerehi is a Los Angeles Area Realtor" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<!-- css files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<!-- js files -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {	
	
	$("#newsletterform").validationEngine({
		ajaxSubmit: true,
		ajaxSubmitFile: "http://www.elizazerehi.com/ajaxSubmit.php",
		ajaxSubmitMessage: "Thank you for subscribing",
		//success :  false,
		success: false,
		failure : function() {}
	})
	
  });
</script>



<title>Eliza Zerehi | Los Angeles Area Real Estate Agent</title>
</head>

<body>
	
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" id="left" style="background:transparent;">
                   <!-- <h1 style="color:#d8262e; float:right; letter-spacing:-3px;">ELIZA ZEREHI</h1>-->
                   <!--<img src="img/logo.jpg" />-->
                   <ul>
                   	<li>
                   		<a href="/"><h1>Eliza Zerehi</h1></a>
                    </li>
                    <li>
                   		<a href="/"><p>Real Estate broker</p></a>
                    </li>
                   </ul>
                </div>
                <div class="col-lg-8" id="right" style="background:transparent;">
                    <ul>
                    	<li>
                        	<a href="/contact">CONTACT</a>
                        </li>
                        <li class="current-page">
                        	<a href="/about">ABOUT</a>
                        </li>
                       	<li>
                        	<a href="/news">NEWS</a>
                        </li>
                        <li>
                        	<a href="/properties">PROPERTIES</a>
                        </li>
                        <!--
                        <li>
                        	<a href="/clientdemo/services.php">SERVICES</a>
                        </li>
                        -->
                        <li>
                        	<a href="/">HOME</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="music" style="text-align:right; margin-top:-25px;">
        	<embed src="bgmusic/player.swf" quality="high" type="application/x-shockwave-flash" WMODE="transparent" width="62" height="28" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always" />
     	</div>
    </div><!--header-->
    
    <div class="main">
        <div class="container"  style="color:black;">
            <div class="content" style="padding-bottom:0;">
                <div class="col-lg-4"> 
                    <img src="img/aboutprofile.png" height="600px"/>
                </div>
                <div class="col-lg-7">
                    <h2 style=" border-bottom:2px solid #3acbc7; letter-spacing:-1px; font-size:25px;">I AM ELIZA ZEREHI</h2>
                    
                    <p style="padding-top:0px;">
                        I am a real estate broker with over 18 years of experience in SFR and income properties.
                    </p>
                    
                    <h3 style=" border-bottom:2px solid #3acbc7; letter-spacing:-1px; font-size:20px;">MY BACKGROUND</h3>
                    
                    <p style="padding-top:0px;">
                     I began my training with Fred Sands and have since been associated with many major real estate companies including: Coldwellbanker, Nourmand & Assoc, and Sotheby's.
I earned my real estate Broker license three years ago and currently practice at a boutique real estate company known as Barcode Properties.

<p>
I dedicate my time and expertise to each and every one of my clients exclusively.  I believe my professionalism, trust worthy negotiation expertise, and deliverance has lead me to become a successful broker.</p>

<p>
I have been dealing and selling properties in the $200,000 to $8,000,000 market and have much experience working with listings in areas including, but not limited to: Beverly Hills, Westwood, Brentwood, Bel-Air, and Santa Monica.
</p>
                    </p>
                </div>      
            </div> <!--content-->
    	</div><!-- container-->
       	
    </div>
    <div class="footright">
        <div class="footer">
            <div class="container">
                <div class="col-lg-4">
                    <div class="content">
                        <h4>Contact Info</h4>
                        <p>E: info@elizazerehi.com</p>
                        <p>P: 310.926.3835</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <h4>Subscribe to the Newsletter</h4>
                        <form id="newsletterform">
                            <span class="row">
                                <label>Your Name:</label>
                                <input name="newsname" type="text" id="newsname" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/>
                             </span>
                             <span class="row">
                                <label >Your Email: </label>
                                <input style="margin-left:3px;" name="newsemail" type="text" id="newsemail" class="validate[required,custom[email]] text-input"/>
                             </span>
                             <span class="row">
                                <button class="btn btn-small subbtn" type="submit" id="Subscribe">Subscribe</button>
                             </span>                        
                        </form>
                    </div>
                </div>
                <div class="col-lg-4" style="border:none;">
                    <div class="content">
                        <h4>Location</h4>
                        <a target="_blank" href="https://maps.google.com/maps?q=12611+Promontory+Rd.+Los+Angeles,+CA+90049&hl=en&sll=32.824552,-117.108978&sspn=0.810124,1.452942&hnear=12611+Promontory+Rd,+Los+Angeles,+California+90049&t=m&z=16">
                        <address>
                         12611 Promontory Rd.<br />
                         Los Angeles, CA 90049
                        </address>
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="copyright">
            <span >COPYRIGHT 2013 ©ELIZAZEREHI.COM. ALL RIGHTS RESERVED.</span>
        </div>      
	</div>
	
    
	
        
        
<script type="text/javascript" src="js/base.js"></script>
</body>
</html>