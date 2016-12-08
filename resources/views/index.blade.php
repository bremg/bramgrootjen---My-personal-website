<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bram Grootjen</title>
  <meta name="author" content="Bram Grootjen">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/application.css">

</head>
<body>
<!-- Navigation -->
@include('frontPageSections.navigation')
<!-- Main page -->
@include('frontPageSections.main')
<!-- About -->
@include('frontPageSections.about')
<!-- Skills -->
@include('frontPageSections.skills')
<!-- Resume  -->
@include('frontPageSections.resume')
<!-- Contact -->
@include('frontPageSections.contact')

<!-- Jquery CDN, Using v2 instead of v3 because of bootstrap incompatibility -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<!-- jQuery local fallback -->
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/bootstrap-toolkit.min.js"></script>
<script src="js/jquery.inview.min.js"></script> 
<script src="js/jquery.easypiechart.js"></script>
<script src="js/scripts.js"></script>
<script src="https://use.fontawesome.com/29690fafe7.js"></script>

<!-- Bootstrap CSS local fallback -->
<script>
  $(document).ready(function() {

      // load bootstrap locally if CDN is offline
      var bodyColor = $('body').css("color");
      if(bodyColor != 'rgb(51, 51, 51)') {
        $("head").prepend('<link rel="stylesheet" href="css/bootstrap.min.css">');
      }

    });
  </script>

</body>
</html> 