<?php
$servername="127.0.0.1";
$username="root";
$password="";
$data="nouran";




$conn= new mysqli($servername,$username,$password,$data);


if($conn->connect_error){
die("Connection failed :".$conn->connect_error);
}
$offre=$_POST['offre'];
$categorie=$_POST['categorie'];
$titre=$_POST['titre'];
$description=$_POST['description'];

$prix=$_POST['prix'];
$region=$_POST['region'];
$regionannonce="";

if($_POST['region']){
    foreach ($_POST['region'] as $region)
    $regionannonce.="$region +";
}
$adresse=$_POST['adresse'];



if(isset($_POST['envoyer'])){
    $sql='INSERt INTO annonce VALUES("'.$offre.'","'.$categorie.'",
    "'.$titre.'","'.$description.'","'.$prix.'","'.$regionannonce.'","'.$adresse.'",
    "'.$password.'")';

    if($conn->query($sql)===TRUE){
        if ($offre=='vendre')
            header("Location: vente.php");
        else if ($offre=='location')
            header("Location: location.php");

    }else{
        echo"Erreur :".$sql."<br>".$conn->error;
    }
    $conn->close();



}

?>