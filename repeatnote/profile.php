<?php
//エラーログを吐き出すためのおまじない
ini_set('display_errors', 1);

//includeファイル宣言
include_once 'include/functions.inc';

// 配列宣言 都道府県
$birthplace = array ("北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県",
                     "茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県",
                     "新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県",
                     "静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県",
                     "奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県",
                     "徳島県","香川県","愛媛県","高知県",
                     "福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
//仕事
$job = array ("事務系","技術系","営業・企画系","IT関連","クリエーター系","販売系","サービス業",
              "ガテン系","役員・管理職","専門職","公務員","教員","自営業","アーティスト","主婦","その他");
//趣味
$interest = array ("映画","スポーツ","音楽","食べ物・飲み物","ブランド",
                  "アウトドア","観光地","アート","習い事","本・マンガ","テレビ番組",
                  "有名人","ゲーム","ホームページ","ギャンブル","ペット","言葉","休日の過ごし方");
//好きなこと
$hobby = array ("映画鑑賞","スポーツ","スポーツ観戦","音楽鑑賞","料理","グルメ","お酒",
                "ショッピング","ファッション","アウトドア","ドライブ","旅行","アート","習い事",
                "語学","読書","マンガ","テレビ","ゲーム","インターネット","ギャンブル","ペット","美容・ダイエット");
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>【自分力大学】プロフィール</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <form action="confirm_profile.php" method="POST">
    <p>
      ◼️名前<br>
      姓 <input class="input_name" type="text" placeholder="入力必須" name="firstname"></input>
      名 <input class="input_name" type="text" placeholder="入力必須" name="lastname"></input>
    </p>
    <p>
      ◼️ニックネーム<br>
       <input class="textlines" type="text" placeholder="入力必須" name="nickname"></input>
    </p>
    <p>
      ◼️性別<br>
      <input name="sex" type="radio" value="男">男</input>
      <input name="sex" type="radio" value="女">女</input>
    </p>
    <p>
      ◼️誕生日<br>
      <input class="date_set" type="date" placeholder="入力必須" name="birthday"></input>
    </p>
    <p>
      ◼️最寄駅<br>
      <input class="textlines" type="text" placeholder="入力必須" name="nearest_station"></input>
    </p>
    <p>
      ◼️出身地<br>
      <?php SetSelect( 'select_box', 'birthplace', '都道府県を選択', $birthplace );  ?>
    </p>
    <p>
      ◼️趣味<br>
      <span>
        <?php SetCheckbox( 'favarite', 'hobby[]', $hobby );  ?>
      </span>
    </p>
    <p>
      ◼️職業<br>
      <?php SetSelect( 'select_box', 'job', '▼選択', $job );  ?>
    </p>
    <p>
      ◼️自己紹介<br>
      <input class="introduce" type="text" placeholder="全角10000文字以内" name="introduce"></input>
    </p>
    <p>
      ◼️好きな<br>
      <?php SetSelect( 'select_box', 'interest_1', '▼選択', $interest );  ?>
      <input class="textlines" type="text" name="interest_text_1"></input>
    </p>
    <p>
      ◼️好きな<br>
      <?php SetSelect( 'select_box', 'interest_2', '▼選択', $interest );  ?>
      <input class="textlines" type="text" name="interest_text_2"></input>
    </p>
    <p>
      ◼️好きな<br>
      <?php SetSelect( 'select_box', 'interest_3', '▼選択', $interest );  ?>
      <input class="textlines" type="text" name="interest_text_3"></input>
    </p>
    <p>
      <input type="submit" value="入力を確認する">
    </p>
    </form>
  </body>
</html>
