<?php 
/* Template Name: Gallery-details */
?>
<?php
                //$album_id = 1;
                $album_id = $_REQUEST['album'];
                 // $album = get_easy_album($album_id); 
                $album = get_easy_album($album_id); 
                 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<base href="<?php bloginfo('template_directory'); ?>/"/>
<link rel="shortcut icon" href="images/icons/favicon.ico">
<title>Land voyage</title>
<!-- Styles -->


<link rel="stylesheet" href="css/lightgallery.css">

<link href="css/meanmenu.css" rel="stylesheet">
<link href="css/menu_sideslide.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <link href="css/iefix.css" rel="stylesheet">
<![endif]-->

<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" href="css/gallery_ie.css">
		<![endif]-->


<script src="js/modernizr.custom.js"></script>
</head>	
<body>

<!-- Top Area -->

<div class="toparea"> 
  
  <!-- Left Area -->
  
    
    <!-- Nav -->
    
    
    
    
    <!-- Nav -->

<div class="navigation">
  <div class="">
    <div class="row">
      <div class="col-md-12">
      
      <div class="home-logo"> <a href="<?php echo get_permalink(6); ?>"><img src="images/logo-main.jpg" alt="" class="img-responsive"></a> </div>
      
        <div class="mobilemenu">
          <nav>
            <ul>
             <?php get_header(); ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
    
 <div class="inner-bnr-block gallery-north-india-bnr">
 	<h3><?php echo $album->name; ?></h3>
 </div>   
    
    
    

    
    <!--<div class="row margin-top-15 innernav">
      <div class="col-md-12">
        <div class="mobilemenu">
          <nav>
            <ul>
              <li><a href="index.html">Home</a> <span>&#9830;</span></li>
              <li><a href="suites-and-aminities.html">Suites &amp; Amenities</a> <span>&#9830;</span></li>
              <li><a href="restaurants.html">Restaurants</a> <span>&#9830;</span></li>
              <li><a href="meetings.html">Meetings</a> <span>&#9830;</span></li>
              <li><a href="followus.html">Follow Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>-->
    
    <!-- Page Title -->
    </div>

    
    
  
  <!-- Right Area -->
  
    <div class="container">

		<div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
			
                <?php do_shortcode('[easy_gallery view="image" album="'.$album_id.'" pagination="false" limit="2"]'); ?>           
            
				
				
				
				
            </ul>
        </div>
		

	</div><!-- .container end -->
    
    
	  <div class="clear"></div>


  <div class="full-footer">
	<p>Copyrights ©  Land Voyage 2017. </p>
  </div>
    
 

<!-- General Scripts --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/placeholders.min.js"></script> 
<!-- Offers Slider --> 
<script src="js/owl.carousel.min.js"></script> 

<!-- Responsive Menu --> 
<script src="js/jquery.meanmenu.js"></script> 
<!-- DatePicker Scripts --> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 
<!-- Banner Scripts --> 
<script src="js/slippry.min.js"></script> 
<!-- Wow Animation --> 
<script src="js/wow.min.js"></script> 
<script>
 new WOW().init();
</script> 
<!-- Detect Browser --> 
<script src="js/detectizr.js"></script> 
<script>
      Detectizr.detect({detectScreen:false});
</script>
<script src="js/main.js"></script> 



<script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>

<script src="js/lightgallery.js"></script>


</body>
</html>