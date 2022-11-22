<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = new mysqli($host, $user, $pass,'form');

    $transaction = "";
    $classification = "";
    $use = "";
    $surname = "";
    $firstname = "";
    $middlename = "";
    $maidenname = "";
    $sex = "";
    $birthplace = "";
    $birthdate = "";
    $nationality = "";
    $street = "";
    $city = "";
    $email = "";
    $phone = "";  
    $street1 = "";
    $city1 = "";
    $email1 = "";
    $phone1 = "";
    $ttdrivingpermit = "";
    $ttprevpermit = "";
    $issuenumber = "";
    $issuedate = "";
    $issueclass = "";
    $iprevpermit = "";
    $particulars = "";
    $dispermit = "";
    $disparticulars = "";
    $quapermit = "";
    $appointment = "";
if(isset($_GET['id'])){
    $query = 'SELECT * FROM `appointments` where ID='.$_GET['id'];
    $run = $conn ->query($query);
    while($a = $run->fetch_assoc()){
        $transaction = $a['transcation'];
        $classification = $a['classification'];
        $use = $a['use'];
        $surname = $a['surname'];
        $firstname = $a['firstname'];
        $middlename = $a['middlename'];
        $maidenname = $a['maidenname'];
        $sex = $a['sex'];
        $birthplace =$a['birthplace'];
        $birthdate = $a['birthdate'];
        $nationality = $a['nationality'];
        $street = $a['street'];
        $city = $a['city'];
        $email = $a['email'];
        $phone = $a['phone'];  
        $street1 = $a['street1'];
        $city1 = $a['city1'];
        $email1 = $a['email1'];
        $phone1 = $a['phone1'];
        $ttdrivingpermit = $a['ttdrivingpermit'];
        $ttprevpermit = $a['ttprevpermit'];
        $issuenumber = $a['issuenumber'];
        $issuedate = $a['issuedate'];
        $issueclass = $a['issueclass'];
        $iprevpermit = $a['iprevpermit'];
        $particulars = $a['particulars'];
        $dispermit = $a['dispermit'];
        $disparticulars = $a['disparticulars'];
        $quapermit = $a['quapermit'];
        $appointment = $a['appointment'];
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>APPLICATION FOR DRIVING PERMIT(S)/ENDORSEMENT(S)</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="page">
        <div class="summary">
            <b class="appointment">Your appointment is set for <i><?php echo $appointment ?></i></b>
            <div class="section">
                <h3>Type of Permit(s)/Endorsement(s) Applied for</h3>
                <b>Transaction</b>
                <p><?php echo $transaction ?></p>
                <b>Classification</b>
                <p><?php echo $classification ?></p>
                <b>Use</b>
                <p><?php echo $use ?></p>
            </div>
            <div class="section">
                <h3>Personal Information</h3>
                <b>Surname</b>
                <p><?php echo $surname ?></p>
                <b>First Name</b>
                <p><?php echo $firstname ?></p>
                <b>Middle Name</b>
                <p><?php echo $middlename ?></p>
                <b>Maiden Name</b>
                <p><?php echo $maidenname ?></p>
                <b>Sex</b>
                <p><?php echo $sex ?></p>
            </div>
            <div class="section">
                <h3>Personal Information</h3>
                <b>Place of Birth</b>
                <p><?php echo $birthplace ?></p>
                <b>Date of Birth</b>
                <p><?php echo $birthdate ?></p>
                <b>Nationality</b>
                <p><?php echo $nationality ?></p>
            </div>
            <div class="section">
                <h3>Residential Address in Trinidad and tobago</h3>
                <b>Street</b>
                <p><?php echo $street ?></p>
                <b>City</b>
                <p><?php echo $city ?></p>
                <b>Email</b>
                <p><?php echo $email ?></p>
                <b>Phone Number</b>
                <p><?php echo $phone ?></p>
                <h3>Contact Information If Different From Residential Address</h3>
                <b>Street</b>
                <p><?php echo $street1 ?></p>
                <b>City</b>
                <p><?php echo $city1 ?></p>
                <b>Email</b>
                <p><?php echo $email1 ?></p>
                <b>Phone Number</b>
                <p><?php echo $phone1 ?></p>
            </div>
            <div class="section">
                <h3>Contact Information</h3>
                <b>Are You The holder of a Driving permit Issued in Trinidad and Tobago?</b>
                <p><?php echo $ttdrivingpermit ?></p>
                <b>Have You Previously Been Holder of a Driving permit Issued in Trinidad and Tobago?</b>
                <p><?php echo $ttprevpermit ?></p>
                <b>Issue Number</b>
                <p><?php echo $issuenumber ?></p>
                <b>Issue Date</b>
                <p><?php echo $issuedate ?></p>
                <b>Class Of Vehicle Authorized to Drive</b>
                <p><?php echo $issueclass ?></p>
            </div>
            <div class="section">
                <b>Are You The Holder of a Driving Permit/Licences Held Eslewhere Than in Trinidad and Tobago?</b>
                <p><?php echo $iprevpermit ?></p>
                <b>Give Particulars of Any Endorsement(s) On Any Driving Permit/Licence Which You Held or Now Hold</b>
                <p><?php echo $particulars ?></p>
                <b>Have You at Any Time Been Disqualified From Obtaining A Driving Permit?</b>
                <p><?php echo $dispermit ?></p>
                <b>If Yes Give Particulars</b>
                <p><?php echo $disparticulars ?></p>
                <b>Are Physique,Hearing and Bodily and Mental Fitness Such as to Qualify You For The Issue of A Driving Permit?</b>
                <p><?php echo $quapermit ?></p>
            </div>
            <div class="section">
        </div>
    </div>
</body>
</html>