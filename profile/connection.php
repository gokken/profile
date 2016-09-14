<?php
 	//echo 'Current script owner: ' . get_current_user();
	$hostname = "localhost";
	$username = "root";
	$password1 = "root";
	$dbname = "my_profile_database";
	//making the connection to mysql
	try{
	$dbc = mysqli_connect($hostname ,$username ,$password1 ,$dbname);
}catch (Exception $e){
	 // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}
	//set encoding
	mysqli_set_charset($dbc,"utf8");
	//mysqli_query($dbc,"INSERT INTO users(first_name,last_name) VALUES('Taro','Yamada')");
?>
