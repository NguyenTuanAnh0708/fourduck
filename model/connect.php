<?php
function conn()
{

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Project1";
  $conn = new mysqli($servername, $username, $password, $dbname);
  return $conn;
}
