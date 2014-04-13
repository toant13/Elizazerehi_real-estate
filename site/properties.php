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
<script type="text/javascript" src="js/topbase.js"></script>
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
                        	<a href="contact">CONTACT</a>
                        </li>
                        <li>
                        	<a href="about">ABOUT</a>
                        </li>
                       	<li>
                        	<a href="news">NEWS</a>
                        </li>
                        <li class="current-page">
                        	<a href="properties">PROPERTIES</a>
                        </li>
                        <!--
                        <li>
                        	<a href="/services.php">SERVICES</a>
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
    </div>
    <div class="main">
        <div class="container">
        	<div class="content">
            	<div class="row">
                	<div class="col-lg-12" id="prevprop">
                    	<h1>Previously Sold Properties</h1>
                    </div>                    
                </div>
           	 	<div class="row">
                	<div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/woodruff"><img src="img/properties/woodruff/download (1).jpeg"/></a>
                            <div class="info">
                            	<h6>$1,695,000</h6>
                                <h5>
                                Woodruff Ave, <br />Los Angeles 90024     
                                </h5>
                            	<h5>3 br, 3 ba, 2,500ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/woodruff" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/beverlyglen"><img src="img/properties/beverly glen/download (1).jpeg"/></a>
                            <div class="info">
                            	<h6>$975,000</h6>
                                <h5>
                                Beverly Glen Blvd #405, <br />Los Angeles 90024       
                                </h5>
                            	<h5>3 br, 3 ba, 2,209ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/beverlyglen" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/correaway"><img src="img/properties/correaway/download (1).jpeg"/></a>
                            <div class="info">
                            	<h6>$7,995,000</h6>
                                <h5>
                                Correa Way, <br />Los Angeles 90049    
                                </h5>
                            	<h5>5 br, 7.5 ba, 5,804ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/correaway" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>                 
               </div> <!--row-->
               <div class="row">
                	<div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/promontory"><img src="img/properties/promontory/download (4).jpeg"/></a>
                            <div class="info">
                            	<h6>$2,275,000</h6>
                                <h5>
                                	Promontory Rd, <br />Los Angeles 90049
                                </h5>
                            	<h5>3 br, 3.5 ba, 4,883ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/promontory" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/rexford"><img src="img/properties/rexford/IS-1ktxmgei0anh9.jpg"/></a>
                            <div class="info">
                            	<h6>$3,325,000</h6>
                                <h5>
                                Rexford Dr, <br />Los Angeles 90210     
                                </h5>
                            	<h5>4 br, 5.5 ba, 4,005ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/rexford" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/saltair"><img src="img/properties/saltair/download (6).jpeg"/></a>
                            <div class="info">
                            	<h6>$2,195,000</h6>
                                <h5>
                                Saltair Ave, <br />Los Angeles 90049 
                                </h5>
                            	<h5>3 br, 2.75 ba, 2,451ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/saltair" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>                 
                </div> <!--row-->
                 <div class="row">
                	<div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/teakwood"><img src="img/properties/teakwood rd/download (15).jpeg"/></a>
                            <div class="info">
                            	<h6>$2,599,000</h6>
                                <h5>
                                	Teakwood Rd, <br />Los Angeles 90049
                                </h5>
                            	<h5>3 br, 3 ba, 2,804ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/teakwood" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>                    
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/tavistock"><img src="img/properties/tavistock/download (19).jpeg"/></a>
                            <div class="info">
                            	<h6>$2,150,000</h6>
                                <h5>
                                Tavistock Ave, <br />Los Angeles 90049   
                                </h5>
                            	<h5>4 br, 3 ba, 3,258ft²</h5>
                                
                            </div>
                            <hr />
                           	<a href="listings/woodruff" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>                 
                    <div class="col-lg-4">
                    	<section class="listing">
                    		<a href="listings/glendon"><img src="img/properties/glendon/download (3).jpeg"/></a>
                            <div class="info">
                            	<h6>$999,000</h6>
                                <h5>
                                Glendon Ave, <br />Los Angeles 90025
                                </h5>
                            	<h5>3 br, 2.5 ba, 1,874ft²</h5>                               
                            </div>
                            <hr />
                           	<a href="listings/glendon" class="btn btn-small infobtn">MORE INFO</a>
                        </section>
                    </div>      
                </div> <!--row-->
                
             
              
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
    <a href="#" class="go-top white">Top</a>
		
    
	
        
        
<script type="text/javascript" src="js/base.js"></script>
</body>
</html>