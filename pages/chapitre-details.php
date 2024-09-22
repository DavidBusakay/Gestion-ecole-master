<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
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
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/responsive.css">
	<style type="text/css">
		.video-container{
			background-color: #000;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0,0,0.5);
			margin: 20px auto;

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
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="video-container">
					<img src="">
					<video id="videoPlayer" controls=""><source src="../img/CSharp  #11 - énumérations" type="mp4"></video>
				</div>
				<div class="controls bg-light d-flex justify-content-center">
					<button class="btn-btn-primary"onclick ="playvideo()">lecture</button>
					<button class="btn-btn-danger"onclick="pausevideo()">pause</button>
					<div class="d-flex align-items-center">
						<label for ="volume" class="me-2">volume</label>
						<input type="range" name="" id="volume" min="0" max="1" step="0.1" onchange="setvolume(this.value)">
					</div>
				</div>
			</div>
		</div>
	</div>
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
		var video = document.etElementById("videoPlayer");
		function playvideo() {
			videoPlayer();
		}
		function pausevideo() {
			video.pause();
		}
		function setvolume(volume) {
			video.volume= volume;
		}
	</script>

</body>
</html>