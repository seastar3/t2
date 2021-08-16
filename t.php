<?php
	$hosturl = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
	session_start();
	if ( $_SESSION['ssnid'] != 'sesSion4' ) {
	 header("location: l.php");
	}

  $tbl_ten = array("aka"=>0,"ao"=>0,"ki"=>0);
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=t2', 'user', '10Ttokuten');
    $stm = $dbh->query("SELECT * FROM ten");
    $row = $stm->fetchAll();
    $ten_aka = $row[0]['score'];
    $ten_ao  = $row[1]['score'];
    $ten_ki  = $row[2]['score'];
        
    $stm = $dbh->query("SELECT * FROM tbl_time WHERE id = 0");
    $row = $stm->fetchAll();
    $tk = $row[0][tk];

    $row = null;
    $dbh = null;
  } catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
  }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>体育祭得点登録ページ</title>
</head>
<body bgcolor="#0099FF">
<center>
<h3 align="center">体育祭得点登録</h3>
<form name="form1" method="post" action="t2.php">
    <input type="hidden" name="tk" value="<?php print(date("y/m/j H:i")); ?>">
	<div align="center">
	<table border="1">
	<tr align="center" valign="middle">
	 <td bgcolor="#CCCCCC">団体名</td>
	 <td bgcolor="#FF9933">得点</td>
	</tr>
	<tr align="center" valign="middle">
	 <td bgcolor="#FF0000">チーム１</td>
	 <td align="center"><input name="aka" type="text" size="6" value="<?php echo $ten_aka; ?>"></td>
	</tr>
	<tr align="center" valign="middle">
	 <td bgcolor="#0000FF"><font color="#66FF99">チーム２</font></td>
	 <td align="center"><input name="ao" type="text" size="6" value="<?php echo $ten_ao; ?>"></td>
    </tr>
	<tr align="center" valign="middle">
	 <td bgcolor="#FFFF66">チーム３</td>
	 <td align="center"><input name="ki" type="text" size="6" value="<?php echo $ten_ki; ?>"></td>
	</tr>
	</table>
    <h6><?php print("登録時刻：".$tk." (UTC)<br>\n"); ?><h6>
	<input type="submit" value="得点データ書換">
	</div>
</form>
<a href="<?=$hosturl?>/~ubuntu/t2/menu.php">目次</a>&nbsp;&nbsp;<a href="<?=$hosturl?>/~ubuntu/t2/t.php">再表示</a><br>
</center>
</body></html>
