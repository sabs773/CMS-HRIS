<?php 


require_once("GFirestore.php");
$location = new firestore('LocationRegistar');
$place[] = $location->getAllDocuments();


//create a variable
$category = $_POST["category"];


$block = $location->getDocument($category);


echo json_encode($block["Block"]);





?>