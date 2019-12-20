<html>
<head>
    <title>Customer</title>
    <meta charset="utf-8">

    <title>Reservation System </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS Got off W3 Schools Website  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>
<?php
// include the database connection file



include_once("classes/Crud.php");
//include_once ("classes/Validation.php");

$crud = new Crud();
$id = $crud->escape_string($_GET['CustID']);

$result = $crud->getData("SELECT * FROM customer WHERE CustID = $id");
foreach ($result as $res) {

    $CustID = $res['CustID'];
    $CustFirstName = $res['CustFirstName'];
    $CustLastName = $res['CustLastName'];
    $CustPhoneNumber = $res['CustPhoneNumber'];
    $CustEmail = $res['CustEmail'];

}

if(isset($_POST['Submit'])){
    //$reservationID = $crud->escape_string(($_POST['']));
    $pDate = $crud->escape_string(($_POST['pDate']));
    $pTime = $crud->escape_string(($_POST['pTime']));
    $CustID = $crud->escape_string(($_POST['CustID']));
    $PassengerFirstName = $crud->escape_string(($_POST['PassengerFirstName']));
    $PassengerLastName = $crud->escape_string(($_POST['PassengerLastName']));
    $PickUpAddress = $crud->escape_string(($_POST['PickUpAddress']));
    $pCity = $crud->escape_string(($_POST['pCity']));
    $pState = $crud->escape_string(($_POST['pState']));
    $pzip = $crud->escape_string(($_POST['pzip']));
    $pAirline = $crud->escape_string(($_POST['pAirline']));
    $PFlight = $crud->escape_string(($_POST['PFlight']));
    $deptCity = $crud->escape_string(($_POST['deptCity']));
    $DropOffAddress = $crud->escape_string(($_POST['DropOffAddress']));
    $dCity = $crud->escape_string(($_POST['dCity']));
    $dState = $crud->escape_string(($_POST['dState']));
    $dzip= $crud->escape_string(($_POST['dzip']));
    $DriverId = $crud->escape_string(($_POST['DriverId']));
    $DriverFirstName = $crud->escape_string(($_POST['DriverFirstName']));
    $VehicleID = $crud->escape_string(($_POST['VehicleID']));
    $PassengerPhoneNumber = $crud->escape_string(($_POST['PassengerPhoneNumber']));
    $cPhone = $crud->escape_string(($_POST['cPhone']));



 /*   if ($msg != null) {
        echo $msg;
        // link to the previous page
        echo "</br> <a href='javascript:self.history.back();'>Go Back</a>";
    } else {*/
        $result = $crud->execute("INSERT INTO reservation(pDate,pTime,CustID,PassengerFirstName,PassengerLastName,PickUpAddress,pCity,pState,pzip,pAirline,PFlight,deptCity,DropOffAddress,dCity,dState,dzip,DriverId,DriverFirstName,VehicleID,PassengerPhoneNumber,cPhone)
                                               VALUES('$pDate','$pTime','$CustID','$PassengerFirstName','$PassengerLastName','$PickUpAddress','$pCity','$pState','$pzip','$pAirline','$PFlight','$deptCity','$DropOffAddress','$dCity','$dState','$dzip','$DriverId','$DriverFirstName','$VehicleID','$PassengerPhoneNumber','$cPhone')");
        // display sucess message

    echo "<font color='green'>Data added successfully";
    echo "<br/><a href='index.php'>View Results</a>";

}
?>
/*
)
    echo "<font color='green'>Data added successfully";
    echo "<br/><a href='welcome.php'>View Results</a>";*/
   /* }*/
}
?>



    <form action="?" method="post" name="form1">
        <div class="container">
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label >Date</label>
                    <input type="text" class="form-control"  placeholder="Date" name="pDate" >
                </div>

                <div class="form-group col-md-3">
                    <label>Time</label>
                    <input type="text" class="form-control" placeholder="Time" name="pTime"  >
                </div>
                <div class="form-group col-md-6">
                    <label>CustomerID</label>
                    <input type="text" class="form-control" placeholder="Customer ID"  name="CustID">
                </div>


                <div class="form-group col-md-6">
                    <label>Passenger First Name</label>
                    <input type="text" class="form-control" placeholder="Passenger First Name" name="PassengerFirstName" >
                </div>
                <div class="form-group col-md-6">
                    <label>Last Last Name </label>
                    <input type="text" class="form-control" placeholder="Passenger Last Name" name="PassengerLastName"  >
                </div>


                <div class="form-group col-md-6">
                    <label>Passenger Phone </label>
                    <input type="text" class="form-control" placeholder="Phone" name="PassengerPhoneNumber" >
                </div>
                <div class="form-group col-md-6">
                    <label>Passenger cell Phone Number</label>

                    <input type="text" class="form-control"  placeholder="Passenger Cell Phone"   name="cPhone" >
                </div>

                <div class="form-group col-md-12">
                    <label>PickUp Address</label>
                    <input type="text" class="form-control"  placeholder="Pickup Address" name="PickUpAddress" >
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control"  placeholder="Pickup City"  name="pCity">
                </div>
                <div class="form-group col-md-3">
                    <label  >State </label>
                    <input type="text" class="form-control"  placeholder="Pickup State"  placeholder="State" name="pState" >
                </div>

                <div class="form-group col-md-3">
                    <label> Zip </label>
                    <input type="text" class="form-control"  placeholder="Pickup Zip" name="pzip" >
                </div>

                <div class="form-group col-md-4">
                    <label>Airline</label>
                    <input type="text" class="form-control"  placeholder="Airline"   name="pAirline" >
                </div>
                <div class="form-group col-md-4">
                    <label>Flight Number</label>
                    <input type="text" class="form-control" placeholder="Flight Number" name="PFlight"  >
                </div>

                <div class="form-group col-md-4">
                    <label>Airline Flight Departure City</label>
                    <input type="text" class="form-control"  placeholder="Departure City" name="deptCity">
                </div>



                <div class="form-group col-md-12">
                    <label>Drop Off Address</label>
                    <input type="text" class="form-control"  placeholder="Drop off Address" name="DropOffAddress" >
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="Drop off City" name="dCity"   >
                </div>
                <div class="form-group col-md-3">
                    <label>State </label>
                    <input type="text" class="form-control" placeholder="Drop off State"  name="dState" >
                </div>

                <div class="form-group col-md-3">
                    <label> Zip </label>
                    <input type="text" class="form-control"  placeholder="Drop off Zip" name="dzip" >
                </div>

                <div class="form-group col-md-4">
                    <label>Driver Name</label>
                    <input type="text" class="form-control"  placeholder="Driver Name" name="DriverFirstName">
                </div>
                <div class="form-group col-md-4">
                    <label>Driver ID</label>
                    <input type="text" class="form-control"  placeholder="Driver ID "  name="DriverId">
                </div>

                <div class="form-group col-md-4">
                    <label>Vehicle ID</label>
                    <input type="text" class="form-control"  placeholder="Vehicle ID " name="VehicleID">
                </div>
            </div>


        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-primary" name="Submit" >Create Reservation</button>
        </div>
        <div class="container">
    </form>



</body>
</html>







