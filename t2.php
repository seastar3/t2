<?php
	session_start();
	if ( $_SESSION['ssnid'] != 'sesSion4' ) {
	 header("location: l.php");
	}
	
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=t2', 'user', '10Ttokuten');
    $result = $dbh->exec("UPDATE ten SET score = ".$_POST['aka']." WHERE team ='aka'");
    $result = $dbh->exec("UPDATE ten SET score = ".$_POST['ao']." WHERE team ='ao'");
    $result = $dbh->exec("UPDATE ten SET score = ".$_POST['ki']." WHERE team ='ki'");

    $result = $dbh->exec("UPDATE tbl_time SET tk = cast(now() AS datetime) WHERE id = 0");
        
    $row = null;
    $dbh = null;
  } catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
  }
  header("Location: t.php");
?>
