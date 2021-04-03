<?php
$test = 'test passed';
$comment = $_POST['comment'];
error_reporting(0);
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'test_crud_db';
$db_table = 'test_crud_table';
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$link) {
    die('<p style="color:red">' . mysqli_connect_errno() . ' - ' . mysqli_connect_error() . '</p>');
}
mysqli_set_charset($con, "utf8");
echo "<p>Вы подключились к MySQL! $comment </p>";
$sql = "INSERT INTO  test_crud_table (id, comment) VALUES (13, '$comment')";
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);

