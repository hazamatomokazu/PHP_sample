<?php
/**
 * 
 * タスクの詳細画面
 * 
 */

	include_once 'include/functions.inc';
	include_once 'include/header.inc';
	
	session_start();
	
	Htmlheader( 'タスク詳細' );
	print "<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js'></script>";
	print "<link rel='stylesheet' href='./common/css/common.css' type='text/css'>";
	print "<link rel='stylesheet' href='./common/css/graph.css' type='text/css'>";
	ShowHeader();
	
	$arrLabel = [ 1, 2, 3, 4, 5 ];
	$arrData = [ 50, 60, 40, 70 ,100 ];
 
	ChartJs( $arrLabel, $arrData );
		
	BackButton();
	
/*
 * 引数
 *   $AstrType：    グラフの型
 *   $AstrId： canvasタグに設定するid
 *   $AarrData：    描画したいグラフデータの配列
 *   $AstrTitle：   グラフのタイトル
 */
function ChartJs( $AarrLabel, $AarrData )
{
	$strLabel = implode( ",", $AarrLabel );
	$strData = implode( ",", $AarrData );
     
print <<< SCRIPT
<div class='chart-container'>
	<canvas id='graph_area'></canvas>
</div>
<script type="text/javascript">
	var ctx = document.getElementById('graph_area').getContext('2d');
	var chart = new Chart( ctx, {
		type: 'bar',

		data: {
		   labels: [{$strLabel}],
		   datasets: [{
			   backgroundColor: 'rgb(129, 239, 226)',
			   borderColor: 'rgb(129, 239, 226)',
			   data: [{$strData}],
		   }]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						min: 0,
						max: 100
					}
				}]
			}
		}
	});
</script>
SCRIPT;
}


	
