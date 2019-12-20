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

    $c_FirstName = $crud->escape_string(($_POST['c_FirstName']));
    $c_LastName = $crud->escape_string(($_POST['c_LastName']));
    $AccountType = $crud->escape_string(($_POST['AccountType']));
    $Company = $crud->escape_string(($_POST['Company']));
    $AstFirstName = $crud->escape_string(($_POST['AstFirstName']));
    $AstLastName = $crud->escape_string(($_POST['AstLastName']));
    $Ast_PhoneWork = $crud->escape_string(($_POST['Ast_PhoneWork']));
    $Ast_CellPhoneWork = $crud->escape_string(($_POST['Ast_CellPhoneWork']));
    $Ast_cellPhonePersonal = $crud->escape_string(($_POST['Ast_cellPhonePersonal']));
    $Ast_emailOne = $crud->escape_string(($_POST['Ast_emailOne']));
    $Ast_emailTwo = $crud->escape_string(($_POST['Ast_emailTwo']));
    $BusinessAddress = $crud->escape_string(($_POST['BusinessAddress']));
    $Bunit = $crud->escape_string(($_POST['Bunit']));
    $BCity = $crud->escape_string(($_POST['BCity']));
    $Bstate = $crud->escape_string(($_POST['Bstate']));
    $BZip = $crud->escape_string(($_POST['BZip']));
    $HomeAddress = $crud->escape_string(($_POST['HomeAddress']));
    $Unit = $crud->escape_string(($_POST['Unit']));
    $HCity = $crud->escape_string(($_POST['HCity']));
    $Hstate = $crud->escape_string(($_POST['Hstate']));
    $HZip = $crud->escape_string(($_POST['HZip']));
    $InternalNotes = $crud->escape_string(($_POST['InternalNotes']));
    $c_OfficePhone = $crud->escape_string(($_POST['c_OfficePhone']));
    $c_HomePhone = $crud->escape_string(($_POST['c_HomePhone']));
    $c_Emergency = $crud->escape_string(($_POST['c_Emergency']));
    $c_CellPhoneOnePersonal = $crud->escape_string(($_POST['c_CellPhoneOnePersonal']));
    $c_CellPhoneTwoEmergency = $crud->escape_string(($_POST['c_CellPhoneTwoEmergency']));
    $c_cellPhoneThreeAst = $crud->escape_string(($_POST['c_cellPhoneThreeAst']));
    $c_emailOne = $crud->escape_string(($_POST['c_emailOne']));
    $C_emailTwo = $crud->escape_string(($_POST['C_emailTwo']));
    $C_emailThree = $crud->escape_string(($_POST['C_emailThree']));







    /*   if ($msg != null) {
           echo $msg;
           // link to the previous page
           echo "</br> <a href='javascript:self.history.back();'>Go Back</a>";
       } else {*/
    $result = $crud->execute("INSERT INTO cu(c_FirstName ,c_LastName,AccountType,Company,AstFirstName,AstLastName,Ast_PhoneWork,Ast_CellPhoneWork,Ast_cellPhonePersonal,Ast_emailOne,,Ast_emailTwo,BusinessAddress,Bunit,BCity,Bstate,BZip,HomeAddress,Unit,HCity,Hstate,HZip,InternalNotes,c_OfficePhone,c_HomePhone,c_Emergency,c_CellPhoneOnePersonal,c_CellPhoneTwoEmergency,c_cellPhoneThreeAst,c_emailOne,C_emailTwo,C_emailThree)
 )
                                                VALUES('$c_FirstName','$c_LastName','$AccountType','$Company','$AstFirstName','$AstLastName','$Ast_PhoneWork','$Ast_CellPhoneWork','$Ast_cellPhonePersonal','$Ast_emailOne','$Ast_emailTwo','$BusinessAddress','$Bunit','$BCity','$Bstate','$BZip','$HomeAddress','$Unit','$HCity','$Hstate','$HZip','$InternalNotes','$c_OfficePhone','$c_HomePhone','$c_Emergency','$c_CellPhoneOnePersonal','$c_CellPhoneTwoEmergency','$c_cellPhoneThreeAst','$c_emailOne','$C_emailTwo','$C_emailThree')");


    // display sucess message
    echo "<font color='green'>Customer added successfully";
    echo "<br/><a href='customer.php'>View Results</a>";
    /* }*/
}
?>
</body>
</html>









