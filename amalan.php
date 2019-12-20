<?php


// include the database connection file

include_once("classes/Crud.php");
//include_once ("classes/Validation.php");

$crud = new Crud();
//$validation = new Validation();

if(isset($_POST['Submit'])){
    $CustFirstName = $crud->escape_string(($_POST['CustFirstName']));
    $CustLastName = $crud->escape_string(($_POST['CustLastName']));
    $v_CustPhoneNumber = $crud->escape_string(($_POST['CustPhoneNumber']));
    $v_CustEmail = $crud->escape_string(($_POST['CustEmail']));
    $Address = $crud->escape_string(($_POST['Address']));


    function validation ($form_data)
    {
        $form_data = trim(stripcslashes(htmlspecialchars($form_data)));
        return $form_data;
    }


    $CustPhoneNumber = validation($v_CustPhoneNumber);
    $CustEmail =  validation($v_CustEmail);

    $userNameError= $phoneNumerError =  $emailError = "" ;

        $CustEmail = validation($v_CustEmail);
        $CustPhoneNumber= validation($v_CustPhoneNumber);

        $form_data = validation();

      //   Phone Number Regex


        if ( preg_match("^[2-9]\d{2}-\d{3}-\d{4}$",$CustPhoneNumber)  )

            $phoneNumerError = " Invalid Phone Number Please try again";

      //   Email Regex

        if (!preg_match("^((\"[\w-\s]+\")|([\w-]+(?:\.[\w-]+)*)|(\"[\w-\s]+\")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)", $CustEmail))
    $result = $crud->execute("INSERT INTO customer(CustFirstName,CustLastName,CustPhoneNumber,CustEmail,Address)
                                               VALUES('$CustFirstName','$CustLastName','$CustPhoneNumber','$CustEmail','$Address')");
    // display sucess message after Validation

    if(!empty($CustFirstName) && !empty($CustLastName) && !empty($CustPhoneNumber) && !empty($CustEmail) && !empty($Address))
    {
        echo "<font color='green'>Customer added successfully";
        echo "<br/><a href='customer.php'>View Results</a>";
        /* }*/

    }
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
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form1">
    <table width="25%" border="0">

        <tr>
            <td>Customer First Name</td>
            <td><input type="text" name="CustFirstName"></td>
        </tr>
        <tr>
            <td>Customer Last Name</td>
            <td><input type="text" name="CustLastName"></td>
        </tr>
        <tr>
            <td>Customer Phone Number</td>
            <td><input type="text" name="CustPhoneNumber"></td>
            <span style="Color:red;"><?php echo @$userNameError; ?></span>
        </tr>

            <td>Customer Email </td>
            <td><input type="text" name="CustEmail"></td>
            <span style="Color:red;"><?php echo @$userNameError; ?></span>
        </tr>

        <tr>
            <td>Address Email </td>
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
