<!

Color Palette

#FFFFFF
#F2FFF4
#B0FFBE
#7DFE93
#000000
>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body 
{
	background-color: #F2FFF4;
	border-style: solid;
	border-width: 0px;
	border-color: #B0FFBE;
	margin: auto;
}

h1, h2, h2
{
	color: #7DFE93;
	text-align: center;
	border-style: solid;
	border-width: 0px;
	border-color: #B0FFBE;
	margin: auto;
}

h3, p
{	
	color: #000000;
	margin: auto;
	margin-left: 100px;
	margin-right: 100px;
	text-align: center;
}

table, th, td
{
	margin: auto;
	text-align: center;
}
</style>
</head>
<body>
	<h1>Welcome to Jonathan's Portfolio!</h1>
	</br>
	<h3>To see a full list of my projects, visit my <a href="https://github.com/jcooke92/" target="_blank">Github</a> account or drop me an e-mail: <a href="mailto:jonathan.a.cooke@outlook.com" target="_blank">jonathan.a.cooke@outlook.com</a>.</h3>
	<table>
		<tbody>
			<tr>
				<td>
				<?php
					    $con = mysqli_connect("localhost", "jonathan", "gearzy", "develop");

					    if (mysqli_connect_errno())
					    { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

					    $result = mysqli_query($con,"SELECT * FROM Project");

					    echo "</br>";
				      	echo "</br>";

					    echo "<hr size=\"4\" color=\"#B0FFBE\"></hr>";

					    while($row = mysqli_fetch_array($result))
					    {
					      echo "<h3>";	
					      echo "" . $row['PROJECT_NAME'];
					      echo "</h3>";	
					      echo "</br>";
					      echo "" . $row['PROJECT_DESC'];
					      echo "</br>";
					      echo "</br>";
					      echo "<a href=\"" . $row['PROJECT_HTTP'] . "\" target=\"_blank\">Github Link</a>";
					      echo "</br>";
					      echo "</br>";
					      echo "<hr size=\"4\" color=\"#B0FFBE\"></hr>";
					      echo "</br>";
					      echo "</br>";
					    }

					    mysqli_close($con);
					?>
				</td>
			</tr>
		</tbody>
	</table>
	</br>
	<h2>About Me</h2>
	</br>
	<p>I'm a recent University of Houston graduate with a degree in Computer Science and a minor in Mathematics. I've been programming and gushing over computers since I was in highscool. As of now, I'm trying to spur my career in software design by creating this portfolio and continuing to work on various projects. I'm also looking for career opportunities within computer science/software design. Thanks for visiting!</p>
	</br>
	</br>
	<h2>About This Wesbite</h2>
	</br>
	<p>This website is running a LAMP (Linux, Apache, MySQL, PHP) solution stack on a Raspberry Pi computer from my study room. Feel free to look over the <a href="https://github.com/jcooke92/LAMPWebsite" target="_blank">source code</a>.</p>
	</br>
	</br>
</body>
</html>