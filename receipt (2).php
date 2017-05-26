<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "receipt";
	$num = "60004150035";
	$source = $_POST['from_station'];
	$class = $_POST['class'];
	$durations = $_POST['period']; 
	$ADDRESS = $_POST['address'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$database);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_error());
	} 
	//mysqli_select_db('print');
	$sql2=1;

	mysqli_query($conn," UPDATE print_receipt 
			SET source= '$source', class='$class',durations='$durations',Address='$ADDRESS'
			WHERE sapid = $num");
   $sql = "SELECT sapid,name,durations FROM print_receipt where sapid=$num";
   
   $retval = mysqli_query( $conn,$sql);
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
	  echo "sap ID :{$row['sapid']}  <br> ".
         "EMP NAME : {$row['name']} <br> ".
         "duration : {$row['durations']} <br> ".
         "--------------------------------<br>";
		
  }
?>

<html moznomarginboxes mozdisallowselectionprint>

<body>
<input id="sub"type="button" onclick="myFunction()" value="print""></input>
<script>
var elem = document.getElementById("sub");
function myFunction() {
	elem.style.display = 'none';
    window.print();
}
</script>
</body>
</html>