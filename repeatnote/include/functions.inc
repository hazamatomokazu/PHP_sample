<?php
/**
 * 
 * 共通利用関数
 * 
 */

/**
 * 
 * HTMLヘッダーの出力
 * 
 * @param string $AstrTitle titleタグ
 */
function Htmlheader( $AstrTitle ) {
	$strTag = "<head>";
	$strTag .= "<title>{$AstrTitle}</title>";
	$strTag .= "<meta charset='UTF-8'>";
	$strTag .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	$strTag .= "</head>";
	print $strTag;
}

/**
 * 
 * リンクボタン
 * 
 * @param string $AstrCap ボタンのキャプション
 * @param string $AstrLocation リンク先
 */
function LinkButton( $AstrLocation, $AstrCap ) {
	// リンク（JavaScript利用）
	$strAction = sprintf( 'location.href="%s"', $AstrLocation );
	printf( "<button onClick='%s'>%s</button>", $strAction, $AstrCap );
}

/**
 * 
 * トップへ戻るボタン
 * 
 * @param string $AstrMessage 表示するメッセージ
 */
function BackTopButton( $AstrMessage )
{
	print "<div>{$AstrMessage}</div>";
	LinkButton( 'index.php', 'トップへ戻る');
	exit;
}

/**
 * 
 * 戻るボタン
 * 
 * @param string $AstrCap ボタンのキャプション
 */
function BackButton( $AstrCap = '戻る' )
{
	print "<button onClick='history.back()'>{$AstrCap}</button>";
}


?>
