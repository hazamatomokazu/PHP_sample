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
	 * SELECT文の実行
	 * 
	 * @param array $Aret 実行結果
	 * @param string $Atable テーブル名
	 * @param string $Aselect SELECT対象のカラム
	 * @param string $Awhere 条件
	 * @param string $Aorder 順序
	 */
	function SelectExec( &$Aret, $Atable, $Aselect = '*', $Awhere = '', $Aorder = '' )
	{
		$sql = sprintf( "SELECT %s ", $Aselect );
		$sql .= sprintf( "FROM %s ", $Atable );
		if ( $Awhere !== '' ) {
			$sql .= sprintf( "WHERE %s ", $Awhere );
		}
		if ( $Aorder !== '' ) {
			$sql .= sprintf( "ORDER BY %s", $Aorder );
		}
		$Aret = $this->cCon->query( $sql );
//		$Aret = $Aret->fetch_assoc();
	}
	
	/**
	 * 
	 * INSERT文の実行
	 * 
	 * @param boolean $Aret クエリの実行結果
	 * @param string $Atable テーブル
	 * @param string $Acol カラム
	 * @param string $Aval 値
	 */
	function InsertExec( &$Aret, $Atable, $Acol, $Aval )
	{
		$sql = sprintf( "INSERT INTO %s ( %s ) VALUE ( %s )",$Atable ,$Acol ,$Aval );
		// クエリの実行
		$Aret = $this->cCon->query( $sql );
	}
}
?>
