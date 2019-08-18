<?php

include_once '../common/defineDB.inc';

class DB_MYSQL{
    // コンストラクタ
    function __construct(){
        $cCon;
        $this->ConnectDB();
    }

    // DB接続
    function ConnectDB() {
        $db = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
        $db->set_charset('utf8');

        $sql = "SELECT * FROM test_table";
        $res = $mysqli->query($sql);

        var_dump($res);
        $mysqli->close();
    }

    function INSERT(){


    }
}


?>
