<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $lang['PAGE_TITLE']; ?></title>

		<!-- Meta tags -->
	    <meta name="author" content="Pierre Prézelin">
		<meta name="description" content="Bonjour, je suis Pierre Prézelin, un intégrateur et webdesigner basé à Bordeaux, France. // Hello, I'm Pierre Prézelin, a front-end developer and webdesigner based in the beautiful city of Bordeaux, France.">
		<meta name="keywords" content="pierre, prézelin, prezelin, portfolio, français, francais, french, student, web, design, designer, web design, webdesigner, developer, integrator, front-end, front, end, infographie, image, graphic, graphisme, audiovisual, audiovisuel, developpement, development, webdevelopment, multimedia, son, html, css, less, javascript, js, jquery, php, etudiant, bordeaux, france">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta name="apple-mobile-web-app-capable" content="no" />
        <!--<meta name="apple-mobile-web-app-status-bar-style" content="black"/>-->
        <meta name="google-site-verification" content="WCKYq0ZKl-oMM13i5qFLCiVlX589nU1qhnuzDFxNodM" />

		<!-- Icons -->
	    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="images/favicons/manifest.json">
        <link rel="shortcut icon" href="images/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#202a37">
        <meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#202a37">

		<!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- General stylesheets -->
        <link href="styles/styles.css" rel="stylesheet" type="text/css">
        <link href="scripts/libs/pace/themes/pace.css" rel="stylesheet" type="text/css">
		<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" rel="stylesheet" />-->
	    <link href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" rel="stylesheet"/>
	</head>
	<body>
        <!-- Header -->
        <header>
            <a href="#home" class="logo logo-main"><img src="images/logos/logo.svg" width="64" height="64" alt="<?php echo $lang['LOGO_ALT']; ?>"></a>
            <nav class="nav nav-main">
                <a href="#" class="settings-toggle" title="<?php echo $lang['SETTINGS_TOGGLE']; ?>"></a>
                <ul>
                    <li><a href="#about"><?php echo $lang['MENU_ABOUT']; ?></a>
                    <li><a href="#works"><?php echo $lang['MENU_WORKS']; ?></a>
                    <li><a href="#skills"><?php echo $lang['MENU_SKILLS']; ?></a>
                    <li><a href="#contact"><?php echo $lang['MENU_CONTACT']; ?></a>
                </ul>
            </nav>
            <div class="settings-menu">
                <h2><?php echo $lang['SETTINGS_TITLE']; ?><span><?php echo $lang['SETTINGS_NOTE']; ?></span></h2>
                <section>
                    <h3><?php //echo $lang['SETTINGS_SUBTITLE_1']; ?></h3>
                </section>
                <section>
                    <h3><?php //echo $lang['SETTINGS_SUBTITLE_2']; ?></h3>
                </section>
                <section>
                    <div class="language-selector">
                        <a href="index.php?lang=fr">FR</a>
                        <span> / </span>
                        <a href="index.php?lang=en">EN</a>
                    </div>
                </section>
            </div>
            <a href="#" class="sidemenu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </header>
        <div class="header-overlay">
            <h1><?php echo $lang['OVERLAY_TITLE']; ?></h1>
        </div>