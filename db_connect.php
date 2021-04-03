$test = 'test passed';
$comment = $_POST['comment'];
error_reporting(0);
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'test_crud_db';
$db_table = 'test_crud_table';
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);