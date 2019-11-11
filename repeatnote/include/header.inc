<?php
/**
 * 
 * 画面のヘッダー
 * 
 * インクルードした時点で動作するとsession_start()と喧嘩になるので
 * 関数を置いて良きところで宣言できるようにしておく
 * 
 */
	function ShowHeader()
	{
		print "<link rel='stylesheet' href='include/header.css' type='text/css'>";
		print "<div class='color_main header_wrap'>";
		// ロゴ表示エリア
		print "<div class='header_common logo_block'>";
		print "<div class='logo_image'></div>";
		print "</div>";
		// ユーザー名表示エリア
		print "<div class='header_common username_block'>";
		print "{$_SESSION['USER']}さん";
		print "</div>";
		
		print "</div>";
		
		// 初期で先頭に空白が必要
		print "<div class='header_dummy'></div>";
	}
