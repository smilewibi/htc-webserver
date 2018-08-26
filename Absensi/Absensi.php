<?php require_once('../Connections/Server_HTC.php'); ?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO absensi (`No`, No_Registrasi, Kelompok, Program, Nama, Tanggal, Waktu, Absensi) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['No'], "int"),
                       GetSQLValueString($_POST['No_Registrasi'], "text"),
                       GetSQLValueString($_POST['Kelompok'], "text"),
                       GetSQLValueString($_POST['Program'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['Tanggal'], "text"),
                       GetSQLValueString($_POST['Waktu'], "text"),
                       GetSQLValueString($_POST['Absensi'], "text"));

  mysql_select_db($database_Server_HTC, $Server_HTC);
  $Result1 = mysql_query($insertSQL, $Server_HTC) or die(mysql_error());

  $insertGoTo = "rekapabsensi.php?Group=echo['Group']";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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

$colname_Recordset1 = "-1";
if (isset($_GET['Group'])) {
  $colname_Recordset1 = $_GET['Group'];
}
mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = sprintf("SELECT `Group`, No_Registrasi, Nama FROM data_siswa WHERE `Group` = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $Server_HTC) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset2 = "SELECT * FROM kelas";
$Recordset2 = mysql_query($query_Recordset2, $Server_HTC) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$colname_Recordset3 = "-1";
if (isset($_GET['Group'])) {
  $colname_Recordset3 = $_GET['Group'];
}
mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset3 = sprintf("SELECT `Group`, Program, No_Registrasi, Nama FROM data_siswa WHERE `Group` = %s", GetSQLValueString($colname_Recordset3, "text"));
$Recordset3 = mysql_query($query_Recordset3, $Server_HTC) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
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
        					<a href="Absensi.php?Group=<?php echo $row_Recordset2['kls']; ?>"><?php echo $row_Recordset2['kls']; ?></a>
                            </li>
        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
                          </ul>
			</li>
<li><a href="../HTCstudent.php">Data Siswa</a></li>
            <li><a href="#">Pengumuman</a></li>
             <li><a href="#">Admin</a>
              <ul>
                <li><a href="../Admin/password1.php">Ubah  Jadwal</a></li>
                <li><a href="../Admin/abcency.php">Laporan Absensi</a></li>
                <li><a href="../Admin/passworddftr.php">Pendaftaran</a></li>
          </ul>
        </div>
      </nav>
    </header>
<div id="site_content">
  <div>
    <h2>Absensi Siswa</h2>
<center>
<h3><?php echo $row_Recordset3['Group']; ?></h3>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Nama:</td>
      <td><select name="Nama">
        <?php do { ?>
        <option value="<?php echo $row_Recordset1['Nama']?>"><?php echo $row_Recordset1['Nama']?></option>
        <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Absensi:</td>
      <td><select name="Absensi">
        <option value="Hadir" <?php if (!(strcmp("Hadir", ""))) {echo "SELECTED";} ?>>Hadir</option>
        <option value="Ijin" <?php if (!(strcmp("Ijin", ""))) {echo "SELECTED";} ?>>Ijin</option>
        <option value="Sakit" <?php if (!(strcmp("Sakit", ""))) {echo "SELECTED";} ?>>Sakit</option>
        <option value="Alpa" <?php if (!(strcmp("Alpa", ""))) {echo "SELECTED";} ?>>Alpa</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Simpan"> 
        <a href="rekapabsensi.php?Group=<?php echo $row_Recordset3['Group']; ?>">| Rekap Absensi |</a></td>
    </tr>
  </table>
  <input type="hidden" name="No" value="">
  <input type="hidden" name="No_Registrasi" value="<?php echo $row_Recordset3['No_Registrasi']; ?>">
  <input type="hidden" name="Kelompok" value="<?php echo $row_Recordset3['Group']; ?>">
  <input type="hidden" name="Program" value="<?php echo $row_Recordset3['Program']; ?>">
  <input type="hidden" name="Tanggal" value="<?php include('waktu1.php'); ?>">
  <input type="hidden" name="Waktu" value="<?php include('waktu.php'); ?>">
  <input type="hidden" name="MM_insert" value="form1">
</form>
</center>
</div>
</div>
    <footer>
      <p>Copyright &copy; HTC Mojokerto | <a href="#">the House of Training Centre</a></p>
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

mysql_free_result($Recordset2);

mysql_free_result($Recordset3);

?>
