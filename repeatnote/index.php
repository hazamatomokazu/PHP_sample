<?php
/**
 * 
 * ログイン画面
 * 
 */

	include_once 'include/functions.inc';
	
	Htmlheader( 'ログイン' );
?>
	<div>繰り返し反復ノート</div>

	<form action="Login.php" method="post">
		<div>
			ID<input type="text" name="id">
		</div>
		<div>
			PW<input type="password" name="pass">
		</div>
		<div>
			<input type="submit" value="ログイン">
		</div>
	</form>

