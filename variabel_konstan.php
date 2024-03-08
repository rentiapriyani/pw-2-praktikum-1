<?php
define( constant_name: "PHI", value: 3.14);
const DBNAME = "invertori";
const DBSERVER = "locashost";

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "Luas Lingkaran dengan Jari $jari : $luas";
echo "</br>kelilingnya : $kll";

echo "</br>Nama databasenya : " . DBNAME;
echo "</br>Lokasi databasenya ada di : " . DBSERVER;