<?php

	include_once 'include/C_MySQL.php';
	include_once 'common/define.inc';
	include_once 'common/defineDB.inc';

	//こちらを参考
	//https://qiita.com/AKYM21/items/5da2d8813bd8df5ab296

	/*
	 *  DB操作
	 */
	
	// インスタンス生成
	$db = new UseMySQL;
	// 接続
	$db = $db->ConnectDB();
	
	// SELECT実行
	$sql = "SELECT * FROM test_table";
	$response = $db->query( $sql );
	
	/*
	 * HTML表示
	 */
	
	//レコード件数
	$intRowCount = $response->num_rows;
	print $intRowCount . "件";
	
	print "<table border='1'>";
	print "<tr>";
	print "<th>". implode( "</th><th>", TABLE_HEAD_ARRAY ) ."</th>";
	print "</tr>";

	//レコード内容表示
	foreach ( $response as $arrRow ) {	
		print "<tr>";
		foreach( $arrRow as $key => $strRow ) {
			print "<td>". $strRow . "</td>";
		}
		print "</tr>";
	}
	
	print "</table>";

	/*
	 *  クローズ処理（ここが適切ではない気はする）
	 */
	
	// 変数の解放（要不要を再度確認）
	$responce->free();
	
	// close処理
	$db->close();
