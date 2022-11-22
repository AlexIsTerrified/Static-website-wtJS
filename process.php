<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = new mysqli($host, $user, $pass,'form');

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $transaction = test_input($_POST["transaction"]);
    $classification = test_input($_POST["classification"]);
    $use = test_input($_POST["use"]);
    $surname = test_input($_POST["surname"]);
    $firstname = test_input($_POST["firstname"]);
    $middlename = test_input($_POST["middlename"]);
    $maidenname = test_input($_POST["madienname"]);
    $sex = test_input($_POST["sex"]);
    $birthplace = test_input($_POST["birthplace"]);
    $birthdate = test_input($_POST["birthdate"]);
    $nationality = test_input($_POST["nationality"]);
    $street = test_input($_POST["street"]);
    $city = test_input($_POST["city"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);   
    $street1 = test_input($_POST["street1"]);
    $city1 = test_input($_POST["city1"]);
    $email1 = test_input($_POST["email1"]);
    $phone1 = test_input($_POST["phone1"]);
    $ttdrivingpermit = test_input($_POST["ttdrivingpermit"]);
    $ttprevpermit = test_input($_POST["ttprevpermit"]);
    $issuenumber = test_input($_POST["issuenumber"]);
    $issuedate = test_input($_POST["issuedate"]);
    $issueclass = test_input($_POST["issueclass"]);
    $iprevpermit = test_input($_POST["iprevpermit"]);
    $particulars = test_input($_POST["particulars"]);
    $dispermit = test_input($_POST["dispermit"]);
    $disparticulars = test_input($_POST["disparticulars"]);
    $quapermit = test_input($_POST["quapermit"]);

    $appointment = strtotime("+2 Weeks");
    $create_date = date_create(date("Y-m-d",$appointment));
    if(date_format($create_date,"D") == "Sat"){
        $appointment = strtotime("+2 Days",$appointment);
    }
    if(date_format($create_date,"D") == "Sun"){
        $appointment = strtotime("+1 Days",$appointment);
    }

    $appointment = date("l jS F Y",$appointment);
    $id = time();
    $add =  "INSERT INTO `appointments` (`ID`, `transcation`, `classification`, `use`, `surname`, `firstname`, `middlename`, `maidenname`, `sex`, `birthplace`, `birthdate`, `nationality`, `street`, `city`, `email`, `phone`, `street1`, `city1`, `email1`, `phone1`, `ttdrivingpermit`, `ttprevpermit`, `issuenumber`, `issuedate`, `issueclass`, `iprevpermit`, `particulars`, `dispermit`,`disparticulars`, `quapermit`, `appointment`) 
    VALUES ('".$id."','".$transaction."','".$classification."','".$use."','".$surname."','".$firstname."','".$middlename."','".$maidenname."','".$sex."','".$birthplace."','".$birthdate."','".$nationality."','".$street."','".$city."','".$email."','".$phone."','".$street1."','".$city1."','".$email1."','".$phone1."','".$ttdrivingpermit."','".$ttprevpermit."','".$issuenumber."','".$issuedate."','".$issueclass."','".$iprevpermit."','".$particulars."','".$dispermit."','".$disparticulars."','".$quapermit."','".$appointment."')";

    $conn->query($add);

    header("Location: ./appointment.php?id=".$id);
    die();

 }else{
    echo "<h2>data invalid, please return to previous page.</h2>";
 }

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>