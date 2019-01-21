<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>City of Trinidad, California</title>

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
            <div id class="clear"></div>
        	 <div id="sticky_navigation_wrapper">
				<div id="sticky_navigation">
            		<nav class="nav-collapse">
               
               			
                        
                        <div id="nav-container">
                        <ul>
                            <li><a href="government.php">GOVERNMENT</a></li>
                            <li><a href="departments.php">DEPARTMENTS</a></li>
                            <li><a href="resources.php">RESOURCES</a></li>
                            <li class="end"><a href="contact.php">CONTACT</a></li>
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
    
        <div id="main-content-home">
            
            <div id="content-container">
            
            
            
           
            <div id="main-container">
                
                <!--<div class="content-img"><img src="assets/lighthouse.jpg" alt="Tinidad California Light House" /></div>-->
                
                <div class="content-img"><iframe width="100%" height="315" src="//www.youtube.com/embed/n0Y7eLR6OY0" frameborder="0" allowfullscreen></iframe></div>
                
                <div class="content-text">
                <div id="page-title"><h1>Welcome to Trinidad, California!</h1></div>          
                <p>Trinidad is a seaside town in Humboldt County, located on the Pacific Ocean 8 miles north of the Arcata-Eureka Airport and 15 miles north of the college town of Arcata. Situated directly above its own natural harbor, Trinidad is one of California's smallest incorporated cities, (with a 2010 population of 367) and is noted for its spectacular coastline with ten public beaches and offshore rocks. These rocks are part of the California Coastal National Monument of which Trinidad is a Gateway City. This natural landmark is joined by three additional marine landmarks - the historic Trinidad Head Light, the Trinidad Memorial Lighthouse, and Humboldt State University's Fred Telonicher Marine Laboratory. Fishing operations related to Trinidad Harbor are vital to both local tourism and commercial fishery interests in the region. In addition to its coastal assets, the city honors and works to protect its Native American cultural and historic heritage.</p>
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
