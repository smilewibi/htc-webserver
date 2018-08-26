<?php require_once('../Connections/Server_HTC.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = "SELECT `user`.`User`, `user`.Pass FROM `user`";
$Recordset1 = mysql_query($query_Recordset1, $Server_HTC) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset3 = "SELECT * FROM kelas";
$Recordset3 = mysql_query($query_Recordset3, $Server_HTC) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['textfield'])) {
  $loginUsername=$_POST['textfield'];
  $password=$_POST['textfield2'];
  $MM_fldUserAuthorization = "Akses";
  $MM_redirectLoginSuccess = "updschedule.php";
  $MM_redirectLoginFailed = "password1.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Server_HTC, $Server_HTC);
  	
  $LoginRS__query=sprintf("SELECT `User`, Pass, Akses FROM `user` WHERE `User`=%s AND Pass=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Server_HTC) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'Akses');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>HTC Mojokerto</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../index.php">HTC<span class="logo_colour"> Mojokerto</span></a></h1>
          <h2>&quot;Education is most powerfull weapon which you can use to change the word&quot;</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="../index.php">Jadwal</a></li>
                        <li><a href="#">Absensi Siswa</a>
                          <ul>
                          <?php do { ?>
        					<li>
        					<a href="../Absensi/Absensi.php?Group=<?php echo $row_Recordset3['kls']; ?>"><?php echo $row_Recordset3['kls']; ?></a>
                            </li>
        <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
                          </ul>
</li>
<li><a href="../HTCstudent.php">Data Siswa</a></li>
            <li><a href="#">Pengumuman</a></li>
             <li><a href="#">Admin</a>
              <ul>
                <li><a href="password1.php">Ubah  Jadwal</a></li>
                <li><a href="abcency.php">Laporan Absensi</a></li>
                <li><a href="passworddftr.php">Pendaftaran</a></li>
          </ul>
        </div>
      </nav>
    </header>
<div id="site_content">
  <div>
    <h2>Log In</h2>
	<center>
    <form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
    <table width="30%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="26%">Username</td>
    <td width="74%"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Login" id="Login" value="Login"></td>
  </tr>
</table>
      </form>
    </center>
  </div>
</div>
    <footer>
      <p>Copyright &copy; HTC Mojokerto | <a href="http://www.css3templates.co.uk">the House of Training Centre</a></p>
    </footer>
  </div>
<p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset3);

mysql_free_result($Recordset1);

?>
