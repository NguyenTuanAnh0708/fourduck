<?php
function conn()
{

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project1";
  $conn = new mysqli($servername, $username, $password, $dbname);
  return $conn;
}
