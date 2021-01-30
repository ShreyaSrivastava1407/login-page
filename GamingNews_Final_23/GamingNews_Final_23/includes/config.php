<?php
date_default_timezone_set('UTC');

// $db['db_host'] = "localhost";
// $db['db_user'] = "id15744824_tera__pra";
// $db['db_pass'] = "1@Software32ref";
// $db['db_name'] = "id15744824_thegamingbuddy";
// foreach ($db as $key => $value) {
//     define(strtoupper($key), $value);
// }
// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// $db['db_host'] = "localhost";
// $db['db_user'] = "root";
// $db['db_pass'] = "";
// $db['db_name'] = "thegamingbuddy";
// $connection = mysqli_connect("localhost", "root", "", "thegamingbuddy");

try {
    $connection = new PDO("mysql:dbname=thegamingbuddy;host=localhost", "root", "");
    // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}

// try {
//     $connection = new PDO("mysql:dbname=id15744824_thegamingbuddy;host=localhost", "id15744824_tera__pra", "1@Software32ref");
//     // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//     $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// } catch (PDOException $e) {
//     exit("Connection failed: " . $e->getMessage());
// }

?>
<!-- /*
if($connection){
echo "CONNECTED TO DATABASE !!!";
} else{
echo "Ooops! Not Connected to database";
}
*/ -->