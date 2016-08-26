<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Fergus</title>
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div class="wrapper">
		<?php echo $this->element('header'); ?>
		<main class="main">
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>
		</main>
		<?php echo $this->element('footer'); ?>
		</div>
		<script src="/js/jquery-3.0.0.min.js"></script>
		<script src="/js/script.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="/js/slick.min.js"></script>
			 <script type="text/javascript">
    $(document).ready(function(){
			$('.partners-slider').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          infinite: true,
          autoplaySpeed: 1600,          
           responsive: [
            {
              breakpoint: 980,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
             },
              {
              breakpoint: 810,
              settings: {
                slidesToShow: 3,    
                slidesToScroll: 1,
              }
             },
             {
              breakpoint: 610,
              settings: {
                slidesToShow: 2,    
                slidesToScroll: 1,
              }
             },
             {
              breakpoint: 320,
              settings: {
                slidesToShow: 1,    
                slidesToScroll: 1
              }
             }  
       	 ]
     	});
    });
  </script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
	</body>
</html>