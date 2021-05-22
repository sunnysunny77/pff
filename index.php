<!DOCTYPE html>
<html>
<body>
<style>
    body {
        background-color:  rgb(235, 64, 52);
        min-height: 100vh;
        margin: 0;
    }
    p {
        color: white;
        padding-top: 50vh;
        text-align: center;
        font-size: 50px;
        margin: auto;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        
    }
</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $age = $_REQUEST["age"];
    $gender = $_REQUEST["gender"];
    $league = $_REQUEST["league"];
    $to_email = "";
    $subject = "New Membership Enquiry";
    
    $contactus = "
    
    Name: ".$name."
    Phone: ".$phone."
    Email: ".$email."
    Age: ".$age."
    Gender: ".$gender."
    League: ".$league;

    $contactus  = wordwrap($contactus ,70);

    mail($to_email,$subject,$contactus);
}
?>

    <p> Thanks email sent, redirecting in 5 seconds... </p> 
    <?php header( "Refresh:5; url=http://pff.sunnyhome.site", true, 303); ?>
</body>
</html>
