<?php
// Database Connection
require("db_connection.php");
// get Users
$query = "SELECT * FROM contact";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}
$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=contact.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Name','Mobile Number','Email-ID','Message'));
if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
