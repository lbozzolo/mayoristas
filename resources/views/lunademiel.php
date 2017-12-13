<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title>Elysium Travel</title> <!--insert your title here-->  
    <meta name="description" content="Elysium Travel - Agencia de Turismo"> <!--insert your description here-->  
    <meta name="author" content="nicDark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--START CSS--> 
    <link rel="stylesheet" href="css/style.css"> <!--main-->
    <link rel="stylesheet" href="css/grid.css"> <!--grid-->
    <link rel="stylesheet" href="css/responsive.css"> <!--responsive-->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen" /> <!--rev slider-->
    <link rel="stylesheet" href="showbizpro/css/settings.css" media="screen" /> <!--showbiz-->
    <link rel="stylesheet" href="css/animate.css"> <!--animate-->
    <link rel="stylesheet" href="css/superfish.css" media="screen"> <!--menu-->
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
    <link rel="stylesheet" href="css/isotope.css"> <!--isotope-->
    <link rel="stylesheet" href="css/flexslider.css"> <!--flexslider-->
    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    <!--END FAVICONS-->
    
    
</head>   
<body id="startpage">


<!--start header-->
<header id="navigationmenu" class="fade-down animate1 navigationmenudark">
	
    <!--start left menu close-->
    
    <!--end left menu close-->
    
    <!--start container-->
    <div class="container">
    
        <!--start navigation-->
    	<div class="grid_12 gridnavigation">
        <a href="index.php">
        	<img class="logo fade-up animate4" alt="" src="img/logo01.png" width="150">
        </a>
        	<!--start navigation-->
<ul class="sf-menu" id="nav">



    <li class="red">
        <span class="menufilter"></span>
        <a href="vacaciones.php"><strong><font size="2"><p>VACACIONES</p></font></strong></a>
    </li>

    <li class="orange">
        <span class="menufilter"></span>
        <a href="eventos.php"><strong><font size="2"><p>EVENTOS DEPORTIVOS</p></font></strong></a>
    </li>

    <li class="violet">
        <span class="menufilter"></span>
        <a href="corporativo.php"><strong><font size="2"><p>CORPORATIVOS</p></font></strong></a>
    </li>

    <li class="green">
        <span class="menufilter"></span>
        <a href="lunademiel.php"><strong><font size="2"><p>LUNA DE MIEL</p></font></strong></a>
    </li>


    <li class="current yellow">
        <span class="menufilter"></span>
        <a href="agencias.php"><strong><font size="2"><p>AGENCIAS</p></font></strong></a>
    </li>
    
    <li class="current yellow">
        <span class="menufilter"></span>
        <a href="nosotros.php"><strong><font size="2"><p>NOSOTROS</p></font></strong></a>
    </li>
    <li class="evidencelabelmenu blue">
        <span class="menufilter"></span>
        <a href="contactanos.php"><strong><font size="2"><p>CONTACTANOS</p></font></strong></a>
    </li>
        
</ul>
<!--end navigationmenu-->	     
        
        </div>
        <!--end navigation-->

    </div>
    <!--end container-->
    
       
    
</header>
<!--end header-->

<!--start right search-->
<div class="rightsearchopen">

    <!--search form-->
    
    <!--end search form-->
    
    <span class="rightsearchopenclose"></span>
     
</div>
<!--end right search-->
<?PHP
                    require_once('config.php');
                    $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
                    $db = mysql_select_db(DB_DATABASE);
                    $result= mysql_query("select * from tbl_imagen_lunamiel ORDER BY id_lunamiel") or die('Error: '.mysql_error());  

                    ?>
                    <?php
                    while ($row = mysql_fetch_array($result)){
                ?>
                <?PHP 
                    $images = explode (", ", $row['imagenes']);
                    $primary = $images[0];
                ?>

<!--end right search-->
<section>

<?PHP 
                    $images = explode (", ", $row['imagenes']);
                    $primary = $images[0];
                ?>
                    <img alt="" class="header-page fade-up" src="admin/uploads/<?PHP echo $primary; ?>">

                    

    <?php
            }
        ?>
</section>

<?PHP
require_once('config.php');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db = mysql_select_db(DB_DATABASE);
$result= mysql_query("select * from seccion_miel ORDER BY id_seccion") or die('Error: '.mysql_error());  

?>
<?php
while ($row = mysql_fetch_array($result)){
?> 

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
        


        
        <div class="grid_12">
            <div class="titlesection rotate-fade-up">
                <h1><p><b><?php 
                echo"" .$row['titulo']. "";
                ?></b></p></h1>
            </div>  
        </div>
        
        
        <div class="grid_12 blue fade-left animate1"><center>
            
           
            <p><?php 
                echo"" .$row['descripcion']. "";
                ?></p><br/></center>
        </div>
        
        <?php
            }
        ?>
        
        
        <?PHP
require_once('config.php');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db = mysql_select_db(DB_DATABASE);
$result= mysql_query("select * from tbl_lunamiel ORDER BY id_lunamiel DESC") or die('Error: '.mysql_error());  

?>
        <div class="grid_12">
            <div class="titlesection rotate-fade-up">
                <h1><p><b>Paquetes Destacados</b></p></h1>
                <h4><p>Disfruta de su Luna de Miel</p></h4>
            </div>  
        </div>
        <?php
                while ($row = mysql_fetch_array($result)){
            ?>
        <div class="grid_3">
        	<!--start member-->
            <div class="member orange fade-up animate1">
                <div class="imgmember">
                	<?PHP 
                    $images = explode (", ", $row['imagenes']);
                    $primary = $images[0];
                ?>
                    <img alt="" class="opacity" src="admin/uploads/<?PHP echo $primary; ?>" width="281" height="186">
                </div>
                <h4 class="membername"><p><font color="#ffffff">
                <?php 
                echo"" .$row['titulo']. "";
                ?></p></font></h4>
                <p class="memberposition"><i><font size="2" color="ffffff">U$s</font> <?php 
                echo"" .$row['precio']. "";
                ?></i></p>
                <p class="memberdescription"><font color="#000000">
                <?php echo substr($row['descripcion'],0,200); ?> ...</font></p>
                <div class="footerhomeprices">
                    
                    <div class="contacthomeprice">
                    <?php 
                echo"<a class='tooltip' href='ampliar_lunademiel.php?id_lunamiel=" .$row['id_lunamiel']. "'><span>
                                <img src='img/prices/contacticon.png'>
                                AMPLIAR INFO
                            </span></a>";
                ?>
                    </div>
                   
                    <div class="morehomeprice">
                        <a class="tooltip" title="Contratar Paquete" href="contrata_lunademiel.php">
                            <span>
                                <img alt="" src="img/prices/moreicon.png">
                                CONTRATAR
                            </span>
                        </a>
                    </div>
    
                </div>
        	</div>
            <!--end member-->
        </div>
        
        <?php
            }
        ?>
         
        
	</div>
    <!--end container-->
   
  
            
</section>
<!--end internal page-->

<section class="sectionhome">

    <!--start container-->
    <div class="container clearfix">
            
        
        <div class="grid_12"></div><div class="grid_12"></div> <!--40px height-->
        
        
        <div class="grid_12">
            <div class="titlesection orange">
                <h4 class="titlewithborder"><span>Financia tu Viaje con las mejores promociones</span></h4> 
            </div>  
        </div>
       
        <div class="grid_12">
            <div class="imgclient">
                <img alt="" src="img/pagos.jpg">    
            </div>
        </div>
        
        
    </div>
    <!--end container--> 
    
</section>
    <!--start footer-->
     <footer id="footer">
        
        <!--start container-->
        <div class="container clearfix">
        
            <div class="grid_3 gridfooter">
                <img src="img/logo01.png" width="150">
                <p><font size="2">* EVyT - Leg 16935 *</font></p>  
                <p><a href="condiciones_contratacion.php"><font size="2" color="#ffffff">Condiciones Generales de Contratación</font></a><br><a href="terminos_condiciones.php"><font size="2" color="#ffffff">Terminos y Condiciones de Uso</font></a>  </p>
            </div>
    
            

            <div class="grid_3 gridfooter">
                <h3><p>CONTACTANOS<p></h3>
                <p><font size="2">Dirección: Zapiola N° 4182 - 3A - CABA (1429)<br />Teléfono: +54 (11) 5368 9811<br />Mail: info@elysiumtravel.com.ar</p>
                <p class="socialfooter"><a href="https://www.facebook.com/elysium.tvl/" target="_blank"><img alt="" src="img/footer/facebook.png" /></a><a href="https://www.instagram.com/elysium_tvl/?hl=es-la"><img alt="" src="img/footer/linkedin.png" /></a><a href="https://ar.linkedin.com/company/elysium-travel"><img alt="" src="img/footer/instagram.png" /></a>
            </div>
    
            <div class="grid_3 gridfooter">
                  <a href="https://servicios1.afip.gov.ar/clavefiscal/qr/response.aspx?qr=dthlSnwW3nSD6GmM8LRPwQ,,
" target="_new"><img src="img/DATAWEB.jpg" width="30%"></a> <a href="http://servicios.turismo.gob.ar/agencias/constancia/16935
" target="_new"><img src="img/qr111564.png" width="30%"></a>
            </div>
            
            <div class="grid_3 gridfooter">
                <h3><p>NEWSLETTER</p></h3>
                <p><font size="2">Dejanos tu email y te enviamos todas nuestras promos!!!</font></p> 
                
                <!--start form-->
                <form class="newsletterfooter" action="registro_news.php" method="post">
                    <input type="text" id="email" name="email" required class="form-control"/>
                    <input type="submit" />
                </form>
                <!--end form-->
                  
            </div>
        
        </div>
        <!--end container--> 
        
    </footer>
    <!--end footer-->
    
    <!--start copyright-->
    <section id="copyright">
        
        <!--start container-->
        <div class="container">
        
            <div class="grid_12">
                <p><font size="2">© Copyright 2017 by Keepers - Elysiumtravel.com.ar</font></p>   
            </div>
    
        </div>
        <!--end container-->
        
        <div class="backtotop">
            <a href="#startpage"><img alt="" src="img/footer/arrowbacktotop.png" /></a>
        </div> 
        
    </section>
    <!--end copyright-->
	<!--Start js-->    
    <script src="js/jquery.min.js"></script> <!--Jquery-->
    <script src="js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="js/scroolto.js"></script> <!--Scrool To-->
    <script src="js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/jquery.inview.min.js"></script> <!--inview-->
	<script src="js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/menu/tinynav.min.js"></script> <!--tinynav-->
    <script src="js/jquery.parallax-1.1.3.js"></script> <!--parallax-->
	<script src="js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="js/settings.js"></script> <!--settings-->
    <!--End js-->
	
	
	<script type='text/javascript'>
		/* <![CDATA[ */
		

		//start parallax
		jQuery(document).ready(function() {
			$('.header-page').parallax("100%", 0.1);
		});
		//end parallax
		
		
		//start accordion
		$(document).ready(function() {
			$( ".accordion" ).accordion();
		});
		//end accordion
		
		
		//start tooltip
		$(document).ready(function() {
			$( ".tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
		});
		//end tooltip
		

		/* ]]> */
	</script>
    

	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36678297-3', 'newgraphicses.it');
  ga('send', 'pageview');

</script>
	
	
	</body>  
</html>