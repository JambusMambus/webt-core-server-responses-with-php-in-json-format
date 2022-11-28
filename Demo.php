<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'Seeder.php';


$osts = Seeder::initialize();

echo json_encode($osts);