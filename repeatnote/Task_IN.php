<?php

	include_once 'include/functions.inc';
	include_once 'include/C_MySQL.php';
	include_once 'common/define.inc';
	include_once 'common/defineDB.inc';


	/*
	 *  DB操作
	 */
	
	// テンプレタスクの呼び出し
	
	/*
	 * HTML表示
	 */
	

	Htmlheader( 'タスク追加' );
	
	
	print "<div>タスクの追加</div>";
	
	BackButton();

	/*
	 *  クローズ処理（ここが適切ではない気はする）
	 */
	
	// 変数の解放（要不要を再度確認）
//	$responce->free();
	
	// close処理
//	$db->close();
