<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	$hosturl = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
	if(isset($_POST[btn1])) {
		if($_POST[p] == "8877") {
			$_SESSION['ssnid'] = 'sesSion4';
			print("<br><br><h1 align=\"center\"><a href=\"" . $hosturl . "/~ubuntu/t2/h.php\">得点表示ページへ移動</a></h1><br>");
		} else {
			print "<br><center><font size=\"6\" align=\"center\" color=\"red\">パスワード間違いです。</font></center><br>";
		}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
<title>体育祭得点速報ログイン画面</title>
<style type="text/css">
</style></head>
<body bgcolor="#ffcc33">
<!-- 体育祭得点速報ログイン画面 l.php -->
<br><h3 align="center">体育祭得点速報ログイン画面</h3><br>
<form action="l.php" method="POST">
<center>
パスワードを入力してください。<BR>
 <input size="20" type="p" name="p">&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="btn1" value="認証"><br>
</center>
</form>
</body></html>
