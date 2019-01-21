<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>nav test //by Studio 1062 </title>

<!-- all scripts -->

<?php include 'php/scripts.php'; ?>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



    
   
    
    

</head>





<body>

<div id="wrap">


    <?php include 'php/header.php'; ?>
    
    
    
    <div class="clear"></div>
   
            <nav class="nav-collapse">
                <ul>
                    <li><a class="current" href="campaign.php">CAMPAIGN</a></li>
                    <li><a href="web.php">WEB</a></li>
                    <li><a href="print.php">PRINT</a></li>
                    <li><a href="imaging.php">IMAGING</a></li>
                    <li><a href="photography.php">PHOTOGRAPHY</a></li>
                    <li><a href="video.php">VIDEO</a></li>
                    <li><a href="typography.php">TYPOGRAPHY</a></li>
                </ul>
            </nav>
	<div class="clear"></div>
   
    <div id="main">
    	
           
    
    
    </div> <!-- end main -->
	
    
    <div class="clear"></div>
    
</div> <!-- end wrap -->


<?php include 'php/footer.php'; ?>  

 <script>
      var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
      });
    </script>


</body>
</html>
   <nav class="nav-collapse">
      <ul>
        <li><a href="http://google.com">Home</a></li>
        <li><a href="http://google.com">About</a></li>
        <li><a href="http://google.com">Projects</a></li>
        <li><a href="http://google.com">Blog</a></li>
      </ul>
    </nav>

   