<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit'])) {

    // $packageid = $_POST['packageid'];

    // $pid = $_SESSION['pid'];
    // currentlocation
    // destination
    // noofdays
    // adults
    // children
    // fromdate
    // todate
    // budget
    $useremail = $_SESSION['login'];
    $currentlocation = $_POST['currentlocation'];
    $destination = $_POST['destination'];
    $noofdays = $_POST['noofdays'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $budget = $_POST['budget'];


    $sql = "INSERT INTO packages (useremail,currentlocation, destination, noofdays, adults, children, fromdate, todate, budget) VALUES (:useremail, :currentlocation, :destination, :noofdays, :adults, :children, :fromdate, :todate,:budget)";
    $query = $dbh->prepare($sql);

    $query->bindParam(':useremail', $useremail);
    $query->bindParam(':currentlocation', $currentlocation);
    $query->bindParam(':destination', $destination);
    $query->bindParam(':noofdays', $noofdays);
    $query->bindParam(':adults', $adults);
    $query->bindParam(':children', $children);
    $query->bindParam(':fromdate', $fromdate);
    $query->bindParam(':todate', $todate);
    $query->bindParam(':budget', $budget);
    $frommail = "malleswar.gangarapu@gmail.com";
    $toemail = "malleswar.gangarapu@gmail.com";
    $subject = "";
    $message = "";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" . $fromemail . '<' . $fromemail . '>' . "\r\n" . 'Reply-To' . $fromemail . "\r\n" . 'X-Mailer:PHP/' . phpversion();
    $result = @mail($to, $subject, $message, $headers);
    if ($query->execute()) {

        $msg =  "payment completed successfully.";
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
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
            <form class="form-horizontal" name="package" method="post">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Current Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="currentlocation" id="locationName" placeholder="Current Location" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label" style="width: 154px;">Destination</label>
                    <div class="bnr-left">
                        <div class="col-sm-8">
                            <select name="destination" class="form-control1" id="packagename" style="margin-left: 40px;">
                                <option value="null">Select Destination</option>
                                <option value="Goa"><a href="">Goa</a></option>
                                <option value="Ooty"><a>Ooty</a></option>
                                <option value="Mysorepalace"><a>Mysorepalace</a></option>
                                <option value="Munnar"><a>Munnar</a></option>
                                <option value="Hampi"><a>Hampi</a></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">No of Days</label>
                    <input type="number" class="form-control1" step="1" min="0" name="noofdays" id="packagename" placeholder="No of Days" required style="width: 288px;margin-left: 64px;">
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">Adults</label>
                    <input type="number" class="form-control1" step="1" min="0" name="adults" id="packagename" placeholder="No of Adults" required style="width: 288px;margin-left: 64px;">
                </div>
                <div class="form-group">

                    <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">Children :</label>
                    <div style="display: flex;">
                        <input type="number" class="form-control1" step="1" min="0" name="children" id="packagename" placeholder="No of Children" required style="width: 288px;margin-left: 64px;">
                    </div>

                </div>

                <!-- <div class="bnr-left">
                        <div class="col-sm-8">
                            <div class="row " style="margin-top: 3px;">
                                <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">Adult :</label>
                                <div style="display: flex;">
                                    <button id="aIncrease" style="margin-left: 5px; border-radius:50px" type="button">+</button>
                                    <h2 id="counting" name="numberofadult" style="margin-left: 10px; margin-right: 10px;"></h2>
                                    <button id="aDecrease" style="margin-left: 5px; border-radius:50px" type="button">-</button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 3px;">
                                <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">Children :</label>
                                <div style="display: flex;">
                                    <button id="cIncrease" style="margin-left: 5px; border-radius:50px" type="button">+</button>
                                    <h2 id="counting1" name="numberofchildren" style="margin-left: 10px; margin-right: 10px;"></h2>
                                    <button id="cDecrease" style="margin-left: 5px; border-radius:50px" type="button">-</button>
                                </div>
                            </div>
                        </div>
                    </div> -->


                <div class="form-group">
                    <div class="bnr-left">
                        <label for="focusedinput" class="col-sm-2 control-label" style="width:100px;">From</label>
                        <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy" name="fromdate" required="" style="margin-left: 105px;width:350px;">
                    </div>
                </div>
                <div class="form-group">
                    <div class="bnr-left">
                        <label for="focusedinput" class="col-sm-2 control-label" style="width:80px;">To</label>
                        <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="" style="margin-left: 125px;width:350px;">
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label" style="width: 145px;">Budget Range</label>
                    <div class="bnr-left">
                        <div class="col-sm-8">
                            <input type="range" class="form-control1" value="5000" min="1" max="100000" oninput="this.nextElementSibling.value = this.value" name="budget" id="packagename" placeholder="Budget Range" required style="width: 288px;margin-left: 47px;"><output>5000</output>
                        </div>
                    </div>
                </div>

                <!-- <div class="container text-center">
                    <div class="row  text-center">
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" onclick="makeActive(this)">Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="makeActive(this)">Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="makeActive(this)">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="makeActive(this)">Rent / Transport</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="makeActive(this)">Guide</a>
                            </li>
                        </ul>
                    </div>

                    
                </div> -->
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" name="submit" class="btn-primary btn">Create Package</button>
                        <button type="reset" class="btn-inverse btn">Reset</button>
                    </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <script src="js/utils.js"></script>
        <script src="js/create-package.js"></script>
</body>

</html>