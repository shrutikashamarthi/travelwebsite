<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit'])) {

    $packageid = $_POST['packageid'];

    // $pid = $_SESSION['pid'];

    $useremail = $_SESSION['login'];
    $totalprice = $_POST['totalprice'];
    $nameoncard = $_POST['nameoncard'];
    $cardnumber = $_POST['cardnumber'];
    $expiredate = $_POST['expiredate'];
    $cvvnumber = $_POST['cvvnumber'];
    $status = 0;

    $sql = "INSERT INTO payments (PackageId, UserEmail, TotalPrice, NameonCard, CardNumber, ExpireDate, cvvNumber, Status) VALUES (:packageid, :useremail, :totalprice, :nameoncard, :cardnumber, :expiredate, :cvvnumber, :status)";
    $query = $dbh->prepare($sql);

    $query->bindParam(':packageid', $packageid);
    $query->bindParam(':useremail', $useremail);
    $query->bindParam(':totalprice', $totalprice);
    $query->bindParam(':nameoncard', $nameoncard);
    $query->bindParam(':cardnumber', $cardnumber);
    $query->bindParam(':expiredate', $expiredate);
    $query->bindParam(':cvvnumber', $cvvnumber);
    $query->bindParam(':status', $status);

    if ($query->execute()) {
        $frommail = "travelcation1122@gmail.com";

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'travelcation1122@gmail.com';
        $mail->Password = 'ohptctrflmoihazs';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('travelcation1122@gmail.com');

        $mail->addAddress($useremail);

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $msg =  "payment completed successfully.";
        $mail->Body =$msg;
        $mail->send();        
        
        
    } else {
        $error = "Error inserting data.";
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TC | Package Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script>
        new WOW().init();
    </script>
    <script src="js/jquery-ui.js"></script>

    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>
</head>

<body>
    <!-- top-header -->
    <?php include('includes/header.php'); ?>
    <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TC -Package Details</h1>
        </div>
    </div>
    <div class="selectroom">
        <div class="container">
            <form name="book" method="post">
                <div class="selectroom_top">
                    <center>
                        <div class="col-md-6 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                            <h3>Payment Page</h3>
                            <div class="ban-bottom">
                                <div class="bnr-right">
                                    <label class="inputLabel">Package Id</label>
                                    <input class="text" type="text" placeholder="Packege Id" name="packageid" value="<?php echo $_SESSION['pid']; ?>" readonly>
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">Package Price</label>
                                    <input class="text" type="text" name="totalprice" value="<?php echo $_SESSION['Totalamount']; ?>" readonly>
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">Card Name</label>
                                    <input class="text" type="text" placeholder="Enter Name On Card" name="nameoncard" required="">
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">Card Number</label>
                                    <input class="text" type="text" placeholder="Enter Card Number" name="cardnumber" required="">
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">Expire date</label>
                                    <input class="text" type="text" placeholder="Eg : MM/YYYY" name="expiredate" required="">
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">CVV Number</label>
                                    <input class="password" type="text" placeholder="Eneter CVV Number" name="cvvnumber" required="">
                                </div>
                                <br>
                                <div class="bnr-right">
                                    <input class="btn btn-success" type="submit" name="submit" value="Pay" required="">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!--- /selectroom ---->
    <<!--- /footer-top ---->
        <?php include('includes/footer.php'); ?>
        <!-- signup -->
        <?php include('includes/signup.php'); ?>
        <!-- //signu -->
        <!-- signin -->
        <?php include('includes/signin.php'); ?>
        <!-- //signin -->
        <!-- write us -->
        <?php include('includes/write-us.php'); ?>
</body>

</html>