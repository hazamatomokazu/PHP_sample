<?php

include_once '../common/defineDB.inc';

class UseMySQL{
	// コンストラクタ
	function __construct(){
		//
	}

	/**
	 * DB接続
	 * @return object $db ハンドラ
	 */
	function ConnectDB() {
		$db = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
		$db->set_charset('utf8');
		return $db;
	}

	/**
	 * SELECT文の実行（まだ利用されることはない）
	 * そして思いっきり作成途中
	 */
	function SelectExec( &$Aret, $Adb, $Asql ) {

		// 初期化
		$Aret = [];

		// SQLの実行
		$response = $Adb->query( $Asql );

		// 実行結果がnull つまり失敗
		if ( is_null( $response ) ) {
			$Adb->close();
			exit( "クエリ実行に失敗しました" );
		// 実行結果が0件
		} else if ( $response->num_rows === 0 ) {
			$Adb->close();
			exit( "値が０件です" );
		} else {
			// 連想配列を取得
			while ($row = $result->fetch_assoc()) {
				$Aret[] = $row["user_id"] . $row["name"];
			}
			// 結果セットを閉じる
			$response->close();
		}
	}

    /**
     * INSERT文の実行
     */
    function InsertExec() {
        // 必要になったら
    }
}


?>
