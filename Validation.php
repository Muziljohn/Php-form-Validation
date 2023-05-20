<?php

$nameEmptyErr = "";
$emailEmptyErr = "";
$nameErr = "";
$emailErr = "";
$passEmpyErr = "";

if (isset($_POST["submit"])) {

	$name           = checkInput($_POST["name"]);
	$email          = checkInput($_POST["email"]);
	$password          = checkInput($_POST["password"]);

	
	if (empty($name)) {
		$nameEmptyErr = '<div class="error">
                Name can not be left blank.
            </div>';
	}  
	else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		$nameErr = '<div class="error">
                Only letters and white space allowed.
            </div>';
	} else {
		echo $name . '<br>';
	}

	if (empty($email)) {
		$emailEmptyErr = '<div class="error">
                Email can not be left blank.
            </div>';
	} 
	else if (!preg_match("/^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
		$emailErr = '<div class="error">
                    Email format is not valid.
            </div>';
	} else {
		echo $email . '<br>';
	}

	
	if (empty($password)) {
		$passEmpyErr = '<div class="error">
                Password is required
            </div>';
	} else {
		echo "" . '<br>';
	}
}
function checkInput($input)
{
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;
}