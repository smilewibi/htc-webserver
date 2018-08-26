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

$MM_restrictGoTo = "passworddftr.php";
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
$namafolder="foto/"; //tempat menyimpan file
$con=include("../Connections/Server_HTC.php");
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	$jenis_gambar=$_FILES['nama_file']['type'];
	$grup=$_POST['Group'];
	$program=$_POST['Program'];
	$noreg=$_POST['No_Registrasi'];
	$nama=$_POST['Nama'];
	$panggilan=$_POST['Nama_panggilan'];
	$ttl=$_POST['Tempat_Tanggal_Lahir'];
	$jenkel=$_POST['Jenis_kelamin'];
	$nohp=$_POST['No_Hp'];
	$alamat=$_POST['Alamat_Lengkap'];
	$ayah=$_POST['Nama_ayah'];
	$noayah=$_POST['No_Hp_Ayah'];
	$ibu=$_POST['Nama_Ibu'];
	$noibu=$_POST['No_Hp_Ibu'];
	$alamatortu=$_POST['Alamat_Orang_Tua'];
	$tglgabung=$_POST['Date_of_joint'];
	$administrasi=$_POST['Sistem_Administrasi'];
	$Catatan=$_POST['Catatan'];
	$gambar = $namafolder.$noreg . basename($_FILES['nama_file']['name']); 
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {                 
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            echo "Gambar berhasil dikirim ".$gambar;
  $sql="INSERT INTO data_siswa (`Group`, Program, No_Registrasi, Nama, Nama_panggilan, Tempat_Tanggal_Lahir, Jenis_kelamin, No_Hp, Alamat_Lengkap, Nama_ayah, No_Hp_Ayah, Nama_Ibu, No_Hp_Ibu, `Alamat_Orang_Tua`, Date_of_joint, Sistem_Administrasi, Catatan, Foto) VALUES ('$grup', '$program', '$noreg', '$nama', '$panggilan', '$ttl', '$jenkel', '$nohp', '$alamat', '$ayah', '$noayah', '$ibu', '$noibu', '$alamatortu', '$tglgabung', '$administrasi', '$Catatan', '$gambar')";
  $res=mysql_query($sql) or die (mysql_error());
}
	}
  $insertGoTo = "registrasi1.php";
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

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = "SELECT * FROM kelas ORDER BY `No` DESC";
$Recordset1 = mysql_query($query_Recordset1, $Server_HTC) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset2 = "SELECT Program FROM kelas ORDER BY `No` DESC";
$Recordset2 = mysql_query($query_Recordset2, $Server_HTC) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset3 = "SELECT * FROM kelas";
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
  <script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
  </script>
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
<center>
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>" enctype="multipart/form-data">
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Group:</td>
        <td><select name="Group">
            <?php 
do {  
?>
            <option value="<?php echo $row_Recordset1['kls']?>" ><?php echo $row_Recordset1['kls']?></option>
            <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
?>
          </select>
        </td>
      <tr>
      <tr valign="baseline">
        <td nowrap align="right">Program:</td>
        <td><select name="Program">
              <?php
do {  
?><option value="<?php echo $row_Recordset2['Program']; ?>"><?php echo $row_Recordset2['Program']; ?></option>
            <?php
} while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
?>
          </select>
        </td>
      <tr>
      <tr valign="baseline">
        <td nowrap align="right">Nama:</td>
        <td><input name="Nama" type="text" id="Nama" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nama Panggilan:</td>
        <td><input name="Nama_panggilan" type="text" id="Nama_panggilan" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Tempat Tanggal Lahir:</td>
        <td><input name="Tempat_Tanggal_Lahir" type="text" id="Tempat_Tanggal_Lahir" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Jenis kelamin:</td>
        <td><select name="Jenis_kelamin">
            <option value="Laki-laki" <?php if (!(strcmp("Laki-laki", ""))) {echo "SELECTED";} ?>>Laki-laki</option>
            <option value="Perempuan" <?php if (!(strcmp("Perempuan", ""))) {echo "SELECTED";} ?>>Perempuan</option>
          </select>
        </td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">No.Hp:</td>
        <td><input name="No_Hp" type="text" id="No_Hp" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Alamat Lengkap:</td>
        <td><textarea name="Alamat_Lengkap" cols="50" rows="5" id="Alamat_Lengkap"></textarea></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right" valign="top">Nama Ayah:</td>
        <td><input name="Nama_ayah" type="text" id="Nama_ayah" value="" size="32">
        </td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">No.Hp Ayah:</td>
        <td><input name="No_Hp_Ayah" type="text" id="No_Hp_Ayah" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nama Ibu:</td>
        <td><input name="Nama_Ibu" type="text" id="Nama_Ibu" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">No.Hp Ibu:</td>
        <td><input name="No_Hp_Ibu" type="text" id="No_Hp_Ibu" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right" valign="top">Alamat Orang  Tua:</td>
        <td><textarea name="Alamat_Orang_Tua" cols="50" rows="5" id="Alamat_Orang__Tua"></textarea>
        </td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Tanggal Bergabung :</td>
        <td><input name="Date_of_joint" type="text" id="Date_of_joint" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Sistem Administrasi:</td>
        <td><input name="Sistem_Administrasi" type="text" id="Sistem_Administrasi" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right" valign="top">Catatan:</td>
        <td><textarea name="Catatan" cols="50" rows="5" id="Catatan"></textarea>
        </td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Foto:</td>
        <td><input type="file" name="nama_file" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" onClick="MM_validateForm('Nama','','R','Nama_panggilan','','R','Tempat_Tanggal_Lahir','','R','No_Hp','','RisNum','Nama_ayah','','R','No_Hp_Ayah','','R','Nama_Ibu','','R','No_Hp_Ibu','','NisNum','Date_of_joint','','R','Sistem_Administrasi','','R','Alamat_Lengkap','','R','Alamat_Orang__Tua','','R','Catatan','','R');return document.MM_returnValue" value="Daftar"></td>
      </tr>
    </table>
    <input type="hidden" name="No_Registrasi" value="">
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</center>
</div>
    <footer>
      <p>Copyright &copy; HTC Mojokerto | <a href="http://www.css3templates.co.uk">the House of Training Centre</a></p>
    </footer>
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
