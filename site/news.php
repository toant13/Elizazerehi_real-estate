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
                        	<a href="/contact">CONTACT</a>
                        </li>
                        <li>
                        	<a href="about">ABOUT</a>
                        </li>
                       	<li class="current-page">
                        	<a href="news">NEWS</a>
                        </li>
                        <li>
                        	<a href="properties">PROPERTIES</a>
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
    </div>
    <div class="main">
        <div class="container">
        	<div class="content">
           	 	<div class="col-lg-9" >
                
                	<?php
						require('newsletter/wp-blog-header.php');
					?>
                	<?php
						global $post;
						$args = array( 'posts_per_page' => -1 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
                    <?php print'<section class="newsentry" id=' . get_the_ID() . '>' ?>
                        <?php the_title( '<h2>', '</h2>' ); ?>
                        <h4><?php the_time( 'm.d.Y' ); ?> </h4>
                        <p><?php echo apply_filters('the_content', $post->post_content); ?></p>
                    </section>
                    
                    
					<?php endforeach; ?>
                	
                
                <!--
                	<section class="newsentry" id="post1">
                        <h2>How To Sell Your Home Faster and For Top Dollar</h2>
                        <h4> 08.13.2013 </h4>
                            
                        <h3 class="red">First Impressions Count.  Make Them Good Ones.</h3>
                        <p class="red">Most home buyers make their decisions based on their emotional reaction to a property.  Looking at your house through the buyers' eyes can help you prepare your home to sell it for the best price, in the least amount of time.</p>
                        <h3>Outside</h3>
                    
                        <p>It's estimated that more than half of all houses are sold before buyers even get out of their cars.  To see how your home compares with the competition, stand across the street and assess its "curb appeal.</p>
                        
                        <p>Tip: <span class="tip">The front door is one of the first things prospective buyers see. If your front door shows signs of wear -- clean it, stain it or paint it.</span></p>
                            
                        <h3>Inside</h3>
                        <p>When your house is being shown to prospective buyers you want to make everything look spacious, organized, bright and inviting. Start with a full housecleaning from top to bottom.</p>
                        
                        <p>Tip:   <span class="tip">Arrange or remove furniture to make rooms appear more spacious.</span></p>	
                        
                        <h3>Kitchen and Bath</h3>
                        <p>The bathrooms and kitchen are key selling points for most buyers. Be sure those rooms are clean and clutter-free.</p>
                        
                        <p>Tip:  <span class="tip">Put away "extras" on your counters such as cosmetics, toothbrushes,
    prescriptions, coffee grinders, wine racks or condiments.</span></p>
    
                        <h3>When in doubt, move it out</h3>
                        <p>	By removing or storing things you don't need, you create a roomy, comfortable feeling that will be inviting to prospective buyers. If a house is too full of personal items, buyers have trouble imagining themselves in it.</p>
                        
                        <p>Tip: <span class="tip">Have a garage sale!  You'll be reducing clutter and you can use the money you earn to for touch-ups.</span></p>
                        
                        <h3>Clean</h3>
                        <p>When a home is clean, it gives the impression that it has been well cared for. Some fresh paint and a one-time professional cleaning service can make your house look like new.</p>
                        
                        <p>Tip: <span class="tip">Clean the track so that the sliding door moves quietly and smoothly.</span></p>
                        
                        <h3>Repair</h3>
                        <p>Making little repairs can make a big difference. The savvy homeowner concentrates on cosmetic repairs that cost relatively little but return a lot on the investment.</p>
                        <p>Tip: <span class="tip">Replace any torn screens.</span></p>
                        
                        <h3>Neutralize, neutralize, neutralize</h3>
                        <p>Try to create an appearance that allows the buyers to picture themselves living
    there. Neutral paint, decor and carpeting create a home for any life style.</p>
    
                        <p>Tip: <span class="tip">Eliminate distracting colors so that buyers can concentrate on positive impressions.  Brighten things with fresh paint. White, off-white or beige walls make a room look  bigger and lighter. Interior painting costs very little and it can make a big difference in buyer perception -- so go ahead and do it.</span></p>
                        
                        <p>Preparing your home for sale doesn't need to be expensive or time-consuming. If you can't do the work, it's well worth it to hire a handyman or a one-time cleaning service.</p>
                	</section>
                    -->
                    
                </div>
              	<div class="col-lg-3">
                	<div class="sidebar">
                    
                    	<h3>
                        	Recent News Entries
                        </h3>
                        <ul>
                        	<?php
								require('newsletter/wp-blog-header.php');
							?>
							<?php
                                global $post;
                                $args = array( 'posts_per_page' => 5 );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) :	setup_postdata($post); 
                            ?>							
							<?php
	
								echo '<li><p><a href="#' . get_the_ID() . '">' . get_the_title() . '</a></p></li>';							
							?>
                            <?php endforeach; ?>
                        </ul>
                        <!--
                        <h3>
                        	Archive
                        </h3>
                         <ul>
                        	<li>
                            	<p><a href="#post2">July</a></p>
                            </li>
                            <li>
                            	<p><a href="#post1">August	</a></p>
                            </li>
                        </ul>
                        -->
                        <h3>
                        	Links
                        </h3>
                         <ul>
                        	<li>
                            	<p><a href="http://www.barcodeproperties.com/agents/" target="_blank">Barcode Properties</a></p>
                            </li>
                            <li>
                            	<p><a href="http://www.facebook.com/ElizaZerehiRealEstateBroker" target="_blank">My Facebook</a></p>
                            </li>
                            <li>
                            	<p><a href="https://twitter.com/ElizaZerehi" target="_blank">My Twitter</a></p>
                            </li>
                            <li>
                            	<p><a href="http://www.linkedin.com/pub/eliza-zerehi/30/702/706" target="_blank">My LinkedIn</a></p>
                            </li>
                        </ul>
                    </div>
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
    <a href="#" class="go-top white">Top</a>
	
        
        
<script type="text/javascript" src="js/base.js"></script>
</body>
</html>