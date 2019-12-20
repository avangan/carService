<html>
<head>    <meta charset="utf-8">

    <title>Reservation System </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS Got off W3 Schools Website  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></head>
<body>
<?php


// include the database connection file

include_once("classes/Crud.php");
//include_once ("classes/Validation.php");

$crud = new Crud();
//$validation = new Validation();

if(isset($_POST['Submit'])){
    //$reservationID = $crud->escape_string(($_POST['']));

    $CustFirstName = $crud->escape_string(($_POST['CustFirstName']));
    $CustLastName = $crud->escape_string(($_POST['CustLastName']));
    $CustPhoneNumber = $crud->escape_string(($_POST['CustPhoneNumber']));
    $CustEmail = $crud->escape_string(($_POST['CustEmail']));
    $Address = $crud->escape_string(($_POST['Address']));
    $HCity = $crud->escape_string(($_POST['HCity']));
    $Hstate = $crud->escape_string(($_POST['Hstate']));
    $HZip = $crud->escape_string(($_POST['HZip']));


    /*   if ($msg != null) {
           echo $msg;
           // link to the previous page
           echo "</br> <a href='javascript:self.history.back();'>Go Back</a>";
       } else {*/
    $result = $crud->execute("INSERT INTO customer(CustFirstName,CustLastName,CustPhoneNumber,CustEmail,Address,HCity,Hstate,HZip)
                                               VALUES('$CustFirstName','$CustLastName','$CustPhoneNumber','$CustEmail','$Address','$HCity','$Hstate','$HZip')");
    // display sucess message
    echo "<font color='green'>Customer added successfully";



    /* }*/
}
?>
<div class="container">

    <div class="row">
        <div class="col text-center">
            <h2 >    <?php echo "<font color='green'>Customer added successfully"; ?>  </h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="customer.php"  class="btn btn-primary btn-lg" role="button">View Results</a>
        </div>
    </div>
</body>
</html>







