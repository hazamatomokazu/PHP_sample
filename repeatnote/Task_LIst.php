<?php


	include_once 'include/functions.inc';
	include_once 'include/define.inc';
	include_once 'include/C_MySQL.php';
	include_once 'include/defineDB.inc';

	session_start();

	/*
	 *  DB操作
	 */
	
	// インスタンス生成
	$db = new UseMySQL;
	
	// SELECT実行
	$table	= "data_task d, master_user m";
	$select	= "d.task_num, d.task_name, d.start_date";
	$order	= "task_num";
	$arrWhere = [];
	$arrWhere[] = "m.user_id = '{$_SESSION['USER']}'";
	$arrWhere[] = "d.user_num = m.user_num";
	$where = implode( ' AND ', $arrWhere );
	$db->SelectExec( $response, $table, $select, $where, $order );
	
	/*
	 * HTML表示
	 */
	Htmlheader( 'タスク一覧' );
	
	if ( isset( $_SESSION['USER'] ) ) {
		// ユーザー情報を表示させる処理
	} else {
		BackTopButton( "セッションが切れています。再度ログインしてください。" );
	}
	
	//レコード件数
	$intRowCount = $response->num_rows;
	print "<div>繰り返しタスク：" . $intRowCount . "件<div/>";
	
	// 追加画面へリンク
	LinkButton( 'Task_IN.php', '追加' );

	// 削除や編集を行う（どうやって実装するか考え中）
	print "<button>整理</button>";
	
	/*
	 * table
	 */
	
	print "<table border='1'>";
	print "<tr>";
	print "<th>". implode( "</th><th>", TABLE_HEAD_ARRAY ) ."</th>";
	print "</tr>";

	//レコード内容表示
	foreach ( $response as $arrRow ) {	
		print "<tr>";
		// 各行の要素を表示
		foreach( $arrRow as $strRow ) {
			print "<td>". $strRow . "</td>";
		}
		print "</tr>";
	}
	
	print "</table>";
	
	
	// グラフ画面へのリンク
	LinkButton( 'Task_Deteal.php', 'グラフ' );

	/*
	 *  クローズ処理（ここが適切ではない気はする）
	 */
	
	// 変数の解放（要不要を再度確認）
	$responce->free();
	
	// close処理
	$db->close();
