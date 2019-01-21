<!-- IE -->

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('hgroup');
      document.createElement('nav');
      document.createElement('footer');
   </script>
   <link rel="stylesheet" type="text/css" href="css/ie.css">
   
<![endif]-->


<!-- main css files -->
<link rel="stylesheet" type="text/css" href="css/structure.css">

<link rel="stylesheet" type="text/css" href="css/header.css">

<link rel="stylesheet" type="text/css" href="css/nav.css">

<link rel="stylesheet" type="text/css" href="css/footer.css">


<!-- responsive nav -->

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/responsive-nav.css">
<link rel="stylesheet" type="text/css" href="css/advanced-nav.css">


<link rel="icon" href="assets/icon.png" type="image/png" sizes="124x124">


<script src="js/responsive-nav.js"></script>

<!-- responsive css 

<link rel="stylesheet" type="text/css" href="css/layout_800_plus.css" media="screen and (min-width: 901px) and (max-width: 1080px)"/>
<link rel="stylesheet" type="text/css" href="css/layout_600_plus.css" media="screen and (max-width: 900px)"/>
<link rel="stylesheet" type="text/css" href="css/layout_400_plus.css" media="screen and (min-width: 401px) and (max-width: 610px)"/>-->

<!-- typekit fonts localhost-->

<script type="text/javascript" src="//use.typekit.net/anb2gtg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- typekit fonts jeniferfitch.com-->
<script src="//use.typekit.net/dnh2rlb.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


<!-- jquery -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- favicon -->



<!-- sticky nav -->

<link rel="stylesheet" href="css/sticky-navigation.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<script>
$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0  });
		} else {
			$('#sticky_navigation').css({ 'position': 'relative' }); 
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});
</script>




