<?php
    $database="login";
    $con = mysqli_connect("localhost" , "root","" , $database);
    $sap = "60004150092";
    $sql = "SELECT name,sap_id,year,department FROM FORM where sap_id = $sap ";
    $result = mysqli_query($con, $sql ) or die (mysqli_error());
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC  )){     
    $name=$row['name'];
    //echo $name,"<br>";
    $sap_id = $sap;
    //echo $sap_id,"<br>";
    $year = $row['year'];
    //echo $year,"<br>";
    $department = $row['department'];
        
    }
?>
<html>
    <head>
        <title>FORM PAGE</title>
        <link rel = "stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>RAILWAY CONCESSION FORM</h1>
        <h2>Please Enter Your Details</h2>
        <form action = "forms.php" method="post">
            Name:
            <input type = "text" name = "name" value = "<?php echo $name; ?>" disabled><br>
            </input>
            Sap_id:<input type = "text" name = "sap_id" value = "<?php echo $sap; ?>" disabled ><br>
            </input>
            Department:<input type = "text" name = "department" value = "<?php echo $department; ?>" disabled ><br>
            </input>
            Year: <input type = "text" name = "year" value = "<?php echo $year; ?>" disabled ><br>
            </input>
            Address:<br><textarea rows="4" cols="50" name = "address" >
            </textarea><br>
            From:<input type = "text" name = "from_station" ><br>
            </input>
            To:<input type = "text" name = "to" value = "Vile Parle" disabled><br>
            </input>
            Class:<br>
            <input type="radio" name="class" value="1st class" checked> 1st Class<br>
            <input type="radio" name="class" value="2nd class"> 2nd class<br>
            Period:<br>
            <input type="radio" name="period" value="quaterly" checked> Quaterly<br>
            <input type="radio" name="period" value="2nd class"> Monthly<br>
            Date Of Application:<input type = "text" name = "date" ><br>
            </input>
            <button type = "submit" formaction = "form.php">Submit</button>
        </form>
    </body>

</html>
