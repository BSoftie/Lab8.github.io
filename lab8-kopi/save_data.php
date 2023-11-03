<?php
$json = file_get_contents('php://input');
$obj = json_decode($json, true);

$data = $obj['filedata'];

// the directory "data" must be writable by the server
$name = "data/{$obj['filename']}.csv";

// write the file to disk
if (file_put_contents($name, $data, FILE_APPEND)) {
  
    echo json_encode("Saved Successfully");
} else {
    echo "Unable to save the file.";
}
?>