<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  //Username, Password and Database
  $con = new mysqli("us-cdbr-east-02.cleardb.com", "b1fae573a197ed", "f9769b5b", "heroku_6e656c602ab88e0");
  $con->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  //Should be a message a typical user could understand
}

?>

