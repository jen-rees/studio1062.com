</div>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Studio 1062 // Web &amp; Graphic Design</title>

    <!-- all scripts -->

    <?php include 'php/scripts.php'; ?>

    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/hovereffects.css" />

</head>





<body>
    <?php include_once("php/analyticstracking.php") ?>
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

                        <li class="tablet"><a href="photography.php">DIGITAL IMAGING</a></li>
                        <li class="tablet"><a href="video.php">VIDEO</a></li>
                        <li class="tablet end"><a href="typography.php">TYPOGRAPHY</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="clear"></div>

        <div id="main">
            <!--<div id="breadcrumb"><a href="index.php" target="_self">Portfolio</a></div>-->

            <div class="main-content">

                <div id="home">
                    <div class="thumbnail">
                        <div class="grid">
                            <a class="img-hover" href="strategy.php#streamline">
                                <figure class="effect-zoe">
                                    <img src="assets/thumbnails/streamline_campaign.jpg" alt="placeholder" />
                                    <figcaption>
                                        <h2>Design Strategy</h2>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>

                        <!--
                <div class="thumbnail">
                <a class="img-hover" href="design.php#sfuff"><img src="assets/thumbnails/sfuff_campaign.jpg" alt="placeholder" /></a>
                </div>
                
                <div class="thumbnail">
                <a class="img-hover" href="design.php#trinidad"><img src="assets/thumbnails/trinidad_campaign.jpg" alt="placeholder" /></a>
                </div>
                -->
                        <div class="thumbnail">
                            <div class="grid">
                                <a class="img-hover" href="web.php">
                                    <figure class="effect-zoe">
                                        <img src="assets/thumbnails/ahhcenter.jpg" alt="placeholder" />
                                        <figcaption>
                                            <h2>Web Design</h2>
                                        </figcaption>
                                    </figure>
                                </a>

                            </div>
                        </div>

                        <div class="thumbnail">
                            <div class="grid">
                                <a class="img-hover" href="print.php">
                                    <figure class="effect-zoe">
                                        <img src="assets/thumbnails/print.jpg" alt="Print Design" />
                                        <figcaption>
                                            <h2>Print Design</h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <!--
                <div class="thumbnail grid">
                <a class="img-hover" href="imaging.php">
                <figure class="effect-zoe">
                <img src="assets/thumbnails/imaging.jpg" alt="Digital Imaging" /><figcaption>
                	<h2>Digital Imaging</h2>
                </figcaption>
                </figure>
                </a>
                </div>
                -->

                        <div class="thumbnail">
                            <div class="grid">
                                <a class="img-hover" href="photography.php">
                                    <figure class="effect-zoe">
                                        <img src="assets/thumbnails/photography.jpg" alt="Photography" />
                                        <figcaption>
                                            <h2>Photography</h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <div class="grid">
                                <a class="img-hover" href="video.php">
                                    <figure class="effect-zoe">
                                        <img src="assets/thumbnails/motion.jpg" alt="Motion and Video" />
                                        <figcaption>
                                            <h2>Motion &amp; Video</h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <div class="grid">
                                <a class="img-hover" href="typography.php">
                                    <figure class="effect-zoe">
                                        <img src="assets/thumbnails/type_thumb.jpg" alt="Typography Design" />
                                        <figcaption>
                                            <h2>Typography Design</h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>









                    </div>


                </div> <!-- end main-content-->

                <div class="clear"></div>



            </div> <!-- end main -->


            <div class="clear"></div>




            <?php include 'php/footer.php'; ?>

            <div class="clear"></div>
        </div> <!-- end wrap -->


        <script>

            // For Demo purposes only (show hover effect on mobile devices)
            [].slice.call(document.querySelectorAll('a[href="#"')).forEach(function (el) {
                el.addEventListener('click', function (ev) { ev.preventDefault(); });
            });

        </script>


</body>

</html>