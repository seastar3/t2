<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=t2', 'user', '10Ttokuten');
    foreach($dbh->query('SELECT * from ten') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}
?>