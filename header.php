<html lang="cs_cz" dir="ltr">

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
	<?php if(is_front_page()){
        echo "bagruj.eu | Volné termíny ještě 2021! | bagruj.eu";
    } else{
        wp_title(''); echo ' | ';  bloginfo( 'name' );
    }?>
</title>
  <meta name="viewport" content="initial-scale=1.0, width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Matyáš Hub">
  <?php wp_head();?>
</head>

<header>
  <div class="wrapper">
      <div id="logo">
        <img id="logoIcon" src="/wp-content/themes/bagrujeu/img/logo.svg" alt="Logo" onclick="openNav()">
        <img src="/wp-content/themes/bagrujeu/img/rgc.svg" alt="RGC" onclick="location='<?php echo get_home_url(); ?>'" style="cursor: pointer;">
      </div>
      <span>
        <a class="phoneNumber" href="tel:+420777800001">+420 777 800 001</a>
        <a href="tel:+420777800001"><img src="/wp-content/themes/bagrujeu/img/phone.svg" alt="Zavolat - RGC" class="phoneHeader"/></a>
      <span>
  </div>
</header>

<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="homeLink"href="<?php echo get_home_url(); ?>">Domů</a>
    <a href="/stavebni-prace/">Stavební práce</a>
    <a href="/vykopove-prace/">Výkopové práce</a>
    <a href="/doprava/">Doprava</a>
    <!-- <a href="/pujcovna/">Půjčovna</a> -->
    <a href="/kontakt/">Kontakt</a>
    <a href="/o-nas/">O nás</a>
    <a href="https://www.facebook.com/Bagrujeu-365630990898780/" target="_blank"><img src="/wp-content/themes/bagrujeu/img/fb.svg" alt="Facebook" id="fb"></a>

  </div>
