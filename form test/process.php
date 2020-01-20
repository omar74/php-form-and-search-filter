<?php


$con = mysqli_connect('127.0.0.1','root','');

if(!$con){
	echo 'not connected ';
}

if(!mysqli_select_db($con,'testform'))
{
	echo "database not selected";
}


$StudentNumber  = $_POST['StudentNumber'];
$InvoiceType 	= $_POST['InvoiceType'];
$Payment 		= $_POST['Payment'];
$Amount 		= $_POST['Amount'];
$Amountletters 	= $_POST['Amountletters'];
$Scholarship 	= $_POST['Scholarship'];
$StudentType 	= $_POST['StudentType'];
$CodeGroup 		= $_POST['CodeGroup']; 
$Studytype 		= $_POST['Studytype'];
$Deadline 		= $_POST['Deadline'];
$Notes 			= $_POST['Notes'];
$Receptionist 	= $_POST['Receptionist'];
$paymentMethod 	= $_POST['paymentMethod'];
$ScholarshipCode= $_POST['ScholarshipCode'];



$sql = "INSERT INTO form (StudentNumber, InvoiceType, Payment, Amount, Amountletters, Scholarship, StudentType, CodeGroup, Studytype, Deadline, Notes, Receptionist, paymentMethod, ScholarshipCode)
VALUES ('$StudentNumber', '$InvoiceType', '$Payment', '$Amount', '$Amountletters',
		'$Scholarship', '$StudentType', '$CodeGroup', '$Studytype','$Deadline', '$Notes',
		 '$Receptionist', '$paymentMethod', '$ScholarshipCode')";



if (!mysqli_query($con,$sql))
{
	echo "not interseted";
}

else 
{
	echo "interseted";
}


header("refresh:1; url=form.php");


?>



<?php

/*
#get values

$StudentNumber  = $_POST['StudentNumber'];
$InvoiceType 	= $_POST['InvoiceType'];
$Payment 		= $_POST['Payment'];
$Amount 		= $_POST['Amount'];
$Amountletters 	= $_POST['Amountletters'];
$Scholarship 	= $_POST['Scholarship'];
$StudentType 	= $_POST['StudentType'];
$CodeGroup 		= $_POST['CodeGroup']; 
$Studytype 		= $_POST['Studytype'];
$Deadline 		= $_POST['Deadline'];
$Notes 			= $_POST['Notes'];
$Receptionist 	= $_POST['Receptionist'];
$paymentMethod 	= $_POST['paymentMethod'];
$ScholarshipCode= $_POST['ScholarshipCode'];

#to prevent sql injection

$StudentNumber	= stripcslashes($StudentNumber);
$InvoiceType	= stripcslashes($InvoiceType);
$Payment		= stripcslashes($Payment);
$Amount			= stripcslashes($Amount);
$Amountletters	= stripcslashes($Amountletters);
$Scholarship	= stripcslashes($Scholarship);
$StudentType	= stripcslashes($StudentType);
$CodeGroup		= stripcslashes($CodeGroup);
$Studytype		= stripcslashes($Studytype);
$Deadline		= stripcslashes($Deadline);
$Notes			= stripcslashes($Notes);
$Receptionist	= stripcslashes($Receptionist);
$paymentMethod	= stripcslashes($paymentMethod);
$ScholarshipCode= stripcslashes($ScholarshipCode);
	
$StudentNumber	= mysql_real_escape_string($StudentNumber);
$InvoiceType	= mysql_real_escape_string($InvoiceType);
$Payment		= mysql_real_escape_string($Payment);
$Amount			= mysql_real_escape_string($Amount);
$Amountletters	= mysql_real_escape_string($Amountletters);
$Scholarship	= mysql_real_escape_string($Scholarship);
$StudentType	= mysql_real_escape_string($StudentType);
$CodeGroup		= mysql_real_escape_string($CodeGroup);
$Studytype		= mysql_real_escape_string($Studytype);
$Deadline		= mysql_real_escape_string($Deadline);
$Notes			= mysql_real_escape_string($Notes);
$Receptionist	= mysql_real_escape_string($Receptionist);
$paymentMethod	= mysql_real_escape_string($paymentMethod);
$ScholarshipCode= mysql_real_escape_string($ScholarshipCode);


#connect to server and db

mysql_connect("localhost", "root", "");
mysql_select_db("testform");


# type query

$result = mysql_query("select * from formdata where 
		StudentNumber = '$StudentNumber',
		InvoiceType = '$InvoiceType',
		Payment = '$Payment',
		Amount = '$Amount',
		Amountletters = '$Amountletters',
		Scholarship = '$Scholarship',
		StudentType = '$StudentType',
		CodeGroup = '$CodeGroup',
		Studytype = '$Studytype',
		Deadline = '$Deadline',
		Notes = '$Notes',
		Receptionist =	'$Receptionist',
		paymentMethod = '$paymentMethod' and
		ScholarshipCode = '$ScholarshipCode'

	")or die("failed to query database".mysql_error());

$rows = mysql_fetch_array($result);

if ($rows['StudentNumber']== $StudentNumber &&
	$rows['InvoiceType']== $InvoiceType &&
	$rows['Payment']== $Payment &&
	$rows['Amount']== $Amount &&
	$rows['Amountletters']== $Amountletters &&
	$rows['Scholarship']== $Scholarship &&
	$rows['StudentType']== $StudentType &&
	$rows['CodeGroup']== $CodeGroup &&
	$rows['Studytype']== $Studytype &&
	$rows['Deadline']== $Deadline &&
	$rows['Notes']== $Notes &&
	$rows['Receptionist']== $Receptionist &&
	$rows['paymentMethod']== $paymentMethod &&
	$rows['ScholarshipCode']== $ScholarshipCode
	){
	echo "successfully :) ";
	}else{
	echo "failed :( ";
			}

*/


/*

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "testform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 






$sql = "INSERT INTO formdata (StudentNumber, InvoiceType, Payment, Amount, Amountletters, Scholarship, StudentType, CodeGroup, Studytype, Deadline, Notes, Receptionist, paymentMethod, ScholarshipCode)
VALUES ('StudentNumber', 'InvoiceType', 'Payment', 'Amount', 'Amountletters', 'Scholarship', 'StudentType', 'CodeGroup', 'Studytype','Deadline', 'Notes', 'Receptionist', 'paymentMethod', 'ScholarshipCode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/


?>