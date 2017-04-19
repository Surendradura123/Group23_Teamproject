<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   
    <!-- Bootstrap core CSS -->
    <link href="layout1.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/layout1.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
          <nav>
            <script> 

                function show_alert() { 
                
                  var msg = "Select a country to begin!";
                  
                  alert(msg); 
                
                }
              
            </script>
                <ul>
                  <li><a href="ip.php" class="round green">Home</a></li>
                  <li><a href="history.html" class="round red">History</a></li>
                	<li><a href="grade.php" class="round yellow">Grades</a></li>
                	<li><a href="help.html"  class="round pink">Help</a></li>
                </ul> 
              </nav>

          <div class="masthead clearfix">
            <div class="inner">
             <h2>Hello  <?php echo $_GET["name"]; ?>  Welcome!</h2>
              
            </div>
          </div>
          <div class="container">
              </div>
          
            <a href="#" data-toggle="modal" data-target="#mymodal">
              <div class="inner cover">
               <img src="Images/Ireland.png" height="150" width="150">
               <a href="quiz.html"><button class="btn" >Take quiz</button></a>
               </div>
               <div class="inner cover">
               <img src="Images/portugal.png" height="150" width="150">
               <a href="quiz1.html"><button class="btn" >Take quiz</button></a>
              </div>
            </a>

        </div>

      </div>

    </div>
  </body>
</html>
