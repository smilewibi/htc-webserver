<?php require_once('../Connections/Server_HTC.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "admin";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "passedtsiswa.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE data_siswa SET `Group`=%s, Program=%s, Nama=%s, Nama_panggilan=%s, Tempat_Tanggal_Lahir=%s, Jenis_kelamin=%s, No_Hp=%s, Alamat_Lengkap=%s, Nama_ayah=%s, No_Hp_Ayah=%s, Nama_Ibu=%s, No_Hp_Ibu=%s, `Alamat_Orang _Tua`=%s, Date_of_joint=%s, Sistem_Administrasi=%s, Catatan=%s, Foto=%s WHERE No_Registrasi=%s",
                       GetSQLValueString($_POST['Group'], "text"),
                       GetSQLValueString($_POST['Program'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['Nama_panggilan'], "text"),
                       GetSQLValueString($_POST['Tempat_Tanggal_Lahir'], "text"),
                       GetSQLValueString($_POST['Jenis_kelamin'], "text"),
                       GetSQLValueString($_POST['No_Hp'], "text"),
                       GetSQLValueString($_POST['Alamat_Lengkap'], "text"),
                       GetSQLValueString($_POST['Nama_ayah'], "text"),
                       GetSQLValueString($_POST['No_Hp_Ayah'], "text"),
                       GetSQLValueString($_POST['Nama_Ibu'], "text"),
                       GetSQLValueString($_POST['No_Hp_Ibu'], "text"),
                       GetSQLValueString($_POST['Alamat_Orang__Tua'], "text"),
                       GetSQLValueString($_POST['Date_of_joint'], "text"),
                       GetSQLValueString($_POST['Sistem_Administrasi'], "text"),
                       GetSQLValueString($_POST['Catatan'], "text"),
                       GetSQLValueString($_POST['Foto'], "text"),
                       GetSQLValueString($_POST['No_Registrasi'], "int"));

  mysql_select_db($database_Server_HTC, $Server_HTC);
  $Result1 = mysql_query($updateSQL, $Server_HTC) or die(mysql_error());

  $updateGoTo = "../HTCstudent.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = "SELECT * FROM data_siswa";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $Server_HTC) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset3 = "SELECT * FROM kelas";
$Recordset3 = mysql_query($query_Recordset3, $Server_HTC) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
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
          <h2>&quot;Education is most powerfull weapon which you can use to change the world&quot;</h2>
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
            <li><a href="#l">Pengumuman</a></li>
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
  <div id="sidebar_container"><h3>&nbsp;</h3><a href="#"></a>
    <div class="sidebar">
      <form name="form" method="get" action="../HTCstudent.php?q=<?php echo $row_Recordset1['Nama']; ?>">
<table width="40%" border="0" align="center" cellpadding="0">
<tr bgcolor="orange">
  <td colspan="3">
  <strong> Pencarian : </strong>
  <input type="text" name="name">
  <input type="submit" name="Submit" id="SUBMIT" value="Cari" ></td>
</tr>
</table>
</form> 

    </div>
</div>
      <div class="content">
        <h1>Data Siswa</h1>
        <p>
        	 
        </p>

              <?php do { ?>
                <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">Group:</td>
                  <td><input type="text" name="Group" value="<?php echo htmlentities($row_Recordset1['Group'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Program:</td>
                  <td><input type="text" name="Program" value="<?php echo htmlentities($row_Recordset1['Program'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">No_Registrasi:</td>
                  <td><?php echo $row_Recordset1['No_Registrasi']; ?></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Nama:</td>
                  <td><input type="text" name="Nama" value="<?php echo htmlentities($row_Recordset1['Nama'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Nama Panggilan:</td>
                  <td><input type="text" name="Nama_panggilan" value="<?php echo htmlentities($row_Recordset1['Nama_panggilan'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Tempat Tanggal Lahir:</td>
                  <td><input type="text" name="Tempat_Tanggal_Lahir" value="<?php echo htmlentities($row_Recordset1['Tempat_Tanggal_Lahir'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Jenis Kelamin:</td>
                  <td><input type="text" name="Jenis_kelamin" value="<?php echo htmlentities($row_Recordset1['Jenis_kelamin'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">No.Hp:</td>
                  <td><input type="text" name="No_Hp" value="<?php echo htmlentities($row_Recordset1['No_Hp'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="top">Alamat Lengkap:</td>
                  <td><textarea name="Alamat_Lengkap" cols="50" rows="5"><?php echo htmlentities($row_Recordset1['Alamat_Lengkap'], ENT_COMPAT, 'UTF-8'); ?></textarea>                    </td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Nama Ayah:</td>
                  <td><input type="text" name="Nama_ayah" value="<?php echo htmlentities($row_Recordset1['Nama_ayah'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">No.Hp Ayah:</td>
                  <td><input type="text" name="No_Hp_Ayah" value="<?php echo htmlentities($row_Recordset1['No_Hp_Ayah'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Nama Ibu:</td>
                  <td><input type="text" name="Nama_Ibu" value="<?php echo htmlentities($row_Recordset1['Nama_Ibu'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">No.Hp Ibu:</td>
                  <td><input type="text" name="No_Hp_Ibu" value="<?php echo htmlentities($row_Recordset1['No_Hp_Ibu'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="top">Alamat Orang  Tua:</td>
                  <td><textarea name="Alamat_Orang__Tua" cols="50" rows="5"><?php echo htmlentities($row_Recordset1['Alamat_Orang _Tua'], ENT_COMPAT, 'UTF-8'); ?></textarea>                    </td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Tanggal Bergabung:</td>
                  <td><input type="text" name="Date_of_joint" value="<?php echo htmlentities($row_Recordset1['Date_of_joint'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Sistem Administrasi:</td>
                  <td><input type="text" name="Sistem_Administrasi" value="<?php echo htmlentities($row_Recordset1['Sistem_Administrasi'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right" valign="top">Catatan:</td>
                  <td><textarea name="Catatan" cols="50" rows="5"><?php echo htmlentities($row_Recordset1['Catatan'], ENT_COMPAT, 'UTF-8'); ?></textarea>                    </td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Foto:</td>
                  <td><input type="text" name="Foto" value="<?php echo htmlentities($row_Recordset1['Foto'], ENT_COMPAT, 'UTF-8'); ?>" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" value="Update!"></td>
                </tr>
                        </table>
                  <input type="hidden" name="MM_update" value="form1">
              <input type="hidden" name="No_Registrasi" value="<?php echo $row_Recordset1['No_Registrasi']; ?>">
                            </form>
                <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
              <p>&nbsp;
              <table border="0">
    <tr>
      <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>"><img src="First.gif" border=0></a>
          <?php } // Show if not first page ?>
      </td>
      <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>"><img src="Previous.gif" border=0></a>
          <?php } // Show if not first page ?>
      </td>
      <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>"><img src="Next.gif" border=0></a>
          <?php } // Show if not last page ?>
      </td>
      <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>"><img src="Last.gif" border=0></a>
          <?php } // Show if not last page ?>
      </td>
    </tr>
  </table>
  </p>
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
?>
