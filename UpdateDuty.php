<?php 

$manager=$_POST["framework"];
$cleaner=$_POST["cleaner"];
$note=$_POST["note"];
$token =$_POST['token'];


//Save Data 
require_once("GFirestore.php");
$location = new firestore('DutyRoaster');


$location ->updateDocument($token,[

    ["path" => "Manager",
    "value" => $manager],
     
    ["path" => "Cleaner",
     "value" => $cleaner],

     ["path" => "Note",
     "value" => $note],

]);



if($location){
  
    echo "<script>
    alert('Assign Successfull!');
    window.location.href='DisplayDuty.php';
    </script>";
  }
  
  else{
    echo "<script>
      alert('Failed to Assign. Try Again!');
      window.location.href='DisplayDuty.php';
      </script>";
  }

?>