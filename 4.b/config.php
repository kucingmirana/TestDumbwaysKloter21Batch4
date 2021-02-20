<?php
$dbhost='localhost';
$dbusername='root';
$dbpw='';
$dbname='mobil';

$db=mysqli_connect($dbhost,$dbusername,$dbpw,$dbname);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>