<!DOCTYPE html>
<html>
<body>
<style>
    body {
        background-color:  dimgray;
        min-height: 100vh;
        margin: 0;
    }
    p {
        color: white;
        padding-top: 50vh;
        text-align: center;
        font-size: 35px;
        margin: auto;
        font-family: "Trebuchet MS";
    }
</style>
<?php
$res;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $age = $_REQUEST["age"];
    $gender = $_REQUEST["gender"];
    $league = $_REQUEST["league"];
    $to_email = "shlooby07@gmail.com";
    $subject = "New Membership Enquiry";
    
    $contactus = "
    
    Name: ".$name."
    Phone: ".$phone."
    Email: ".$email."
    Age: ".$age."
    Gender: ".$gender."
    League: ".$league;

    $contactus  = wordwrap($contactus ,70);

    $mail = mail($to_email,$subject,$contactus);
    if (!$mail) {
      $res = print_r(error_get_last()['message']);
    } else {
      $res = "Thanks email sent, redirecting in 5 seconds..";
    }
}
?>

    <p> <?php echo $res; ?></p> 
    <?php header( "Refresh:5; url=https://perthfootballfixtures.online", true, 303); ?>
</body>
</html>
