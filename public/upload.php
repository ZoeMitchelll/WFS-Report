<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if image file is a actual image or fake image
$valid = false;
$types = array('Excel2007', 'Excel5');
foreach ($types as $type) {
    $reader = PHPExcel_IOFactory::createReader($type);
    if ($reader->canRead($file_path)) {
        $valid = true;
        break;
    }
}

if ($valid) {
  // TODO: load file
    move_uploaded_file($file_path, $target_file)
} else {
  echo "File is not an excel sheet (*note that gsheet is not an excel sheet).";
}
?>