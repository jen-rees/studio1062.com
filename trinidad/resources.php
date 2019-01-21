<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Resources // City of Trinidad, California</title>

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
                            <li><a class="current" href="resources.php">RESOURCES</a></li>
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
    	
    
        <div id="main-content-resources">
        <!--
        <img src="assets/backgrounds/departments_sm.jpg" alt="Departments" />
        </div> 
        -->   
            <div id="content-container">
            <!--
            <div id="breadcrumb"><a href="index.php" target="_self">Home </a>><a href="#"> Resources </a></div>
            -->
            <div id="page-title"><h1>External Resources</h1></div>
           
            
           
            <div id="main-container">
           
           <div class="content-text">
            
            <h3>Visitor Services & Tourism</h3>
            	
                <ul>
                	<li><a href="http://www.trinidadcalif.com" target="_blank">Greater Trinidad Chamber of Commerce</a></li>
                    <li><a href="https://www.facebook.com/TrinidadChamber" target="_blank">Trinidad Chamber Facebook</a></li>                </ul>
            
               
           	<h3>Community Links</h3>
            
                	
                    <ul>
                        <li><a href="http://www.humboldt.k12.ca.us/trinidad_sd" target="_blank">Trinidad Union School</a></li>
                        <li><a href="http://www.ncrlt.org" target="_blank">Humboldt North Coast Land Trust</a></li>
                        
                        <!--<li><a href="#">Pay your water bill</a></li> -->
                	</ul>
            </div>
            
                  
               <div class="clear"></div>    
               <div class="">     
                
                    
                    
                    <div class="resource-link" >
                    	<p><a href="http://www.humboldtgov.org/308/Trinidad-Library" target="_blank"><strong>Trinidad Library</strong></a></p>
                        <div class="links-img">
                        <a href="http://www.humboldtgov.org/308/Trinidad-Library" target="_blank">
                        <img src="assets/resources/library.jpg" alt="trinidad library" />
                        </a>
     
						<p>380 Janis Court<br />
						P.O. Box 856<br />
						Trinidad, CA 95570<br />

						Ph: 707-677-0227</p>
    					</div>
                    </div>
                   
                    
                    <div class="resource-link">
                    <p><a href="http://www.codepublishing.com/CA/Trinidad/" target="_blank"><strong>Municipal Code</strong></a></p>
                        <div class="links-img">
                        <a href="http://www.codepublishing.com/CA/Trinidad/" target="_blank">
                        
                        <img src="assets/resources/municipal_code.jpg" alt="Municipal Code Online" />
                        </a>
                        
                        <p>The city now has a comprehensive, well organized, user friendly and searchable database of all its ordinances - including the zoning and land use code thanks to the help of Code Publishing Inc. out of Seattle Washington.</p>
    					</div>
                    </div>
                    
                    
                    <div class="resource-link">
                    <p><a href="http://www.trinidad.ca.gov/documents-library.html" target="_blank"><strong>Documents</strong></a></p>
                        <div class="links-img">
                        <a href="http://www.trinidad.ca.gov/documents-library.html" target="_blank">
                        <img src="assets/resources/document_library.jpg" alt="Municipal Code Online" />
                        </a>
                        
                        <p>As we are in the process of migrating all of our documents to the new website please visit the link above for access to the documents library.</p>
                    	</div>
                    </div>
                    
                    
               </div>     
                    



 <div class="clear"></div>
            </div>
            
            
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
