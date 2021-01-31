<?php

$token = $_GET['token'];

include('GFirestore.php');

//Create a new Collection
$Doc = new Firestore('LocationRegistar');


$Doc->dropDocument($token);

if($Doc){
    echo "<script>
    alert('Data Successfully Deleted!');
    window.location.href='LocationView.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Delete. Try Again!');
    window.location.href='LocationView.php';
    </script>";
}


?>