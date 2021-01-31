<?php


//multiple textfield
$manager=$_POST["framework"];
$cleaner=$_POST["cleaner"];
$Places=$_POST["Places"];
$Block=$_POST["Block"];
$note=$_POST["note"];
$LocationName=$_POST["LocationName"];



require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('DutyRoaster');


//ID for Roaster
$txt = $Places."_".$Block;



$Doc ->createDocument($txt,[

"Manager"=> $manager,
"Cleaner" => $cleaner,
"Place" =>$Places,
"Block" => $Block,
"Note" => $note,
"dutyId" => $txt,
"LocationName" => $LocationName,

]);


if($Doc){
  
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


