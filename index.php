<td><?php
session_start();
error_reporting(0);
include "conf/connect.php";
?></td>

<!DOCTYPE html>
<!--
Template Name: Cytocean
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>SENSUS PENDUDUK</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> (021) 9786 1234</li>
        <li><i class="fa fa-envelope-o"></i> Sensus.penduduk@gmailcom</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <td>
        <?php
		if (! isset($_SESSION['email'])) {
		?> </td>
		<li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="index.php?page=login">Login</a></li>
		<td> <?php 
		}
		else{
		?> </td> 
        <li><a href="user/logout.php">Logout</a></li>
        <td> <?php } ?> </td>
      </ul>
    </div>
       
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php">SENSUS PENDUDUK</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="clear"> 
    
      <!-- ################################################################################################ -->
      <ul class="clear">
      
<td> <?php 
if (! isset($_SESSION['email'])) {
?> </td>
        <li><a href="index.php?page=datadaerah">Data Daerah</a></li>
        <li><a class="drop" href="#">Data Penduduk</a>
          <ul>
            <li><a href="index.php?page=semuadaerah">Semua Daerah</a></li>
            <li><a href="index.php?page=daerahtertentu">Daerah tertentu</a></li>

    </nav>

<td> <?php 
}
else{
?> </td>
        <li><a href="index.php?page=datadaerahlogin">Data Daerah </a></li>
        <li><a class="drop" href="#">Data Penduduk </a>
          <ul>
            <li><a href="index.php?page=semuadaerahlogin">Semua Daerah</a></li>
            <li><a href="index.php?page=daerahtertentulogin">Daerah tertentu</a></li>
    <td> <?php } ?>  </td>   
    
  </header>
</div>



<td> <?php include "conf/page.php"; ?> </td>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 > APA YA ?</h6>
		<a></a>
    </div>
    <div class="one_third">
      <h6 class="heading">Tentang Kami</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Jl. swaadaya 1 rt010 rw010 kelurahan pejaten timur, kecamatan pasar minggu, jakarta selatan. 12510</address>
        </li>
        <li><i class="fa fa-phone"></i> (021) 9786 1234</li>
        <li><i class="fa fa-envelope-o"></i> sensus.penduduk@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading"></h6>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#"></a></p>

    <!-- ################################################################################################ -->
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>