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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/map.js"></script>
<!--validation-->
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script>
	$(document).ready(function() {			
		// SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
		
		$("#form1").validationEngine({
			ajaxSubmit: true,
			ajaxSubmitFile: "http://www.elizazerehi.com/ajaxSubmit.php",
			ajaxSubmitMessage: "Thank you. I will reply as soon as possible!",
			//success :  false,
			success: false,
			failure : function() {}
		})
		
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

<!--
<style type="text/css">
	#map_canvas {
    position:relative; 
    z-index:10; 
    height:350px; 
	width:450px;
    overflow:hidden;
    
}
-->

</style>


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
                    	<li class="current-page">
                        	<a href="/contact">CONTACT</a>
                        </li>
                        <li>
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
                        	<a href="//services.php">SERVICES</a>
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
    </div> <!--header-->
    <div class="main">
        <div class="container">
        	<div class="content">
            	<section class="contactinfo">
                	<div class="row">
                    	<div class="col-lg-13">
                        	<h3>Any questions? Contact me!</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                        
<!--                        	<form id="form1">
                                <p>
                                    <input name="firstname" type="text" id="firstname" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/>
                                    <label for="firstname">firstname</label>
                                </p>
                                <p>
                                	<label for="lastname">Last Name</label>
                                    <input name="lastname" type="text" id="lastname" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/>
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" class="validate[required,custom[email]] text-input"/>
                                    <label for="email">Email</label>
                                </p>
                                <p>
                                    <label for="phone">Phone</label>
                                	<input name="phone" type="text" id="phone" class="validate[required,custom[telephone]] text-input"/>   
                                </p>
                                <p>
                                	<label for="subject">Subject</label>
                                	<input name="subject" type="text" id="subject" class="validate[required,custom[onlyLetter] text-input"/> 
                                </p>
                                <p>
                                    <textarea name="text" id="comment" class="validate[required,length[6,300]] text-input"></textarea>
                                </p>
                                <p>
                                    <input value="Send Message" type="submit" id="Send"/>
                                </p>
                                
              
                           </form>
                           -->
                           
                            <form id="form1">
                            	<span class="col-lg-6">
                                	<label for="firstname">First Name</label>
                                    <input name="firstname" type="text" id="firstname" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/>
                                </span>
                               	<span class="col-lg-6">
                                    <label for="lastname">Last Name</label>
                                    <input name="lastname" type="text" id="lastname" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/>
                                </span>
                                <span class="col-lg-6">
                                	<label for="email">Email</label>
                                	<input name="email" type="text" id="email" class="validate[required,custom[email]] text-input"/>   
                                </span>
                               	<span class="col-lg-6">
                                    <label for="phone">Phone</label>
                                	<input name="phone" type="text" id="phone" class="validate[required,custom[telephone]] text-input"/>   
                                </span>
                                <span class="col-lg-12">
                                	<label for="subject">Subject</label>
                                	<input name="subject" type="text" id="subject" class="validate[required,custom[onlyLetter],length[0,100]] text-input"/> 
                                </span>
                                <span class="col-lg-12">
                                	<label for="message">Message</label>
                                	<!--<textarea name="message" id="comment" class="validate[required,length[6,300]] text-input"></textarea>-->
                                    <textarea name="text" id="comment" class="validate[required,length[6,300]] text-input"></textarea>
                                </span>
                                
                                <span class="col-lg-12">
                                	<button class="btn contactbtn pull-left" type="submit" id="Send">Send</button>
                                </span>
                                
                                
                        	</form>
                            
                        </div>
                        <div class="col-lg-5">
                        	<div id="map_canvas"></div>            
                        </div>
                    </div><!--row-->
              	</section> 
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
        </div> <!--footer-->
        <div class="copyright">
            <span >COPYRIGHT 2013 ©ELIZAZEREHI.COM. ALL RIGHTS RESERVED.</span>
        </div> 
    </div><!--footright-->
   
		
    
	
        
        
<script type="text/javascript" src="js/base.js"></script>
</body>
</html>