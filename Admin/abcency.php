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

$maxRows_Recordset1 = 7;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset1 = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alawal ORDER BY `No` DESC";
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

$maxRows_Recordset2 = 4;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset2 = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_albasyir ORDER BY `No` DESC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $Server_HTC) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$maxRows_Recordset3 = 5;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset3 = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alghoniyyu ORDER BY `No` DESC";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $Server_HTC) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset3 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$maxRows_Recordset4 = 5;
$pageNum_Recordset4 = 0;
if (isset($_GET['pageNum_Recordset4'])) {
  $pageNum_Recordset4 = $_GET['pageNum_Recordset4'];
}
$startRow_Recordset4 = $pageNum_Recordset4 * $maxRows_Recordset4;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset4 = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alhamid ORDER BY `No` DESC";
$query_limit_Recordset4 = sprintf("%s LIMIT %d, %d", $query_Recordset4, $startRow_Recordset4, $maxRows_Recordset4);
$Recordset4 = mysql_query($query_limit_Recordset4, $Server_HTC) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);

if (isset($_GET['totalRows_Recordset4'])) {
  $totalRows_Recordset4 = $_GET['totalRows_Recordset4'];
} else {
  $all_Recordset4 = mysql_query($query_Recordset4);
  $totalRows_Recordset4 = mysql_num_rows($all_Recordset4);
}
$totalPages_Recordset4 = ceil($totalRows_Recordset4/$maxRows_Recordset4)-1;

$maxRows_almughny = 7;
$pageNum_almughny = 0;
if (isset($_GET['pageNum_almughny'])) {
  $pageNum_almughny = $_GET['pageNum_almughny'];
}
$startRow_almughny = $pageNum_almughny * $maxRows_almughny;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_almughny = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_almughny ORDER BY `No` DESC";
$query_limit_almughny = sprintf("%s LIMIT %d, %d", $query_almughny, $startRow_almughny, $maxRows_almughny);
$almughny = mysql_query($query_limit_almughny, $Server_HTC) or die(mysql_error());
$row_almughny = mysql_fetch_assoc($almughny);

if (isset($_GET['totalRows_almughny'])) {
  $totalRows_almughny = $_GET['totalRows_almughny'];
} else {
  $all_almughny = mysql_query($query_almughny);
  $totalRows_almughny = mysql_num_rows($all_almughny);
}
$totalPages_almughny = ceil($totalRows_almughny/$maxRows_almughny)-1;

$maxRows_alquddus = 7;
$pageNum_alquddus = 0;
if (isset($_GET['pageNum_alquddus'])) {
  $pageNum_alquddus = $_GET['pageNum_alquddus'];
}
$startRow_alquddus = $pageNum_alquddus * $maxRows_alquddus;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_alquddus = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alquddus ORDER BY `No` DESC";
$query_limit_alquddus = sprintf("%s LIMIT %d, %d", $query_alquddus, $startRow_alquddus, $maxRows_alquddus);
$alquddus = mysql_query($query_limit_alquddus, $Server_HTC) or die(mysql_error());
$row_alquddus = mysql_fetch_assoc($alquddus);

if (isset($_GET['totalRows_alquddus'])) {
  $totalRows_alquddus = $_GET['totalRows_alquddus'];
} else {
  $all_alquddus = mysql_query($query_alquddus);
  $totalRows_alquddus = mysql_num_rows($all_alquddus);
}
$totalPages_alquddus = ceil($totalRows_alquddus/$maxRows_alquddus)-1;

$maxRows_alwahhab = 5;
$pageNum_alwahhab = 0;
if (isset($_GET['pageNum_alwahhab'])) {
  $pageNum_alwahhab = $_GET['pageNum_alwahhab'];
}
$startRow_alwahhab = $pageNum_alwahhab * $maxRows_alwahhab;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_alwahhab = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alwahhab ORDER BY `No` DESC";
$query_limit_alwahhab = sprintf("%s LIMIT %d, %d", $query_alwahhab, $startRow_alwahhab, $maxRows_alwahhab);
$alwahhab = mysql_query($query_limit_alwahhab, $Server_HTC) or die(mysql_error());
$row_alwahhab = mysql_fetch_assoc($alwahhab);

if (isset($_GET['totalRows_alwahhab'])) {
  $totalRows_alwahhab = $_GET['totalRows_alwahhab'];
} else {
  $all_alwahhab = mysql_query($query_alwahhab);
  $totalRows_alwahhab = mysql_num_rows($all_alwahhab);
}
$totalPages_alwahhab = ceil($totalRows_alwahhab/$maxRows_alwahhab)-1;

$maxRows_annashir = 4;
$pageNum_annashir = 0;
if (isset($_GET['pageNum_annashir'])) {
  $pageNum_annashir = $_GET['pageNum_annashir'];
}
$startRow_annashir = $pageNum_annashir * $maxRows_annashir;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_annashir = "SELECT * FROM abs_annashir ORDER BY `No` DESC";
$query_limit_annashir = sprintf("%s LIMIT %d, %d", $query_annashir, $startRow_annashir, $maxRows_annashir);
$annashir = mysql_query($query_limit_annashir, $Server_HTC) or die(mysql_error());
$row_annashir = mysql_fetch_assoc($annashir);

if (isset($_GET['totalRows_annashir'])) {
  $totalRows_annashir = $_GET['totalRows_annashir'];
} else {
  $all_annashir = mysql_query($query_annashir);
  $totalRows_annashir = mysql_num_rows($all_annashir);
}
$totalPages_annashir = ceil($totalRows_annashir/$maxRows_annashir)-1;

$maxRows_arrazaaq = 7;
$pageNum_arrazaaq = 0;
if (isset($_GET['pageNum_arrazaaq'])) {
  $pageNum_arrazaaq = $_GET['pageNum_arrazaaq'];
}
$startRow_arrazaaq = $pageNum_arrazaaq * $maxRows_arrazaaq;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_arrazaaq = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_arrazaaq ORDER BY `No` DESC";
$query_limit_arrazaaq = sprintf("%s LIMIT %d, %d", $query_arrazaaq, $startRow_arrazaaq, $maxRows_arrazaaq);
$arrazaaq = mysql_query($query_limit_arrazaaq, $Server_HTC) or die(mysql_error());
$row_arrazaaq = mysql_fetch_assoc($arrazaaq);

if (isset($_GET['totalRows_arrazaaq'])) {
  $totalRows_arrazaaq = $_GET['totalRows_arrazaaq'];
} else {
  $all_arrazaaq = mysql_query($query_arrazaaq);
  $totalRows_arrazaaq = mysql_num_rows($all_arrazaaq);
}
$totalPages_arrazaaq = ceil($totalRows_arrazaaq/$maxRows_arrazaaq)-1;

$maxRows_assalam = 3;
$pageNum_assalam = 0;
if (isset($_GET['pageNum_assalam'])) {
  $pageNum_assalam = $_GET['pageNum_assalam'];
}
$startRow_assalam = $pageNum_assalam * $maxRows_assalam;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_assalam = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_assalam ORDER BY `No` DESC";
$query_limit_assalam = sprintf("%s LIMIT %d, %d", $query_assalam, $startRow_assalam, $maxRows_assalam);
$assalam = mysql_query($query_limit_assalam, $Server_HTC) or die(mysql_error());
$row_assalam = mysql_fetch_assoc($assalam);

if (isset($_GET['totalRows_assalam'])) {
  $totalRows_assalam = $_GET['totalRows_assalam'];
} else {
  $all_assalam = mysql_query($query_assalam);
  $totalRows_assalam = mysql_num_rows($all_assalam);
}
$totalPages_assalam = ceil($totalRows_assalam/$maxRows_assalam)-1;

$maxRows_Recordset5 = 2;
$pageNum_Recordset5 = 0;
if (isset($_GET['pageNum_Recordset5'])) {
  $pageNum_Recordset5 = $_GET['pageNum_Recordset5'];
}
$startRow_Recordset5 = $pageNum_Recordset5 * $maxRows_Recordset5;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Recordset5 = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alalim ORDER BY `No` DESC";
$query_limit_Recordset5 = sprintf("%s LIMIT %d, %d", $query_Recordset5, $startRow_Recordset5, $maxRows_Recordset5);
$Recordset5 = mysql_query($query_limit_Recordset5, $Server_HTC) or die(mysql_error());
$row_Recordset5 = mysql_fetch_assoc($Recordset5);

if (isset($_GET['totalRows_Recordset5'])) {
  $totalRows_Recordset5 = $_GET['totalRows_Recordset5'];
} else {
  $all_Recordset5 = mysql_query($query_Recordset5);
  $totalRows_Recordset5 = mysql_num_rows($all_Recordset5);
}
$totalPages_Recordset5 = ceil($totalRows_Recordset5/$maxRows_Recordset5)-1;

$maxRows_Alkholiq = 2;
$pageNum_Alkholiq = 0;
if (isset($_GET['pageNum_Alkholiq'])) {
  $pageNum_Alkholiq = $_GET['pageNum_Alkholiq'];
}
$startRow_Alkholiq = $pageNum_Alkholiq * $maxRows_Alkholiq;

mysql_select_db($database_Server_HTC, $Server_HTC);
$query_Alkholiq = "SELECT Nama, Absensi, `Date`, `Time` FROM abs_alqoyyum ORDER BY `No` DESC";
$query_limit_Alkholiq = sprintf("%s LIMIT %d, %d", $query_Alkholiq, $startRow_Alkholiq, $maxRows_Alkholiq);
$Alkholiq = mysql_query($query_limit_Alkholiq, $Server_HTC) or die(mysql_error());
$row_Alkholiq = mysql_fetch_assoc($Alkholiq);

if (isset($_GET['totalRows_Alkholiq'])) {
  $totalRows_Alkholiq = $_GET['totalRows_Alkholiq'];
} else {
  $all_Alkholiq = mysql_query($query_Alkholiq);
  $totalRows_Alkholiq = mysql_num_rows($all_Alkholiq);
}
$totalPages_Alkholiq = ceil($totalRows_Alkholiq/$maxRows_Alkholiq)-1;

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

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);

$queryString_Recordset3 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset3") == false && 
        stristr($param, "totalRows_Recordset3") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset3 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset3 = sprintf("&totalRows_Recordset3=%d%s", $totalRows_Recordset3, $queryString_Recordset3);

$queryString_Recordset4 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset4") == false && 
        stristr($param, "totalRows_Recordset4") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset4 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset4 = sprintf("&totalRows_Recordset4=%d%s", $totalRows_Recordset4, $queryString_Recordset4);

$queryString_almughny = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_almughny") == false && 
        stristr($param, "totalRows_almughny") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_almughny = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_almughny = sprintf("&totalRows_almughny=%d%s", $totalRows_almughny, $queryString_almughny);

$queryString_arrazaaq = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_arrazaaq") == false && 
        stristr($param, "totalRows_arrazaaq") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_arrazaaq = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_arrazaaq = sprintf("&totalRows_arrazaaq=%d%s", $totalRows_arrazaaq, $queryString_arrazaaq);

$queryString_alquddus = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_alquddus") == false && 
        stristr($param, "totalRows_alquddus") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_alquddus = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_alquddus = sprintf("&totalRows_alquddus=%d%s", $totalRows_alquddus, $queryString_alquddus);

$queryString_alwahhab = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_alwahhab") == false && 
        stristr($param, "totalRows_alwahhab") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_alwahhab = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_alwahhab = sprintf("&totalRows_alwahhab=%d%s", $totalRows_alwahhab, $queryString_alwahhab);

$queryString_annashir = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_annashir") == false && 
        stristr($param, "totalRows_annashir") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_annashir = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_annashir = sprintf("&totalRows_annashir=%d%s", $totalRows_annashir, $queryString_annashir);

$queryString_assalam = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_assalam") == false && 
        stristr($param, "totalRows_assalam") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_assalam = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_assalam = sprintf("&totalRows_assalam=%d%s", $totalRows_assalam, $queryString_assalam);

$queryString_Alkholiq = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Alkholiq") == false && 
        stristr($param, "totalRows_Alkholiq") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Alkholiq = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Alkholiq = sprintf("&totalRows_Alkholiq=%d%s", $totalRows_Alkholiq, $queryString_Alkholiq);

$queryString_Recordset5 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset5") == false && 
        stristr($param, "totalRows_Recordset5") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset5 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset5 = sprintf("&totalRows_Recordset5=%d%s", $totalRows_Recordset5, $queryString_Recordset5);
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
                <li><a href="../Absensi/Al-awal.php">Al-Awal</a></li>
                <li><a href="../Absensi/Al-ghony.php">Al-Ghonniyu</a></li>
                <li><a href="../Absensi/Al-hamid.php">Al-Hammid</a></li>
                <li><a href="../Absensi/Al-mughny.php">Al-Mughny</a></li>
                <li><a href="../Absensi/Al-kholiq.php">Al-Kholiq</a></li>
                <li><a href="../Absensi/Al-quddus.php">Al-Quddus</a></li>
                <li><a href="../Absensi/Al-wahhab.php">Al-Wahhab</a></li>
                <li><a href="../Absensi/Al-basyir.php">Al-Rasyid</a></li>
                <li><a href="../Absensi/An-nashir.php">An-Nashir</a></li>
                <li><a href="../Absensi/Ar-razaaq.php">Ar-Razaaq</a></li>
                <li><a href="../Absensi/As-salam.php">As-Salam</a></li>
                <li><a href="../Absensi/Al-alim.php">Al-Wakil</a></li>
                <li><a href="../Absensi/Al-khafidz.php">Al-Kafidz</a></li>
                <li><a href="../Absensi/As-shomad.php">As-Shommad</a></li>
                <li><a href="../Absensi/Al-badi'.php">Al-Badi'</a></li>
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
    <h2>Laporan Absensi</h2>
    </p>
    <table width="930" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><h3>Al-Awal</h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset1['Nama']; ?></td>
                <td><?php echo $row_Recordset1['Absensi']; ?></td>
                <td><?php echo $row_Recordset1['Date']; ?></td>
                <td><?php echo $row_Recordset1['Time']; ?></td>
              </tr>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
          </table>
<table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table>
          </p></td>
        <td><h3>Al-Basyir</h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset2['Nama']; ?></td>
                <td><?php echo $row_Recordset2['Absensi']; ?></td>
                <td><?php echo $row_Recordset2['Date']; ?></td>
                <td><?php echo $row_Recordset2['Time']; ?></td>
              </tr>
              <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset2 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, 0, $queryString_Recordset2); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset2 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, max(0, $pageNum_Recordset2 - 1), $queryString_Recordset2); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset2 < $totalPages_Recordset2) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, min($totalPages_Recordset2, $pageNum_Recordset2 + 1), $queryString_Recordset2); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset2 < $totalPages_Recordset2) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, $totalPages_Recordset2, $queryString_Recordset2); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><h3>Al-Ghonny
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset3['Nama']; ?></td>
                <td><?php echo $row_Recordset3['Absensi']; ?></td>
                <td><?php echo $row_Recordset3['Date']; ?></td>
                <td><?php echo $row_Recordset3['Time']; ?></td>
              </tr>
              <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset3 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset3=%d%s", $currentPage, 0, $queryString_Recordset3); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset3 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset3=%d%s", $currentPage, max(0, $pageNum_Recordset3 - 1), $queryString_Recordset3); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset3 < $totalPages_Recordset3) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset3=%d%s", $currentPage, min($totalPages_Recordset3, $pageNum_Recordset3 + 1), $queryString_Recordset3); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset3 < $totalPages_Recordset3) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset3=%d%s", $currentPage, $totalPages_Recordset3, $queryString_Recordset3); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
        <td><h3>Al-Hammid
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset4['Nama']; ?></td>
                <td><?php echo $row_Recordset4['Absensi']; ?></td>
                <td><?php echo $row_Recordset4['Date']; ?></td>
                <td><?php echo $row_Recordset4['Time']; ?></td>
              </tr>
              <?php } while ($row_Recordset4 = mysql_fetch_assoc($Recordset4)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset4 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset4=%d%s", $currentPage, 0, $queryString_Recordset4); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset4 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset4=%d%s", $currentPage, max(0, $pageNum_Recordset4 - 1), $queryString_Recordset4); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset4 < $totalPages_Recordset4) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset4=%d%s", $currentPage, min($totalPages_Recordset4, $pageNum_Recordset4 + 1), $queryString_Recordset4); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset4 < $totalPages_Recordset4) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset4=%d%s", $currentPage, $totalPages_Recordset4, $queryString_Recordset4); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><h3>Al-Mughny
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_almughny['Nama']; ?></td>
                <td><?php echo $row_almughny['Absensi']; ?></td>
                <td><?php echo $row_almughny['Date']; ?></td>
                <td><?php echo $row_almughny['Time']; ?></td>
              </tr>
              <?php } while ($row_almughny = mysql_fetch_assoc($almughny)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_almughny > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_almughny=%d%s", $currentPage, 0, $queryString_almughny); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_almughny > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_almughny=%d%s", $currentPage, max(0, $pageNum_almughny - 1), $queryString_almughny); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_almughny < $totalPages_almughny) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_almughny=%d%s", $currentPage, min($totalPages_almughny, $pageNum_almughny + 1), $queryString_almughny); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_almughny < $totalPages_almughny) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_almughny=%d%s", $currentPage, $totalPages_almughny, $queryString_almughny); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
        <td><h3>Al-Razaaq</h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_arrazaaq['Nama']; ?></td>
                <td><?php echo $row_arrazaaq['Absensi']; ?></td>
                <td><?php echo $row_arrazaaq['Date']; ?></td>
                <td><?php echo $row_arrazaaq['Time']; ?></td>
              </tr>
              <?php } while ($row_arrazaaq = mysql_fetch_assoc($arrazaaq)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_arrazaaq > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_arrazaaq=%d%s", $currentPage, 0, $queryString_arrazaaq); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_arrazaaq > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_arrazaaq=%d%s", $currentPage, max(0, $pageNum_arrazaaq - 1), $queryString_arrazaaq); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_arrazaaq < $totalPages_arrazaaq) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_arrazaaq=%d%s", $currentPage, min($totalPages_arrazaaq, $pageNum_arrazaaq + 1), $queryString_arrazaaq); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_arrazaaq < $totalPages_arrazaaq) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_arrazaaq=%d%s", $currentPage, $totalPages_arrazaaq, $queryString_arrazaaq); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><h3>Al-Quddus
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_alquddus['Nama']; ?></td>
                <td><?php echo $row_alquddus['Absensi']; ?></td>
                <td><?php echo $row_alquddus['Date']; ?></td>
                <td><?php echo $row_alquddus['Time']; ?></td>
              </tr>
              <?php } while ($row_alquddus = mysql_fetch_assoc($alquddus)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_alquddus > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_alquddus=%d%s", $currentPage, 0, $queryString_alquddus); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_alquddus > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_alquddus=%d%s", $currentPage, max(0, $pageNum_alquddus - 1), $queryString_alquddus); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_alquddus < $totalPages_alquddus) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_alquddus=%d%s", $currentPage, min($totalPages_alquddus, $pageNum_alquddus + 1), $queryString_alquddus); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_alquddus < $totalPages_alquddus) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_alquddus=%d%s", $currentPage, $totalPages_alquddus, $queryString_alquddus); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
        <td><h3>Al-Wahhab
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_alwahhab['Nama']; ?></td>
                <td><?php echo $row_alwahhab['Absensi']; ?></td>
                <td><?php echo $row_alwahhab['Date']; ?></td>
                <td><?php echo $row_alwahhab['Time']; ?></td>
              </tr>
              <?php } while ($row_alwahhab = mysql_fetch_assoc($alwahhab)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_alwahhab > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_alwahhab=%d%s", $currentPage, 0, $queryString_alwahhab); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_alwahhab > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_alwahhab=%d%s", $currentPage, max(0, $pageNum_alwahhab - 1), $queryString_alwahhab); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_alwahhab < $totalPages_alwahhab) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_alwahhab=%d%s", $currentPage, min($totalPages_alwahhab, $pageNum_alwahhab + 1), $queryString_alwahhab); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_alwahhab < $totalPages_alwahhab) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_alwahhab=%d%s", $currentPage, $totalPages_alwahhab, $queryString_alwahhab); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><h1>Al-Alim
        </h1>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td>Nama</td>
            <td>Absensi</td>
            <td>Tanggal</td>
            <td>Jam</td>
          </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset5['Nama']; ?></td>
                <td><?php echo $row_Recordset5['Absensi']; ?></td>
                <td><?php echo $row_Recordset5['Date']; ?></td>
                <td><?php echo $row_Recordset5['Time']; ?></td>
              </tr>
              <?php } while ($row_Recordset5 = mysql_fetch_assoc($Recordset5)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset5 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset5=%d%s", $currentPage, 0, $queryString_Recordset5); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset5 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset5=%d%s", $currentPage, max(0, $pageNum_Recordset5 - 1), $queryString_Recordset5); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset5 < $totalPages_Recordset5) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset5=%d%s", $currentPage, min($totalPages_Recordset5, $pageNum_Recordset5 + 1), $queryString_Recordset5); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset5 < $totalPages_Recordset5) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset5=%d%s", $currentPage, $totalPages_Recordset5, $queryString_Recordset5); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
        <td><h1>Al-Kholiq
            
        </h1>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td>Nama</td>
            <td>Absensi</td>
            <td>Tanggal</td>
            <td>Jam</td>
          </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Alkholiq['Nama']; ?></td>
                <td><?php echo $row_Alkholiq['Absensi']; ?></td>
                <td><?php echo $row_Alkholiq['Date']; ?></td>
                <td><?php echo $row_Alkholiq['Time']; ?></td>
              </tr>
              <?php } while ($row_Alkholiq = mysql_fetch_assoc($Alkholiq)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Alkholiq > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Alkholiq=%d%s", $currentPage, 0, $queryString_Alkholiq); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Alkholiq > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Alkholiq=%d%s", $currentPage, max(0, $pageNum_Alkholiq - 1), $queryString_Alkholiq); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Alkholiq < $totalPages_Alkholiq) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Alkholiq=%d%s", $currentPage, min($totalPages_Alkholiq, $pageNum_Alkholiq + 1), $queryString_Alkholiq); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Alkholiq < $totalPages_Alkholiq) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Alkholiq=%d%s", $currentPage, $totalPages_Alkholiq, $queryString_Alkholiq); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><h3>An-Nashir</h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_annashir['Nama']; ?></td>
                <td><?php echo $row_annashir['Absensi']; ?></td>
                <td><?php echo $row_annashir['Date']; ?></td>
                <td><?php echo $row_annashir['Time']; ?></td>
              </tr>
              <?php } while ($row_annashir = mysql_fetch_assoc($annashir)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_annashir > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_annashir=%d%s", $currentPage, 0, $queryString_annashir); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_annashir > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_annashir=%d%s", $currentPage, max(0, $pageNum_annashir - 1), $queryString_annashir); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_annashir < $totalPages_annashir) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_annashir=%d%s", $currentPage, min($totalPages_annashir, $pageNum_annashir + 1), $queryString_annashir); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_annashir < $totalPages_annashir) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_annashir=%d%s", $currentPage, $totalPages_annashir, $queryString_annashir); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
        <td><h3>As-Salam
        </h3>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>Absensi</td>
              <td>Tanggal</td>
              <td>Jam</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_assalam['Nama']; ?></td>
                <td><?php echo $row_assalam['Absensi']; ?></td>
                <td><?php echo $row_assalam['Date']; ?></td>
                <td><?php echo $row_assalam['Time']; ?></td>
              </tr>
              <?php } while ($row_assalam = mysql_fetch_assoc($assalam)); ?>
          </table>
          <table border="0">
            <tr>
              <td><?php if ($pageNum_assalam > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_assalam=%d%s", $currentPage, 0, $queryString_assalam); ?>">First</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_assalam > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_assalam=%d%s", $currentPage, max(0, $pageNum_assalam - 1), $queryString_assalam); ?>">Previous</a>
              <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_assalam < $totalPages_assalam) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_assalam=%d%s", $currentPage, min($totalPages_assalam, $pageNum_assalam + 1), $queryString_assalam); ?>">Next</a>
              <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_assalam < $totalPages_assalam) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_assalam=%d%s", $currentPage, $totalPages_assalam, $queryString_assalam); ?>">Last</a>
              <?php } // Show if not last page ?></td>
            </tr>
          </table></td>
      </tr>
    </table>
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

mysql_free_result($Recordset4);

mysql_free_result($almughny);

mysql_free_result($alquddus);

mysql_free_result($alwahhab);

mysql_free_result($annashir);

mysql_free_result($arrazaaq);

mysql_free_result($assalam);

mysql_free_result($Recordset5);

mysql_free_result($Alkholiq);

?>
