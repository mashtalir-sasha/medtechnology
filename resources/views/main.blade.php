<?
if(isset($_GET['utm_source'])){$utm_source=$_GET['utm_source'];setcookie("utm_source",$utm_source,time()+3600*24*30);}
if(isset($_GET['utm_medium'])){$utm_medium=$_GET['utm_medium'];setcookie("utm_medium",$utm_medium,time()+3600*24*30);}
if(isset($_GET['utm_term'])){$utm_term=$_GET['utm_term'];setcookie("utm_term",$utm_term,time()+3600*24*30);}
if(isset($_GET['utm_content'])){$utm_content=$_GET['utm_content'];setcookie("utm_content",$utm_content,time()+3600*24*30);}
if(isset($_GET['utm_campaign'])){$utm_campaign=$_GET['utm_campaign'];setcookie("utm_campaign",$utm_campaign,time()+3600*24*30);}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.title') }}</title>
	<meta name="description" content="{{ trans('main.description') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	

	<meta property="og:title" content="{{ trans('main.title') }}">
	<meta property="og:description" content="{{ trans('main.description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ Request::root() }}/img/og_image.jpg">


	<link rel="icon" href="/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#F33D24">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<link rel="preload" as="font" href="/fonts/Futura-Bold/Futura-Bold.woff"  crossorigin>
	<link rel="preload" as="font" href="/fonts/Futura-Medium/Futura-Medium.woff"  crossorigin>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K3SVQK4');</script>
	<!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3SVQK4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav class="nav">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-2 col-sm-4 col-4">
				<a href="{{ localization()->getLocalizedURL(null, '/') }}">
					<picture>
						<source srcset="/img/logo.webp 1x, /img/logo@2x.webp 2x" type="image/webp">
						<img srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="logo" class="nav__logo">
					</picture>
				</a>
			</div>
			<div class="col-4 d-block d-md-none">
				<button class="nav-mob__btn">
					<img src="/img/menu.svg" alt="menu">
				</button>
			</div>
			<div class="col-lg-9 col-md-10 flex-column d-flex nav-mob">
				<div class="nav__wrap align-self-md-end">
					<a href="tel:+380952735512" class="nav__phone">+38(095) 273 55 12</a>
					<div class="nav-lang">
						<a href="{{ localization()->getLocalizedURL('ru') }}"  @if(localization()->getCurrentLocale() == 'ru') class="nav-lang__item active" @else class="nav-lang__item" @endif>Рус</a>
						<a href="{{ localization()->getLocalizedURL('uk') }}" @if(localization()->getCurrentLocale() == 'uk') class="nav-lang__item active" @else class="nav-lang__item" @endif>Укр</a>
					</div>
				</div>
				<ul class="nav-list">
					<li class="nav-list__item"><a href="#catalog" class="anchor">{{ trans('main.menu1') }}</a></li>
					<li class="nav-list__item"><a href="#catalog1" class="anchor">{{ trans('main.menu2') }}</a></li>
					<li class="nav-list__item"><a href="#catalog2" class="anchor">{{ trans('main.menu3') }}</a></li>
					<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.menu4') }}</a></li>
					<li class="nav-list__item"><a href="#docs" class="anchor">{{ trans('main.menu5') }}</a></li>
					<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.menu6') }}</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<header class="head">
	<div class="head__ico head__ico_1"></div>
	<div class="head__ico head__ico_2"></div>
	<div class="container">
		<div class="head__note head__note_top">{{ trans('main.head-note1') }}</div>
		<div class="row align-items-center">
			<div class="col-md-5">
				<!-- <h1 class="head__ttl">{{ trans('main.head-ttl') }}</h1> -->
				<div class="head-slider">
					<div class="head-slider__slide">
						<h3 class="head__ttl">{{ trans('main.head-ttl1') }}</h3>
					</div>
					<div class="head-slider__slide">
						<h3 class="head__ttl">{{ trans('main.head-ttl2') }}</h3>
					</div>
					<div class="head-slider__slide">
						<h3 class="head__ttl">{{ trans('main.head-ttl3') }}</h3>
					</div>
					<div class="head-slider__slide">
						<h3 class="head__ttl">{{ trans('main.head-ttl4') }}</h3>
					</div>
				</div>
				<a href="#modal" class="head__btn fancybox"><span>{{ trans('main.head-btn') }}</span><i></i></a>
			</div>
			<div class="col-md-7">
				<div class="head-img">
					<div class="head-img__slide">
						<picture>
							<source srcset="/img/head/1.webp 1x, /img/head/1@2x.webp 2x" type="image/webp">
							<img srcset="/img/head/1.jpg 1x, /img/head/1@2x.jpg 2x" alt="img" loading="lazy">
						</picture>
					</div>
					<div class="head-img__slide">
						<picture>
							<source srcset="/img/head/2.webp 1x, /img/head/2@2x.webp 2x" type="image/webp">
							<img srcset="/img/head/2.jpg 1x, /img/head/2@2x.jpg 2x" alt="img" loading="lazy">
						</picture>
					</div>
					<div class="head-img__slide">
						<picture>
							<source srcset="/img/head/3.webp 1x, /img/head/3@2x.webp 2x" type="image/webp">
							<img srcset="/img/head/3.jpg 1x, /img/head/3@2x.jpg 2x" alt="img" loading="lazy">
						</picture>
					</div>
					<div class="head-img__slide">
						<picture>
							<source srcset="/img/head/4.webp 1x, /img/head/4@2x.webp 2x" type="image/webp">
							<img srcset="/img/head/4.jpg 1x, /img/head/4@2x.jpg 2x" alt="img" loading="lazy">
						</picture>
					</div>
				</div>
			</div>
		</div>
		<div class="head__note head__note_bottom">{{ trans('main.head-note2') }}</div>
	</div>
</header>

<div class="for_bg">

	<section class="for">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="for__ttl">{{ trans('main.for-ttl') }}</h3>
					<p class="for__subttl">{{ trans('main.for-subttl') }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/1.webp 1x, /img/for/1@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/1.jpg 1x, /img/for/1@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-1_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-1_txt') }}</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/2.webp 1x, /img/for/2@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/2.jpg 1x, /img/for/2@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-2_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-2_txt') }}</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/3.webp 1x, /img/for/3@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/3.jpg 1x, /img/for/3@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-3_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-3_txt') }}</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/4.webp 1x, /img/for/4@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/4.jpg 1x, /img/for/4@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-4_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-4_txt') }}</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/5.webp 1x, /img/for/5@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/5.jpg 1x, /img/for/5@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-5_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-5_txt') }}</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="for-item">
						<div class="for-item__wrap">
							<picture>
								<source srcset="/img/for/6.webp 1x, /img/for/6@2x.webp 2x" type="image/webp">
								<img srcset="/img/for/6.jpg 1x, /img/for/6@2x.jpg 2x" alt="img" class="for-item__img" loading="lazy">
							</picture>
							<h4 class="for-item__ttl"><span>{{ trans('main.for-item-6_ttl') }}</span></h4>
						</div>
						<p class="for-item__txt">{{ trans('main.for-item-6_txt') }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="#modal2" class="for__btn fancybox">{{ trans('main.for-btn') }}</a>
				</div>
			</div>
		</div>
	</section>

	<section id="catalog" class="catalog catalog_bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4 offset-md-1">
					<h3 class="catalog__ttl"><span>{{ trans('main.catalog-ttl') }}</span></h3>
				</div>
				<div class="col-md-6">
					<p class="catalog__txt">{{ trans('main.catalog-txt') }}</p>
				</div>
			</div>
			<div id="catalog1" class="col-md-11 offset-md-1">
				<div class="row">
					<div class="col">
						<div class="catalog-item">
							<span class="catalog-item__txt">{{ trans('main.catalog-item-1') }}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/1.webp 1x, /img/catalog/1@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/1.jpg 1x, /img/catalog/1@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart1') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/2.webp 1x, /img/catalog/2@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/2.jpg 1x, /img/catalog/2@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart2') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/3.webp 1x, /img/catalog/3@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/3.jpg 1x, /img/catalog/3@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart3') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/4.webp 1x, /img/catalog/4@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/4.jpg 1x, /img/catalog/4@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart4') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/5.webp 1x, /img/catalog/5@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/5.jpg 1x, /img/catalog/5@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart5') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/6.webp 1x, /img/catalog/6@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/6.jpg 1x, /img/catalog/6@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart6') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/7.webp 1x, /img/catalog/7@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/7.jpg 1x, /img/catalog/7@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart7') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog/8.webp 1x, /img/catalog/8@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog/8.jpg 1x, /img/catalog/8@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{{ trans('main.cart8') }}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1MExtYnsGF3JTykHXtOJcwnf7ERu46rKF/view?ts=60792e06">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<section id="catalog2" class="catalog catalog_padding catalog_bg2">
	<div class="container">
		<div class="row">
			<div class="col-md-11 offset-md-1">
				<div class="row">
					<div class="col">
						<div class="catalog-item">
							<span class="catalog-item__txt">{{ trans('main.catalog-item-2') }}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/1.webp 1x, /img/catalog2/1@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/1.jpg 1x, /img/catalog2/1@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart9') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/2.webp 1x, /img/catalog2/2@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/2.jpg 1x, /img/catalog2/2@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart10') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/3.webp 1x, /img/catalog2/3@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/3.jpg 1x, /img/catalog2/3@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart11') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/4.webp 1x, /img/catalog2/4@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/4.jpg 1x, /img/catalog2/4@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart12') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/5.webp 1x, /img/catalog2/5@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/5.jpg 1x, /img/catalog2/5@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart13') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/6.webp 1x, /img/catalog2/6@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/6.jpg 1x, /img/catalog2/6@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart14') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/7.webp 1x, /img/catalog2/7@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/7.jpg 1x, /img/catalog2/7@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart15') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/8.webp 1x, /img/catalog2/8@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/8.jpg 1x, /img/catalog2/8@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart16') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="cart">
							<picture>
								<source srcset="/img/catalog2/9.webp 1x, /img/catalog2/9@2x.webp 2x" type="image/webp">
								<img srcset="/img/catalog2/9.jpg 1x, /img/catalog2/9@2x.jpg 2x" alt="img" class="cart__img" loading="lazy">
							</picture>
							<h4 class="cart__ttl">{!! trans('main.cart17') !!}</h4>
							<img src="/img/video_preview.jpg" alt="video" class="cart__video" loading="lazy">
							<a href="#modal3" class="cart__btn fancybox" data-link="https://drive.google.com/file/d/1w9jBPPpKKjhvbDDJNx_5dty4xST-RWD3/view?usp=drivesdk">{{ trans('main.cart-btn') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<form id="calc" action="mail.php" method="POST" class="calc form_check">
	<input type="hidden" name="title" value="{{ trans('main.form-title1') }}">
	<input type="hidden" name="catalog">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h3 class="calc__ttl">{{ trans('main.calc-ttl') }}</h3>
				<div class="calc__flex">
					<div class="calc__wrap">
						<div class="calc-field">
							<span class="calc-field__text">{{ trans('main.calc-field-1') }}</span>
							<input type="text" name="device" class="calc-field__input" placeholder="{{ trans('main.field1') }}">
						</div>
						<div class="calc-field">
							<span class="calc-field__text">{{ trans('main.calc-field-2') }}</span>
							<div class="calc-field__price">
								<span>{{ trans('main.calc-field-2_1') }}</span>
								<input type="text" name="price-from" placeholder="100">
								<span>{{ trans('main.calc-field-2_2') }}</span>
								<input type="text" name="price-to" placeholder="15000">
							</div>
						</div>
					</div>
					<div class="calc__wrap">
						<div class="calc-field">
							<span class="calc-field__text">{{ trans('main.calc-field-3') }}</span>
							<input type="text" name="size" class="calc-field__input">
						</div>
						<div class="calc-field">
							<span class="calc-field__text">{{ trans('main.calc-field-4') }}</span>
							<input type="text" name="amount" class="calc-field__input">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 d-none d-lg-block">
				<picture>
					<source srcset="/img/calc_img.webp 1x, /img/calc_img@2x.webp 2x" type="image/webp">
					<img srcset="/img/calc_img.png 1x, /img/calc_img@2x.png 2x" alt="img" class="calc__img" loading="lazy">
				</picture>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="calc__flex calc__flex_normal">
					<div class="rline">
						<input type="text" name="name" class="rfield" placeholder="{{ trans('main.name') }}">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="rfield phonefield" placeholder="+38 (___) ___-__-__">
					</div>
					<button type="submit" class="btnsubmit calc-btn">{{ trans('main.calc-btn') }}</button>
				</div>
			</div>
		</div>
	</div>
</form>

<section id="about" class="about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-7">
				<h3 class="about__ttl">{{ trans('main.about-ttl') }}</h3>
				<p class="about__txt">{!! trans('main.about-txt-1') !!}</p>
				<p class="about__txt"><strong>{!! trans('main.about-txt-2') !!}</strong></p>
			</div>
			<div class="col-md-5  offset-lg-1">
				<img src="/img/about_img.jpg" alt="about" class="about__img" loading="lazy">
			</div>
		</div>
	</div>
</section>

<form action="mail.php" method="POST" class="consalt form_check">
	<input type="hidden" name="title" value="{{ trans('main.form-title2') }}">
	<input type="hidden" name="catalog">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h3 class="consalt__ttl">{!! trans('main.consalt-ttl') !!}</h3>
				<div class="consalt__content">
					<div class="consalt-field">
						<textarea type="text" name="question" rows="1" class="consalt-field__textarea" placeholder="{{ trans('main.quest') }}"></textarea>
					</div>
					<div class="consalt__flex">
						<div class="rline">
							<input type="text" name="name" class="rfield consalt-field__input" placeholder="{{ trans('main.name') }}">
						</div>
						<div class="rline">
							<input type="text" name="phone" class="rfield consalt-field__input phonefield" placeholder="+38 (___) ___-__-__">
						</div>
					</div>
					<button type="submit" class="btnsubmit consalt-btn"><span>{{ trans('main.consalt-btn') }}</span><i></i></button>
				</div>
			</div>
			<div class="col-md-5 d-none d-md-block">
				<picture>
					<source srcset="/img/consalt_img.webp 1x, /img/consalt_img@2x.webp 2x" type="image/webp">
					<img srcset="/img/consalt_img.png 1x, /img/consalt_img@2x.png 2x" alt="img" class="consalt__img" loading="lazy">
				</picture>
			</div>
		</div>
	</div>
</form>

<section class="partners">
	<div class="partners-img d-none d-lg-block"></div>
	<div class="container autoHeight">
		<div class="row">
			<div class="col-lg-6 col-md-5">
				<h3 class="partners__ttl"><p>{!! trans('main.partners-ttl') !!}</p></h3>
				<img src="/img/partners_ico.svg" alt="partners" class="partners__ico d-none d-md-block">
			</div>
		</div>
	</div>
	<div class="container posa autoHeight">
		<div class="row">
			<div class="col-lg-3 offset-lg-6 col-md-4 offset-md-5 col-6">
				<div class="partners-item partners-item_big">
					<picture>
						<source srcset="/img/partners/1.webp 1x, /img/partners/1@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/1.png 1x, /img/partners/1@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-6">
				<div class="partners-item partners-item_black">
					<picture>
						<source srcset="/img/partners/2.webp 1x, /img/partners/2@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/2.png 1x, /img/partners/2@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 offset-lg-5 col-md-3 offset-md-3 col-6">
				<div class="partners-item partners-item_i3">
					<picture>
						<source srcset="/img/partners/3.webp 1x, /img/partners/3@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/3.png 1x, /img/partners/3@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-6">
				<div class="partners-item partners-item_black partners-item_i4">
					<picture>
						<source srcset="/img/partners/4.webp 1x, /img/partners/4@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/4.png 1x, /img/partners/4@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-6">
				<div class="partners-item partners-item_i5">
					<picture>
						<source srcset="/img/partners/5.webp 1x, /img/partners/5@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/5.png 1x, /img/partners/5@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 offset-lg-8 col-md-3 offset-md-6 col-6">
				<div class="partners-item partners-item_i6">
					<picture>
						<source srcset="/img/partners/6.webp 1x, /img/partners/6@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/6.png 1x, /img/partners/6@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-6">
				<div class="partners-item partners-item_black partners-item_i7">
					<picture>
						<source srcset="/img/partners/7.webp 1x, /img/partners/7@2x.webp 2x" type="image/webp">
						<img srcset="/img/partners/7.png 1x, /img/partners/7@2x.png 2x" alt="img" class="partners-item__img" loading="lazy">
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="gallery__ttl">{!! trans('main.gallery-ttl') !!}</h3>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="gallery-slider d-none d-lg-block">
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/1.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/1.webp 1x, /img/gallery/1@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/1.png 1x, /img/gallery/1@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/2.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/2.webp 1x, /img/gallery/2@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/2.png 1x, /img/gallery/2@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/3.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/3.webp 1x, /img/gallery/3@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/3.png 1x, /img/gallery/3@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/4.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/4.webp 1x, /img/gallery/4@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/4.png 1x, /img/gallery/4@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/5.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/5.webp 1x, /img/gallery/5@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/5.png 1x, /img/gallery/5@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/6.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/6.webp 1x, /img/gallery/6@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/6.png 1x, /img/gallery/6@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/7.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/7.webp 1x, /img/gallery/7@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/7.png 1x, /img/gallery/7@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/8.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/8.webp 1x, /img/gallery/8@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/8.png 1x, /img/gallery/8@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/9.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/9.webp 1x, /img/gallery/9@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/9.png 1x, /img/gallery/9@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/10.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/10.webp 1x, /img/gallery/10@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/10.png 1x, /img/gallery/10@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/11.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/11.webp 1x, /img/gallery/11@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/11.png 1x, /img/gallery/11@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/12.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/12.webp 1x, /img/gallery/12@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/12.png 1x, /img/gallery/12@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/13.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/13.webp 1x, /img/gallery/13@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/13.png 1x, /img/gallery/13@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/14.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/14.webp 1x, /img/gallery/14@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/14.png 1x, /img/gallery/14@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/15.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/15.webp 1x, /img/gallery/15@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/15.png 1x, /img/gallery/15@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/16.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/16.webp 1x, /img/gallery/16@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/16.png 1x, /img/gallery/16@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/17.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/17.webp 1x, /img/gallery/17@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/17.png 1x, /img/gallery/17@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/18.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/18.webp 1x, /img/gallery/18@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/18.png 1x, /img/gallery/18@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
					<div class="gallery-slider__slide">
						<div class="gallery__flex">
							<a href="img/gallery/original/19.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/19.webp 1x, /img/gallery/19@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/19.png 1x, /img/gallery/19@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/20.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/20.webp 1x, /img/gallery/20@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/20.png 1x, /img/gallery/20@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
							<a href="img/gallery/original/21.jpg" data-fancybox="gallery">
								<picture>
									<source srcset="/img/gallery/21.webp 1x, /img/gallery/21@2x.webp 2x" type="image/webp">
									<img srcset="/img/gallery/21.png 1x, /img/gallery/21@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
								</picture>
							</a>
						</div>
					</div>
				</div>
				<div class="gallery-slider d-block d-lg-none">
					<a href="img/gallery/original/1.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/1.webp 1x, /img/gallery/1@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/1.png 1x, /img/gallery/1@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/2.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/2.webp 1x, /img/gallery/2@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/2.png 1x, /img/gallery/2@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/3.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/3.webp 1x, /img/gallery/3@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/3.png 1x, /img/gallery/3@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/4.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/4.webp 1x, /img/gallery/4@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/4.png 1x, /img/gallery/4@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/5.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/5.webp 1x, /img/gallery/5@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/5.png 1x, /img/gallery/5@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/6.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/6.webp 1x, /img/gallery/6@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/6.png 1x, /img/gallery/6@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/7.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/7.webp 1x, /img/gallery/7@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/7.png 1x, /img/gallery/7@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/8.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/8.webp 1x, /img/gallery/8@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/8.png 1x, /img/gallery/8@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/9.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/9.webp 1x, /img/gallery/9@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/9.png 1x, /img/gallery/9@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/10.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/10.webp 1x, /img/gallery/10@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/10.png 1x, /img/gallery/10@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/11.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/11.webp 1x, /img/gallery/11@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/11.png 1x, /img/gallery/11@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/12.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/12.webp 1x, /img/gallery/12@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/12.png 1x, /img/gallery/12@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/13.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/13.webp 1x, /img/gallery/13@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/13.png 1x, /img/gallery/13@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/14.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/14.webp 1x, /img/gallery/14@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/14.png 1x, /img/gallery/14@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/15.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/15.webp 1x, /img/gallery/15@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/15.png 1x, /img/gallery/15@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/16.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/16.webp 1x, /img/gallery/16@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/16.png 1x, /img/gallery/16@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/17.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/17.webp 1x, /img/gallery/17@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/17.png 1x, /img/gallery/17@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/18.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/18.webp 1x, /img/gallery/18@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/18.png 1x, /img/gallery/18@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/19.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/19.webp 1x, /img/gallery/19@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/19.png 1x, /img/gallery/19@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/20.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/20.webp 1x, /img/gallery/20@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/20.png 1x, /img/gallery/20@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
					<a href="img/gallery/original/21.jpg" data-fancybox="gallery-mob">
						<picture>
							<source srcset="/img/gallery/21.webp 1x, /img/gallery/21@2x.webp 2x" type="image/webp">
							<img srcset="/img/gallery/21.png 1x, /img/gallery/21@2x.png 2x" alt="img" class="gallery__img" loading="lazy">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="docs" class="docs">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="docs__ttl">{{ trans('main.docs-ttl') }}</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="img/docs/s1.jpg" data-fancybox="docs" class="docs-item">
					<span class="docs-item__note">DOCUMENTS</span>
					<picture>
						<source srcset="/img/doc_img1.webp 1x, /img/doc_img1@2x.webp 2x" type="image/webp">
						<img srcset="/img/doc_img1.png 1x, /img/doc_img1@2x.png 2x" alt="img" class="docs-item__img" loading="lazy">
					</picture>
					<h4 class="docs-item__ttl">{{ trans('main.docs-item-1') }}</h4>
				</a>
				<a href="img/docs/s2.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s3.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s4.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s5.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s6.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s7.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s8.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s10.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s11.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s12.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s13.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s14.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s15.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s16.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s17.jpg" data-fancybox="docs" class="d-none"></a>
				<a href="img/docs/s18.jpg" data-fancybox="docs" class="d-none"></a>
			</div>
			<div class="col-md-6">
				<a href="img/docs/s1.jpg" data-fancybox="sertif" class="docs-item">
					<span class="docs-item__note">CERTIFICATION</span>
					<picture>
						<source srcset="/img/doc_img2.webp 1x, /img/doc_img2@2x.webp 2x" type="image/webp">
						<img srcset="/img/doc_img2.png 1x, /img/doc_img2@2x.png 2x" alt="img" class="docs-item__img" loading="lazy">
					</picture>
					<h4 class="docs-item__ttl">{{ trans('main.docs-item-2') }}</h4>
				</a>
				<a href="img/docs/s2.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s3.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s4.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s5.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s6.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s7.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s8.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s9.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s10.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s11.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s12.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s13.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s14.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s15.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s16.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s17.jpg" data-fancybox="sertif" class="d-none"></a>
				<a href="img/docs/s18.jpg" data-fancybox="sertif" class="d-none"></a>
			</div>
		</div>
	</div>
</section>

<footer id="contacts" class="foot">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="foot__ttl"><span>{{ trans('main.foot-ttl') }}</span></h3>
				<p class="foot__addr">{{ trans('main.foot-addr') }}</p>
				<div class="foot-item foot-item_phone">
					<p class="foot-item__ttl">{{ trans('main.foot-item-1') }}</p>
					<a href="tel:+380952735512" class="foot-item__link">+380952735512</a>
					<!-- <a href="tel:+380676741600" class="foot-item__link">+380676741600</a>
					<a href="tel:+380952735512" class="foot-item__link">+380952735512</a> -->
				</div>
				<div class="foot-item foot-item_email">
					<p class="foot-item__ttl">{{ trans('main.foot-item-2') }}</p>
					<a href="mailto:medtechnology@i.ua" class="foot-item__link">medtechnology@i.ua</a>
				</div>
				<div class="foot-soc">
					<a href="https://www.facebook.com/profile.php?id=100041717974306" target="_blank" class="foot-soc__link">
						<img src="img/facebook.svg" alt="facebook">
						<span>Facebook</span>
					</a>
					<a href="https://instagram.com/medichnitekhnologiyi?igshid=194iugpmn70dv" target="_blank" class="foot-soc__link">
						<img src="img/instagram.svg" alt="instagram">
						<span>Instagram</span>
					</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="foot-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2574.787303259287!2d24.057534115708197!3d49.80886627939201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae805cd0a91b1%3A0x25037c1a01cfdc7f!2z0LLRg9C70LjRhtGPINCd0LDQstGA0L7RhtGM0LrQvtCz0L4sIDEwLCDQm9GM0LLRltCyLCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDc5MDAw!5e0!3m2!1suk!2sua!4v1616734133338!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
		<div class="row foot__end align-items-center justify-content-between">
			<div class="col-sm-2 col-lg-1 col-6">
				<picture>
					<source srcset="/img/logo.webp 1x, /img/logo@2x.webp 2x" type="image/webp">
					<img srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="logo" class="foot__logo" loading="lazy">
				</picture>
			</div>
			<div class="col-sm-3 col-6">
				<a href="https://wamp.com.ua/" target="_blank" class="dev">
					<p class="dev-txt">{!! trans('main.dev') !!}</p>
					<img src="/img/dev-logo.svg" alt="logo" class="dev-logo" loading="lazy">
				</a>
			</div>
		</div>
	</div>
</footer>

<div class="d-none">
	<div id="modal" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal-1-ttl') !!}</h3>
		<form action="mail.php" method="POST" class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.form-title3') }}">
			<input type="hidden" name="catalog">
			<div class="rline">
				<input type="text" name="name" class="rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="rfield phonefield" placeholder="+38 (___) ___-__-__">
			</div>
			<button type="submit" class="btnsubmit modal-form__btn"><span>{{ trans('main.modal-1-btn') }}</span><i></i></button>
		</form>
	</div>

	<div id="modal2" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal-2-ttl') !!}</h3>
		<form action="mail.php" method="POST" class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.form-title4') }}">
			<input type="hidden" name="catalog">
			<div class="rline">
				<input type="text" name="name" class="rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="rfield phonefield" placeholder="+38 (___) ___-__-__">
			</div>
			<button type="submit" class="btnsubmit modal-form__btn"><span>{{ trans('main.modal-2-btn') }}</span><i></i></button>
		</form>
	</div>

	<div id="modal3" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal-3-ttl') !!}</h3>
		<form action="mail.php" method="POST" class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.form-title4') }}">
			<input type="hidden" name="product">
			<input type="hidden" name="catalog" class="catalogItem">
			<div class="rline">
				<input type="text" name="name" class="rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="rfield phonefield" placeholder="+38 (___) ___-__-__">
			</div>
			<button type="submit" class="btnsubmit modal-form__btn"><span>{{ trans('main.modal-3-btn') }}</span><i></i></button>
		</form>
	</div>

	<div id="thn">
		<h3>{{ trans('main.thn-ttl') }}</h3>
		<p>{{ trans('main.thn-txt') }}</p>
	</div>
</div>

<body>

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>