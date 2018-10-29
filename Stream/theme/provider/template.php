<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title>Провайдер Стрим</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/slick.css">
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/modal_style.css" />
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/animate.css" />
	<link rel="stylesheet" type="text/css" href="/theme/provider/css/customs_for_animations.css" />

</head>
<body class="<?php get_page_slug(); ?>">

<header>
	<div class="wrapper">
		<div class="header-wrap">
			<div class="logo"><a href="#"></a></div>
			<nav class="navigation">
				<button class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<ul class="menu">
					<li class="menu__item">
						<a href="#stream" class="menu__link">О компании</a>
					</li>
					<li class="menu__item">
						<a href="#rates" class="menu__link">Тарифы</a>
					</li>
					<li class="menu__item">
						<a href="#contacts" class="menu__link">Контакты</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link menu_lk cd-signin">Личный кабинет</a>
					</li>

				</ul>
			</nav>
		</div>
	</div>
</header>
<div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
	<div class="cd-user-modal-container"> <!-- основной контейнер -->
		<ul class="cd-switcher">
			<li><a href="#0">Вход</a></li>
		</ul>

		<div id="cd-login"> <!-- форма входа -->
			<form class="cd-form">
				<p class="fieldset">
					<label class="image-replace cd-email" for="signin-email">Номер договора</label>
					<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="Номер договора">
					<span class="cd-error-message">Здесь сообщение об ошибке!</span>
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signin-password">Пароль</label>
					<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Пароль">
					<span class="cd-error-message">Здесь сообщение об ошибке!</span>
				</p>
				<p class="fieldset">
					<input class="full-width" type="submit" value="Войти">
				</p>
			</form>
		</div> <!-- cd-login -->
	</div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<section class="banner">
	<div class="banner-container">


		<div class="banner-slider">
		<?php
			$dir = dirname(realpath(__FILE__)).'/../../data/uploads/slides/';
			$relative_dir = "/data/uploads/slides/";

			$handle = opendir($dir);
			while($file = readdir($handle)){
				if($file !== '.' && $file !== '..'){
					$component_name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
					echo '<div class="slideone">'
					.'<div class="slide-content">'
					.	 	'<div class="textbanner">';
					echo get_component($component_name);

					echo '</div>'
					.		'<a href="#contacts" class="btnnew">Подключиться</a>'
					.		'<div class="slide-image" style="background-image: url('.$relative_dir.$file.')"></div>'
					.'</div>'
				  .'</div>';
				}
			}
		?>

			<!-- <div class="slideone">
				<div class="slide-content">
					<div class="textbanner">
						<h1 class="">Быстрый интернет
							<span class="lg">Дома / В офисе / На даче</span>

						</h1>
					</div>
					<a href="#contacts" class="btnnew">Подключиться</a>
					<div class="slide-image"></div>
				</div>
			</div>
			<div class="slidetwo">
				<div class="slide-content">
					<div class="textbanner">
						<h1>Тарифы для юридических лиц
							<span class="lg">Выгодная цена  / Стабильность  / Гибкие  условия</span>
						</h1>
					</div>
					<a href="#contacts" class="btnnew">Подключиться</a>
					<div class="slide-image"></div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<div class="scrollup">
  <i class="fa fa-chevron-up"></i>
</div>
<section class="about section">
	<div class="wrapper">
		<div class="heading" id="stream">
			<?php
				$about = explode("----", get_component('about'));
			?>
			<h2><?php echo $about[0]; ?></h2>

			<p><?php echo $about[1]; ?></p>
		</div>
		<div class="about-wrap">
			<div class="about-wrap-content">
				<div class="about-wrap-content__icon animated">
					<img src="/theme/provider/img/fiz_face.png" alt="fiz">
				</div>
				<div class="about-wrap-content__text">
				<?php
				  $fiz_l = explode("----", get_component('fiz-l'));
				?>
					<h6><?php echo $fiz_l[0] ?></h6>

					<p><?php echo $fiz_l[1] ?></p>

				</div>
			</div>
		</div>
		<div class="about-wrap">
			<div class="about-wrap-content">

				<div class="about-wrap-content__icon animated">
					<img src="/theme/provider/img/ur_face.png" alt="ur">
				</div>

				<div class="about-wrap-content__text">
					<?php
          $ur_lc = explode("----", get_component('ur-lc'));
        ?>

<h6><?php echo $ur_lc[0] ?></h6>

          <p><?php echo $ur_lc[1] ?></p>
				</div>
			</div>
		</div>

		<div class="hr"></div>

		<div class="box-pricing-new" id="rates">
			<div class="service-list__item">
				<div class="about-wrap-content__icon animated">
					<span class="fa fa-building"></span>
				</div>
				<?php
    $buildings = explode("----", get_component('buildings'));
   ?>
   <h6><?php echo $buildings[0]; ?></h6>

   <p><?php echo $buildings[1]; ?></p>
			</div>

	<?php
		$ethernet_plans = explode("----", get_component('ethernet_plans'));
		foreach($ethernet_plans as &$plan){
			$plan = explode(", ", $plan);
		}
	?>
			<div class="pricing">
				<?php for($i = 0; $i < count($ethernet_plans); $i++){ ?>
				<div class="pricing__item <?php echo $ethernet_plans[$i][4] ?>">
					<div class="pricing-header">
						<span class="pricing-header__title">
						 Домашний <br><?php echo $ethernet_plans[$i][0] ?> <span><?php echo $ethernet_plans[$i][1] ?> руб.</span>
						</span>
					</div>
					<ul class="pricing-list">
						<li>Скорость: до <?php echo $ethernet_plans[$i][2] ?> Мбит/c</li>
						<li>«Драйв» (увеличение скорости до 60 мбит/с), разовый платеж - <?php echo $ethernet_plans[$i][3] ?> руб.</li>
						<li>Добровольная блокировка: Бесплатно</li>
					</ul>
				</div>
				<?php } ?>
				<!-- <div class="pricing__item">
					<div class="pricing-header">
						<span class="pricing-header__title">
						 Домашний <br>Экстра <span>1000 руб.</span>
						</span>

					</div>
					<ul class="pricing-list">
						<li>Скорость: до 30 Мбит/c</li>
						<li>«Драйв» (увеличение скорости до 60 мбит/с), разовый платеж - 15 руб.</li>
						<li>Добровольная блокировка: Бесплатно</li>
					</ul>
				</div>
				<div class="pricing__item active">
					<div class="pricing-header">
						<span class="pricing-header__title">
						  Домашний <br> Профи <span>1500 руб.</span>
						</span>
					</div>

					<ul class="pricing-list">
						<li>Скорость: до 60 Мбит/c</li>
						<li>«Драйв» (увеличение скорости до 60 мбит/с), разовый платеж —</li>
						<li>Добровольная блокировка: Бесплатно</li>
					</ul>
				</div> -->
			</div>
		</div>
		<div class="box-pricing-new">
			<div class="service-list__item">
				<div class="about-wrap-content__icon animated">
					<span class="fa fa-home"></span>
				</div>
	<?php
    $houses = explode("----", get_component('houses'));
   ?>
   <h6><?php echo $houses[0]; ?></h6>

   <p><?php echo $houses[1]; ?></p>
			</div>

			<?php
  $ethernet_houses = explode("----", get_component('ethernet_houses'));
  foreach($ethernet_houses as &$plan){
   $plan = explode(", ", $plan);
  }
 ?>
   <div class="pricing" id="fourblock">
    <?php for($i = 0; $i < count($ethernet_houses); $i++){ ?>
    <div class="pricing__item <?php echo $ethernet_houses[$i][4] ?>">
     <div class="pricing-header">
      <span class="pricing-header__title">
       Загородный <br><?php echo $ethernet_houses[$i][0] ?> <span><?php echo $ethernet_houses[$i][1] ?> руб.</span>
      </span>
     </div>
     <ul class="pricing-list">
      <li>Скорость: до <?php echo $ethernet_houses[$i][2] ?> Мбит/c</li>
      <li>«Драйв» (увеличение скорости до 60 мбит/с), разовый платеж - <?php echo $ethernet_houses[$i][3] ?> руб.</li>
      <li>Добровольная блокировка: Бесплатно</li>
     </ul>
    </div>
    <?php } ?>
</div>
		</div>
		<div class="box-pricing-new">
			<div class="service-list__item">
				<div class="about-wrap-content__icon animated">
					<span class="fa fa-wifi"></span>
				</div>
					<?php
    $wifi = explode("----", get_component('wifi'));
   ?>
   <h6><?php echo $wifi[0]; ?></h6>

   <p><?php echo $wifi[1]; ?></p>
			</div>
				<?php
  $wifi = explode("----", get_component('et_wifi'));
  foreach($wifi as &$plan){
   $plan = explode(", ", $plan);
  }
 ?>
   <div class="pricing">
    <?php for($i = 0; $i < count($wifi); $i++){ ?>
    <div class="pricing__item <?php echo $wifi[$i][3] ?>">
     <div class="pricing-header">
      <span class="pricing-header__title">
       wi-fi <?php echo $wifi[$i][0] ?> <span><?php echo $wifi[$i][1] ?> руб.</span>
      </span>
     </div>
     <ul class="pricing-list">
      <li>Скорость: до <?php echo $wifi[$i][2] ?> Мбит/c</li>

      <li>Добровольная блокировка: Бесплатно</li>
     </ul>
    </div>
    <?php } ?>
</div>
		</div>
</div>
		</div>
		<div class="hr"></div>
	</div>
</section>


<section class="section contact" id="contacts">
	<div class="wrapper">
		<div class="contact-wrap">

			<div class="contact-wrap__right">
				<h6>Контактная информация</h6>
				<p>Общество с ограниченной ответственностью «Стрим» <br>
Юридический адрес: 141290, Московская обл. г. Красноармейск, ул. Лермонтова, дом 2. <br>

ОГРН: 1155038003614 ИНН/КПП: 5038113725/503801001 <br>

Банковские реквизиты в ВТБ 24 ПАО г. Москва. <br> Расчетный счет 407 028 104 000 000 47 498 <br> Корреспондентский счет 301 018 101 000 000 00 716 БИК 044 525 716</p>
				<ul class="contact-list">
					<li class="contact-list__item">
						<span class="contact-list__icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<span>Московская обл. г. Красноармейск, ул. Лермонтова, дом 2.</span>
					</li>
					<li class="contact-list__item">
						<span class="contact-list__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<a href="tel:6131468728">8-926-641-33-11, </a> <a href="tel:6109876543">8-926-964-04-65</a>
					</li>
				</ul>
			</div>

	<div id="map" class="animated">
	<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7bcaaa6a781e2efcbb19ea778fae82d250e5edae36e29b792286d7ee7bf9b3ce&amp;source=constructor" width="450" height="400" ></iframe>
</div>
		</div>
	</div>
		<div id="mapnew" class="animated">
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7bcaaa6a781e2efcbb19ea778fae82d250e5edae36e29b792286d7ee7bf9b3ce&amp;source=constructor" ></iframe>
		</div>
</section>



<footer class="footer">
	<div class="wrapper footer-flex">
		<p class="copyright">&copy; Стрим 2018. Все права защищены</p>
	</div>
</footer>
<script src="/theme/provider/js/jquery-1.11.0.min.js"></script>
<script src="/theme/provider/js/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAFqPKNORR3Ctvc2Rzj8YX5oebd7xpSGVs"></script>
<script src="/theme/provider/js/custom.js"></script>

<script  src="/theme/provider/js/modal.js"></script>
<script src="/theme/provider/js/jquery.waypoints.min.js"></script>
<script src="/theme/provider/js/customs_for_animations.js"></script>
<script>
$(function() {

  $('.scrollup').click(function() {
    $("html, body").animate({
      scrollTop:0
    },1000);
  })
})

$(window).scroll(function() {
  if ($(this).scrollTop()>200) {
    $('.scrollup').fadeIn();
  }
  else {
    $('.scrollup').fadeOut();
  }
});
</script>
</body>
</html>
