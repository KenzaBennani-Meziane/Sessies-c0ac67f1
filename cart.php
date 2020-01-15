<!DOCTYPE html>
<?php
session_start(); 

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        	<h1>Skateboard <small>(#1)</small></h1>
        	<h1>Basketbal <small>(#2)</small></h1>
        	<h1>Skeelers <small>(#3)</small></h1>

        	

        <?php
        $_SESSION["choice"] = "";
if (!isset($_POST["choice"])) {
	echo"

	<form method=\"POST\">
        		
        	<input type=\"number\" name=\"choice\" min=\"1\" max=\"3\">
        	<input type=\"submit\" value=\"submit\">


        	</form>

	";
}
        	if (isset($_POST["choice"])) {
        		$_SESSION["choice"] = $_POST["choice"];

        		if (isset($_SESSION["choice"])) {
        			echo "Gekozen item: #" . $_SESSION["choice"];
        		}
        	}
        	
        ?>
    </body>
</html>