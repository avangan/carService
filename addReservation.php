<html>
<head>
    <title>Add Reservation</title>
    <title>Add Driver</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS Got off W3 Schools Website  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="welcome.php">Home</a></li>
            <li><a href="customer.php">Customers</a></li>
            <li><a href="driver.php">Drivers</a></li>
            <li><a href="add.html">New Reservations</a></li>
            <li><a href="vehicle.php">Vehicles</a></li>

        </ul>
    </div>
</nav>

<body>
<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">

        <tr>
            <td>Date</td>
            <td><input type="text" name="Date"></td>
        </tr>
        <tr>
            <td>Time</td>
            <td><input type="text" name="Time"></td>
        </tr>
        <tr>
            <td>CustID</td>
            <td><input type="text" name="CustID"></td>
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
            <td>Pick up address </td>
            <td><input type="text" name="PickUpAddress"></td>
        </tr>

        <tr>
            <td>Drop off address </td>
            <td><input type="text" name="DropOffAddress"></td>
        </tr>

        <tr>
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

        <tr>
            <td>Passenger Phone Number </td>
            <td><input type="text" name="PassengerPhoneNumber"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" name="Submit" value="Add" ></td>
        </tr>
    </table>
</form>

</body>

</html>
