<?php require_once('Connections/Server_HTC.php'); ?>
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = "SELECT data_siswa.`Group`, data_siswa.No_Registrasi, data_siswa.Nama, data_siswa.Nama_panggilan, data_siswa.Tempat_Tanggal_Lahir, data_siswa.Jenis_kelamin, data_siswa.No_Hp, data_siswa.Alamat_Lengkap, data_siswa.Nama_ayah, data_siswa.No_Hp_Ayah, data_siswa.Nama_Ibu, data_siswa.No_Hp_Ibu, data_siswa.`Alamat_Orang_Tua`, data_siswa.Date_of_joint, data_siswa.Sistem_Administrasi, data_siswa.Catatan FROM data_siswa";
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
$query_Recordset2 = "SELECT * FROM kelas";
$Recordset2 = mysql_query($query_Recordset2, $Server_HTC) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

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
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">HTC<span class="logo_colour"> Mojokerto</span></a></h1>
          <h2>&quot;Education is most powerfull weapon which you can use to change the world&quot;</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.php">Jadwal</a></li>
                        <li><a href="#">Absensi Siswa</a>
                          <ul>
                          <?php do { ?>
        					<li>
        					<a href="Absensi/Absensi.php?Group=<?php echo $row_Recordset2['kls']; ?>"><?php echo $row_Recordset2['kls']; ?></a>
                            </li>
        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
                          </ul>
</li>
<li><a href="HTCstudent.php">Data Siswa</a></li>
            <li><a href="#l">Pengumuman</a></li>
             <li><a href="#">Admin</a>
              <ul>
                <li><a href="Admin/password1.php">Ubah  Jadwal</a></li>
                <li><a href="Admin/abcency.php">Laporan Absensi</a></li>
                <li><a href="Admin/passworddftr.php">Pendaftaran</a></li>
          </ul>
        </div>
      </nav>
    </header>
<div id="site_content">
  <div id="sidebar_container"><h3>&nbsp;</h3><a href="#"></a>
    <div class="sidebar">
      <form name="form" method="get" action="HTCstudent.php?q=<?php echo $row_Recordset1['Nama']; ?>">
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
        <?php do { ?>
        <table width="588" border="0" cellpadding="0" cellspacing="0" id="container">
          <tr>
            <td width="118">Group </td>
            <td width="12">:</td>
            <td width="306"><?php echo $row_Recordset1['Group']; ?></td>
            <td width="152" rowspan="5">Photo</td>
          </tr>
          <tr>
            <td>No. Pendaftaran </td>
            <td>:</td>
            <td><?php echo $row_Recordset1['No_Registrasi']; ?></td>
          </tr>
          <tr>
            <td>Nama Lengkap </td>
            <td>:</td>
            <td><?php echo $row_Recordset1['Nama']; ?> (<?php echo $row_Recordset1['Nama_panggilan']; ?>)</td>
          </tr>
          <tr>
            <td>Tempat,Tanggal Lahir </td>
            <td>:</td>
            <td><?php echo $row_Recordset1['Tempat_Tanggal_Lahir']; ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td><?php echo $row_Recordset1['Jenis_kelamin']; ?></td>
          </tr>
          <tr>
            <td>No. Hp </td>
            <td>:</td>
            <td><?php echo $row_Recordset1['No_Hp']; ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Alamat Lengkap </td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Alamat_Lengkap']; ?></td>
          </tr>
          <tr>
            <td>Nama Ayah </td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Nama_ayah']; ?></td>
          </tr>
          <tr>
            <td>No. Hp Ayah </td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['No_Hp_Ayah']; ?></td>
          </tr>
          <tr>
            <td>Nama Ibu </td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Nama_Ibu']; ?></td>
          </tr>
          <tr>
            <td>No. Hp Ibu </td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['No_Hp_Ibu']; ?></td>
          </tr>
          <tr>
            <td>Alamat Orang Tua</td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Alamat_Orang_Tua']; ?></td>
          </tr>
          <tr>
            <td>Tanggal Bergabung</td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Date_of_joint']; ?></td>
          </tr>
          <tr>
            <td>Catatan</td>
            <td>:</td>
            <td colspan="2"><?php echo $row_Recordset1['Catatan']; ?></td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4"> <a href="Admin/pssedtsiswa.php">| Edit |</a> <a href="#">| Delete |</a></td>
          </tr>
        </table>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        <p>        
        <p>&nbsp;
        <table border="0" align="right">
          <tr>
            <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>"><img src="First.gif"></a>
            <?php } // Show if not first page ?></td>
            <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>"><img src="Previous.gif"></a>
            <?php } // Show if not first page ?></td>
            <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>"><img src="Next.gif"></a>
            <?php } // Show if not last page ?></td>
            <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>"><img src="Last.gif"></a>
            <?php } // Show if not last page ?></td>
          </tr>
        </table>
        </p>
&nbsp;
</p>
<p>&nbsp;</p>
</div>
</div>
    <footer>
      <p>Copyright &copy; HTC Mojokerto | <a href="http://www.css3templates.co.uk">the House of Training Centre</a></p>
    </footer>
  </div>
<p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
