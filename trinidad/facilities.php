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
            <div id="page-title"><h1>Contact</h1></div>
           	<hr> 
            
           
            <div id="main-container">
            	
               <!--
                <div class="thumbnail">
                <a class="img-hover" href="departments.php#police">
                <figure class="">
                <img src="assets/images/2column_placeholder.jpg" alt="placeholder" />
                    <figcaption>
                        <h2>Police</h2>
                    </figcaption>
                </figure>
                </a>
                </div>
              	
                <div class="thumbnail">
                <a class="img-hover" href="departments.php#fire">
                <figure class="">
                <img src="assets/images/2column_placeholder.jpg" alt="placeholder" />
                    <figcaption>
                        <h2>Fire</h2>
                    </figcaption>
                </figure>
                </a>
                </div>
                
                <div class="thumbnail">
                <a class="img-hover" href="departments.php#dpw">
                <figure class="">
                <img src="assets/images/2column_placeholder.jpg" alt="placeholder" />
                    <figcaption>
                        <h2>Public Works</h2>
                    </figcaption>
                </figure>
                </a>
                </div>
                
                <div class="thumbnail">
                <a class="img-hover" href="departments.php#planning">
                <figure class="">
                <img src="assets/images/2column_placeholder.jpg" alt="placeholder" />
                    <figcaption>
                        <h2>Planning &amp; Building</h2>
                    </figcaption>
                </figure>
                </a>
                </div>
                
                <div class="thumbnail">
                <a class="img-hover" href="departments.php#water">
                <figure class="">
                <img src="assets/images/2column_placeholder.jpg" alt="placeholder" />
                    <figcaption>
                        <h2>Water</h2>
                    </figcaption>
                </figure>
                </a>
                </div>
                -->
                
            <div class="clear"></div>
			
            <a class="anchor" name="planning"></a>   
            <h2>Town Hall</h2>
            <div class="content-img"><img src="assets/TownHall.jpg" alt="Trinidad Town Hall" /></div>          
            <p>Info to come!</p>
			
            <hr>
            <h2>Tennis Courts</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Placeholder" /></div>          
            <p>Info to come!</p>

			<hr>    
            <a class="anchor" name="water"></a>    
            <h2>School Track</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Placeholder" /></div>          
            <p>Info to come!</p>
            
            <hr>    
            <a class="anchor" name="water"></a>    
            <h2>Marine Lab</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Placeholder" /></div>          
            <p>Info to come!</p>
            
            <hr>    
            <a class="anchor" name="water"></a>    
            <h2>Trails</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Placeholder" /></div>          
            <p>Info to come!</p>
            
            <hr>    
            <a class="anchor" name="water"></a>    
            <h2>Harbor</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Placeholder" /></div>          
            <p>Info to come!</p>
            
            <hr>    
            <a class="anchor" name="cemetary"></a>    
            <h2>Trinidad City Cemetery</h2>
            <div class="content-img"><img src="assets/departments/placeholder.jpg" alt="Trinidad California Public Works Department" /></div>          
            <p class="paragraph-letterspacing">The City owns and maintains the Trinidad Cemetery, and it is one of the City’s designated historic sites.  There are a limited amount of burial sites still available for sale to the public.  City staff maintains the grounds of the Trinidad Cemetery.  While the City does not arrange funeral services at the cemetery, the coordination of burial and the preparation of gravesites is a City responsibility.</p><p>
Purchase of cemetery plots or the arrangements for an internment is coordinated through the City Clerk who can be reached at (707) 677-0223 or by email at cityclerk@trinidad.ca.gov.</p>
            
            
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
