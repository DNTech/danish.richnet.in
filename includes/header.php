		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="author" content="Danish Nayeem" />
		<meta name="keywords" content="Danish,nayeem,developer,website,designer,programmer,software,coder,professional,contact,works,about" />
		<!--LINK ICON-->
		<link href="/images/danish.jpeg" rel="icon"/>

		<!--LINK CSS GOOGLE FONTS FILES-->
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"/>

		<!-- LINK CSS LOCAL FILES -->
		<?php
			$cssFiles = array( 
						"/assets/css/w3.css",
						"/assets/owl/assets/owl.carousel.min.css",
						"/assets/owl/assets/owl.theme.greeen.min.css",
						"/assets/devicons/devicon.min.css",
						"/assets/fa/css/fa.css",
						"/assets/css/style.css"
						);
			linkCssFiles( $cssFiles );
		?>

		<!-- LINK JAVASCRIPT FILES -->
		<?php
			$jsFiles = array( 
						"/assets/js/jq.js",
						"/assets/owl/owl.carousel.min.js",
						"/assets/js/custom.js"
						);
			linkJsFiles( $jsFiles );
		?>
		

