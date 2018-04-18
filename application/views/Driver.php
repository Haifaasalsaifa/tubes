<!DOCTYPE html>
<html>
<head>
	<title>Choose Driver ~ Cemal Cemil</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fira/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/fira/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fira/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link href="css/dataTables.bootstrap4.bmin.css" rel="stylesheet"> -->
   <!--  <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script> -->


    <style type="text/css">
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
      .slider {
          width: 80%;
          margin: 30px auto;
      }

      .slick-slide {
          margin: 10px 10px;
      }

      .slick-slide img {
         width: 100%;
          height: 100px;
      }

      .slick-prev:before,
      .slick-next:before {
          color: black;
      }

      .slick-slide {
          transition: all ease-in-out .3s;
          opacity: .2;
      }
    
      .slick-active {
          opacity: .5;
      }

      .slick-current {
          opacity: 1;
      }
    </style>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
    <script src="js/popper.min.js"></script>

    <script type="text/javascript">
       function driver() {
        var x = Math.floor((Math.random() * 10) + 1);
        return x;
      }
      // $(document).on('ready', function() {
      //   $("#btn").click(function() {
          
      //   })
      // });
      function muncul(a) {
        $("#dr").val(driver());
          $("#cari").submit();
        if (a=='myModal1') {
          var modal = document.getElementById('myModal1');
          var btn = document.getElementById("btn");
          //btn.onclick = function() {
          modal.style.display = "block";
          window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }   
          }
    //}
       } 
    }
      function close_modal(b) {
        var span = document.getElementsByClassName("close")[0];
        var modal = document.getElementById(b);
        //span.onclick = function() {
            modal.style.display = "none";
        //}
      }
        
      
     
    </script>
</head>
<body>
	<nav class="navbar fixed-top bg-black" id="navb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-2" id="nav_logo">
          <img src="haifa/Logo.png" style="width: 100%;">
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
<br><br><br>
 
  <div id="kocok">
    <h2>Choose Your Driver You Want</h2>
    <form action="" method="POST" id="cari">
      <input type="hidden" name="dr" id="dr">
      <button class="btn btn-info btn-lg" id="btn" onclick="muncul('myModal1')">Cari Driver Anda</button>
    </form>
    <?php
      require_once 'connect.php';

      if (isset($_POST)) {
        $d = $_POST["dr"];
         $query ="SELECT * from driver where idDriver = $d";
         $sql = mysqli_query($connect, $query);
         while($driver = mysqli_fetch_array($sql)){
         ?>
          <div id="myModal1" class="modal">
          <div class="modal-content">
            <span class="close" onclick="close_modal('myModal1')">&times;</span>
            <h3 class="text-center"; style="font-family: papyrus;">DRIVER ANDA :</h3>
            <?php echo "<img src='".$driver['gambar']."'><br>"?>;
            <?php echo $driver['namaDriver']; ?>
             <p style="text-align: center;">Harga : Rp5000</p>
          </div>  
        </div>
         <?php 
         }
       }
         ?>

         
<!-- 
      echo "<br>";
      echo "Driver Anda adalah <br>" ;
      echo $driver['namaDriver'].'<br>';
      echo $driver['noPlat'].'<br>';
      echo $driver['noHp'].'<br>';
      echo "<img src='".$driver['gambar']."'><br>";
      } -->
     
    ?>
  </div>

</body>
</html>