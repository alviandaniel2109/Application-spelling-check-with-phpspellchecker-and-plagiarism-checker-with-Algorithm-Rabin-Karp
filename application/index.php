<?php
require_once __DIR__.'/vendor/autoload.php';
  
session_start();
  
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $profile = $_SESSION['access_profile'];
  echo "<img src=\"{$profile['image']['url']}\">";
  echo "<h3>Hai, {$profile['displayName']} ({$profile['emails']['0']['value']})</h3>";
  echo "Anda telah berhasil login menggunakan akun google anda, klik <a href='logout.php'>Logout</a> untuk keluar.";
} else {
  echo "<a href='auth.php'>Login dengan Akun Google</a>";
}