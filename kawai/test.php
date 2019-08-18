<?php

    include_once 'include/C_MySQL.php';
//    $db = new DB_MYSQL;

    include_once 'common/defineDB.inc';
    
    print "hoge hoge <br/>";
$Aarray = [ 0, 1, 2, 3 ];
print $Aarray;
print "<br/>";
//
var_dump($Aarray);
print "<br/>";
print_r($Aarray);
print "<br/>";

   $db = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );

    // DB
//    $db = new mysqli( 'localhost', 'root', 'root', 'mysql' );
    $db->set_charset('utf8');

    $sql = "SELECT * FROM test_table";
    $response = $db->query( $sql );

    var_dump($response);

    $db->close();


?>
