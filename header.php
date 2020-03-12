<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- Título que aparecerá en la pestaña - La estructura será el nombre de la página actual + Descripción del sitio -->
		<title>Inicio</title>
		<!-- Icono que acompañará al title. También será el icono que se guardará a la hora de que hagan un marcador. Se recomienda un tamaño de 32x32 y en PNG	-->
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.png">
		<!-- (Opcional) Sugiere un color al navegador para personalizar la ventana -->
		<meta name="theme-color" content="#3c790a">
		<!-- Bloquea el zoom en smartphones-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
		<!--Declara quien es el autor. Sin utilidad práctica -->
		<meta name="author" content="Pixelmouse">
		<!-- Declara la descripción de la web. Es utilizado por los motores de busqueda para la previa -->
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<!-- Open Graph y Twitter card: Declara como se mostrará la previa del enlace si es compartida por Facebook o alguna otra red social -->
		<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/miniatura.png">
		<meta property="og:title" content="The Rock">
		<!-- website, video, audio, article, book o profile -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://www.imdb.com/title/tt0117500/">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@cuenta">
		<meta name="twitter:creator" content="@cuenta">
		<!-- Open Graph Imagen completa (Opcional) -->
		<meta property="og:image:secure_url" content="https://secure.example.com/ogp.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="400">
		<meta property="og:image:height" content="300">
		<meta property="og:image:alt" content="A shiny red apple with a bite taken out">
		<!-- project styles -->
		<link rel="stylesheet" media="screen" href="<?php bloginfo('template_url') ?>/css/main.css">
		<link rel="stylesheet" media="all and (min-width: 901px)" href="<?php bloginfo('template_url') ?>/css/main-desktop.css">
		<link rel="stylesheet" media="all and (max-width: 900px)" href="<?php bloginfo('template_url') ?>/css/main-mobile.css">
		<!-- vendor script -->
		<script src="<?php bloginfo('template_url') ?>/js/vendors/jquery-3.4.1.min.js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/vendors/owl.carousel.min.js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/vendors/vue.min.js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>