<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '2002');
define('DB_NAME', 'catalog');


 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}




$sql = "select * from laptops where prod_name like '%search%'";
$result = $pdo -> exec($sql);
if ($result->$num_rows){
while($row = $result->fetch_assoc() ){
    echo $row["prod_price"];
}
} else {
    echo "0 records";
}

?>