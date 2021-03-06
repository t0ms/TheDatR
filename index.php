<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset">

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title></title>
	
	<meta name="title" content="">
	<meta name="description" content="">
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="_/css/style.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="_/js/modernizr-1.7.min.js"></script>

</head>

<body>

	<header>
		<div id="head_content">
		<h1><a href="/">WeeBlackBook</a></h1>
		
		<nav>
		
			<ul id="menu">
				<li><a href="">What is this?</a></li>
				<li><a href="">How does it work?</a></li>
				<li><a href="">Costs?</a></li>
				<li><a href="">Login/Register</a></li>
			</ul>
		
		</nav>
		</div>
	</header>
	
<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
<!--	
	<article>
		
		<h1>Article Header</h1>
		
		<p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>
		
		<h2>Article Subhead</h2>
		
		<p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>
	
	</article>
	
	<aside>
	
		<h2>Sidebar Content</h2>
	
	</aside>
-->	

<div class="mainform">

<form align="center" onSubmit="add_record(); return false;">
<input id="person_name" name="person_name" placeholder="Name" size="10">

<label>Score:
	<select id="person_score" name="person_score">
		<option>1
		<option>2
		<option>3
		<option>4
		<option>5
		<option>6
		<option>7
		<option>8
		<option>9
	</select>
</label>

<label>Stage:
	<select id="person_progress" name="person_progress">
		<option>0% - Identified
		<option>10% - Introduction
		<option>20% - Small Talk
		<option>30% - Conversation
		<option>40% - First Date/Kiss
		<option>50% - Second Date
		<option>60% - Hooked Up
		<option>70% - Third Date
		<option>80% - Dating
		<option>90% - Intimate Dating
		<option>100% - Ongoing Relationship
		<option>0% - Done & Dusted	
		<option>0% - Lost/Closed
	</select>
</label>

<label>Confidence:
	<select id="person_conversion_confidence" name="person_conversion_confidence">
		<option>None
		<option>Very Low
		<option>Low
		<option>Medium
		<option>High
		<option>Very High
		<option>Certain
	</select>
</label>
<input type="button" value="Add" onClick="add_record();">

</form>
</div>	

<div class="pipeline">
<table id="pipeline_table" style="width: 100%;">
  <tbody>
    <tr>
       <td>Name</td><td>Score</td><td>Stage</td><td>Confidence</td><td></td>
    </tr>
  </tbody>
</table>
</div>
	
	<footer align="right">
		
		<p><small>&copy; Copyright Your Name Here 2011. All Rights Reserved.</small></p>
		
	</footer>

</div>

<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='_/js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

<script>
function add_record(){
	
	// recording main data
	person_name = $('#person_name').val();
	person_score = $('#person_score').val();
	person_progress = $('#person_progress').val();
	person_conversion_confidence = $('#person_conversion_confidence').val();
	
	// adding a row to the main table
	$('#pipeline_table > tbody:last').append('<tr><td id="person_name">'
		+person_name
		+'</td><td id="person_score">'
		+person_score
		+'</td><td id="person_progress">'
		+person_progress
		+'</td><td id="person_conversion_confidence">'
		+person_conversion_confidence
		+'</td><td><a href=\'#\' onclick=\'removeClosest(this);\'>Del</a> </td>'
		+'<td><a href="#" onclick=\'editClosest(this);\'>Edit</a></td></tr>'
		);
}
function removeClosest(a) {
	$(a).closest('tr').remove();
}
function editClosest(a) {
	alert($(a).closest('tr').val());
}
</script>
  
</body>
</html>