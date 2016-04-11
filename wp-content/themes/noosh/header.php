<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">		
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
        <nav class="navbar navbar-default navbar-fixed-top" <?PHP if(remove_admin_bar()) echo 'style="margin-top:32px;"'; ?>>
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/img/noosh-nav-logo.png" />
                    </a>
                </div>
                <div id="navbar"> <?PHP //class="collapse navbar-collapse"  ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-product menu-noosh-icon"></span>
                                <span style="display:block;">Product</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-uses menu-noosh-icon"></span>
                                <span style="display:block;">Uses</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-brand menu-noosh-icon"></span>
                                <span style="display:block;">Brand</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-find menu-noosh-icon"></span>
                                <span style="display:block;">Find</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-shop menu-noosh-icon"></span>
                                <span style="display:block;">Shop</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span style="display:block;" class="icon icon-noosh-nav-contact menu-noosh-icon"></span>
                                <span style="display:block;">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        
        <div class="container-fluid wrapper">
            