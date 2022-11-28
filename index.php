<?php
header('Content-Type: application/json; charset=utf-8');

require_once 'Seeder.php';

$osts = Seeder::initialize();

if (isset($_GET["ost_id"])) {
    foreach ($osts as $ost) {
        if ($_GET["ost_id"] == $ost->getId()) {
            echo json_encode($ost, JSON_PRETTY_PRINT);
            return;
        }
    }
    echo "OST with ID: " . $_GET["ost_id"] . " not found";
} else {
    echo json_encode($osts, JSON_PRETTY_PRINT);
}