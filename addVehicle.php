<html>
<head>

    <title>Add Vehicle</title>
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



    $licensePlate = $crud->escape_string(($_POST['licensePlate']));
    $Make = $crud->escape_string(($_POST['Make']));
    $Model = $crud->escape_string(($_POST['Model']));
    $Color = $crud->escape_string(($_POST['Color']));
    $Seats = $crud->escape_string(($_POST['Seats']));




    /*   if ($msg != null) {
           echo $msg;
           // link to the previous page
           echo "</br> <a href='javascript:self.history.back();'>Go Back</a>";
       } else {*/
    $result = $crud->execute("INSERT INTO vehicle (licensePlate,Make,Model,Color,Seats)
                                               VALUES('$licensePlate','$Make','$Model',' $Color',' $Seats')");

    // display sucess message
    echo "<font color='green'>Vehicle added successfully";
    echo "<br/><a href='vehicle.php'>View Results</a>";
    /* }*/
}
?>
</body>
</html>















