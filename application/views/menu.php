<html lang="en">
<head>
  <title>Menu ~ Cemal-Cemil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  	.carousel-inner img {
      width: 100%;
      height: 90%;
    }
  #navb{
    background-color: #ffffff;
  }
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
		color: orange;
	}
	body{
		background-color: #dedfdb;
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

	.container .btn {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    -ms-transform: translate(-50%, -50%);
	    background-color: #555;
	    color: white;
	    font-size: 16px;
	    padding: 12px 24px;
	    border: none;
	    cursor: pointer;
	    border-radius: 5px;
	    text-align: center;
	}
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    padding-top: 100px; /* Location of the box */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}
	.modal-content {
	    background-color: #fefefe;
	    margin: auto;
	    padding: 20px;
	    border: 1px solid #888;
	    width: 40%;
	}
	.close {
	    color: #aaaaaa;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	}
	.close:hover,
	.close:focus {
	    color: #000;
	    text-decoration: none;
	    cursor: pointer;
	}
	 #MalmilFood{
	    width: 60%;
	    border-radius: 20px;
    }
    #MalmilFood table{
        width: 95%;
        padding: 3%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: #000000;
        border: 1px;
    }
    #MalmilFood table td{
    	text-align: center;
    }
    #MalmilFood table td p{
    	text-align: center;
    }
    #MalmilIce{
        width: 60%;
        border-radius: 20px;
    }
    #MalmilIce table{
         width: 95%;
         padding: 3%;
         font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
         color: #000000;
        border: 1px;
    }
     #MalmilIce table td{
    	text-align: center;
    }
    #MalmilIce table td p{
    	text-align: center;
    }
    table thead th{
       text-align: center;
    }
    table tbody th{
       text-align: left;
    }
    table td{
        text-align: left;
    }
</style>
</head>
<body>
	<nav class="navbar fixed-top bg-black" id="navb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-2" id="nav_logo">
          <img src="<?php echo base_url(); ?>assets/haifa/Logo.png" style="width: 100%;">
        </div>
        <div class="col-6 col-lg-7" id="nav_list">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
            </ul>
            </div> 
            <ul>
              <li style="font-family: Papyrus;"><a href="home.html"> Home </a></li>
              <li style="font-family: Papyrus;"><a href="menu.html"> Menu </a></li>
              <li style="font-family: Papyrus;"><a href="order.html"> Order Now! </a></li> 
            </ul>
        </div><br><br><br>
          <div class="col-6 col-lg-3" id="nav_button">
          <a href="login.html">
            <button type="button" class="btn btn-md" id="login" >Login</button></a>
          <a href="join.html">
            <button type="button" class="btn btn-md" id="join" >Join Us</button></a>
        </div>
    </div>
  </nav>


	<div id="demo" class="carousel slide" data-ride="carousel">
 		 <ul class="carousel-indicators">
  			  <li data-target="#demo" data-slide-to="0" class="active"></li>
   			  <li data-target="#demo" data-slide-to="1"></li>
   			  <li data-target="#demo" data-slide-to="2"></li>
    	</ul>
  		<div class="carousel-inner">
   			 <div class="carousel-item active">
   				   <img src="<?php echo base_url(); ?>assets/haifa/Cimin.jpg" alt="Los Angeles" width="1100" height="500">
   				   <div class="carousel-caption">
      				  <h3>Cimin</h3>
       				  <p>Percaya Deh Kamu Gak Akan Kuat, Biar Aku Saja Yang Makan Cimin</p>
      				</div>   
    		</div>
   		    <div class="carousel-item">
     			    <img src="<?php echo base_url(); ?>assets/haifa/martabak.png" alt="Chicago" width="1100" height="500">
     			    <div class="carousel-caption">
      				  <h3>Martabak</h3>
      				  <p style="color: black;">Martabak,makanan yang sering disantap malam-malam ini digemari banyak orang. Kalau pacar ngapel ke rumah juga seringnya bawa martabak kan? WKWKWK</p>
     			    </div>   
   			 </div>
  		    <div class="carousel-item">
  		   			<img src="<?php echo base_url(); ?>assets/haifa/Lupis.jpg" alt="New York" width="1100" height="500">
     				<div class="carousel-caption">
       			   	   <h3>Lupis</h3>
        			   <p>Dari dulu sampai sekarang, Lupis tetap kesayangan</p>
     	    		</div>   
   		 	</div>
   	</div>
 	<a class="carousel-control-prev" href="#demo" data-slide="prev">
    	<span class="carousel-control-prev-icon"></span>
    </a>
  	<a class="carousel-control-next" href="#demo" data-slide="next">
   	   <span class="carousel-control-next-icon"></span>
  	</a>
  </div>


  <div class="container">
  	<!-- <div id="myModal" class="modal"> -->
  	<div class="row" style="margin-top: 20px;">
  		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Lupisbutton.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn" onclick="muncul('myModal')">Lupis</button>
  			<div id="myModal" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">LUPIS</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Lupis.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Kue lupis ketan merupakan kue nusantara dengan <br>ciri khas berbentuk segitiga, bertekstur agak kenyal/legit dan disiram dengan sirup gula merah sehingga rasanya manis. </p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
		</div>
  		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/martabakbutton.png" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn2" onclick="muncul('myModal2')">Martabak</button>
  			<div id="myModal2" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal2')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">MARTABAK</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/martabak.png" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Martabak manis adalah sejenis kue atau roti isi selai yang biasa dimakan di saat santai sebagai makanan ringan.  </p>
   					 <p style="text-align: center;">Harga : Rp18000</p>
  				</div>	
  			</div>
  		</div>
  		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Siomay.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn3" onclick="muncul('myModal3')">Siomay</button>
  			<div id="myModal3" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal3')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">SIOMAY</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Siomay.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Hmm Yummy, mungkin kalimat itu yang bisa menggambarkan bagaimana rasanya siomay dimulut. makananberbentuk bulat kenyal berisi ikan, disiram bumbu kacang dan kecap menjadi salah satu makanan favourite di Tanah Air.</p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
  		</div>
  		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Cimol.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn4" onclick="muncul('myModal4')">Cimol</button>
  			<div id="myModal4" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal4')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">CIMOL</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Cimol.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Cimol alias aci digemol (tepung kanji dibentuk bulat-bulat) merupakan jajanan khas Tasikmalaya yang pertama kali terkenal di Bandung. Jajanan yang satu ini membuat orang ketagihan untuk membelinya. Bentuk yang bulat, rasa yang enak dan gurih, kenyal-kenyal digigit disukai oleh anak-anak maupun orang tua sekalipun.  </p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
  		</div>
 	</div>
 	<div class="row" style="margin-top: 20px;">
 		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Cimin.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn5" onclick="muncul('myModal5')">Cimin</button>
  			<div id="myModal5" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal5')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">CIMIN</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Cimin.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Cimin merupakan jajanan khas yang bahan utamanya aci juga, namun bentuknya dipotong kotak-kotak kecil. Cimin alias cireng/aci mini dibuat dengan cara digoreng, lalu ditambahkan telur kocok diatasnya. setelah matang, dimasukkan ke dalam toples plastik, kemudian ditaburi bubuk keju, bubuk cabe, sesuai selera, lalu diaduk-aduk dengan sendok sampai semua bumbu merata </p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
		</div>	
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Sosis Bakar.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn5" onclick="muncul('myModal6')">Sosis Bakar</button>
  			<div id="myModal6" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal6')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">SOSIS BAKAR</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Sosis Bakar.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Sosis bakar saat ini sangat digemari oleh banyak orang. Stand penjual sosis bakar sekarang dapat dengan mudah ditemui dimanapun. Tidak hanya daging ikan ataupun daging ayam, akan tetapi saat ini sosis kerap menjadi daging pilihan untuk disajikan dengan cara dibakar. </p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>	
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Surabi.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn5" onclick="muncul('myModal7')">Surabi</button>
  			<div id="myModal7" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal7')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">SURABI</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Surabi.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Surabi adalah jajanan pasar tradisional khas Indonesian. Di Bandung, serabi biasa dijajakan di pagi hari dan dimasak menggunakan tungku sehingga menghasilkan rasa yang khas. Ayo kaumla muda order dulu makanan ke bandungan yang satu ini. </p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>	
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Tahu Sumedang.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn5" onclick="muncul('myModal8')">Tahu Sumedang</button>
  			<div id="myModal8" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal8')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Tahu Sumedang</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Tahu Sumedang.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Kemana pun Anda pergi, Tahu Sumedang cemilannya. Pergi ke terminal,stasiun,pelabuhan pasti ada tahu sumedang. Crispy yang melekat di atasnya membuat semua orang ingin mengunyahnya.</p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
		</div>	
 	</div>
  </div>


  <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 100px;">
 		 <ul class="carousel-indicators">
  			  <li data-target="#demo" data-slide-to="0" class="active"></li>
   			  <li data-target="#demo" data-slide-to="1"></li>
   			  <li data-target="#demo" data-slide-to="2"></li>
    	</ul>
  		<div class="carousel-inner">
   			 <div class="carousel-item active">
   				   <img src="<?php echo base_url(); ?>assets/haifa/Sop Buah.jpg" alt="Los Angeles" width="1100" height="500">
   				   <div class="carousel-caption">
      				  <h3>Sop Buah</h3>
       				  <p>Tahukah Anda bahwa Sop Buah adalah minuman favourite sepanjang masa? Hmm kalau gak tahu buruan order sekarang!</p>
      				</div>   
    		</div>
   		    <div class="carousel-item">
     			    <img src="<?php echo base_url(); ?>assets/haifa/Es Buah.jpg" alt="Chicago" width="1100" height="500">
     			    <div class="carousel-caption">
      				  <h3>Es Buah</h3>
      				  <p style="color: black;">Apakah kalian tahu bahwa Es Buah ternyata berasal dari Bandung? Ayo warganet Bandung order Es Buahnya, kalau enggak yakin ni gak malu WKWKWK</p>
     			    </div>   
   			 </div>
  		    <div class="carousel-item">
  		   			<img src="<?php echo base_url(); ?>assets/haifa/Es Krim.jpg" alt="New York" width="1100" height="500">
     				<div class="carousel-caption">
       			   	   <h3>Es Krim</h3>
        			   <p>Pelangi apa yang dingin? Kayaknya Es Krim deh WKWKWK</p>
     	    		</div>   
   		 	</div>
   	</div>
 	<a class="carousel-control-prev" href="#demo" data-slide="prev">
    	<span class="carousel-control-prev-icon"></span>
    </a>
  	<a class="carousel-control-next" href="#demo" data-slide="next">
   	   <span class="carousel-control-next-icon"></span>
  	</a>
  </div>
  <div class="container">
  	<!-- <div id="myModal" class="modal"> -->
  	<div class="row" style="margin-top: 20px;">
  		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Doger.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn9" onclick="muncul('myModal9')">Es Doger</button>
  			<div id="myModal9" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal9')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Doger</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Doger.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Minuman asal Cirebon ini diracik khusus dengan memanfaatkan bahan-bahan alami. Bahan yang digunakan adalah serutan kelapa, susu, tape dan gula. Es dorong gerobak pasti bisa menjadi pelepas dahaga. Rasa dingin seakan memberikan efek basah pada tenggorokan, dan tentunya sangat sesuai bila dinikmati di siang hari</p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Sop Buah.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn10" onclick="muncul('myModal10')">Sop Buah</button>
  			<div id="myModal10" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal10')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Sop Buah</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Sop Buah.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Es Sop buah bukan minuman asing lagi bagi Indonesian, terutama yang tinggal didaerah Bandung dan sekitarnya, bahkan es sop buah ini juga sudah bisa diperdapatkan di kota-kota besar seperti Medan, Banda Aceh dll. Sop buah bukanlah minuman seperti kuah sop, melainkan campuran beberapa jenis buah-buahan yang ramu sedimikian rupa, tentu tanpa proses masak memasak seperti pada membat kuah sop. Selain mengandung buah-buahan yang pastinya bagus untuk kesehatan, sop buah ini pas untuk melawan lapar unutuk para pejuang diet. Yuk semuanya di order Sop Buahnya, apalagi buat kamu yang lagi diet. </p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Cincau.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn16" onclick="muncul('myModal16')">Es Cincau</button>
  			<div id="myModal16" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal16')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Cincau</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Cincau.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Es yang berisi gel serupa agar-agar yang diperoleh dari perendaman daun (atau organ lain) tumbuhan tertentu dalam air mampu menghilangkan penyakit tenggorokan.Cincau paling banyak digunakan sebagai komponen utama minuman penyegar (misalnya dalam es cincau atau es campur). Dilaporkan juga cincau memiliki efek penyejuk serta peluruh.</p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Susu.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn11" onclick="muncul('myModal11')">Susu KPBS</button>
  			<div id="myModal11" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal11')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Susu KPBS</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Susu.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Susu kemasan dari Bandung Selatan kiranya sudah dikenal luas oleh warga Bandung dengan produk dagang susu KPBS-nya. Produk susu KPBS ini hanya berupa susu murni dalam kemasan plastik. Uniknya susu KPBS ini disarankan untuk menikmati susu ini dalam kondisi dingin. Ayo orang Bandung, masa belum nyoba susu ini.</p>
   					 <p style="text-align: center;">Harga : Rp3000</p>
  				</div>	
  			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Buah.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn12" onclick="muncul('myModal12')">Es Buah</button>
  			<div id="myModal12" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal12')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Buah</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Buah.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Istilah makanan segar ini dimulai dari kota Bandung. Dipopulerkan oleh seorang bapak-bapak yang nongkrong sehari-hari dengan barang dagangannya di Gedung Sate. Pak Ewok adalh penemunya, beliau mulai menjual Es Buah racikan diri sendiri di belakang Gedung Sate pada tahun 90an. Ayo warganet Bandung order Es asal Bandung ini.</p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Kelapa.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn13" onclick="muncul('myModal13')">Es Kelapa</button>
  			<div id="myModal13" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal13')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Kelapa</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Kelapa.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Air kelapa tida hanya nikmat diminum bersama dagingnya,apalagiditambah es dan sirup didalamnya. Konon katanya banyak atlet yang mengonsumsi cairan ini untuk menggantikan cairan tubuhnya, sedangkan selebritis mengonsumsiminuman ini sebagai minuman pelangsing badannya. Yuk kaumla muda kita ganti cairan tubuh dan langsing bersama dengan Es Kelapa</p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Krim.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn14" onclick="muncul('myModal14')">Es Krim</button>
  			<div id="myModal14" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal14')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Krim</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Krim.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Kue lupis ketan merupakan kue nusantara dengan <br>ciri khas berbentuk segitiga, bertekstur agak kenyal/legit dan disiram dengan sirup gula merah sehingga rasanya manis. </p>
   					 <p style="text-align: center;">Harga : Rp10000</p>
  				</div>	
  			</div>
		</div>
		<div class="col-md-3">
  			<img src="<?php echo base_url(); ?>assets/haifa/Es Serut.jpg" alt="Snow" style="width:100%;">
  			<button class= "btn" id="myBtn15" onclick="muncul('myModal15')">Es Serut</button>
  			<div id="myModal15" class="modal">
  				<div class="modal-content">
    				<span class="close" onclick="close_modal('myModal15')">&times;</span>
    				<h3 class="text-center"; style="font-family: papyrus;">Es Serut</h3>
    				<img src="<?php echo base_url(); ?>assets/haifa/Es Serut.jpg" style="width: 150px; margin-left: 170px;">
   					 <p style="text-align: center;">Tahukah Anda bahwa ada seorang pemuda yang tidak sengaja menyerut es lalu diberi sirup dan terasa enak saat dicoba.Dan kemudian dia menjual es serut tersebut? Jika Anda baru tahu,ya itulah sejalah Es Serut. Es Serut terkenal akan kesegaran maksimal pada saat sampai di mulut. Gimana tidak, hampir semua komponen Es Serut adalah es. Gerutuk-gerutuk bunyi es yang dikunyah mampu membuat semua orang menyeceskan air liur mereka. Yakin ni gamau order?</p>
   					 <p style="text-align: center;">Harga : Rp5000</p>
  				</div>	
  			</div>
		</div>
	</div>
<!-- Button Menu -->
	<div class="container-fluid">
		<div class="row" style="margin-top: 35px; margin-bottom: 80px;">
			<div class="col-md-12">
				<button  class="btn btn-primary btn-block btn-danger" id="btnFood" style="color: #abe64d">Lihat Menu Mal-Mil Food</button>
			</div>
    </div>
    <div class="row" style="margin-top: 35px; margin-bottom: 80px;">
			<div class="col-md-12">
				<button  class="btn btn-primary btn-block btn-danger" id="btnIce" style="color: #abe64d">Lihat Menu Mal-Mil Ice</button>
			</div>
		</div>
	</div>
<!-- End Of Button Menu -->	
	<div id="MalmilFood">
		<table border="6" style="margin-top: 20px; margin-left: 250px; background-color: #ffffff;" id="tabFood">
			<thead>
				<tr>
					<th colspan="3">Mal-Mil Food</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama</td>
					<td>Deskripsi</td>
					<td>Harga</td>
				</tr>
				<tr>
					<td><p id="Nama0"></p></td>
					<td><p id="Deskripsi0"></p></td>
					<td><p id="Harga0"></p></td>
				</tr>
				<tr>
					<td><p id="Nama1"></p></td>
					<td><p id="Deskripsi1"></p></td>
					<td><p id="Harga1"></p></td>
				</tr>
				<tr>
					<td><p id="Nama2"></p></td>
					<td><p id="Deskripsi2"></p></td>
					<td><p id="Harga2"></p></td>
				</tr>
				<tr>
					<td><p id="Nama3"></p></td>
					<td><p id="Deskripsi3"></p></td>
					<td><p id="Harga3"></p></td>
				</tr>
				<tr>
					<td><p id="Nama4"></p></td>
					<td><p id="Deskripsi4"></p></td>
					<td><p id="Harga4"></p></td>
				</tr>
				<tr>
					<td><p id="Nama5"></p></td>
					<td><p id="Deskripsi5"></p></td>
					<td><p id="Harga5"></p></td>
				</tr>
				<tr>
					<td><p id="Nama6"></p></td>
					<td><p id="Deskripsi6"></p></td>
					<td><p id="Harga6"></p></td>
				</tr>
				<tr>
					<td><p id="Nama7"></p></td>
					<td><p id="Deskripsi7"></p></td>
					<td><p id="Harga7"></p></td>
				</tr>
			</tbody>
		</table>
		<button id="tutupF" style=" margin-left: 820px;margin-bottom: 20px;">Tutup</button>
	</div>
	
	

	

		
	

	<div id="MalmilIce">
		<table border="6" style="margin-top: 20px; margin-left: 250px; background-color: #ffffff;" id="tabIce">
			<thead>
				<tr>
					<th colspan="3">Mal-Mil Ice</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama</td>
					<td>Deskripsi</td>
					<td>Harga</td>
				</tr>
				<tr>
					<td><p id="NamaI0"></p></td>
					<td><p id="DeskripsiI0"></p></td>
					<td><p id="HargaI0"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI1"></p></td>
					<td><p id="DeskripsiI1"></p></td>
					<td><p id="HargaI1"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI2"></p></td>
					<td><p id="DeskripsiI2"></p></td>
					<td><p id="HargaI2"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI3"></p></td>
					<td><p id="DeskripsiI3"></p></td>
					<td><p id="HargaI3"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI4"></p></td>
					<td><p id="DeskripsiI4"></p></td>
					<td><p id="HargaI4"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI5"></p></td>
					<td><p id="DeskripsiI5"></p></td>
					<td><p id="HargaI5"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI6"></p></td>
					<td><p id="DeskripsiI6"></p></td>
					<td><p id="HargaI6"></p></td>
				</tr>
				<tr>
					<td><p id="NamaI7"></p></td>
					<td><p id="DeskripsiI7"></p></td>
					<td><p id="HargaI7"></p></td>
				</tr>
			</tbody>
		</table>
		<button id="tutupI" style=" margin-left: 820px;margin-bottom: 20px;">Tutup</button>
	</div>
	
	
</body>
</html>

<script>
// When the user clicks on div, open the popup

function muncul(a) {
	if (a=='myModal') {
		var modal = document.getElementById('myModal');
		var btn = document.getElementById("myBtn");
		//btn.onclick = function() {
	   	   	modal.style.display = "block";
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
		//}
	} else if (a == 'myModal2') {
			var modal = document.getElementById('myModal2');
			var btn = document.getElementById("myBtn2");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}  else if (a == 'myModal3') {
			var modal = document.getElementById('myModal3');
			var btn = document.getElementById("myBtn3");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}   else if (a == 'myModal4') {
			var modal = document.getElementById('myModal4');
			var btn = document.getElementById("myBtn4");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal5') {
			var modal = document.getElementById('myModal5');
			var btn = document.getElementById("myBtn5");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal6') {
			var modal = document.getElementById('myModal6');
			var btn = document.getElementById("myBtn6");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal7') {
			var modal = document.getElementById('myModal7');
			var btn = document.getElementById("myBtn7");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal8') {
			var modal = document.getElementById('myModal8');
			var btn = document.getElementById("myBtn8");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal9') {
			var modal = document.getElementById('myModal9');
			var btn = document.getElementById("myBtn9");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal10') {
			var modal = document.getElementById('myModal10');
			var btn = document.getElementById("myBtn10");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal11') {
			var modal = document.getElementById('myModal11');
			var btn = document.getElementById("myBtn11");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal12') {
			var modal = document.getElementById('myModal12');
			var btn = document.getElementById("myBtn12");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal13') {
			var modal = document.getElementById('myModal13');
			var btn = document.getElementById("myBtn13");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal14') {
			var modal = document.getElementById('myModal14');
			var btn = document.getElementById("myBtn14");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}else if (a == 'myModal15') {
			var modal = document.getElementById('myModal15');
			var btn = document.getElementById("myBtn15");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}
	else if (a == 'myModal16') {
			var modal = document.getElementById('myModal16');
			var btn = document.getElementById("myBtn16");
			//btn.onclick = function() {
		   	   	modal.style.display = "block";
			//}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }		
			}
	}
}

function close_modal(b) {
	var span = document.getElementsByClassName("close")[0];
	var modal = document.getElementById(b);
	//span.onclick = function() {
	    modal.style.display = "none";
	//}
}

 $(document).ready(function () {
 		// req.overrideMimeType('application/json');
        $.getJSON("haifa/Menu.json",function (data) {
            console.log(data);
            var i = 0;
            $.each(data.MalMilFood, function (i, MalMilFood) {
                $("#Nama"+i).html(MalMilFood.Nama);
                $("#Deskripsi"+i).html(MalMilFood.Deskripsi);
                $("#Harga"+i).html(MalMilFood.Harga);
                i++;
                if(i == 8){
                    return false;
                }
            })
            var j = 0;
            $.each(data.MalMilIce, function (j, MalMilIce) {
                $("#NamaI"+j).html(MalMilIce.Nama);
                $("#DeskripsiI"+j).html(MalMilIce.Deskripsi);
                $("#HargaI"+j).html(MalMilIce.Harga);
                j++;
                if(j == 8){
                    return false;
                }                
            }) 
        })
        $("#MalmilFood").hide();
    	$("#btnFood").click(function(){
        	$("#MalmilFood").show();
    	});

    	$("#MalmilIce").hide();
    	$("#btnIce").click(function(){
        	$("#MalmilIce").show();
    	});

    	$("#tutupF").click(function() {
    		$("#MalmilFood").hide();
    	})
    	$("#tutupI").click(function() {
    		$("#MalmilIce").hide();
    	})

    });

 
</script>
