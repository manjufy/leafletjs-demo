<?php
include_once '../csv.php';

echo json_encode(csv_to_array('../places-of-interests.csv'));