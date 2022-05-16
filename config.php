<?php 
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "insurance_management";

// try {
//     $db = new PDO("mysql: host={$db_host}; dbname={$db_name}", $db_user, $db_password);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     //echo "Connect to Database Successful";
// } catch (PDOException $e) {
//       echo "Fail to connect to Database". $e->getMessage();
// }
$conn_proc = mysqli_connect("localhost", "root", "", "insurance_management");
mysqli_query($conn_proc,"SET CHARACTER SET UTF8");
if ($conn_proc == false) {
    die("Error: Could not connect." . mysqli_connect_error());
}


date_default_timezone_set('Asia/Bangkok');
?>