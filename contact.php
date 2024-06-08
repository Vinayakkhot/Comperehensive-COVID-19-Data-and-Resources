<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//$html='<h1>hi</h1>';

require 'vendor/autoload.php'; // Adjust the path to autoload.php as needed
//start
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $html = "<h1>Contact Details</h1>";
    $html .= "<p><strong>Name:</strong> $name</p>";
    $html .= "<p><strong>Email:</strong> $email</p>";
    $html .= "<p><strong>Message:</strong> $message</p>";
//end
$mail = new PHPMailer(); 
        $mail->SMTPDebug  = 0;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "vinayakkhot370@gmail.com";
        $mail->Password = "8105383970";
        $mail->SetFrom("vinayakkhot370@gmail.com");
        $mail->Subject = "Contact Form Submission";
        $mail->Body =$html;
        $mail->AddAddress("vinayak2002khot@gmail.com");
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
  
        if ($mail->send()) {
            header("Location: index.php?success=true");
            exit();
        } else {
            header("Location: index.php?error=true");
            exit();
        }
    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Page</title>
<style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
 body{
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa ;
 } 

 .first_col {
    background-color: white;
    height: 550px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    position: relative;
    width: 550px;
    left: 155px;
    top: 171px;
    border-radius: 20px;
 }

 .img-fluid {
    border-radius: 20px;
 }

 .row-last {
    width: 60% !important;
    position: relative !important;
    left: 46px;
    top: 140px;
    height: 148px;
    padding-bottom: 100px !important;
    background-color: black;
    border-radius: 20px;
 }

 .btn-primary {
    background-color: black;
    border: #c1b688;

 }

 .btn-primary:hover {
    background-color: green !important;
 }

 .form-control {
    height: 52px;
    background: #fff;
    font-size: 14px;
    border-radius: 2px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #c1b688;
 }
 .form-control[type=text]:focus {
 border: 2px solid #555;
 }
 @media only screen and (max-width: 600px) {
    .first_col {
        position: initial;
        left: 0 !important;
    }

    .sec_col {
        order: 1 !important;
    }

    .row-last {
        left: 0 !important;
        width: 100% !important;
        height: 500px !important;
        top: 0 !important;
    }
 } 
</style>
 
</head>

<body>

<?php include('header.php'); ?>

    <div class="bg-background"></div>
    <div class="container py-5">
        <div class="row py-5 g-3">

            <div class="col-md-6 first_col ">
                <h1 class="text-center mt-3">Contact Us</h1>
                <form class="p-4 mt-5"  method="post" >
                <div class="mb-3">
                        <label for="name" class="form-label">Enter your Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Enter your message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Send Now</button>
                        <link rel="stylesheet" href="">
                    </div>
                    </form>  
                </form>
            </div>
            <div class="col-md-6 sec_col">
                <img src="./img/contact.jpg"
                    class="img-fluid">
            </div>
        </div>
        <div class="row-last">
            <div class="row row-cols-1 row-cols-md-3  p-3 text-white">
                <div class="col">
                    <h3>CALL US</h3>
                    <p>+919632128223</p>
                    <p>+918298459027</p>
                </div>
                <div class="col">
                    <h3>EMAIL</h3>
                    <p>Vinayak234@gmail.com</p>
                    <p>sumit123@gmail.com</p>
                 
                </div>
                <div class="col">
                    <h3>LOCATION</h3>
                    <p>#3 Floor Arjun Empire Congress Road, Tilakwadi Belagavi</p>
                </div>
               
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



</body>

</html>