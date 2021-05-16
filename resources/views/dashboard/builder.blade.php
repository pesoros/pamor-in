<!DOCTYPE html>
<html lang="id_ID">
<head>

	<!-- FACEBOOK TAG -->


	<!-- META -->
	<title>Edit | Nama</title>
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

        <!-- EDIT-SECTION -->
		<div class="row">
			<div class="col-6">
				<a href="dashboard">
					<button class="button-default">
						<text>Dashboard</text>
					</button>
				</a>
			</div>
			<div class="col-6">
				<a href="#" data-toggle="modal" data-target="#pengaturanModal">
					<button class="button-default">
						<text>Pengaturan</text>
					</button>
				</a>
			</div>
		</div>
		<div class="separator-medium"></div>
		<!-- EDIT-SECTION -->
        
		<div class="pages-wrapper">

			<!-- PROFIL -->
			<div class="intro-app">
				<div class="container">
					<div class="intro-content">
						<div class="mask"></div>
						<img src="{{ asset('pamorin-assets/images/intro.jpg') }}">
						<div class="caption">
							<p class="size-name">NAMA</p>
							<p class="size-description">Deskripsi / Slogan</p>
						</div>
					</div>
				</div>
			</div>
			<div class="separator-large"></div>

			<!-- END PROFIL -->

			<!-- MAIN CONTENT -->



			<!-- END MAIN CONTENT -->

			<!-- TAMBAH -->
			<div class="separator-large"></div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<a href="#" data-toggle="modal" data-target="#shareModal">
							<button class="button-default">
								<text class="fas fa-plus" />
							</button>
						</a>
					</div>
				</div>
			</div>
			<!-- END TAMBAH -->

			<!-- MODAL TAMBAH -->
			<div class="modal-action-content">

				<div id="pengaturanModal" class="modal fade login-modal">
					<div class="modal-dialog modal-bottom">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-12 text-right">
										<a href="#" data-dismiss="modal" class="fas fa-times text-large"></a>
									</div>
								</div>
								<div class="modal-icon-title">
									<span class="overline text-medium">Pengaturan</span>
								</div>
								<form class="form-fill">
									<div class="form-wrapper">
										<text>Profil :</text>
										<div class="input-wrap">
											<input type="nama" placeholder="Nama">
										</div>
										<div class="input-wrap">
											<input type="deskripsi" placeholder="Deskripsi / Slogan">
										</div>
									</div>

    								<div class="separator-small"></div>

									<text for="colorpicker">Foto Profil :</text>
									<div class="img">
										<img src="{{ asset('pamorin-assets/images/intro.jpg') }}">
									</div>

    								<div class="separator-small"></div>

									<div class="row">
										<div class="col-6">
											<a href="#">
												<button class="button">
													<text>Hapus</text>
												</button>
											</a>
										</div>
										<div class="col-6">
											<a href="#">
												<button class="button">
													<text>Unggah</text>
												</button>
											</a>
										</div>
									</div>

    								<div class="separator-small"></div>

									<text for="colorpicker">Warna Background :</text>
   									<input type="color" id="warnaBackground" value="#ffffff">

    								<div class="separator-small"></div>

									<text for="colorpicker">Warna Tombol :</text>
   									<input type="color" id="warnaTombol" value="#000000">

    								<div class="separator-small"></div>

									<div class="button-default">
										<a href="">
											<button class="button">
												<text>Simpan</text>
											</button>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div id="shareModal" class="modal fade share-modal">
					<div class="modal-dialog modal-bottom">
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-icon-title">
									<i class="icon ion-ios-share"></i>
									<h5>Share & Distribute</h5>
									<p class="text-small">So that users easily use and customize this template Equipped with various features</p>
								</div>
								<div class="social-media-icon">
									<div class="row">
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-facebook bg-facebook"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-instagram bg-instagram"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-twitter bg-twitter"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-google bg-google"></i></a>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-pinterest bg-pinterest"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-linkedin bg-linkedin"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-yahoo bg-yahoo"></i></a>
										</div>
										<div class="col-3">
											<a href="#"><i class="icon ion-logo-whatsapp bg-whatsapp"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL TAMBAH -->

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

	<!-- FOOTER-->
	<div class="footer-wrapper">
		<div class="separator-small"></div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<a href="">
							<button class="button-default">
								<text class="">
									Terbitkan
    							</text>
							</button>
						</a>
					</div>
				</div>
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