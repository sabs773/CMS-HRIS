<?php

//multiple textfield
$locationName=$_POST["LocationName"];
$address=$_POST["address"];
$workingHours=$_POST["workingHours"];
$clientName=$_POST["ClientName"];
$clientPhone=$_POST["ClientPhone"];
$name = $_POST["name"];
$block = count($_POST["name"]);


// //echo $name ;

// foreach($name as $value){
//      echo $value . "<br>";
//  }

// echo $locationName;


require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('LocationRegistar');


//Location ID Generator

$txt = "L"."_".$locationName;

$Doc ->createDocument($txt,[

"LocationName"=> $locationName,
"Address" => $address,
"LocationID" =>$txt,
"workingHours" => $workingHours,
"ClientName" => $clientName,
"ClientPhone" => $clientPhone,
"Block"=>$name,
"block"=>$block
]);




if($Doc){
    echo "<script>
    alert('Register Successfull!');
    window.location.href='LocationView.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Register. Try Again!');
    window.location.href='LocationView.php';
    </script>";
}


?>