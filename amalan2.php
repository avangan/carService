<?php
// include the database connection file
include_once("classes/Crud.php");
$crud = new Crud();

// define variables and set to empty values
// $C_FNameErr = "";

$C_FName =  "";
$C_FNameErr= "";
$C_LName =  "";
$C_LNameErr = "";
$phoneErr = "";
$Phone = "";

// Check to See if the FirstName is Filled IN

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["CustFirstName"])) {
        $C_FNameErr = "First Name is required";
    }
    else
        {
        $C_FName = test_input($_POST["CustFirstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $C_FName))
        {
            $C_FNameErr = "Only letters and white space allowed";
        }
     /*   else{

            $result = $crud->execute("INSERT INTO customer(CustFirstName)
                                               VALUES('$C_FName')");
        } */

    }
}

// Check to see if the Last Name is Filled in

// Last Name
// This Variable $C_LName starts out blank until we assign it either "Last Name is required" or If it is not blank the value will be passed into the
// The function test_input() and than returned to be checked against the regex , than if all of that is validated it will finally be inserted into the database;


// LAST NAME

    if (empty($_POST["CustLastName"])) {
    $C_LNameErr = "Last Name is required";
} else {
    // We are Passing the Value CustLastName from the html form into the function test_input($data) and than Reassign the the $data to the variable $C_LName
    $C_LName = test_input($_POST["CustLastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$C_LName))
    {
        $C_LNameErr = "Only letters and white space allowed";
    }

}

// CustPhoneNumber

// PHONE NUMBER EMAIL



if (empty($_POST["CustPhoneNumber"])) {
    $phoneErr= "Please re-enter your email ";
} else {
// We are Passing the Email value from the html form into the function test_input($data) and than Reassign the the $data to the variable $Phone
    $Phone = test_input($_POST["CustPhoneNumber"]);
// check if name only contains letters and whitespace
    if (!preg_match("/^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$/", $Phone)) {
        $phoneErr = "Please Enter Valid Phone Number";
    }

    // ^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$

    if (!filter_var($Phone, FILTER_VALIDATE_EMAIL)) {
        $phoneErr = "Invalid email format";
    }
}

// Declare Email Values

$emailErr = "";

$email = "CustEmail";

if (empty($_POST["CustEmail"])) {
    $emailErr = "Please re-enter your email ";
}

// Validate email This Validate email address does not work at all -

/*
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
}
else {
    echo("$email is not a valid email address");
}
*/
// Billing Address

$C_BillAdd =  "";
$C_BillErr = "";

    if (empty($_POST["Address"])) {
        $C_BillErr = "Billing Name is required";
    } else {
       $C_BillAdd  = test_input($_POST["Address"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $C_BillAdd))
        {
           $C_BillErr = "Only letters and white space allowed";
        }

// else{
 //    $result = $crud->execute(INSERT INTO customer(CustFirstName,CustLastName,CustPhoneNumber,CustEmail,Address)
  //                                              VALUES()");


            else {
            $result = $crud->execute("INSERT INTO customer(CustFirstName,CustLastName,CustPhoneNumber,CustEmail,Address)
                                               VALUES('$C_FName', '$C_LName','$Phone', '$email','$C_BillAdd')");

            }

}
/*

else {
    // We are Passing the Email value from the html form into the function test_input($data) and than Reassign the the $data to the variable $Email
    $Email= test_input($_POST["CustEmail"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $Email))


    {
        $emailErr = "Only letters and white space allowed , Please re-enter your email";
    }

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    else{
        $result = $crud->execute("INSERT INTO customer(CustFirstName, CustLastName,CustPhoneNumber, CustEmail )
                                               VALUES('$C_FName', '$C_LName','$Phone', '$Email')");
    }
}

*/




function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

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
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form1">
    <table width="25%" border="0">

        <tr>
            <td>Customer First Name</td>
            <td><input type="text" name="CustFirstName"></td>
            <span class="error">* <?php echo $C_FNameErr;?></span>
        </tr>
        <tr>
            <td>Customer Last Name</td>
            <td><input type="text" name="CustLastName"></td>
            <span class="error">* <?php echo $C_LNameErr;?></span>
        </tr>
        <tr>
            <td>Customer Phone Number</td>
            <td><input type="text" name="CustPhoneNumber"></td>

        </tr>

        <td>Customer Email </td>
        <td><input type="text" name="CustEmail"></td>
        <span class="error">* <?php echo $emailErr;?></span>

        </tr>

        <tr>
            <td>Customer Billing Address </td>
            <td><input type="text" name="Address"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="Submit" name="Submit" value="Add" ></td>
        </tr>
    </table>
</form>

</body>

</html>
