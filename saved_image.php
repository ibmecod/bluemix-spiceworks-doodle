<?php
require_once('mysql_setup.php'); 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$auid = $mysqli->escape_string($_GET["auid"]);
$ticket = (int) $_GET["ticket"];
$data =  array( 'title' => '', 'image' => '' );
header('Content-type: application/json');

$result = $mysqli->query("SELECT value FROM extra_ticket_data WHERE auid = '$auid' AND ticket_id = $ticket AND `key` = 'image_title'");
$row = $result->fetch_assoc();
if ($row) {
  $value = $row['value'];
  $data['title'] = $value;
}
else {
  http_response_code(404);
  $result->free();
  exit();
}
$result->free();

$result = $mysqli->query("SELECT value FROM extra_ticket_data WHERE auid = '$auid' AND ticket_id = $ticket AND `key` = 'image_data'");
$row = $result->fetch_assoc();
if ($row) {
  $value = $row['value'];
  $data['image'] = $value;
}
$result->free();
echo json_encode($data);
?>

