<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

 
// psql -h 108.181.157.247 -p 19815 -d marketplace -U root -W


$host= 'postgresql-154883-0.cloudclusters.net';
$db = 'marketplace';
$user = 'root';
$password = 'E3kSs77s1Npem0bR';

try {
	$dsn = "pgsql:host=$host;port=19815;dbname=$db;";
	// make a database connection
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
	if ($pdo) {
		echo "Connected to the $db database successfully!";

$statements = [
	'CREATE TABLE views ( 
        id   INT,
        total   INT, 
        PRIMARY KEY(id)
    );'];

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec($statement);

echo "<pre>";
print_r($pdo);


	}
} catch (PDOException $e) {
	 echo $e->getMessage();
     
    die($e->getMessage());
} finally {
	if ($pdo) {
		$pdo = null;
	}
}


echo 200;
?> 

 
https://www.php.net/manual/de/datetime.diff.php
	
$date1 = new DateTime('2022-04-01');
$date2 = new DateTime('2022-04-10');
$interval = $date1->diff($date2);
echo $interval->days;


 

jsonb 
https://stackoverflow.com/questions/74808630/appending-to-postgres-json-array-not-jsonb

  




UPDATE views SET total = total + 1 WHERE id = $id;

INSERT INTO table_name (column_list) 
VALUES(value_list)
ON CONFLICT target action;

REPLACE INTO views (id, total) 
VALUES (value_list)
ON CONFLICT target action;

   