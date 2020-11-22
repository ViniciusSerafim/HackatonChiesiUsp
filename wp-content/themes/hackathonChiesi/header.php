<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
global $title;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	
	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/join.css">
	<title><?php echo $title?></title>
</head>
<body>
	<header>
		<nav class="nav-container">
			<a  href="<?php echo get_bloginfo('url')?>" class="logo-container d-block">
				<img style="max-width:100px" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Logo">
			</a>
			<ul class="nav-list">
				<li id="liInicio">
					<a href="<?php echo get_bloginfo('url')?>">
						Início
					</a>
				</li>
				<!-- <li id="liAgenda">
					<a href="#">
						Agenda
					</a>
				</li> -->
				<li id="liHistorico">
					<a href="#">
						Histórico
					</a>
				</li>
				<li>
					<a href="#" class="perfil">
						<span id="nomePerfil">
						</span>
						<div class="img-perfil">
							<img id="imgPerfil" alt="Imagem de perfil">
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</header>


