<html>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<meta http-equiv="refresh" content="1800">
<?php
	$fp = fopen("Ten.txt","r");
	while($aryDat=fgetcsv($fp,20,",")){
		$DanTen[$aryDat[0]]=$aryDat[1];
	}
	$aka=$DanTen['aka'];
	$ao=$DanTen['ao'];
	$ki=$DanTen['ki'];
	$tk=$DanTen['tk'];
	fclose($fp);
?>
<title>公開版体育祭得点速報</title>
</head>
<body bgcolor="#33FF33">
<center>
公開版体育祭得点速報(公開版)<br><br>
<form name="form1" method="post" action="hyouji.php">
 <table border="1">
  <tr align="center" valign="middle">
   <td bgcolor="#CCCCCC">団体名</td>
   <td bgcolor="#FF9933">得点</td>
  </tr>
  <tr align="center" valign="middle">
   <td bgcolor="#FF0000">チーム１</td>
   <td align="center" bgcolor="#eeeeee"><?php echo $aka; ?></td>
  </tr>
  <tr align="center" valign="middle">
   <td bgcolor="#0000FF"><font color="#66FF99">チーム２</font></td>
   <td align="center" bgcolor="#eeeeee"><?php echo $ao; ?></td>
  </tr>
  <tr align="center" valign="middle">
    <td bgcolor="#FFFF66">チーム３</td>
    <td align="center" bgcolor="#eeeeee"><?php echo $ki; ?></td>
  </tr>
 </table>
<h6><?php print("登録時刻：".$tk."<br>\n"); ?><h6>
 <input type="submit" value="最新情報">
 </div>
</form>
</center>
</body></html>
