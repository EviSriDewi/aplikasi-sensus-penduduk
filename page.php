<td> <?php
switch($_GET['page']){
  	default:
	include 'user/datadaerah.php';
    break;
	
  	case 'semuadaerah':
	include 'user/semuadaerah.php';
    break;
	
	case 'daerahtertentu':
	include 'user/daerahtertentu.php';
    break;
	
	case 'datadaerahlogin':
	include 'user/datadaerah/datadaerahtampil.php';
    break;
	
	case 'semuadaerahlogin':
	include 'user/semuadaerah/semuadaerahtampil.php';
    break;
	
	case 'daerahtertentulogin':
	include 'user/daerahtertentu/daerahtertentutampil.php';
    break;
	
	
	case 'login':
   	include 'user/login.php';
    break;
	
  	
}
?> </td>
