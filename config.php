<?php 

$server = "sql104.epizy.com";
$user = "epiz_31675540";
$pass = "IIaz8fKPJXCJt";
$database = "epiz_31675540_rania";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>