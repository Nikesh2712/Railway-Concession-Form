<html>
<body>
    <?php
    $i=0;
    $user='root';
    $pass='';
    $db='login';
    $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
    $sql = "SELECT * FROM student";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         if($_POST["login"]==$row["sap_id"])
         {      
             if($_POST["password"]==$row["sap_id"])
             {
             header("Location: http://localhost/railwayform/forms.php");
             break;
             }
         }
         $i++;
     }
        if($i==10)
        {
            header("Location: http://localhost/railwayform/index.html");
            echo "Invalid Login Id or Password";
        }
} else {
     echo "0 results";
}
$db->close();
    ?>
    
</body>
</html>
