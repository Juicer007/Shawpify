<?php
	session_start();
	$_SESSION = array();
	$params = session_get_cookie_params();
	setcookie(session_name(), '',time()-42000, $params['path'],$params['secure'], $params['httponly']);
	session_destroy();

?>


<?php
	include 'inc/head.inc.php';
?>
	<header>
		<div>
			<h1>Log Out</h1>
		</div>
	</header>

	<!--MAIN-->
	<main>
		<p>You have been successfully logged out</p>
		<a href="signin.php" class="btn btn-primary">Log Back In</a>
	</main>


<?php
	include 'inc/foot.inc.php';
?>


