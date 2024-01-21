
<?php
require_once 'vendor/autoload.php';

// init configuration
$clientID = '555601079311-qq9f04k60nb82ue76t4g25rmv20htrra.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/feedback_external/Google-login/success.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// authenticate code from Google OAuth Flow
if (isset($_SESSION['code'])) {
  $_GET["code"] = urldecode($_SESSION["code"]);
  $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
  $client->setAccessToken($_SESSION['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  $link= $client->createAuthUrl();
  // echo "<a href='$link'>Google Login</a>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">    
<title>Login-Student Feedback MUSE</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header-div"style="background-color:rgb(40,45,126); height:8%; border-bottom:12px solid #000">
        <header style="display: grid;align-items: center; grid-template-columns: 1fr 6fr;">
            <img src="../img/muse.png" style="height:60%; margin-left:50%"/>
            <div style="grid-template-rows: 1fr 1fr;">
            <h1 style="color: white;text-align: center;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>MYSORE UNIVERSITY SCHOOL OF ENGINEERING</b></h1> 
            <h1 style="color: white;text-align: center;font-size:x-large;"><b>ಮೈಸೂರು ಯೂನಿವರ್ಸಿಟಿ ಸ್ಕೂಲ್ ಆಫ್ ಇಂಜಿನಿಯರಿಂಗ್</b></h1>
            </div>
        </header>
    </div>
    <marquee width="100%" direction="left" height="50px" >
        <p class="title">
          <span class="title-word title-word-1">New</span>
        <span >Please try to provide correct and genuine feedback &nbsp &nbsp ||&nbsp &nbsp  Depending on the genunity of your feedback the system will be changed  
          </span>
        </p>
    </marquee>
  <h1 align="center">Student's Online Feedback System</h1>
<div class="container">
<form  method="post" class="form-welcome">
  
  <table class="table table-borderless">
    <div class="brand-logo"><img src="../img/muse.png" alt="" height="90px" style="padding-top: 10px;margin-left: 15px;"></div><br/>
    <p>&nbsp;</p><p>&nbsp;</p><br/>
    
    <tr>
        <td><label for="Academic-Year"><b>Note&nbsp;:&nbsp;</b>You are accessed to login only with your college Official Mail Id<br />e.g.,&nbsp;21SE1a0505@muse.ac.in</label></td>
        <br />
    </tr>
      
  </table>
  <p align="center" class="feed-btn-a"><i class="fab fa-google fa-1x"></i><?php echo "<a href='$link'>Login with Google</a>"; ?></p>

</form>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <footer>
  <p>&copy; Designed and Developed by Dept.Of CSD  @muse, Mys <br /> Visit : <a href="https://uni-mysore.ac.in/">Mysore University School of Engineering, Mysuru</a></p>
</footer>



</body>
</html>