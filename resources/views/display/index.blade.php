<!DOCTYPE html>
<html lang="id_ID">
<head>

	<!-- FACEBOOK TAG --> 


	<!-- META -->
	<title>{{ $company_name }} by Pamor.in</title>
	<meta name="description" content="PESOROS | Digital Business Solution, Web Development, Digital Avertising, Branding, Social Media Management, Event Organizer, Google Ads, Instagram Ads, Facebook Ads di Surabaya">
	<meta name="keywords" content="Digital Business Solution, Web Development, Digital Avertising, Branding, Social Media Management, Event Organizer, Digital Advertising di Surabaya">
	<meta name="author" content="PESOROS">
	<link rel="canonical" href="http://pesoros.com">
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="PESOROS | Digital Business Solution" />
	<meta property="og:description" content="PESOROS | Digital Business Solution, Web Development, Digital Avertising, Branding, Social Media Management, Event Organizer, Google Ads, Instagram Ads, Facebook Ads di Surabaya" />
	<meta property="og:url" content="http://pesoros.com" />
	<meta property="og:site_name" content="PESOROS | Digital Business Solution" />


	<!-- CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('pamorin-assets/images/favicon.png') }}">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('pamorin-assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('pamorin-assets/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('pamorin-assets/css/fakeLoader.css') }}">
	<link rel="stylesheet" href="{{ asset('pamorin-assets/css/style.css') }}">

</head>
<body>
	
	<!-- FAKE-LOADER-->
	<div class="fakeLoader"></div>
	<!-- end FAKE-LOADER-->

	<!-- PAGE WRAPER -->
	<div class="page-wrapper">
		<div class="pages-wrapper">

			<!-- PROFIL -->
			<div class="intro-app">
				<div class="container">
					<div class="intro-content">
						<div class="mask"></div>
						<img src="{{ asset('pamorin-assets/images/intro.jpg') }}">
						<div class="caption">
							<p class="size-name">{{ $company_name }}</p>
							<p class="size-description">Deskripsi / Slogan</p>
						</div>
					</div>
				</div>
			</div>
			<div class="separator-large"></div>
			<!-- END PROFIL -->

			<!-- MAIN CONTENT -->

			

			<!-- END MAIN CONTENT -->

			<!-- END -->
			<div class="separator-large"></div>
		</div>
	</div>
	<!-- END PAGE WRAPER-->

	<!-- FOOTER-->
	<div class="footer-wrapper">
		<div class="separator-small"></div>
		<div class="footer">
			<div class="container">
				<p class="made-by text-small">Pamor.in by Pesoros</p>
			</div>
		</div>
	</div>
	<!-- END FOOTER-->

	<script src="{{ asset('pamorin-assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('pamorin-assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('pamorin-assets/js/fakeLoader.js') }}"></script>
	<script src="{{ asset('pamorin-assets/js/jquery.big-slide.js') }}"></script>
	<script src="{{ asset('pamorin-assets/js/main.js') }}"></script>
</body>
</html>