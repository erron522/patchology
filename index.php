
<?php if(isset($_POST['formdata'])) {include 'modules/vote/vote.php';} ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'modules/content/content.php'; ?>
<!-- Prevents a shrunken down version of the full-screen design from appearing on a mobile device -->
<!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Google Font: Font-Family: Muli -->	
<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">

<!-- Typekit Fonts -->			                  
<script src="https://use.typekit.net/lkv7gqv.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="<?php print $title; ?>">
<meta name="twitter:description" content="<?php print $description; ?>">
<meta name="twitter:creator" content="">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://patchology.modernluxury.com/images/patchology_social_media_twitter.jpg"/> 

<!-- Facebook Meta Tags-->
<meta property="og:title" content="<?php print $title; ?>"/>
<meta property="og:url" content="http://patchology.modernluxury.com/"/>
<meta property="og:description" content="<?php print $description; ?>" />
<meta property="og:image" content="http://patchology.modernluxury.com/images/patchology_social_media_facebook.jpg"/>
<meta property="og:image:width" content="350" />
<meta property="og:image:height" content="250" />

<title><?php print $title; ?></title>
<meta name="description" content="<?php print $description; ?>"/>
<meta name="keywords" content="<?php print $keywords; ?>"/>
<link rel="shortcut icon" href="images/patchology.ico"/>
<link href="css/css.css" rel="stylesheet" type="text/css" media="all" />
<?php  if (strpos($_SERVER['HTTP_USER_AGENT'], "Windows", 0) !== FALSE) { ?>
<link rel="stylesheet" type="text/css" media="all" href="css/win.css" />
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.dev.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.4"></script>
 
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b5906d5d6d379001104ac87&product=sticky-share-buttons' async='async'></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ccb64ee0-2943-4673-8267-a7674363b3f4", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script> 

<!-- Add fancyBox main JS and CSS files -->
<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.1.4" media="screen" />
<script type="text/javascript" src="js/fb_popup.js"></script>
<script type="text/javascript" src="js/formtop.js"></script>
<script type="text/javascript">
	function NewWindow(mypage, myname, w, h, scroll) {
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable=no, status=no, menubar=no'
	win = window.open(mypage, myname, winprops)
	if (parseInt(navigator.appVersion) >= 4)
	win.window.focus();
	} 
</script>
<style type="text/css">
	.fancybox-custom .fancybox-skin {
		box-shadow: 0 0 50px #222;
	}
	
	div.closed{
		color:black;
		font-size:24.14px;
		line-height:25px;
		text-align:center;
		margin-top:60px;
	}
</style>
<!-- END fancyBox-->
<!-- Start placeholders -->
 <script type="text/javascript" src="js/placeholders.min.js"></script>
<!-- END placeholders -->

<!--Facebook Like Script --> 
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=310572942387677";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--End Facebook Like Script -->
</head>
<body <?php if($submission_error || $allmissing_message || $notvalidemail_message || $duplicateemail_message) {print 'onload="goToAnchor()"';}?>>
<div class="container main">
  <div class="row fullheight">
  	<div class="logo"> 
    <img src="images/logo_patchology01.png" alt="Patchology">
      </div>
    <div class="logo_tablet"> 
    <img src="images/logo_tablet_patchology03.png"class="tablet" alt="Patchology">
    <img src="images/logo_mobile_patchology.png" class="mobile"alt="Patchology">
    <img src="images/logo_mobile-small_patchology.png" class="mobile-small"alt="Patchology">
    </div>
    
 
     <div class="content-col col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1">
     
      <div class="row">
       
       <div class="exclusive-offer col-xs-12 center">
       	<img class="img-responsive" style="width: 100%" src="images/yay_exclusive_patchology.png">
       </div>
        <div class="col-xs-12">
          <h1 class="header primary-color"><?php print $header; ?></h1>
          <h1 class="headline primary-color"><?php print $headline; ?></h1>
          <!--<h2 class="subheadline"><?php print $subheadline; ?></h2> -->
          
          <div class="copy"><?php print $copy; ?></div>
          <!-- <div class="copy2"><?php print $copy2; ?></div> -->
        </div>
      </div>
      <div class="blk-bar"></div>
      
      <div class="row">
        <div class="col-xs-12">
        <?php 
		  $contestenddateandtime = '1563904799'; /* 07/23/19 one second before the new day starts – https://www.epochconverter.com/ */
            if(time() > $contestenddateandtime) {
		      print '<div class="closed">The contest has ended. Thank You!</div>';
		    }
				
		?> 
          <a id="formtop"></a>
          <form action="/" method="post" id="theForm" <?php if(time() > $contestenddateandtime) { print 'style="display:none;"'; } ?>>
          <?php if(isset($_POST['formdata'])) {print $message;} ?>
          
          				<!--SIGN UP FORM WITHOUT PLACEHOLDER & TITLE ABOVE INPUT -->
          <div class="input-info">
              <div class="row">
              		<div class="col-sm-6">
                    	<div class="form-group">
                        <label for="first_name" class"label-title" class="checkbox">FIRST NAME&#42;</label>
          				<input name="first_name" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['first_name'];} ?>" class="formfield_first_name"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    	<div class="form-group">
                        <label for="last_name" class"label-title" class="checkbox">LAST NAME&#42;</label>
          				<input name="last_name" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['last_name'];} ?>" class="formfield_last_name"/>
                        </div>
                    </div>
              </div>
              <div class="row">
              		<div class="col-sm-6">
                    	<div class="form-group">
                        <label for="email" class"label-title" class="checkbox">EMAIL&#42;</label>
          				<input name="email" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['email'];} ?>" class="formfield_email" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                    	<div class="form-group">
                        <label for="zip" class"label-title" class="checkbox">ZIP CODE&#42;</label>
          				<input name="zip" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['zip'];} ?>" class="formfield_zip" />
                        </div>
                    </div>
              </div>
          </div>
          				<!--SIGN UP FORM WITH PLACEHOLDER -->
     <!-- <input name="first_name" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['first_name'];} ?>" class="formfield_first_name" placeholder=" First Name*" />
          <input name="last_name" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['last_name'];} ?>" class="formfield_last_name" placeholder=" Last Name*" />
          <input name="email" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['email'];} ?>" class="formfield_email" placeholder=" Email*" />
          <input name="zip" type="text" value="<?php if(isset($_POST['formdata'])) {print $_POST['zip'];} ?>" class="formfield_zip" placeholder=" Zip Code*" /> -->
          
          <div class="checkbox">
            <label>
              <input name="terms_and_conditions" type="checkbox" value="yes" class="checkbox"/> I agree to the sweepstakes <a class="fancybox tclink" href="http://cdn.modernluxury.com/natl/patchology-terms-and-conditions.pdf" title="Contest Rules." target="_blank">terms &amp; conditions&#42;</a>
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input name="sign_up_modlux" type="checkbox" checked="" value="yes" class="checkbox"/> Sign me up to receive luxury news from <a class="fancybox tclink" href="https://www.modernluxury.com/" title="Modern Luxury" target="_blank">Modern Luxury</a>
            </label>
          </div>
          <button type="submit" alt="Enter To Win" class="btn form_submit" id="formSubmit">ENTER TO WIN</button>
          <input type="hidden" name="formdata" value="yes" />
          <div class="social-buttons">
            <div class="sharethis-inline-share-buttons"></div>
          </div>
          
          <div class="copyright">
          <p>&#169;<?php print date('Y');?> Modern Luxury</p>          
          </div>
          
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
           <!-- Mobile Background Image
           <div class="col-xs-12 mobile_image">
            	<img class="img-responsive mobile-image" style="width: 100%" src="images/background_patchology_mobile.jpg">
           </div>--> 

<script data-cfasync="false" type="text/javascript" src="//filamentapp.s3.amazonaws.com/1d1a1d3f61b0568d79d9e07026a4ac1d.js" async="async"></script>

<!-- Terms and Conditions -->
<div id="inline1" style="max-width:600px; display: none;">
	<div id="contactArea"><?php print $termsconditions; ?></div>
</div>
<!-- Terms and Conditions -->

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58763613-20', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics -->
</body>
</html>


