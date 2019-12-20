<html>
<head>
    <title>Add Data</title>
</head>
<body>
<?php
// include the database connection file



include_once("classes/Crud.php");
//include_once ("classes/Validation.php");

$crud = new Crud();
//$validation = new Validation();

// You need to make this conditional if id isset than get id ,
// If not set than keep going because this code will break if

/*if(isset($CustID = $res['CustID'];)); */
/*if ()


{


    // Put the code here id is Already set
}

else

{

    // Put the table here
}*/

/*
This /*is the code to grab the customer id in */


/*$id = $crud->escape_string($_GET['CustID']);
$result = $crud->getData("SELECT * FROM customer WHERE CustID = $id");
foreach ($result as $res) {

    $CustID = $res['CustID'];
    $CustFirstName = $res['CustFirstName'];
    $CustLastName = $res['CustLastName'];
    $CustPhoneNumber = $res['CustPhoneNumber'];
    $CustEmail = $res['CustEmail'];

}*/



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
    $PFlight = $crud->escape_string(($_POST['$PFlight']));
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

    echo $pDate;

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
    /* }*/
}
?>
/*
)
echo "<font color='green'>Data added successfully";
    echo "<br/><a href='index.php'>View Results</a>";*/
    /* }*/
    }
    ?>
    <form action="?" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Date</td>
                <td><input type="text" name="pDate"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="text" name="pTime"></td>
            </tr>
            <tr>
                <td>CustID</td>
                <td><input type="text" name="CustID" ></td>

            </tr>
            <tr>
                <td>Passenger First Name </td>
                <td><input type="text" name="PassengerFirstName"></td>
            </tr>

            <tr>
                <td>Passenger Last Name </td>
                <td><input type="text" name="PassengerLastName"></td>
            </tr>

            <tr>
                <td>Passenger Phone Number </td>
                <td><input type="text" name="PassengerPhoneNumber"></td>
            </tr>
            <tr>

            <tr>
                <td>Passenger cell Phone Number </td>
                <td><input type="text" name="cPhone"></td>
            </tr>
            <tr>

            <tr>
                <td>Pick up address </td>
                <td><input type="text" name="PickUpAddress"></td>
            </tr>

            <tr>
                <td>Pick up City </td>
                <td><input type="text" name="pCity"></td>
            </tr>

            <tr>
                <td>Pick up State </td>
                <td><input type="text" name="pState"></td>
            </tr>

            <tr>
                <td>Pick up Zip </td>
                <td><input type="text" name="pzip"></td>
            </tr>

            <tr>
                <td>Airline </td>
                <td><input type="text" name="pAirline"></td>
            </tr>

            <tr>
                <td>Flight Number </td>
                <td><input type="text" name="PFlight"></td>
            </tr>
            <tr>
                <td>Drop off address </td>
                <td><input type="text" name="DropOffAddress"></td>
            </tr>

            <tr>
                <td>Drop City </td>
                <td><input type="text" name="dCity"></td>
            </tr>


            <tr>
                <td>Drop off State </td>
                <td><input type="text" name="dState"></td>
            </tr>


            <tr>
                <td>Drop off Zip </td>
                <td><input type="text" name="dzip"></td>
            </tr>            <tr>

                <td>Driver Id  </td>
                <td><input type="text" name="DriverId"></td>
            </tr>
            <tr>
                <td>Driver First Name </td>
                <td><input type="text" name="DriverFirstName"></td>
            </tr>

            <tr>
                <td>Vehicle ID </td>
                <td><input type="text" name="VehicleID"></td>
            </tr>
            <td></td>
            <td><input type="Submit" name="Submit" value="Add" ></td>
            </tr>
        </table>
    </form>
</body>
</html>








