<?php

include_once 'defineDB.inc';

class UseMySQL
{
	// コンストラクタ
	function __construct()
	{
		$this->cCon = '';
		$this->ConnectDB();
	}

	/**
	 * DB接続
	 * @return object $db ハンドラ
	 */
	function ConnectDB()
	{
		$db = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
		$db->set_charset('utf8');
		// コンストラクタに保持
		$this->cCon = $db;
	}

	/**
	 * SELECT文の実行（まだ利用されることはない）
	 * そして思いっきり作成途中
	 */
	function SelectExec( &$Aret, $Atable, $Aselect = '*', $Awhere = '', $Aorder = '' )
	{
		// SELECT実行
		$sql = sprintf( "SELECT %s ", $Aselect );
		$sql .= sprintf( "FROM %s ", $Atable );
		if ( $Awhere !== '' ) {
			$sql .= sprintf( "WHERE %s ", $Awhere );
		}
		if ( $Aorder !== '' ) {
			$sql .= sprintf( "ORDER BY %s", $Aorder );
		}
		$Aret = $this->cCon->query( $sql );
	}

    /**
     * INSERT文の実行
     */
    function InsertExec()
	{
        // 必要になったら
    }
}


?>
