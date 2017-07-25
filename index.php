<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jonathan's Portfolio</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p><strong>This is my portfolio website hosted on a Raspberry Pi computer using a LAMP solution stack. Here, you'll find a limited showcase of projects that I've worked on. Feel free to drop me an e-mail or visit my GitHub to see more.</strong></p>
        <p><a class="btn btn-primary btn-lg" href="mailto:jonathan.a.cooke@outlook.com?Subject=Hello">jonathan.a.cooke@outlook.com &raquo;</a>
        <a class="btn btn-primary btn-lg" href="https://github.com/jcooke92" role="button">GitHub &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <?php
      	$counter = 0;
      	$con = mysqli_connect("localhost", "jonathan", "gearzy", "develop");

	    if (mysqli_connect_errno())
	    { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

	    $result = mysqli_query($con,"SELECT * FROM Project");

	    echo "<div class=\"row\">";

	    while($counter < 3 && $row = mysqli_fetch_array($result))
	    {
	    	echo "<div class=\"col-md-4\">";
	    	echo "<h2>" . $row['PROJECT_NAME'] . "</h2>";
	    	echo "<p>" . $row['PROJECT_DESC'] . "</p>";
	      	echo "<p><a class=\"btn btn-default\" href=\"" . $row['PROJECT_HTTP'] . "\" role=\"button\">View details &raquo;</a></p>";
	      	echo "</div>";
	      	++$counter;
	    }

	    echo "</div>";

	    mysqli_close($con);
      ?>

      <hr>

      <footer>
      	<p><a class="btn btn-default btn-sm" href="https://github.com/jcooke92/LAMPWebsite" role="button">View source code for this site &raquo;</a></p>
        <p>&copy; 2017 Jonathan Cooke</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


