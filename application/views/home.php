<!DOCTYPE html>
<html>
<head>
	<!-- Monica Dessy Amanda - 1301164452 -->
	<title>Cemal-Cemil</title>

	<!-- Load your Bootstrap CSS Library Here -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/monica/bootstrap/css/bootstrap.min.css">
	
	<!-- Load your CSS Style Here! -->
	<style type="text/css">
		#nav_logo {
			background-color: transparent;
		}
		#nav_list{
			margin-top: 18px;
			display: inline;
		}
		#nav_list ul li{
			display: inline;
			list-style: none;
			padding: 10px;
			color: black;
		}
		#nav_list ul li a{
			text-decoration: none;
			color: black;
		}
		#nav_list ul li a:hover{
			text-decoration: none;
			color: #f26c4f;
		}
		#nav_button{
			margin-top: 16px;
		}
		#nav_button button{
			background-color: #abe64d;
			color: #ffffff;
			margin-left: 20px;
		}
		#nav_button button:hover{
			background-color: #f26c4f;
			color: #ffffff;
			margin-left: 20px;
		}
		#slide{
			margin-top: 87px;
		}
		#slide_caption{
			color: #000000;
		}
		#menu_kiri{
			margin-top: 10px;
			background-color: #dedfdb;
			text-align: center;
			padding: 30px;
		}
		#menu_kanan{
			margin-top: 10px;
			background-color: #dedfdb;
			text-align: center;
			padding: 30px;
		}
		#kunjungi{
			background-color: #abe64d;
			padding: 50px;
		}
		#footer{
			background-color: #dedfdb;
			text-align: center;
			padding: 20px;
		}
		body{
			background-color: #ffffff;
			font-family: papyrus;
		}
		.zoom {
			display:inline-block;
			position: relative;
		}
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(<?php echo base_url(); ?>assets/monica/jquery/zoom-master/icon.png);
		}
	</style>

	<!--Load your JQuery here!-->
	<script src="<?php echo base_url(); ?>assets/monica/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#about_f").click(function(){
		        $("#about_f_p").css("color", "black");
		        $("#about_f").css("background-color", "#f26c4f");
		        $("#about_f_p").show(2000); 
		        $("#about_i_p").hide(2000);
		        $("#about_i").css("background-color", "#abe64d");
		    });
		    $("#about_i").click(function(){
		        $("#about_i_p").css("color", "black");
		        $("#about_i").css("background-color", "#f26c4f");
		        $("#about_i_p").show(2000);
		        $("#about_f_p").hide(2000);
		        $("#about_f").css("background-color", "#abe64d");
		    });
		    $("#logo_fb").mouseover(function(){
    			$("#logo_fb").toggle(800);
    			$("#logo_fb").toggle(800);
			});
			$("#logo_ig").mouseover(function(){
    			$("#logo_ig").toggle(800);
    			$("#logo_ig").toggle(800);
			});
			$("#logo_yt").mouseover(function(){
    			$("#logo_yt").toggle(800);
    			$("#logo_yt").toggle(800);
			});
			$("#logo_tw").mouseover(function(){
    			$("#logo_tw").toggle(800);
    			$("#logo_tw").toggle(800);
			});
			$("#owner_1").mouseover(function(){
    			$("#owner_1").css("background-color", "#f26c4f");
			});
			$("#owner_1").mouseout(function(){
    			$("#owner_1").css("background-color", "#dedfdb");
			});
			$("#owner_2").mouseover(function(){
    			$("#owner_2").css("background-color", "#f26c4f");
			});
			$("#owner_2").mouseout(function(){
    			$("#owner_2").css("background-color", "#b8b8b8");
			});
			$("#owner_3").mouseover(function(){
    			$("#owner_3").css("background-color", "#f26c4f");
			});
			$("#owner_3").mouseout(function(){
    			$("#owner_3").css("background-color", "#8b8b8b");
			});
			$("#owner_4").mouseover(function(){
    			$("#owner_4").css("background-color", "#f26c4f");
			});
			$("#owner_4").mouseout(function(){
    			$("#owner_4").css("background-color", "#727272");
			});
		});
	</script>

	<!--Load your JQuery Plugin (1) here!-->
	<script src="<?php echo base_url(); ?>assets/monica/jquery/zoom-master/jquery.zoom.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mmf').zoom();
			$('#mmi').zoom();
		});
	</script>

	<!--Load your JQuery Plugin (2) here!-->
	<script src="<?php echo base_url(); ?>assets/monica/jquery/jquery-typist/jquery.typist.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.typist')
				.typist({
					text: 'Ingin makanan cemilan, tetapi malas keluar, hujan, pkl susah dicari?'
				})
				.typistPause(2000) // 2 sec
				.typistRemove(45)
				.typistAdd('tenang saja ! Cemal-cemil adalah solusi dari masalah anda. Sekali klik, kami hadir di lokasi anda membawa cemilan anda')
				.typistStop();
		});
	</script>

	<!-- Load your Bootstrap JS Library Here -->
	<script src="<?php echo base_url(); ?>assets/monica/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
	<nav class="navbar fixed-top bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo_pth.jpg" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list">
					<ul>
						<li><a href="home.html"> Home </a></li>
						<li><a href="<?php echo site_url('menu') ?>"> Menu </a></li>
						<li><a href="order.html"> Order Now! </a></li> 
					</ul>
				</div>
				<div class="col-6 col-lg-3" id="nav_button">
					<a href="login.html">
						<button type="button" class="btn btn-md" id="login" >Login</button></a>
					<a href="join.html">
						<button type="button" class="btn btn-md" id="join" >Join Us</button></a>
				</div>
			</div>
		</div>
	</nav>
<!-- SLIDE -->
	<div class="container-fluid" id="slide">
		<div class="row">	
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  	</ol>
			  	<div class="carousel-inner">
			    	<div class="bg-size-cover carousel-item active">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide1.jpg" alt="First slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
	 						<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">KESIBUKKAN KULIAH MENGGANGGU WAKTU ANDA</h5>
	    						<p style="font-size: 25px;">Tapi ingin ngemil bersama teman</p>	
	    						<a href="order.html">
	    							<button type="button" class="btn btn-lg" id="Order" style="background-color: #abe64d; color: white">Order
	    							</button>
	    						</a>
	  						</div>	
  						</span>
			    	</div>
			    	<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide2.jpg" alt="Second slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">SEKALI KLIK, MAKANAN PEDAGANG KAKI LIMA ADA DILOKASI ANDA</h5>
	    						<p style="font-size: 25px;">Dengan Cemal-cemil</p>
	    						<a href="menu.html">
	    							<button type="button" class="btn btn-lg" id="menu" style="background-color: #abe64d; color: white">Mal-mil Food
	    							</button>
	    						</a>
	  						</div>	
  						</span>
			    	</div>
			    	<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide3.jpg" height: 463.4px alt="Third slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">MINUMAN ES? BISA DIANTAR TANPA TAKUT MELELEH!</h5>
	    						<p style="font-size: 25px;">Dengan Cemal-cemil</p>
	    						<a  href="menu.html">
	    							<button type="button" class="btn btn-lg" id="menu" style="background-color: #abe64d; color: white">Mal-mil Ice
	    							</button>
	    						</a>
	  						</div>	
	  					</span>
			   		</div>
			   		<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide4.jpg" height: 463.4px alt="Fourth slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">LEBIH DARI 100+ PKL BERGABUNG DENGAN KAMI</h5>
	    						<p style="font-size: 25px;">Ingin bergabung dengan kami juga?</p>
	    						<a href="join.html">
		    						<button type="button" class="btn btn-lg" id="join" style="background-color: #abe64d; color: white">Join Us
		    						</button>
	    						</a>
	  						</div>	
	  					</span>
			   		</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			 	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
	</div>
	<p class="typist" style="text-align: center; font-size: 25px;"></p>
<!-- OUR MENU -->
	<div class="container" id="menu">
		<h1 style="margin-top: 50px; text-align: center;"> MENU </h1>
		<div class="row">
			<div class="col-6 col-lg-6" id="menu_kiri">
				<h4> Mal-mil FOOD </h4>
				<p> Order mal-mil FOOD for food delivery services .. </p>
				<span class="zoom" id="mmf">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/isi/mmf.jpg" style="width: 400px;">
				</span>
				<button type="button" class="btn btn-md" id="about_f" style="background-color: #abe64d; color: white; margin-top: 20px;">About Mal-mil Food
				</button>
				<p id="about_f_p" style="color: #dedfdb; margin-top: 20px;">Mal-mil food adalah salah satu menu dalam 'cemal-cemil' yang berupa makanan, seperti siomay, martabak, dsb. Cek menu untuk info lebih lanjut !</p>
			</div>
			<div class="col-6 col-lg-6" id="menu_kanan">
				<h4> Mal-mil ICE </h4>
				<p> Order mal-mil ICE for ice delivery services .. </p>
				<span class="zoom" id="mmi">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/isi/mmi.jpg" style="width: 400px;">
				</span>
				<button type="button" class="btn btn-md" id="about_i" style="background-color: #abe64d; color: white; margin-top: 20px;">About Mal-mil Ice
				</button>
				<p id="about_i_p" style="color: #dedfdb; margin-top: 20px;">Mal-mil ice adalah salah satu menu dalam 'cemal-cemil' yang berupa minuman, ataupun es, seperti es buah, es doger, dsb. Cek menu untuk info lebih lanjut !</p>
			</div>
		</div>
	</div>
<!-- OWNER -->
	<div class="container-fluid" id="owner">
		<h1 style="margin-top: 50px; text-align: center;"> OWNER </h1>
		<div class="row">
			<div class="col-6 col-lg-3" id="owner_1" style="text-align: center; background-color: #dedfdb; padding: 20px;">
				<h5> Monica Dessy Amanda </h5>
				<p> 1301164452 </p>
				<img src="<?php echo base_url(); ?>assets/monica/gambar/owner/monica.jpg" class="rounded-circle" width="40%" style="margin-top: 3px;"/>
				<p style="margin-top: 15px;"> Cemal-cemil dibuat demi memberikan kemudahan bagi mahasiswa dalam mendapatkan jajanan pkl tanpa perlu keluar. </p>
			</div>
			<div class="col-6 col-lg-3" id="owner_2" style="text-align: center; background-color: #b8b8b8; padding: 20px;">
				<h5> Haifa Salsabila </h5>
				<p> 1301160170 </p>
				<img src="<?php echo base_url(); ?>assets/monica/gambar/owner/haifa.jpg" class="rounded-circle" width="40%" style="margin-top: 3px;"/>
				<p style="margin-top: 15px;"> Cemal-cemil adalah solusi untuk semua masalah mahasiswa. </p>
			</div>
			<div class="col-6 col-lg-3" id="owner_3" style="text-align: center; background-color: #8b8b8b; padding: 20px;">
				<h5> Fakhira Zahra Zulfira </h5>
				<p> 1301164549 </p>
				<img src="<?php echo base_url(); ?>assets/monica/gambar/owner/fira.jpg" class="rounded-circle" width="40%" style="margin-top: 3px;"/>
				<p style="margin-top: 15px;"> Untuk urusan perut, cemal-cemil adalah terobosan yang cukup mempengaruhi kehidupan mahasiswa. </p>
			</div>
			<div class="col-6 col-lg-3" id="owner_4" style="text-align: center; background-color: #727272; padding: 20px;">
				<h5> Karina Aulia Dini </h5>
				<p> 1301164342 </p>
				<img src="<?php echo base_url(); ?>assets/monica/gambar/owner/karin.jpg" class="rounded-circle" width="40%" style="margin-top: 3px;"/>
				<p style="margin-top: 15px;"> Bersama cemal-cemil, mari penuhi kebutuhan cemilan harian anda. </p>
			</div>
		</div>
	</div>
<!-- KUNJUNGI -->
	<div class="container-fluid" id="kunjungi">
		<center>	
		<h3 style="color: #ffffff; margin-bottom: 30px;"> KUNJUNGI </h3>
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<a href="https://www.facebook.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_facebook.png" id="logo_fb" style="width: 50px;">
				</a>
				<a href="https://www.instagram.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_instagram.png" id="logo_ig" style="width: 50px;">
				</a>
				<a href="https://www.youtube.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_youtube.png" id="logo_yt" style="width: 50px;">
				</a>
				<a href="https://www.twitter.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_twitter.png" id="logo_tw" style="width: 50px;">
				</a>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
	</center>
	</div>
<!-- FOOTER -->
	<div class="container-fluid" id="footer">
		<div class="row" id="footer">
			<div class="col-lg-4">
				<h6> Ketentuan Layanan </h6>
				<h6> Kebijakan Privasi</h6>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo.png" style="width: 30%;">
			</div>
			<div class="col-lg-4">
				<h6> @2018 CEMAL-CEMIL INDONESIA </h6>
			</div>
		</div>
	</div>
</body>
</html>