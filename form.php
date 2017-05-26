<?php
    $database="login";
    $con = mysqli_connect("localhost" , "root","" , $database);
    if(!$con )
        echo "Not connected";
    $sap = "60004150092";
    $from = $_POST['from_station'];
    $class = $_POST['class'];
	$durations = $_POST['period']; 
	$ADDRESS = $_POST['address'];
    $date = $_POST['date'];
    $sqlu = "UPDATE FORM SET class='$class',period='$durations',address='$ADDRESS',from_station = '$from', date ='$date' where sap_id = $sap";
    $sql_store = mysqli_query($con , $sqlu);
    }
        
?>