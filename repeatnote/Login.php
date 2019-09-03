<?php
/**
 * 
 * ログイン処理をする画面
 * ログイン画面で入力された情報の照合を行う
 * 
 */

	include_once 'include/functions.inc';
	include_once 'include/C_MySQL.php';
	include_once 'include/define.inc';
	include_once 'include/defineDB.inc';
	
	session_start();
	
	/*
	 * DB
	 */
//	$db = new UseMySQL;
	
	/*
	 * HTML
	 */
	Htmlheader( 'ログイン中' );
	
	// 仮でユーザー情報維持
	if ( $_POST['id'] == '' ) {
		BackTopButton( '入力が不正です' );
	} else {
		$_SESSION['USER'] = $_POST['id'];
		// リダイレクト
		header( 'Location: Task_List.php' );
		exit;
	}

