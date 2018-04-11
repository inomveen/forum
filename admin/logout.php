<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

	?>

	<?php
//include config
require_once('../includes/config.php');

//log user out
$user->logout();
header('Location: index.php'); 

?>