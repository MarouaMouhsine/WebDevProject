<?php
require_once "db.php";

$title = isset($_POST['titre']) ? $_POST['titre'] : "";
$start = isset($_POST['debut']) ? $_POST['debut'] : "";
$end = isset($_POST['fin']) ? $_POST['fin'] : "";

$sqlInsert = "INSERT INTO table_event (titre,debut,fin) VALUES ('".$titre."','".$debut."','".$fin ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>