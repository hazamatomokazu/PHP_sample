

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

   //こちらを参考
   //https://qiita.com/AKYM21/items/5da2d8813bd8df5ab296

    // DB
   //$db = new mysqli( 'localhost', 'root', 'root', 'mysql' );
   $db->set_charset('utf8');

   //テーブル選択
   $sql = "SELECT * FROM test";
   $response = $db->query( $sql );

   //レコード件数
   $row_count = $response->num_rows;
   print($row_count);
   print "<html>";
   print "<table border='1'>";
   print "<tr>";
   print "<th>ID</th>";
   print "<th>名前</th>";
   print "<th>メールアドレス</th>";
   print "</tr>";

   //レコード内容表示
   while($data = $response->fetch_array(MYSQLI_ASSOC)){
//      echo '<p>'.'[id]:'.$data['id'].'  [name]:'.$data['name'].'  [mail]:'.$data['email']."'</p>'\n";
      print "<tr>";
      echo "<td>" . $data['id'] . "</td>";
      echo "<td>" . $data['name'] . "</td>";
      echo "<td>" . $data['email'] . "</td>";
      print "</tr>";
   }

   $responce->free();

//   var_dump($response);

   $db->close();
   print "</table>";
   print "</html>";

// $con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
// if(!$con){
//   exit('データベース接続不可');
// }
//
// $result = mysql_select_db(DB_NAME, $con);
// if(!$result){
//   exit('データベース選択不可');
// }
//
// $result = mysql_query('SELECT * FROM test', $con);
// while($data = mysql_fetch_array($result)){
//   echo '<p>'.$data['id'].':'.$data['name'].':'.$data['email']."'</p>'\n";
// }
//
// $con = mysql_close($con);
// if(!$con){
//   exit('データベースクローズNG');
// }

?>
