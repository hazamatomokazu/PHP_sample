<?php

	include_once 'include/functions.inc';
	include_once 'include/C_MySQL.php';
	include_once 'common/define.inc';
	include_once 'common/defineDB.inc';
	
	session_start();

	/*
	 *  DB操作
	 */
	
		// インスタンス生成
	$db = new UseMySQL;
	
	// SELECT実行
	$table	= "data_task d, master_user m";
	$select	= "m.user_id";
	$arrWhere = [];
	$arrWhere[] = "m.user_id = '{$_SESSION['USER']}'";
	$arrWhere[] = "d.user_num = m.user_num";
	$where = implode( ' AND ', $arrWhere );
	$db->SelectExec( $response, $table, $select, $where );
	// 現在の件数に+1する
	$intCount = $response->num_rows + 1;
	
	// のちに、テンプレタスクの呼び出し処理
	
	/*
	 * HTML表示
	 */
	$today = date('Ymd');

	Htmlheader( 'タスク追加' );
	
	print "<div>タスクの追加</div>";
	print "<form action='Task_UP.php' method='post'>";
	print "<table>";
	
	print "<tr>"
		.	"<th>No.</th>"
		.	"<td>"
		.		"<input type='text' name='task_name' value='{$intCount}'>"
		.	"</td>"
		. "</tr>";
	
	print "<tr>"
		.	"<th>タイトル</th>"
		.	"<td>"
		.		"<input type='text' name='task_name'>"
		.	"</td>"
		. "</tr>";
	
	print "<tr>"
		.	"<th>開始日</th>"
		.	"<td>"
		.		"<input type='text' name='start_date' value='{$today}'>"
		.	"</td>"
		. "</tr>";
	
	print "</table>";
	
	print "<input type='hidden' name='task_num' value=''>";
	
	print "<button type='submit'>登録</button>";
	BackButton();
	print "</form>";
	
	/*
	 *  クローズ処理（ここが適切ではない気はする）
	 */
	
	// 変数の解放（要不要を再度確認）
//	$responce->free();
	
	// close処理
//	$db->close();
