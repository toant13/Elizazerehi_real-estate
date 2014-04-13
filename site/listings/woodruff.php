<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Eliza Zerehi is a Los Angeles Area Realtor" />
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">

<!-- css files-->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<!-- js files -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/topbase.js"></script>
<script type="text/javascript" src="../js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="../js/jquery.validationEngine.js"></script>
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
                        	<a href="../contact">CONTACT</a>
                        </li>
                        <li>
                        	<a href="../about">ABOUT</a>
                        </li>
                       	<li>
                        	<a href="../news">NEWS</a>
                        </li>
                        <li class="current-page">
                        	<a href="../properties">PROPERTIES</a>
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
        	<embed src="../bgmusic/player.swf" quality="high" type="application/x-shockwave-flash" WMODE="transparent" width="62" height="28" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always" />
     	</div>
    </div>
    <div class="main">
        <div class="container">
            <div class="content">
            	<div class="single-list">
                	<div class="row" style="border-bottom:1px solid #eeeeee;">
                    	<div class="col-lg-6 left">
                        	<h1>Woodruff Ave, <br />Los Angeles 90024 </h1>
                        </div>
                        <div class="col-lg-6 right">
                        	<h1>$1,695,000</h1>
                        </div>
                		
                    </div>
                    <div id="gallery">
                        <div id="panel">
                            <img id="largeImage1" src="../img/properties/woodruff/download.jpeg" />
                            <div id="description1"></div>
                        </div>
                    
                        <div id="thumbs">
                            <div class="row">                                 
                                <div id="feature-carousellist1" class="carousel slide">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#feature-carousellist1" data-slide-to="0" class="active"></li>
                                        <li data-target="#feature-carousellist1" data-slide-to="1"></li>       
                                   
                                     </ol>
    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <ul class="col-lg-12">
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (1).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (2).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (3).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (4).jpeg" width="300" alt="">
                                                </li>
                                            </ul>           
                                        </div>
                                        <div class="item">
                                            <ul class="col-lg-12">
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (5).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                   <img src="../img/properties/woodruff/download (6).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download (7).jpeg" width="300" alt="">
                                                </li>
                                                <li class="col-lg-3">
                                                    <img src="../img/properties/woodruff/download.jpeg" width="300" alt="">
                                                </li>
                                            </ul>             
                                        </div>  
                                        
                                        
                                    </div> <!--carousel-inner-->
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#feature-carousellist1" data-slide="prev">
                                    <span class="icon-prev"></span>
                                    </a>
                                    <a class="right carousel-control" href="#feature-carousellist1" data-slide="next">
                                    <span class="icon-next"></span>
                                    </a>
                                </div> <!--carousel-example-generic-->
                            </div>  <!--row--> 
                        </div> <!--thumbs-->
                    </div> <!--gallery-->
                    <div class="remarks">
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>Property: </strong>3 br, 3 ba, 2,500ft²</p>
                                <p><strong>Remarks: </strong> Hard to find,spacious,Remodeled Family Home on Huge Corner Lot. Prime Westwood location. Major 2007 Remodeling just completed. Designer touches throughout.Featuring enlarged Living Room w/skylights.Tastefully Redone Baths. New Chef's kitchen w/granite countertops & top of the line appliances. Romantic Master w/adjoining Den &fire place. Formal Dining Room opens to large patio w/great Indoor/outdoor flow. Beautiful landscaped Back yard w/seperate Gazebo/BBQ area. Perfect for Entertaining. WOW !!!
                                </p>	
                                
                            </div>
                        </div><!--row-->
                        <!--
                        <hr />
                        
                        <div class="row">
                        	
                            <div class="col-lg-3">
                            	<p><strong>Residential Single Family Style: </strong>Architectural</p>
                                <p><strong>APN: </strong>98209384902</p>
                                <p><strong>BR: </strong>5</p>
                                <p><strong>BA: </strong>5</p>
                                <p><strong>SRHS: </strong>Check w/city</p>
                                <p><strong>MLS#: </strong>11-777777</p>
                                <p><strong>APX SF: </strong>99,804/AS</p>
                            </div>
                            <div class="col-lg-3">
                            	<p><strong>Residential Single Family Style: </strong>Architectural</p>
                                <p><strong>APN: </strong>98209384902</p>
                                <p><strong>BR: </strong>5</p>
                                <p><strong>BA: </strong>5</p>
                                <p><strong>SRHS: </strong>Check w/city</p>
                                <p><strong>MLS#: </strong>11-777777</p>
                                <p><strong>APX SF: </strong>99,804/AS</p>
                            </div>
                            <div class="col-lg-3">
                            	<p><strong>Residential Single Family Style: </strong>Architectural</p>
                                <p><strong>APN: </strong>98209384902</p>
                                <p><strong>BR: </strong>5</p>
                                <p><strong>BA: </strong>5</p>
                                <p><strong>SRHS: </strong>Check w/city</p>
                                <p><strong>MLS#: </strong>11-777777</p>
                                <p><strong>APX SF: </strong>99,804/AS</p>
                            </div>
                            <div class="col-lg-3">
                            	<p><strong>Residential Single Family Style: </strong>Architectural</p>
                                <p><strong>APN: </strong>98209384902</p>
                                <p><strong>BR: </strong>5</p>
                                <p><strong>BA: </strong>5</p>
                                <p><strong>SRHS: </strong>Check w/city</p>
                                <p><strong>MLS#: </strong>11-777777</p>
                                <p><strong>APX SF: </strong>99,804/AS</p>
                            </div>                                                        
                        </div><!--row-->
                        <hr />
                        <div class="row">
                        	<div class="col-lg-6">
                                <p>
                                    <strong>Rooms: </strong>Breakfast Area,Den,Dining,Family,Living,Patio Open<br />
                                    <strong>Amenities: </strong><br />
                                    <strong>Equip: </strong>Built-Ins,Garbage Disposal,Hood Fan,Microwave,Range/Oven,Refrigerator,Trash Compactor<br />
                                    <strong>Air: </strong>Central<br />
                                    <strong>Floor: </strong>Carpet,Hardwood<br />
                                    <strong>Fireplace: </strong>Master Bedroom<br />
                                    <strong>Pool: </strong>Room For<br />
                                    <strong>Park: </strong>Detached<br />
                                    <strong>View Type: </strong>Other<br />
                                    <strong>Security: </strong>Owned<br />
                                    <strong>Sewer: </strong><br />
                                    <strong>Disc: </strong>As Is<br />            
                                </p> 
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <strong>Heat: </strong>Central<br />
                                    <strong>Laundry: </strong>Inside<br />
                                    <strong>Roof: </strong>Shingle<br />
                                    <strong>Type: </strong><br />
                                    <strong>Tennis: </strong><br />
                                    <strong>Spa: </strong>Other<br />
                                    <strong>Waterfront: </strong><br />                                    
                                </p> 
                            </div> 
                        </div> <!--row-->
                        <hr />
                        <div class="row">
                        	<div class="col-lg-12 listingrq">
                            	<a href="../contact" class=" btn  btn-default btn-small requestbtn">REQUEST SIMILAR PROPERTIES</a>
                            </div>
                        </div>            
                	</div>        
            	</div><!--single-listing-->
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
        
        
<script type="text/javascript" src="../js/listingbase.js"></script>
</body>
</html>