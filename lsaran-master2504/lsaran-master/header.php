<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lsaran</title>
	<?php $alias =  $_GET['alias'] ?: 'home' ;  ?>
	<link rel="stylesheet" href="/css/nav.css">
	<link rel="stylesheet" href="/css/<?php echo $alias ?>.css">
	<link rel="stylesheet" href="/font_aws/css/all.css">
	<link rel="stylesheet" href="https://file.myfontastic.com/NmpKBoyvQaFH4qme89AwFQ/icons.css">
	
	<meta property="og:url" content="https://lsaran.moscow"/>
	<meta property="og:image"content="https://lsaran.moscow/image/logo.png"/>
	<meta property="og:title" content="Лсаран 2018" />
	<meta property="og:description" content="Международная образовательная конференция Лсаран" />
	<meta property="og:image:width" content="1200"/>
	<meta property="og:image:height" content="630"/> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/image/favicon/favicon.ico">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123979960-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123979960-1');
</script>

 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.paren..;
})(window,document,'script','dataLayer','GTM-TFXVXH8');</script>
 


</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFXVXH8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<nav>
		<a id="logo" href="/"><img 
			
			<?php if ($alias == 'home'): ?>
				src="/image/logo_main.png" 
			<?php else: ?>
				src="/image/logo.png" 
			<?php endif ?>
			alt="Лсаран"></a>
		<div class="nav_btn_cont">
			<div id="nav_btn">
				<i class="fas fa-bars"></i>
			</div>
		</div>
		<ul id="main-ul">
			<?php foreach ($menu_arr as $menu_item) { ?>
				<li class="main-li"> 
					<?php if (!$menu_item['presubitems']){ ?>
						<a href="<?php echo $menu_item['link'];?>">
					<?php } else {; ?>
						<span class="wrap_li">
					<?php }; ?>


					<?php echo $menu_item["label"] ?>
					<?php if ($menu_item['presubitems']){ echo '<i class="dd_arrow fas fa-angle-down"></i>';}; ?>
					
					<?php if (!$menu_item['presubitems']){ ?>
						</a> 
					<?php } else {; ?>
						</span>
					<?php }; ?>


					<ul <?php if ($menu_item['presubitems']){ echo "class='wrap'";}; ?>>
						<?php if ($menu_item['presubitems']): ?>
							<?php foreach ($menu_item['presubitems'] as $menu_subitem) { ?>
								<li> <a href="<?php echo $menu_subitem['link'];?>"><?php echo $menu_subitem["label"] ?></a> </li>
							<?php } ?>
						<?php endif ?>
					</ul>
				</li>
			<?php } ?>
		</ul>

	</nav>
	<script src="/js/nav.js"></script>
