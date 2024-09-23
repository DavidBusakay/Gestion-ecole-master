<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>chapitre_details</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="../css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="../css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="../css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="../css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="../css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="../css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="../css/magnific-popup.css">
		<!-- icons flaticon -->
		<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/responsive.css">
	<style type="text/css">
		.hidden {
			display: none;
		}
		.visible {
			display: block;
		}

		#go-quiz {
			transition: all 0.4s ease-in-out;
		}

		/* scroll-bar */

		#all-cours::-webkit-scrollbar {
   			width: 8px;
		}

		#all-cours::-webkit-scrollbar-thumb {
			background-color: rgb(192, 192, 192);
			border-radius: 5px;
		}

		#all-cours::-webkit-scrollbar-thumb:hover {
			background-color: gray;
		}

		/* .flou {
			position: absolute;
			background-color: black;
			width: 100%;
			height: 20px;
		} */
		/* .video-container{
			background-color: #000;
			overflow: hidden;
		}
		video {
			width: 100%;
			height: auto;
		}
		.controls{
			display: flex;;
			justify-content: space-between;;
			align-items: center;
			padding: 10px;
		}
		button, .controls input{
			margin: 0 5px;
		} */
	</style>
</head>
<body>
	<!-- Header Area -->
	<?php
		include "../bloc/header-1.php";
	?>
	<!-- End Header Area -->

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="video">
								<video controls name="media" class="w-100 rounded-3" id="videoPlayer">
									<source src="../videos/code-javascript.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-lg-6 col-md-12 col-12">
							<h2 class="fs-2 fw-bold">Titre de la vidéo</h3>
							<p class="text-muted fs-6 pt-2 pb-2">Chapitre 1 - Nom du chapitre</p>
							<div class="border-bottom my-2"></div>
						</div>
						<div class="col-lg-6 col-md-12 col-12 text-end">
							<button class="btn btn-primary"onclick ="playvideo()">lecture</button>
							<button class="btn btn-primary"onclick="pausevideo()">pause</button>
							<!-- <div class="d-flex align-items-center">
								<label for ="volume" class="me-2">volume</label>
								<input type="range" name="" id="volume" min="0" max="1" step="0.1" onchange="setvolume(this.value)">
							</div> -->
						</div>
					</div>
					<div class="row my-3">
						<div class="col-lg-12 col-md-12 col-12 position-relative">
							<h4 class="fs-5 fw-bold pb-3">Description</h3>
							<p class="lead text-dark" style="line-height: 33px;">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, ut! Obcaecati, quos necessitatibus 
								vitae minima eum incidunt quis iste debitis totam voluptates maxime officia natus quibusdam quaerat, facilis eaque a 
								esse deserunt? Explicabo, provident minima? Perspiciatis praesentium est error reiciendis cupiditate ullam excepturi 
								facilis, deleniti impedit sapiente voluptatem dolorum accusamus.
							</p>
							<p class="text-center text-muted"><a href="" class="text-decoration-none">Afficher plus <i class="fi fi-rr-angle-small-down"></i></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="card">
								<div class="card-header border-0 d-flex justify-content-between align-items-center">
									<h4 class="card-text fs-5 fw-bold m-0">Quiz</h3>
									<button class="px-3 py-2" id="display-quiz"><i class="fi fi-rr-angle-small-down"></i></button>
								</div>
								<div class="card-body hidden" id="go-quiz">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-12">
											<p class="card-text lead mb-3">
												Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores similique, harum accusantium animi eaque libero eos aliquid iusto obcaecati quibusdam.
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8 col-md-8 col-8"></div>
										<div class="col-lg-4 col-mg-4 col-4 text-end">
											<a href="" class="btn btn-primary text-white">Commencer le Quiz</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="bg-light rounded-3 shadow-sm px-4 py-4">
								<form action="#" method="post" class="form">
									<input type="search" name="search" class="form-control rounded-2 w-100 px-3 py-2" placeholder="Rechercher les cours">
								</form>
							</div>
						</div>
					</div>
					<div class="row my-3">
						<div class="overflow-y-scroll" style="height: 60vh; display: -webkit-box; -webkit-box-orient: vertical;" id="all-cours">
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-12 col-md-12 col-12 my-2">
								<a href="#">
									<div class="card bg-light border-0 shadow-sm">
										<div class="card-body">
											<h4 class="card-text fs-5">Titre du cours</h4>
											<small class="text-muted">Chapitre 1 - Nom du chapitre</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Area -->
	<?php
		include "../bloc/footer.php";
	?>
	<!--/ End Footer Area -->

	<script src="../js/jquery.min.js"></script>
	<!-- jquery Migrate JS -->
	<script src="../js/jquery-migrate-3.0.0.js"></script>
	<!-- jquery Ui JS -->
	<script src="../js/jquery-ui.min.js"></script>
	<!-- Easing JS -->
	<script src="../js/easing.js"></script>
	<!-- Color JS -->
	<script src="../js/colors.js"></script>
	<!-- Popper JS -->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="../js/bootstrap-datepicker.js"></script>
	<!-- Jquery Nav JS -->
	<script src="../js/jquery.nav.js"></script>
	<script>
		var video = document.getElementById("videoPlayer");
		function playvideo() {
			videoPlayer();
		}
		function pausevideo() {
			video.pause();
		}
		function setvolume(volume) {
			video.volume= volume;
		}

		// affichage Quiz

		const btn_display_quiz = document.getElementById("display-quiz");
		const go_quiz = document.getElementById("go-quiz");

		btn_display_quiz.addEventListener("click", () => {
			if (btn_display_quiz) {
				go_quiz.classList.remove("hidden");
				go_quiz.classList.add("visible");
			} else {
				go_quiz.classList.remove("visible");
				go_quiz.classList.add("hidden");
			}
		});
	</script>
</body>
</html>