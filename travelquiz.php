<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit6']))
	{
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$email=$_SESSION['login'];

$sql="update tblusers set FullName=:name,MobileNumber=:mobileno where EmailId=:email";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$msg="Profile Updated Successfully";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TravelCation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
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
	<script>
		 new WOW().init();
	</script>

  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header2.php');?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel Personality Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <style>


    .row.content {height: 450px}



    footer {
      background-color: green;
      color: white;
      padding: 5px;
	  margin-bottom: 1%;
    }

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

    h4 {
      color: black;
    }

    p.question {
	  font-size:20px;
}

.hide {
	  display:none;
}

label {
  font-family: Arial, sans-serif;
  font-size:14px;
  color: #424242;
  vertical-align:top;
}

	#pic {object-fit: cover; width: 100%; height: 100%; object-position: 50%; margin-top: 1%; border-radius: 7%;}
  </style>
</head>
<body>
<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">

  <div class="row content">
<div class="col-lg-12 text-center">
<img id="pic" src="Travel Quiz1.jpg" draggable="false" align="center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">

</div>
</div>



<div class="container-fluid text-center">
  <div class="row content">

    <div class="col-lg-12 text-center">
      <h1 class="text-success">Travel Personality Quiz</h1>
      <p class="text-info">With less than 3 minutes, you can learn a lot about your inner traveler and the places that you'll like most. You'll get results that are based on over 40 years of continuous scientific research involving over 250,000 people who have taken the quiz. When you're done answering the questions, you'll be directed to a page describing your Travel Personality - read it to learn about yourself, or just skip to the third step and see what destinations you'll enjoy!</p>
      <a href="#quiz"><button type="button" class="btn btn-primary">START THE QUIZ</button></a>
	  <hr>

  <h2>Travel Personality Types</h2>
  <br>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <div class="panel-heading" style="background: #ff5c33;">
        <h4>TRADITIONALS</h4>
      </div></a>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">If you examine the description of venturers, you will find a personality quite the opposite of yours. You prefer a life that is more structured, stable and predictable.
          <br>You would rather follow some set patterns or routines in your life so that you are more likely to know what will happen during each day and, therefore, can plan or prepare for it much better.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      <div class="panel-heading" style="background: #ffa500;">
        <h4>SIGHTSEERS</h4>
      </div></a>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Laid back, calm, easygoing, happy-go-lucky, unruffled, untroubled, informal, unceremonious, casual, and carefree. A lot of these words probably apply to you. You've even heard them used by friends and associates to describe you in the past. Above all, you probably have been labeled as mellow, creating a feeling among friends that you are genial, calm in most of life's storms (at least on the surface), cordial, affable, cheerful, pleasant, and agreeable. And you are a true-blue kind of person-someone who never plays the snob and who is loyal to friends and associates. About 17% of the population (one out of six) shares your characteristics.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      <div class="panel-heading" style="background: #3cb371;">
        <h4>JOURNEYERS</h4>
      </div></a>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">You belong to one of the two largest personality groups on my scale. Three out of ten people share your personality characteristics. You are called an authentic because of your steady, predictable (authentic) approach to your daily life, and your centric label derives from characteristics you share in common with persons who fit in the center of the personality scale. Your travel interests and daily life are more varied and diverse than either authentics or mid authentics. You will fly or drive on a leisure trip, but you generally prefer to go by car or SUV when you can.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      <div class="panel-heading" style="background: #ee82ee;">
        <h4>VOYAGERS</h4>
      </div></a>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">By definition, you fit between venturers and authentics but with a leaning towards the venturer side. Compared to other groups, you have lots of company. Three out of ten travelers (30%) place in your group, making you one of the largest segments of travelers. As a result, the majority of travel providers-airlines, resorts, rental car companies, tour operators, cruise lines, and others- place you at the top of their list of persons they want to reach and motivate to travel.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
      <div class="panel-heading" style="background: #6a5acd;">
        <h4>PIONEERS</h4>
      </div></a>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">As a mid venturer, your personality fits between venturers and those more in the center of the personality spectrum ("centrics"). You share a number of characteristics in common with pure venturers. You like to travel, especially to foreign destinations and you seek new experiences and new destinations for almost all trips you take. You are also physically active at home and on trips. But, unlike your pure venturer friends, you don't want to take such extreme vacations and are more likely to plan your trips-set an itinerary of places you want to visit and schedules when you will be there. You also have more company. About 17% of the population has a personality that matches yours, vs. only 4% for pure venturers.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
      <div class="panel-heading" style="background: #0080ff;">
        <h4>VENTURERS</h4>
      </div></a>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Leisure travel occupies a central place in your life. If you are a typical venturer, you go to more places, more often and participate in more unique experiences than anyone else. That's why I call you a venturer—someone who ventures forth very eagerly and excitedly. You fit in a small group. Only about 4% of all travelers share your extreme love of going to out of the way places and constantly seeking out of the ordinary adventures.
        </div>
      </div>
    </div>
  </div>
  <hr>

<!-- Q U I Z -->

    <div  id="quiz" class="container" style="object-fit: cover; width: 100%; height: 100%; object-position: 50%;">
      <h2>QUIZ</h2>
      <p><b>Please indicate how much you agree or disagree with each of the following statements.
        <br>After answering all the questions, click the "Submit" button to find out your Travel Personality ".
     
      <table align=left class="table table-responsive">
      	<tr>
      	  <td>
      	  	<div>
      	  		<p align="left" class="question">1. I will hurry to places even when I have plenty of time.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q1" value="1" required>
      	        <label id="correctString1">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q1" value="2" required>
      	        <label id="correctString1">2</label>
      	        <br>
      	        <input type="radio" name="q1" value="3" required>
      	        <label id="correctString1">3</label>
      	        <br>
      	        <input type="radio" name="q1" value="4" required>
      	        <label id="correctString1">4</label>
                <br>
                <input type="radio" name="q1" value="5" required>
        	        <label id="correctString1">5</label>
        	    	<br>
                <input type="radio" name="q1" value="6" required>
        	        <label id="correctString1">6</label>
        	    	<br>
                <input type="radio" name="q1" value="7" required>
        	      <label id="correctString1">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
          </tr>
          <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">2. I prefer to travel independently rather than with a group of people.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q2" value="1">
      	        <label id="correctString1">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q2" value="2">
      	        <label id="correctString1">2</label>
      	        <br>
      	        <input type="radio" name="q2" value="3">
      	        <label id="correctString1">3</label>
      	        <br>
      	        <input type="radio" name="q2" value="4">
      	        <label id="correctString2">4</label>
                <br>
                <input type="radio" name="q2" value="5">
        	        <label id="correctString2">5</label>
        	    	<br>
                <input type="radio" name="q2" value="6">
        	        <label id="correctString2">6</label>
        	    	<br>
                <input type="radio" name="q2" value="7">
        	      <label id="correctString2">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
      	<tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">3. I am actively involved in a regular, rigorous fitness program.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q3" value="1">
      	        <label id="correctString3">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q3" value="2">
      	        <label id="correctString3">2</label>
      	        <br>
      	        <input type="radio" name="q3" value="3">
      	        <label id="correctString3">3</label>
      	        <br>
      	        <input type="radio" name="q3" value="4">
      	        <label id="correctString3">4</label>
                <br>
                <input type="radio" name="q3" value="5">
        	        <label id="correctString3">5</label>
        	    	<br>
                <input type="radio" name="q3" value="6">
        	        <label id="correctString3">6</label>
        	    	<br>
                <input type="radio" name="q3" value="7">
        	      <label id="correctString3">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      		</div>
      	  </td>
        </tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">4. I would rather go for a walk than read a book.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q4" value="1">
      	        <label id="correctString4">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q4" value="2">
      	        <label id="correctString4">2</label>
      	        <br>
      	        <input type="radio" name="q4" value="3">
      	        <label id="correctString4">3</label>
      	        <br>
      	        <input type="radio" name="q4" value="4">
      	        <label id="correctString4">4</label>
                <br>
                <input type="radio" name="q4" value="5">
        	        <label id="correctString4">5</label>
        	    	<br>
                <input type="radio" name="q4" value="6">
        	        <label id="correctString4">6</label>
        	    	<br>
                <input type="radio" name="q4" value="7">
        	      <label id="correctString4">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">5. My personal interests and pastimes are quite different and novel from what others do.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q5" value="1">
      	        <label id="correctString5">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q5" value="2">
      	        <label id="correctString5">2</label>
      	        <br>
      	        <input type="radio" name="q5" value="3">
      	        <label id="correctString5">3</label>
      	        <br>
      	        <input type="radio" name="q5" value="4">
      	        <label id="correctString5">4</label>
                <br>
                <input type="radio" name="q5" value="5">
        	        <label id="correctString5">5</label>
        	    	<br>
                <input type="radio" name="q5" value="6">
        	        <label id="correctString5">6</label>
        	    	<br>
                <input type="radio" name="q5" value="7">
        	      <label id="correctString5">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">6. I have friends over to my house frequently.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q6" value="1">
      	        <label id="correctString6">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q6" value="2">
      	        <label id="correctString6">2</label>
      	        <br>
      	        <input type="radio" name="q6" value="3">
      	        <label id="correctString6">3</label>
      	        <br>
      	        <input type="radio" name="q6" value="4">
      	        <label id="correctString6">4</label>
                <br>
                <input type="radio" name="q6" value="5">
        	        <label id="correctString6">5</label>
        	    	<br>
                <input type="radio" name="q6" value="6">
        	        <label id="correctString6">6</label>
        	    	<br>
                <input type="radio" name="q6" value="7">
        	      <label id="correctString6">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">7. I go out socially with friends quite often.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q7" value="1">
      	        <label id="correctString7">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q7" value="2">
      	        <label id="correctString7">2</label>
      	        <br>
      	        <input type="radio" name="q7" value="3">
      	        <label id="correctString7">3</label>
      	        <br>
      	        <input type="radio" name="q7" value="4">
      	        <label id="correctString7">4</label>
                <br>
                <input type="radio" name="q7" value="5">
        	        <label id="correctString7">5</label>
        	    	<br>
                <input type="radio" name="q7" value="6">
        	        <label id="correctString7">6</label>
        	    	<br>
                <input type="radio" name="q7" value="7">
        	      <label id="correctString7">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">8. I am more intellectually curious than most people I know.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q8" value="1">
      	        <label id="correctString8">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q8" value="2">
      	        <label id="correctString8">2</label>
      	        <br>
      	        <input type="radio" name="q8" value="3">
      	        <label id="correctString8">3</label>
      	        <br>
      	        <input type="radio" name="q8" value="4">
      	        <label id="correctString8">4</label>
                <br>
                <input type="radio" name="q8" value="5">
        	        <label id="correctString8">5</label>
        	    	<br>
                <input type="radio" name="q8" value="6">
        	        <label id="correctString8">6</label>
        	    	<br>
                <input type="radio" name="q8" value="7">
        	      <label id="correctString8">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">9. I have much more energy than most persons of my age.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q9" value="1">
      	        <label id="correctString9">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q9" value="2">
      	        <label id="correctString9">2</label>
      	        <br>
      	        <input type="radio" name="q9" value="3">
      	        <label id="correctString9">3</label>
      	        <br>
      	        <input type="radio" name="q9" value="4">
      	        <label id="correctString9">4</label>
                <br>
                <input type="radio" name="q9" value="5">
        	        <label id="correctString9">5</label>
        	    	<br>
                <input type="radio" name="q9" value="6">
        	        <label id="correctString9">6</label>
        	    	<br>
                <input type="radio" name="q9" value="7">
        	      <label id="correctString9">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">10. I prefer being around people most of the time.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q10" value="1">
      	        <label id="correctString10">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q10" value="2">
      	        <label id="correctString10">2</label>
      	        <br>
      	        <input type="radio" name="q10" value="3">
      	        <label id="correctString10">3</label>
      	        <br>
      	        <input type="radio" name="q10" value="4">
      	        <label id="correctString10">4</label>
                <br>
                <input type="radio" name="q10" value="5">
        	        <label id="correctString10">5</label>
        	    	<br>
                <input type="radio" name="q10" value="6">
        	        <label id="correctString10">6</label>
        	    	<br>
                <input type="radio" name="q10" value="7">
        	      <label id="correctString10">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">11. Chance has little to do with the successes I've had in my life.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q11" value="1">
      	        <label id="correctString11">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q11" value="2">
      	        <label id="correctString11">2</label>
      	        <br>
      	        <input type="radio" name="q11" value="3">
      	        <label id="correctString11">3</label>
      	        <br>
      	        <input type="radio" name="q11" value="4">
      	        <label id="correctString11">4</label>
                <br>
                <input type="radio" name="q11" value="5">
        	        <label id="correctString11">5</label>
        	    	<br>
                <input type="radio" name="q11" value="6">
        	        <label id="correctString11">6</label>
        	    	<br>
                <input type="radio" name="q11" value="7">
        	      <label id="correctString11">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">12. I find that I often get bored at parties that most people seem to enjoy.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q12" value="1">
      	        <label id="correctString12">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q12" value="2">
      	        <label id="correctString12">2</label>
      	        <br>
      	        <input type="radio" name="q12" value="3">
      	        <label id="correctString12">3</label>
      	        <br>
      	        <input type="radio" name="q12" value="4">
      	        <label id="correctString12">4</label>
                <br>
                <input type="radio" name="q12" value="5">
        	        <label id="correctString12">5</label>
        	    	<br>
                <input type="radio" name="q12" value="6">
        	        <label id="correctString12">6</label>
        	    	<br>
                <input type="radio" name="q12" value="7">
        	      <label id="correctString12">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">13. I make decisions quickly and easily rather than deliberating over them.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q13" value="1">
      	        <label id="correctString13">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q13" value="2">
      	        <label id="correctString13">2</label>
      	        <br>
      	        <input type="radio" name="q13" value="3">
      	        <label id="correctString13">3</label>
      	        <br>
      	        <input type="radio" name="q13" value="4">
      	        <label id="correctString13">4</label>
                <br>
                <input type="radio" name="q13" value="5">
        	        <label id="correctString13">5</label>
        	    	<br>
                <input type="radio" name="q13" value="6">
        	        <label id="correctString13">6</label>
        	    	<br>
                <input type="radio" name="q13" value="7">
        	      <label id="correctString13">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">14. I often buy new products before they become popular or come down in price.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q14" value="1">
      	        <label id="correctString14">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q14" value="2">
      	        <label id="correctString14">2</label>
      	        <br>
      	        <input type="radio" name="q14" value="3">
      	        <label id="correctString14">3</label>
      	        <br>
      	        <input type="radio" name="q14" value="4">
      	        <label id="correctString14">4</label>
                <br>
                <input type="radio" name="q14" value="5">
        	        <label id="correctString14">5</label>
        	    	<br>
                <input type="radio" name="q14" value="6">
        	        <label id="correctString14">6</label>
        	    	<br>
                <input type="radio" name="q14" value="7">
        	      <label id="correctString14">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
        <tr>
      	  <td>
      	  	<div>
              <p align="left" class="question">15. I prefer to go to undiscovered places before big hotels & restaurants are built.</p>

      	    	<ul align="left">
      	    	<input type="radio" name="q15" value="1">
      	        <label id="correctString15">1 Strongly Disagree</label>
      	    	<br>
      	        <input type="radio" name="q15" value="2">
      	        <label id="correctString15">2</label>
      	        <br>
      	        <input type="radio" name="q15" value="3">
      	        <label id="correctString15">3</label>
      	        <br>
      	        <input type="radio" name="q15" value="4">
      	        <label id="correctString15">4</label>
                <br>
                <input type="radio" name="q15" value="5">
        	        <label id="correctString15">5</label>
        	    	<br>
                <input type="radio" name="q15" value="6">
        	        <label id="correctString15">6</label>
        	    	<br>
                <input type="radio" name="q15" value="7">
        	      <label id="correctString15">7 Strongly Agree</label>
        	    	<br>
          		</ul>
      	  	</div>
      	  </td>
      	</tr>
      	</table>
      <br/>
        <div class="submitter">
                <input class="btn btn-primary" id="submitButton" onClick="submitQuiz()"
                type="submit" value="SUBMIT"/>
          </div>
      <!--show score upon submit-->
          <div>
          	<h2 class="quizScore" id="userScore"></h2>
          </div>











    </div>
    </div>
  </div>


</div>
<br>
<br>
<br>
<br>
<br>
<br>



<!--
<footer class="container-fluid text-center" style="border-radius: 10%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
<div>
  <ul class="pagination pagination-lg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <li class="page-item"><a class="page-link" href="index.html">Homepage</a></li>
    <li class="page-item active"><a class="page-link">1</a></li>
    <li class="page-item"><a class="page-link" href="Travelers Quiz2.html">2</a></li>
    <li class="page-item"><a class="page-link" href="Travelers Quiz3.html">3</a></li>
    <li class="page-item"><a class="page-link" href="Travelers Quiz2.html">Next Step > > ></a></li>
  </ul>
</div>
</footer>
</div> -->


<script>


	function submitQuiz() {
		console.log('submitted');

	// get each answer score
		function answerScore (qName) {
			var radiosNo = document.getElementsByName(qName);

			for (var i = 0, length = radiosNo.length; i < length; i++) {
   				if (radiosNo[i].checked) {
			// do something with radiosNo
					var answerValue = Number(radiosNo[i].value);
				}
			}
			// change NaNs to zero
			if (isNaN(answerValue)) {
				answerValue = 0;
			}
			return answerValue;
		}

	// calc score with answerScore function
		var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4') + answerScore('q5') + answerScore('q6') + answerScore('q7') + answerScore('q8') + answerScore('q9') + answerScore('q10')
     + answerScore('q11') + answerScore('q12') + answerScore('q13') + answerScore('q14') + answerScore('q15'));
		console.log("CalcScore: " + calcScore); //sums the scores

	// function to return correct answer string
		function correctAnswer (correctStringNo, qNumber) {
			console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
			return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
				(document.getElementById(correctStringNo).innerHTML) + "</strong>");
			}

	// calculate "possible score" integer
		var questionCountArray = document.getElementsByClassName('question');

		var questionCounter = 0;
		for (var i = 0, length = questionCountArray.length; i < length; i++) {
			questionCounter++;
		}

	// show score as "score/possible score"
		var showScore = "Your Score: " + calcScore;


    if (calcScore < questionCounter) {
			showScore = showScore + "&nbsp; <strong><br>Seems you didn't complete the quiz! Refresh the page and try again!</strong>"
		}

    else if(calcScore >= 15 && calcScore <= 29)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a TRADITIONAL</strong>"
    }

    else if(calcScore >= 30 && calcScore <= 44)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a SIGHTSEER</strong>"
    }
    else if(calcScore >= 45 && calcScore <= 59)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a JOURNEYER</strong>"
    }
    else if(calcScore >= 60 && calcScore <= 74)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a VOYAGER</strong>"
    }
    else if(calcScore >= 75 && calcScore <= 89)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a PIONEER</strong>"
    }
    else if(calcScore >= 90 && calcScore <= 105)
    {
      showScore = showScore + "&nbsp; <strong><br>You are a VENTURER</strong>"
    };
		document.getElementById('userScore').innerHTML = showScore;
	}

$(document).ready(function() {

	$('#submitButton').click(function() {
		$(this).addClass('hide');
	});

});

</script>

<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
<?php } ?>
