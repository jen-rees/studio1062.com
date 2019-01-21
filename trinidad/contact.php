<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Facilities // City of Trinidad, California</title>

<!-- all scripts -->

<?php include 'php/scripts.php'; ?>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/hovereffects.css" />

</head>





<body>

<div id="wrap">


    <header>
    	<hgroup>
        <div id="logo-container">
               				<a href="index.php"><h1 id='logo'>City of Trinidad, California</h1></a></li>
                        </div>
        	 <div id="sticky_navigation_wrapper">
				<div id="sticky_navigation">
            		<nav class="nav-collapse">
               
                        
                        <div id="nav-container">
                        <ul>
                            <li><a href="government.php">GOVERNMENT</a></li>
                            <li><a href="departments.php">DEPARTMENTS</a></li>
                            <li><a href="resources.php">RESOURCES</a></li>
                            <li class="end"><a class="current" href="contact.php">CONTACT</a></li>
                        </ul>
                       	</div>
                        
                    </nav>
                </div>
            </div>

            <div class="clear"></div>

    	</hgroup>
	</header>
    
    
    
    <div class="clear"></div>
   
   	 <div class="clear"></div>
   
    <div id="main">
    	<!--<div id="breadcrumb"><a href="index.php" target="_self">Portfolio</a></div>-->
    
        <div id="main-content-facilities">
            
            <div id="content-container">
            
            <div id="main-container">
            
                <div class="content-img">
                	<img src="assets/TownHall.jpg" alt="Trinidad Town Hall" />
                    <p style="width: 100%; float:left; display:inline;"><strong>Email:</strong><br /><a href="mailto:cityclerk@trinidad.ca.gov?subject=Message from trinidad.ca.gov">cityclerk@trinidad.ca.gov</a></p>
                	<p style="width: 50%; float:left; display:inline;"><strong>Town Hall:</strong><br />409 Trinity St<br />Trinidad, CA 95570</p>
                    <p style="width: 50%; float:left; display:inline;"><strong>Mailing Address:</strong><br />PO Box 390<br />Trinidad, CA 95570</p>
                    <p style="width: 50%; float:left; display:inline;"><strong>Office:</strong><br />(707) 677-0223</p>
                    <p style="width: 50%; float:left; display:inline;"><strong>Fax:</strong><br />(707) 677-3759</p>
                </div>
                <div class="content-text">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3008.40288951914!2d-124.14288699999997!3d41.06018519999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54d1413b0df45d31%3A0xe4938b25bee2cd1!2s409+Trinity+St%2C+Trinidad%2C+CA+95570!5e0!3m2!1sen!2sus!4v1418088373933" width="100%" height="450" frameborder="0" style="border:0; margin: 25px 0 0 0;"></iframe>
                    
                </div>
            
            </div>
            
            <!--
            <div id="sidebar"><h2>RESOURCES</h2>
                <ul>
                	<li><a href="#">Pay your water bill</a></li>
                    <li><a href="#">Municipal Code Online</a></li>
                    <li><a href="#">Documents Library</a></li>
                    <li><a href="#">Chamber of Commerce</a></li>
                </ul>
            
            </div>
            -->
            
            
            <div class="clear"></div>
            
            
            
         </div> <!-- end content container-->   	

    
        
        </div> <!-- end main-content-->

      	<div class="clear"></div>
   
    
    
    </div> <!-- end main -->
	
    
    <div class="clear"></div>
    
</div> <!-- end wrap -->


<?php include 'php/footer.php'; ?>  

<script>

	// For Demo purposes only (show hover effect on mobile devices)
	[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
		el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
	} );
	
</script>


</body>
</html>
