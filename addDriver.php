<html>
<head>

    <title>Add Driver</title>
</head>
<body>
<?php


// include the database connection file

include_once("classes/Crud.php");
//include_once ("classes/Validation.php");

$crud = new Crud();
//$validation = new Validation();

if(isset($_POST['Submit'])){
    //$reservationID = $crud->escape_string(($_POST['']));

    $DriverFirstName = $crud->escape_string(($_POST['DriverFirstName']));
    $DriverLastName = $crud->escape_string(($_POST['DriverLastName']));
    $DriverPhone = $crud->escape_string(($_POST['DriverPhone']));
    $DriverEmail = $crud->escape_string(($_POST['DriverEmail']));


    /*   if ($msg != null) {
           echo $msg;
           // link to the previous page
           echo "</br> <a href='javascript:self.history.back();'>Go Back</a>";
       } else {*/
    $result = $crud->execute("INSERT INTO driver(DriverFirstName,DriverLastName,DriverPhone,DriverEmail)
                                               VALUES('$DriverFirstName','$DriverLastName','$DriverPhone','$DriverEmail')");
    // display sucess message
    echo "<font color='green'>Driver added successfully";
    echo "<br/><a href='driver.php'>View Results</a>";
    /* }*/
}
?>
</body>
</html>







