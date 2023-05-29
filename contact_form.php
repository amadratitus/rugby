<?php
// check if the form input is empty
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	echo "Thank you for contacting us, we well get intouch we you shortly.";
}
?>