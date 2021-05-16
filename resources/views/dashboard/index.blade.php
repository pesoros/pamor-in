<!DOCTYPE html>
<html lang="id_ID">
<head>

	<!-- FACEBOOK TAG -->


	<!-- META -->
	<title>Dashboard | Pamor.in</title>
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
	
<!-- fakeloader -->
<div class="fakeLoader"></div>
<!-- end fakeloader -->

<!-- navbar -->
<div class="navbar navbar-default navbar-highlight">
	<a href="" class="left text-black">
		Pamor.in
	</a>
	<div class="right">
		<a href="" class="fas fa-sign-out-alt text-black"></a>
	</div>
</div>
<!-- end navbar -->

<!-- page wrapper -->
<div class="page-wrapper">
	<div class="separator-medium"></div>
	<div class="section-title title-large">
		<h3>Dashboard<h3>
		<span class="overline-title">Hai, Nama Profil!</span>
	</div>

	<!-- DASHBOARD-WRAPPER-->
	<div class="dashboard-wrapper">
		<div class="separator-small"></div>
		<div class="container">
			<div class="row">
				<div class="col-11 text-left">
					<a href="http://nama.{{ env('APP_URL_NAME') }}" class="text-small color-default">nama.pamor.in</a>
				</div>
				<div class="col-1 text-center">
					<div class="row">
						<a href="/builder" class="fas fa-pen color-default"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-left">
					<text class="text-x-small color-default">Status : Trial</text>
				</div>
			</div>
		</div>
		<hr>
		<div>
			<canvas id="myChart"></canvas>
		</div>
		
		<div class="separator-small"></div>
	</div>
	<!-- END-DASHBOARD-WRAPPER-->

	<div class="separator-large"></div>

	<!-- PRICING-WRAPPER -->
	<div class="dashboard-wrapper">
		<div class="separator-small"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<text class="text-large"> Pamor.in Pro</text>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<text>Hilangkan Iklan </text><text class="fas fa-check" />
				</div>
			</div>
		</div>
		<div class="separator-small"></div>
		<div class="container">
			<div class="row">
				<div class="col-2">
					
				</div>
				<div class="col-8">
					<a href="#">
						<button class="button">
							<text>Beli Sekarang</text>
						</button>
					</a>
				</div>
				<div class="col-2">
					
				</div>
			</div>
		</div>
		
		<div class="separator-small"></div>
	</div>
	<!-- END-PRICING-WRAPPER -->

</div>
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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		// === include 'setup' then 'config' above ===
		const labels = [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Ags',
		'Sep',
		'Okt',
		'Nov',
		'Des',
		];
		const data = {
		labels: labels,
		datasets: [{
			label: 'Pengunjung Halaman',
			backgroundColor: '#182d34',
			borderColor: '#182d34',
			data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 100, 1000],
		}]
		};

		const config = {
		type: 'line',
		data,
		options: {}
		};

		var myChart = new Chart(
			document.getElementById('myChart'),
			config
		);
	</script>
</body>
</html>