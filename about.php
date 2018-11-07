<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>About // Jenifer Fitch // Web &amp; Graphic Designer</title>

<!-- all scripts -->

<?php include 'php/scripts.php'; ?>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/hovereffects.css" />

</head>





<body>

<div id="wrap">


    <?php include 'php/header.php'; ?>
    
    
    
    <div class="clear"></div>
   <div id="sticky_navigation_wrapper">
		<div id="sticky_navigation">
            <nav class="nav-collapse">
                <ul>
                    <li><a href="strategy.php">DESIGN STRATEGY</a></li>
                    <li><a href="web.php">WEB</a></li>
                    <li><a href="print.php">PRINT</a></li>
                    <li class="tablet"><a href="photography.php">PHOTOGRAPHY</a></li>
                    <li class="tablet"><a href="video.php">VIDEO</a></li>
                    <li class="tablet end"><a href="typography.php">TYPOGRAPHY</a></li>
                </ul>
            </nav>
		</div>
	</div>
   	 <div class="clear"></div>
   
  
        <div id="main"> 	
    
        <div class="main-content">
        	<div id="contact">
            <div id="about">
            	<div id="about-img">
                <img src="assets/jeniferFitch.jpg" align="left" />
                </div>
                <div id="about-text">
                <h1>About Jenifer Rees</h1>
                <p>Also know as Jenifer Fitch.</a>
                <p>Studio 1062 is my freelance business and this is my portfolio.</p>
                <p>I received my BFA in <a href="https://www.academyart.edu/academics/web-design/">Web Design + New Media</a> from the <a href="https://www.academyart.edu/">Academy of Art University San Francisco</a> 2015. My education taught me professional design concepts & principals, visual design strategies, user experience design, general web design, and motion graphics.</p>
                <p>Currently, I am a web designer for the Marketing & Communications department at <a href="https://humboldt.edu">Humboldt State University</a>. Working here has shown me what it takes to collaborate with highly talented designers, the university photographer, editorial staff, and multiple layers of upper management. A list of of the projects I have done for HSU are available upon request.</p>
                <p>I also do freelance web and graphic design which I started doing before attending AAU in 2009. I set up my own business structure and do everything from acquiring clients, preparing proposals, project management, design research, content organization, rebranding, executing designs, invoicing, and following up with the clients after job is done. I maintain all the websites I create and strive to have on going working relationship with many of my clients.</p> 
                <p>My passion as a visual designer is to focus on the design and marketing of businesses that encourage positive human development and honesty.</p>
                <!-- <p>It's important to make sure client and designer work well together, therefore Jen offers a free 1 hour consultation. Please fill out the form below to find out more.</p> -->

                <h3><a href="assets/jeniferRees_resume_2018.pdf">Resume</a></h3>
                <h4>(707) 631-6934</h4>
                <h4><a href="mailto:jen@studio1062.com?subject=Message from studio1062.com">jen@studio1062.com</a></h4>
                <h4><a href="http://linkedin.com/in/jeniferfitch" target="_blank">linkedin.com/in/jeniferfitch</a></h4>
                
                
				
                
                <!--
                <div id="social">
                <ul>
                    
                    <li><a class="soc-linkedin" href="https://www.linkedin.com/in/jeniferfitch" target="_blank"></a></li>
                    <li><a class="soc-email" href="mailto:contact@jeniferfitch.com?subject=Message from jeniferfitch.com"></a></li>  
                </ul>
				</div
                 -->
				<div class="clear"></div>
    			</div>
                
                
                <div id="wufoo">    

                    <div id="wufoo-zf9b5rv09u0exu">
                    Fill out my <a href="https://jeniferfitch.wufoo.com/forms/zf9b5rv09u0exu">online form</a>.
                    </div>

					<script type="text/javascript">var zf9b5rv09u0exu;(function(d, t) {
                    var s = d.createElement(t), options = {
                    'userName':'jeniferfitch',
                    'formHash':'zf9b5rv09u0exu',
                    'autoResize':true,
                    'height':'680',
                    'async':true,
                    'host':'wufoo.com',
                    'header':'show',
                    'ssl':true};
                    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                    s.onload = s.onreadystatechange = function() {
                    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                    try { zf9b5rv09u0exu = new WufooForm();zf9b5rv09u0exu.initialize(options);zf9b5rv09u0exu.display(); } catch (e) {}};
                    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                    })(document, 'script');
                    </script>
				
                </div>
			</div><!-- end about -->
			</div> <!-- end contact -->                
            <div id="twitter">

       	<a class="twitter-timeline" widdth="600" href="https://twitter.com/JeniferFitch" data-widget-id="497181809931591680">Tweets by @JeniferFitch</a>
        
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

     		</div>
            <div class="clear"></div>             
        </div> <!-- end main-content-->

      	<div class="clear"></div>
   
    
</div> 
   
	
    
    <div class="clear"></div>
    



<?php include 'php/footer.php'; ?>

</div> <!-- end wrap -->


<script>

	// For Demo purposes only (show hover effect on mobile devices)
	[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
		el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
	} );
	
</script>


</body>
</html>
