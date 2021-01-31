<?php

$locationName=$_POST["LocationName"];
$Address=$_POST["Address"];
$workingHours=$_POST["workingHours"];
$ClientName=$_POST["ClientName"];
$ClientPhone=$_POST["ClientPhone"];
//place array
$name = $_POST["name"];
//Update number of blocks
$block = count($_POST["name"]);


//Hidden Token brought over 
$sum=$_POST["LocationID"];

require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('LocationRegistar');


$Doc ->updateDocument($sum,[

    ["path" => "LocationName",
    "value" => $locationName],
     
    ["path" => "Address",
     "value" => $Address],

     ["path" => "workingHours",
     "value" => $workingHours],

     ["path" => "ClientName",
     "value" => $ClientName],

      ["path" => "ClientPhone",
      "value" => $ClientPhone],

      ["path" => "Block",
      "value" => $name],

      ["path" => "block",
      "value" => $block]

]);

if($Doc){
    echo "<script>
    alert('Data Successfully Updated!');
    window.location.href='LocationView.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Update. Try Again!');
    window.location.href='LocationView.php';
    </script>";
}



?>