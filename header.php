<!DOCTYPE html>
<html lang="cs" dir="ltr">
	<!--
		Site author: Matyáš Hub
		Contact: hubmatyas@gmail.com
		GitHub Repo: https://github.com/hubmatyas/bagrujeu
		
		 _           _                     _                             
		| |__  _   _| |__  _ __ ___   __ _| |_ _   _  __ _ ___   ___ ____
		| '_ \| | | | '_ \| '_ ` _ \ / _` | __| | | |/ _` / __| / __|_  /
		| | | | |_| | |_) | | | | | | (_| | |_| |_| | (_| \__ \| (__ / / 
		|_| |_|\__,_|_.__/|_| |_| |_|\__,_|\__|\__, |\__,_|___(_)___/___|
		                                       |___/                     
		
		-->
	<head>
		<meta charset="utf-8">
		<title>
			<?php if (is_front_page()) {
				echo "bagruj.eu | Volné termíny ještě 2021! | bagruj.eu";
				} else {
				wp_title('');
				echo ' | ';
				bloginfo('name');
				} ?>
		</title>
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="Matyáš Hub">
		<meta name="description" content="<?php 
			if (is_front_page()) {
			  echo "Specializujeme se na: základové desky, výkopové práce, dokopy sítí, teréní úpravy, osazování šachet a ČOV. Dále můžeme také nabídnou přepravu nadměrných...";
			} else {
			  echo wp_trim_words( get_the_content(), 20); echo "...";
			}?>">
		<meta property="og:title" content="  <?php if (is_front_page()) {
			echo "bagruj.eu | Volné termíny ještě 2021! | bagruj.eu";
			} else {
			wp_title('');
			echo ' | ';
			bloginfo('name');
			} ?>" />
		<meta property="og:description" content="<?php 
			if (is_front_page()) {
			  echo "Specializujeme se na: základové desky, výkopové práce, dokopy sítí, teréní úpravy, osazování šachet a ČOV. Dále můžeme také nabídnou přepravu nadměrných...";
			} else {
			  echo wp_trim_words( get_the_content(), 20); echo "...";
			}?>" />
		<meta property="og:site_name" content="bagruj.eu" />
		<meta property="og:image" content="/wp-content/themes/bagrujeu/share.jpg" />
		<?php wp_head(); ?>
	</head>


	<header>
		<div class="wrapper header-wrapper">
			<div class="logo">
				<div class="logo-btn">
					<div class="logo-btn_burger"></div>
				</div>
				<a href="<?php echo home_url(); ?>" class="home-link">RGC</a>
			</div>
			<a class="phone-link" href="tel:+420777800001">
			<span><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="Zavolat - RGC" class="phoneHeader" /></span>
			<span class="phoneNumber" href="tel:+420777800001">+420 777 800 001</span>
			</a>
		</div>
		<div class="wrapper navigation-wrapper">
			<ul class="navigation">
				<li><a href="<?php echo get_home_url(); ?>">Domů</a></li>
				<li><a href="/stavebni-prace/">Stavební práce</a></li>
				<li><a href="/vykopove-prace/">Výkopové práce</a></li>
				<li><a href="/doprava/">Doprava</a></li>
				<li><a href="/kontakt/">Kontakt</a></li>
				<li><a href="/o-nas/">O nás</a></li>
				<li><a href="https://www.facebook.com/Bagrujeu-365630990898780/" target="_blank" rel="noopener noreferrer">Facebook</a></li>
			</ul>
		</div>
	</header>
	<body>