<?php
include("classes/dbtool.php");
include("config.php");

echo "<html>";
echo "<head>";
echo "  <meta charset='utf-8'>";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>";
echo "  <title>MySQLiteSync</title>";

//      <!-- Bootstrap -->
echo "  <link href='includes/bootstrap/css/bootstrap.min.css' rel='stylesheet'>";

echo "</head>";
echo "<body>";
$db = dbopen('','data/mysqlitesync.db');
$parentid=$_GET['id'];
if ($parentid=="") {
  $parentid='0';
}  
echo "<div>";
echo "<h1 align='center'>MySQLiteSync</h1>";
if ($admin=="J") {
  $sql="SELECT * FROM tblmenu_liste WHERE fldview='J' AND fldid_parent='".$parentid."' ORDER BY fldsort";
} else {
  $sql="SELECT * FROM tblmenu_liste WHERE fldview='J' AND fldadmin='N' AND fldid_parent='".$parentid."' ORDER BY fldsort";
}
$results = dbquery('',$db,$sql);
while ($row = dbfetch('',$results)) {
  if ($row['fldmenu']=="SUBMENU") {
    echo "<a href='index.php?id=".$row['fldindex']."&lastid=".$parentid."' class='btn btn-default btn-lg btn-block glyphicon ".$row['fldglyphicon']."' role='button'> ".$row['fldbez']."</a>"; 
  } else {	
    if ($row['fldlink']<>"") {
      echo "<a href='".$row['fldlink']."?id=".$parentid."' class='btn btn-default btn-lg btn-block glyphicon ".$row['fldglyphicon']."' role='button'> ".$row['fldbez']."</a>"; 
    } else {
      echo "<a href='classes/showtab.php?menu=".$row['fldmenu']."&id=".$parentid."' class='btn btn-default btn-lg btn-block glyphicon ".$row['fldglyphicon']."' role='button'> ".$row['fldbez']."</a>"; 
    }
  }
}
if ($parentid<>"0") {
  echo "<a href='index.php?id=".$_GET['lastid']."' class='btn btn-default btn-lg btn-block glyphicon glyphicon-list' role='button'> zur&uumlck</a>"; 
}
echo "</div>";
echo "</body>";
echo "</html>";
?>